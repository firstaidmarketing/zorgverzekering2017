<?php
/**
 * User: Roeland Werring
 * Date: 09/11/14
 * Time: 17:03
 *
 */

require( dirname( __FILE__ ) . '/config.php' );

global $kmpModule;

if(!isset($kmpModule))
{
    $kmpModule = "NO COMPARISON CONTENT";
}


if(!function_exists('array2CookieStr'))
{
    function array2CookieStr($cookies)
    {
        $retarray = array();
        foreach($cookies as $key => $val)
        {
            $retarray[] = $key . "=" . $val;
        }

        return implode(";", $retarray);
    }
}

if(!function_exists('requestInclCookies'))
{
    function    requestInclCookies($reqUrl, $replaceArray = array(), $addSlashes = false, $nocookies = false)
    {
        // First test for jsonp keys to replace and make sure we hit cache
        $matches = array();
        $submission_key = "zzzzzzz";
        $original_key = null;
        preg_match('/KzFramework\.json_([0-9a-zA-Z]+)\&/', $reqUrl, $matches);
        if (count($matches) > 0) {
            if (isset($matches[1])) {
                // we need to replace in the submission and response
                $original_key = $matches[1];
                $reqUrl = str_replace('KzFramework.json_' . $original_key, 'KzFramework.json_' . $submission_key, $reqUrl);
            }
        }
        // Replace the birthday into the year.
        // In case of unexpected issues, uncomment this block.
//        if(strpos($reqUrl, "birthday") !== false) {
//      //      file_put_contents(dirname(__FILE__).'/output/komparu.log', "V3 OLD URL => $reqUrl\n", FILE_APPEND);
//            // First we grep YMD
//            $day = array();
//            $c = '%5D';
//            $o = '%5B';
//            preg_match('/'.$o.'birthday'.$c.$o.'0'.$c.$o.'0'.$c.'=([0-9]+)/', $reqUrl, $day);
//            $month = array();
//            preg_match('/'.$o.'birthday'.$c.$o.'0'.$c.$o.'1'.$c.'=([0-9]+)/', $reqUrl, $month);
//            $year = array();
//            preg_match('/'.$o.'birthday'.$c.$o.'0'.$c.$o.'2'.$c.'=([0-9]+)/', $reqUrl, $year);
//            $from = new DateTime($year[1].'-'.str_pad($month[1], 2, '0', STR_PAD_LEFT).'-'.str_pad($day[1], 2, '0', STR_PAD_LEFT));
//            $to   = new DateTime('2015-01-01');
//            $age =  $from->diff($to)->y;
//            $new = new DateTime(($to->format('Y')-$age).'-01-01');
//            // Replace day month year
//            $reqUrl = str_replace($o.'birthday'.$c.$o.'0'.$c.$o.'0'.$c.'='.$day[1],  $o.'birthday'.$c.$o.'0'.$c.$o.'0'.$c.'=1', $reqUrl);
//            $reqUrl = str_replace($o.'birthday'.$c.$o.'0'.$c.$o.'1'.$c.'='.$month[1],$o.'birthday'.$c.$o.'0'.$c.$o.'1'.$c.'=1', $reqUrl);
//            $reqUrl = str_replace($o.'birthday'.$c.$o.'0'.$c.$o.'2'.$c.'='.$year[1], $o.'birthday'.$c.$o.'0'.$c.$o.'2'.$c.'='.$new->format('Y'), $reqUrl);
//        //    file_put_contents(dirname(__FILE__).'/output/komparu.log', "V3 NEW URL => $reqUrl\n", FILE_APPEND);
//        }
        $cache_key = md5('komparu::' . $reqUrl);
        $body = wp_cache_get( $cache_key );
        if ( false === $body ) {
        //    file_put_contents(dirname(__FILE__).'/output/komparu.log', "V3 Missed cache => $reqUrl\n", FILE_APPEND);
            $ch = curl_init($reqUrl);
            curl_setopt($ch, CURLOPT_COOKIE, array2CookieStr($_COOKIE));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HEADER, 1);
            curl_setopt($ch, CURLOPT_FRESH_CONNECT, TRUE);
            curl_setopt($ch, CURLOPT_TIMEOUT, 4);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 4);
            $result = curl_exec($ch);
            $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
            curl_close($ch);
            $body = substr($result, $header_size);
            wp_cache_set( $cache_key, $body );
        } else {
        //    file_put_contents(dirname(__FILE__).'/output/komparu.log', "V3 Hit cache! => $reqUrl\n", FILE_APPEND);
        }
        if($original_key != null) {
            // Replace jsonp keys back to original
            $body = str_replace($submission_key, $original_key, $body);
        }
        if(strpos($body, 'Whoops, looks like something went wrong') === FALSE)
        {
            foreach($replaceArray as $key => $val)
            {
                if($addSlashes)
                {
                    $key = str_replace('/', '\/', $key);
                    $val = str_replace('/', '\/', $val);
                }
                $body = str_replace($key, $val, $body);
            }
            $tsss = rand(1000000,9999999);
            $body = str_replace('14163587056533',''.$tsss,$body);
            return $body;
        }
        return "";
    }
}


