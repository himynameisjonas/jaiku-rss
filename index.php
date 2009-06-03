<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" version="-//W3C//DTD XHTML 1.1//EN" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>jaiku &hearts; rss | jaiku.himynameisjonas.net</title>
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" title="no title" charset="utf-8">	
</head>

<body>
	<div id="wrapper">
		<h1>jaiku <span class="red">&hearts;</span> rss</h1>
		<div id="content">
			<h2>Fixa din jaiku-rss</h2>
			<p>Hej, här kan du strippa din rss från <a href="http://jaiku.com" title="jaiku.com">Jaiku</a> på alla importerade feeds så att det bara är kvar dina jaiku-postningar. Perfekt om du till exempel vill importera dina statuspostningar till någon annan sida.</p>
			<p>Tjänsten importerar din rss från jaiku, sållar bort allt (tex importerade blogg-inlägg, flickr-foton) utom dina jaiku-meddelanden.</p>
			<h2>Varför?</h2>
			<p>Främsta anledningen till att jag fixade den här tjänsten var för att jag ville kunna importera min jaiku till twitter genom <a href="http://twitterfeed.com/" title="twitterfeed.com">twitterfeed</a> samt till <a href="http://friendfeed.com/" title="friendfeed.com">friendfeed.com</a> men eftersom rss:en innehåller ens importerade feeds så blev det inget bra.</p>
			<h2>Skapa din rss</h2>
			<p>Allt du behöver göra är att fylla i ditt användarnamn på Jaiku i formuläret nedan</p>
			<form action="rss.php" method="get" accept-charset="utf-8">
				<p><input type="text" name="user" value="" id="user"></p><p>
				<input type="submit" value="generera rss"></p>
			</form>
			<h2>Donationer</h2>
			<p>Gillar du tjänsten så tar jag tacksamt emot donationer för att hålla den igång</p>
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_s-xclick" />
			<input type="hidden" name="hosted_button_id" value="2406631" />
			<input type="image" src="https://www.paypal.com/en_GB/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="" />
			<img alt="" border="0" src="https://www.paypal.com/sv_SE/i/scr/pixel.gif" width="1" height="1" />
			</form>
		</div>
		<div id="footer">
			Kod, idé samt design av <a href="http://himynameisjonas.net">Jonas Forsberg</a> (<a href="http://himynameisjonas.jaiku.com">jaiku</a>) <br/> Sidan har inget med Jaiku att göra | Inga garantier på tjänstens funktionalitet lämnas
		</div>
	</div>
	<script src="http://static.getclicky.com/50210.js" type="text/javascript"></script>
	<noscript><p><img alt="Clicky" src="http://static.getclicky.com/50210-db2.gif" /></p></noscript>
</body>
</html>