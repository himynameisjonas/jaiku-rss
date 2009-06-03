<?
echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>"
?>
<?php
/* 
 ======================================================================
 lastRSS usage DEMO 1
 ----------------------------------------------------------------------
 This example shows, how to
     - create lastRSS object
    - set transparent cache
    - get RSS file from URL
    - show result in array structure
 ======================================================================
*/

// include lastRSS
include "./lastRSS.php";

// Create lastRSS object
$rss = new lastRSS;

// Set cache dir and cache time limit (1200 seconds)
// (don't forget to chmod cahce dir to 777 to allow writing)
$rss->cache_dir = './cache';
$rss->cache_time = 300; // one hour
$rss->cp = 'UTF-8';

if (isset($_GET['user'])){
	$rssurl = "http://".$_GET['user'].".jaiku.com/feed/rss";
}else{
	die('<h1>ERROR: Specify username in url!</h1>http://jaiku.himynameisjonas.net/rss.php?user=<strong>your_jaiku_username</strong><p>say hello @ my gmail: himynameisjonas');
}
// Try to load and parse RSS file of Slashdot.org
//$rssurl = 'http://himynameisjonas.jaiku.com/feed/rss';

if ($rs = $rss->get($rssurl)) {
	
	?>
	<rss version="2.0" xmlns:jaiku="http://jaiku.com/ns">
	    <channel>
	        <title><?=$rs['title'];?></title>
	        <link><?=$rs['link'];?></link>
	        <description><?=$rs['description']?></description>
	        <language><?$rs['language'];?></language>
	        <image>
	            <link>http://jaiku.com</link>
	            <url>http://jaiku.com/images/logo.gif</url>
	            <title>Jaiku</title>
	        </image>	
	<?
	foreach ($rs['items'] as $item) {
		$string = $item['link'];
		$pos = strpos($string, "presence");
		$com = strpos($string, $_GET['user']);
		$com2 = strpos($item['title'], "Comment from");
		if ( $pos === FALSE || $com === FALSE || $com2 !== FALSE )
		{
			echo "";
		}else {
			echo "<item>";
				echo "<title>".$item['title']."</title>";
				echo "<description>".$item['description']."</description>";
				echo "<link>".$item['link']."</link>";
				echo "<guid>".$item['link']."</guid>";
                echo "<pubDate>".$item['pubDate']."</pubDate>";
			echo "</item>";
		}
	}
   /* echo '<pre>';
    print_r($rs);
    echo '</pre>'; */
    }
else {
    echo "Error: It's not possible to get $rssurl...";
}

?>
            </channel>

</rss>