if(!function_exists('injectKomparuModule'))
{
    function injectKomparuModule($arguments)
    {
        global $kmpModule;
        $noCookies = $arguments['no_cookie'];
        $komparuRefererParam = 'kmp-referer';
        $komparuIpParam = 'kmp-ip';
        $komparuUserAgentParam = 'kmp-useragent';


        $requestUri = $_SERVER['REQUEST_URI'];
        $uriParts = explode('?', $_SERVER['REQUEST_URI'], 2);
        $uriWoPars = $uriParts[0];

        $ip = $_SERVER['REMOTE_ADDR'];
        $userAgent = $_SERVER['HTTP_USER_AGENT'];

        $location = explode(',', $arguments['location']);
        $location2 = explode(',', $arguments['location2']);
        $imgPath = rtrim($arguments['proxy_img'], '/') . '/';
        $codeKomparuUrl = rtrim($arguments['code_komparu'], '/') . '/';
        $proxyJs = rtrim($arguments['proxy_js'], '/');
        $proxyCss = rtrim($arguments['proxy_css'], '/');
        $proxyClick = rtrim($arguments['proxy_click'], '/');

        $jsEncoded = urlencode($proxyJs);
        $cssEncoded = urlencode($proxyCss);
        $clickEncoded = urlencode($proxyClick);
        $extensionSuffix = trim($arguments['extension_postfix']);

        $replaceArray = array('/userfiles/aanbieders/' => $imgPath);

        $reqVars = "&proxy_css=$cssEncoded&proxy_img=&proxy_click=$clickEncoded&ext_suffix=$extensionSuffix";

        //jsonp
        if(strpos($requestUri, $proxyJs) !== false && strpos($requestUri, ".json") !== false)
        {
            $pos = strpos($requestUri, $proxyJs) + strlen($proxyJs);
            $websitestr = ltrim(substr($requestUri, $pos), '/');
            $slashPos = strpos($websitestr, '/');
            $websiteId = substr($websitestr, 0, $slashPos);
            $jsonstring = substr($websitestr, $slashPos);
            header("Content-type: application/javascript");
            $reqUrlFinal = $codeKomparuUrl . $websiteId . ".js" . $jsonstring . "&ext_suffix=$extensionSuffix&proxy_js=$jsEncoded/$websiteId&" . $reqVars;
            echo requestInclCookies($reqUrlFinal, $replaceArray, true, $noCookies);
            exit;
        }

        //js
        if(strpos($requestUri, $proxyJs) !== false)
        {
            preg_match('/\/([a-zA-Z0-9]{5}).js' . $extensionSuffix . '\?proxy_js=/', $requestUri, $matches);
            if(isset($matches[1]))
            {
                header("Content-type: application/javascript");
                $company = isset($_GET['mode']) && $_GET['mode'] == 'company';
                if($company)
                {
                    $reqVars .= "&mode=company";
                }
                $websiteId = $matches[1];

                $reqUrl1 = $codeKomparuUrl . $websiteId . ".js?ext_suffix=$extensionSuffix&proxy_js=$jsEncoded/$websiteId" . $reqVars;
                echo requestInclCookies($reqUrl1, $replaceArray, false, $noCookies);
                exit;
            }
            $widgetjs = 'widgetjs';
            if (strpos($requestUri, $widgetjs)) {
                //http://code.komparu.acc/widget/BBBBB/1?container=kz-widget&redirect=http://www.zorgverzekering.net/
                $pos = strpos($requestUri, $widgetjs) + strlen($widgetjs);
                $websitestr = $codeKomparuUrl.'widget/'.ltrim(substr($requestUri, $pos), '/');
                header("Content-type: application/javascript");
                echo requestInclCookies($websitestr, $replaceArray, false, $noCookies);
                exit;
            }


        }

        //css
        if(strpos($requestUri, $proxyCss) !== false)
        {
            preg_match('/\/([a-zA-Z0-9]{5}).min.css/', $requestUri, $matches);
            if(isset($matches[1]))
            {
                header("Content-type: text/css");
                echo requestInclCookies($codeKomparuUrl . "css/" . $matches[1] . ".min.css", $replaceArray);
                exit;
            }
            preg_match('/\/([a-zA-Z0-9]{5})_widget.css/', $requestUri, $matches);
            if(isset($matches[1]))
            {
                header("Content-type: text/css");
                echo requestInclCookies($codeKomparuUrl . "css/" . $matches[1] . "_widget.css", $replaceArray);
                exit;
            }
        }

        //click redirect
        if(strpos($requestUri, $proxyClick) !== false)
        {
            $pos = strpos($requestUri, $proxyClick);
            $hash = ltrim(substr($requestUri, $pos + strlen($proxyClick)), '/');
            $requestUri = $codeKomparuUrl . 'click/' . $hash . "?ms=" . microtime(true) * 10000;
            header('Cache-Control: no-cache, no-store, must-revalidate, max-age=0');
            header('Pragma: no-cache');
            header('Expires: 0');
            header('Location:'.$requestUri, true, 301);
            exit();
        }


        //load whole module
        if($kmpModule == 'NO COMPARISON CONTENT' && (in_array($uriWoPars, $location) || in_array($uriWoPars, $location2)))
        {

            $fullUri = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $websiteId = (in_array($uriWoPars, $location)) ? $arguments['website_id'] : $arguments['website_id2'];
            $reqUrl = $codeKomparuUrl . "$websiteId.js/include?ext_suffix=$extensionSuffix&proxy_js=$jsEncoded/$websiteId" . $reqVars;
            if(isset($uriParts[1]))
            {
                $reqUrl .= '&' . $uriParts[1];
            }
            if(!$noCookies)
            {
                setcookie($komparuRefererParam, $fullUri, time() + 7200, '/');
                setcookie($komparuIpParam, $ip, time() + 7200, '/');
                setcookie($komparuUserAgentParam, $userAgent, time() + 7200, '/');
            }


            $kmpModule = requestInclCookies($reqUrl, $replaceArray, false, $noCookies);

            return;
        }
    }
}

