    <?php
    /**
     * User: Roeland Werring
     * Date: 30/10/14
     * Time: 22:21
     *
     */
    /*
    Plugin Name: Komparu WP plugin
    Plugin URI: http://www.komparu.com
    Description: Include module
Version: 3.8
    Author: Roeland Werring
    Author URI: http://www.komparu.com
    */
    require(dirname(__FILE__) . '/funcs.php');

    add_action('admin_menu', 'komparuCreateMenu');

    function komparuCreateMenu()
    {
        add_menu_page('Komparu', 'Komparu', 'administrator', __FILE__, 'komparuSettingsPage', plugins_url('/images/icon.png', __FILE__));
    }

    function komparuSettingsPage()
    {
        $update = isset($_GET['kmpupdated']) && $_GET['kmpupdated'] == true;
        $compmoduleRemote = file_get_contents('http://www.komparu.com/downloads/wpplugin/compmodule/compmodule.txt');
        preg_match('/Version: (\d+.\d+)/m',$compmoduleRemote, $matches);
        $version = ''.(isset($matches[1])?$matches[1].'':'0.0');
        $message = '';
        if($update)
        {
            if ($version!=get_option('comp_version')) {
                $funcsRemote = file_get_contents('http://www.komparu.com/downloads/wpplugin/compmodule/funcs.txt');
                file_put_contents(dirname(__FILE__) . '/funcs.php', $funcsRemote);
                file_put_contents(dirname(__FILE__) . '/compmodule.php', $compmoduleRemote);
                $message = "Updated to version  ".$version;
                update_option('comp_version', $version);
            } else {
                $message = "Latest version already installed";

            }
        }

        ?>
        <div class="wrap">
            <h2>Komparu Module Options</h2>

            <p>Put the location of the your Komparu Module in 'Module Location' and if you need more than one variation also in 'Module 2 Location'. If you need the same module on multiple locations, please list them with a comma (no whitespaces) </p>

            <p><strong>Themes:</strong> Use 'echo getKomparuModule()' </p>

            <p><strong>Pages/Posts:</strong> Add the shortcode [komparu_module] in your content. </p>
            <p><strong><?php echo $message?></p>

                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">Module Location</th>
                        <td><input type="text" name="location" value="<?php echo esc_attr(get_option('location')); ?>" disabled="disabled"/></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Website ID</th>
                        <td><input type="text" name="website_id" value="<?php echo esc_attr(get_option('website_id')); ?>" disabled="disabled"/></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Module 2 Location</th>
                        <td><input type="text" name="location2" value="<?php echo esc_attr(get_option('location2')); ?>" disabled="disabled"/></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Website 2 ID</th>
                        <td><input type="text" name="website_id2" value="<?php echo esc_attr(get_option('website_id2')); ?>" disabled="disabled"/></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Proxy JS</th>
                        <td><input type="text" name="proxy_js" value="<?php echo esc_attr(get_option('proxy_js')); ?>" disabled="disabled"/></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Proxy CSS</th>
                        <td><input type="text" name="proxy_css" value="<?php echo esc_attr(get_option('proxy_css')); ?>" disabled="disabled"/></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Proxy IMG</th>
                        <td><input type="text" name="proxy_img" value="<?php echo esc_attr(get_option('proxy_img')); ?>" disabled="disabled"/></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Proxy click</th>
                        <td><input type="text" name="proxy_click" value="<?php echo esc_attr(get_option('proxy_click')); ?>" disabled="disabled"/></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Postfix extensions (.js,.css)</th>
                        <td><input type="text" name="extension_postfix" value="<?php echo esc_attr(get_option('extension_postfix')); ?>" disabled="disabled"/></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Komparu Code URL (http://code.komparu.com)</th>
                        <td><input type="text" name="code_komparu" value="<?php echo esc_attr(get_option('code_komparu')); ?>" disabled="disabled"/></td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">No cookies</th>
                        <td><input type="checkbox" name="no_cookie" value="1"<?php checked( get_option('no_cookie')  ); ?> disabled="disabled"/>
                    </tr>
                </table>

            <hr/>
            <strong>Current Version: <?php echo get_option('comp_version') ?></strong><br/>
            <strong>Latest Version: <?php echo $version ?></strong><br/>
            <strong>Directory is <?php echo is_writable(dirname(__FILE__))?'WRITABLE':'NOT WRITABLE'; ?></strong><br/>
            <strong><a href="<?php echo $_SERVER['REQUEST_URI'] . '&kmpupdated=true' ?>   ">Update Plugin Now »</a></strong>
        </div>

    <?php
    }


    //global var to print
    function loadKomparuModule()
    {
        global $komparuArgArr;
        injectKomparuModule($komparuArgArr);
    }

    $kmpModule = "NO COMPARISON CONTENT";

    add_action('init', 'loadKomparuModule');

    //modules function
    function getKomparuModule()
    {
        global $kmpModule;
        return $kmpModule;
    }

    //shortcodes
    add_shortcode('komparu_module', 'getKomparuModule');






