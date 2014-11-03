<h1>Keuze.nl HTML</h1>
<?php
if ($handle = opendir('.')) {

	$entries = array();
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != ".." && !is_dir( $entry ) && strrpos( $entry, '.php') !== false && !in_array( $entry, array( 'index.php', 'footer.php', 'header.php', 'menu.php', 'sidebar.php')) ) {
            $entries[] = $entry;
        }
    }

    sort( $entries );

    foreach( $entries as $entry ) {
    	echo "<a href='".$entry."' title=''>".$entry."</a><br>";
    }

    closedir($handle);
}
?>