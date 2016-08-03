<?php
//header('Content-Type: text/html; charset=utf-8');
header('Content-Type: application/json; charset=utf-8');
header("access-control-allow-origin: *");
//echo "Hello";
echo $_GET['callback'] . '(';
  $xml = file_get_contents("http://www.cardinalnewman.org/data/calendar/rsscache/page_602.rss");    // gets XML content from file
//echo $xml;  
$xml = str_replace(array("\n", "\r", "\t"), '', $xml);    // removes newlines, returns and tabs

  // replace double quotes with single quotes, to ensure the simple XML function can parse the XML

$xml = trim(str_replace('&quot;', '"', $xml));  
$xml = trim(str_replace('"', "'", $xml));
//$xml = trim(str_replace('"', '\"', $xml));

/*
$xml = str_replace('<![CDATA[', '', $xml);
$xml = str_replace(']]','',$xml);
$xml = str_replace('<br />','',$xml);
*/
//'"' ' " '
//"'" " ' "
  $simpleXml = simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA);

  echo stripslashes(json_encode($simpleXml));  
echo ")";
/*
echo '

  {
	"votes": 47,
	"totalvotes": 90
}
';


$xml_string = '
<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0">
	<channel>
		<title>Board of Directors &amp; Bell Schedule Calendar &amp; Advancement Events &amp; Arts Calendar &amp; Holiday/Vacation Calendar &amp; Main Calendar &amp; Holidays &amp; Testing Calendar &amp; Dads\' Club Dinners &amp; Moms" Club Events &amp; Counseling &amp; Admissions Events</title>
		<description>Upcoming Events</description>
		<link>http://www.cardinalnewman.org</link>
		<language>en-us</language>
		<copyright>Copyright 2016</copyright>
		<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		<docs>http://www.rssboard.org/rss-specification</docs> 
		<item>
			<title>Football Begins</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?id=602&amp;verbose=29329&amp;backcal=602</link>
			
			<description>
				<![CDATA[
				Date: Mon, 08 Aug 2016<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>Faculty/Staff Retreat</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?id=602&amp;verbose=29326&amp;backcal=602</link>
			
			<description>
				<![CDATA[
				Date: Fri, 12 Aug 2016<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>Fall Sports Begin</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?id=602&amp;verbose=29330&amp;backcal=602</link>
			
			<description>
				<![CDATA[
				Date: Mon, 15 Aug 2016<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>Link Training</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?id=602&amp;verbose=29274&amp;backcal=602</link>
			
			<description>
				<![CDATA[
				Date: Mon, 15 Aug 2016<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>Professional Development Day</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?id=602&amp;verbose=29275&amp;backcal=602</link>
			
			<description>
				<![CDATA[
				Date: Mon, 15 Aug 2016<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>REGISTRATION DAY - ALL STUDENTS</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?id=602&amp;verbose=23364&amp;backcal=602</link>
			
			<description>
				<![CDATA[
				Date: Tue, 16 Aug 2016<br />
				Event Time: 8:00 AM<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>&quot;A-SPECIAL SCHEDULE&quot;</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?id=602&amp;verbose=29393&amp;backcal=602</link>
			
			<description>
				<![CDATA[
				Date: Wed, 17 Aug 2016<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>FIRST DAY OF SCHOOL</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?id=602&amp;verbose=23365&amp;backcal=602</link>
			
			<description>
				<![CDATA[
				Date: Wed, 17 Aug 2016<br />
				Event Time: 8:45 AM<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>&quot;D SCHEDULE&quot;</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?id=602&amp;verbose=29394&amp;backcal=602</link>
			
			<description>
				<![CDATA[
				Date: Thu, 18 Aug 2016<br />
				Event Time: 7:55 AM<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>&quot;NO ACTIVITY&quot; SCHEDULE</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?id=602&amp;verbose=29425&amp;backcal=602</link>
			
			<description>
				<![CDATA[
				Date: Fri, 19 Aug 2016<br />
				Event Time: 8:55 AM<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>Men\'s Football - Freshman  vs. Marin Catholic High School (Away)</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?p=552&amp;event=3256&amp;show=detail</link>
			
			<description>
				<![CDATA[
				Date: Fri, 19 Aug 2016<br />
				Event Time: 4:00 PM<br />
				Event Type: Scrimmage<br />
				Advantage: Away<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>Men\'s Football - Varsity  vs. Justin-Siena (Home)</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?p=552&amp;event=3258&amp;show=detail</link>
			
			<description>
				<![CDATA[
				Date: Fri, 19 Aug 2016<br />
				Event Time: 5:00 PM<br />
				Event Type: Scrimmage<br />
				Advantage: Home<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>Men\'s Football - Junior Varsity vs. Justin-Siena (Home)</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?p=552&amp;event=3255&amp;show=detail</link>
			
			<description>
				<![CDATA[
				Date: Fri, 19 Aug 2016<br />
				Event Time: 5:00 PM<br />
				Event Type: Scrimmage<br />
				Advantage: Home<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>Women\'s Volleyball - Varsity  vs. Rincon Valley Christian School (Away)</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?p=552&amp;event=3446&amp;show=detail</link>
			
			<description>
				<![CDATA[
				Date: Sat, 20 Aug 2016<br />
				Event Type: Scrimmage<br />
				Advantage: Away<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>Women\'s Volleyball - Junior Varsity  - Sonoma State Team Camp (Away)</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?p=552&amp;event=3467&amp;show=detail</link>
			
			<description>
				<![CDATA[
				Date: Sat, 20 Aug 2016<br />
				Advantage: Away<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>&quot;A SCHEDULE&quot;</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?id=602&amp;verbose=29447&amp;backcal=602</link>
			
			<description>
				<![CDATA[
				Date: Mon, 22 Aug 2016<br />
				Event Time: 7:55 AM<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>Annual Fund New Family Breakfast Meeting</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?id=602&amp;verbose=29632&amp;backcal=602</link>
			
			<description>
				<![CDATA[
				Date: Mon, 22 Aug 2016<br />
				Event Time: 8:00 AM<br />
				Location: Fireplace Room<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>&quot;B SCHEDULE&quot;</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?id=602&amp;verbose=29476&amp;backcal=602</link>
			
			<description>
				<![CDATA[
				Date: Tue, 23 Aug 2016<br />
				Event Time: 7:55 AM<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>Blessing of the new Science Center</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?id=602&amp;verbose=29631&amp;backcal=602</link>
			
			<description>
				<![CDATA[
				Description: <p><a href="http://www.cardinalnewman.org/forward.cfm?dest=http%3A%2F%2Fwww%2Ecardinalnewman%2Eorg%2Fuploaded%2F07%5FSupport%5FCNHS%2FEvents%2FBlessing%5FPostcard%5FWeb%2Epdf&destkey=734D500CCB6D37A9AD21C4C632AB5C0725E24FCFF76768E474D62C421B882BD1" target="_blank" data-file-name="Blessing_Postcard_Web.pdf">Blessing Invitation</a></p><br />
				Date: Tue, 23 Aug 2016<br />
				Event Time: 5:00 PM<br />
				Location: Angela Merici Science Center Courtyard<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>Welcome Dinner</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?id=602&amp;verbose=29263&amp;backcal=602</link>
			
			<description>
				<![CDATA[
				Date: Tue, 23 Aug 2016<br />
				Event Time: 6:00 PM<br />
				Location: Jake\'s Place<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item>
  </channel>
</rss>

';

$xml = simplexml_load_string($xml_string);
$json = json_encode($xml);
$array = json_decode($json,true); 
print $array[0];
*/

?><?php
//header('Content-Type: text/html; charset=utf-8');
header('Content-Type: application/json; charset=utf-8');
header("access-control-allow-origin: *");
//echo "Hello";
echo $_GET['callback'] . '(';
  $xml = file_get_contents("http://www.cardinalnewman.org/data/calendar/rsscache/page_602.rss");    // gets XML content from file
//echo $xml;  
$xml = str_replace(array("\n", "\r", "\t"), '', $xml);    // removes newlines, returns and tabs

  // replace double quotes with single quotes, to ensure the simple XML function can parse the XML

$xml = trim(str_replace('&quot;', '"', $xml));  
$xml = trim(str_replace('"', "'", $xml));
//$xml = trim(str_replace('"', '\"', $xml));

/*
$xml = str_replace('<![CDATA[', '', $xml);
$xml = str_replace(']]','',$xml);
$xml = str_replace('<br />','',$xml);
*/
//'"' ' " '
//"'" " ' "
  $simpleXml = simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA);

  echo stripslashes(json_encode($simpleXml));  
echo ")";
/*
echo '

  {
	"votes": 47,
	"totalvotes": 90
}
';


$xml_string = '
<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0">
	<channel>
		<title>Board of Directors &amp; Bell Schedule Calendar &amp; Advancement Events &amp; Arts Calendar &amp; Holiday/Vacation Calendar &amp; Main Calendar &amp; Holidays &amp; Testing Calendar &amp; Dads\' Club Dinners &amp; Moms" Club Events &amp; Counseling &amp; Admissions Events</title>
		<description>Upcoming Events</description>
		<link>http://www.cardinalnewman.org</link>
		<language>en-us</language>
		<copyright>Copyright 2016</copyright>
		<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		<docs>http://www.rssboard.org/rss-specification</docs> 
		<item>
			<title>Football Begins</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?id=602&amp;verbose=29329&amp;backcal=602</link>
			
			<description>
				<![CDATA[
				Date: Mon, 08 Aug 2016<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>Faculty/Staff Retreat</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?id=602&amp;verbose=29326&amp;backcal=602</link>
			
			<description>
				<![CDATA[
				Date: Fri, 12 Aug 2016<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>Fall Sports Begin</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?id=602&amp;verbose=29330&amp;backcal=602</link>
			
			<description>
				<![CDATA[
				Date: Mon, 15 Aug 2016<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>Link Training</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?id=602&amp;verbose=29274&amp;backcal=602</link>
			
			<description>
				<![CDATA[
				Date: Mon, 15 Aug 2016<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>Professional Development Day</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?id=602&amp;verbose=29275&amp;backcal=602</link>
			
			<description>
				<![CDATA[
				Date: Mon, 15 Aug 2016<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>REGISTRATION DAY - ALL STUDENTS</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?id=602&amp;verbose=23364&amp;backcal=602</link>
			
			<description>
				<![CDATA[
				Date: Tue, 16 Aug 2016<br />
				Event Time: 8:00 AM<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>&quot;A-SPECIAL SCHEDULE&quot;</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?id=602&amp;verbose=29393&amp;backcal=602</link>
			
			<description>
				<![CDATA[
				Date: Wed, 17 Aug 2016<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>FIRST DAY OF SCHOOL</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?id=602&amp;verbose=23365&amp;backcal=602</link>
			
			<description>
				<![CDATA[
				Date: Wed, 17 Aug 2016<br />
				Event Time: 8:45 AM<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>&quot;D SCHEDULE&quot;</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?id=602&amp;verbose=29394&amp;backcal=602</link>
			
			<description>
				<![CDATA[
				Date: Thu, 18 Aug 2016<br />
				Event Time: 7:55 AM<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>&quot;NO ACTIVITY&quot; SCHEDULE</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?id=602&amp;verbose=29425&amp;backcal=602</link>
			
			<description>
				<![CDATA[
				Date: Fri, 19 Aug 2016<br />
				Event Time: 8:55 AM<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>Men\'s Football - Freshman  vs. Marin Catholic High School (Away)</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?p=552&amp;event=3256&amp;show=detail</link>
			
			<description>
				<![CDATA[
				Date: Fri, 19 Aug 2016<br />
				Event Time: 4:00 PM<br />
				Event Type: Scrimmage<br />
				Advantage: Away<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>Men\'s Football - Varsity  vs. Justin-Siena (Home)</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?p=552&amp;event=3258&amp;show=detail</link>
			
			<description>
				<![CDATA[
				Date: Fri, 19 Aug 2016<br />
				Event Time: 5:00 PM<br />
				Event Type: Scrimmage<br />
				Advantage: Home<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>Men\'s Football - Junior Varsity vs. Justin-Siena (Home)</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?p=552&amp;event=3255&amp;show=detail</link>
			
			<description>
				<![CDATA[
				Date: Fri, 19 Aug 2016<br />
				Event Time: 5:00 PM<br />
				Event Type: Scrimmage<br />
				Advantage: Home<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>Women\'s Volleyball - Varsity  vs. Rincon Valley Christian School (Away)</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?p=552&amp;event=3446&amp;show=detail</link>
			
			<description>
				<![CDATA[
				Date: Sat, 20 Aug 2016<br />
				Event Type: Scrimmage<br />
				Advantage: Away<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>Women\'s Volleyball - Junior Varsity  - Sonoma State Team Camp (Away)</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?p=552&amp;event=3467&amp;show=detail</link>
			
			<description>
				<![CDATA[
				Date: Sat, 20 Aug 2016<br />
				Advantage: Away<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>&quot;A SCHEDULE&quot;</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?id=602&amp;verbose=29447&amp;backcal=602</link>
			
			<description>
				<![CDATA[
				Date: Mon, 22 Aug 2016<br />
				Event Time: 7:55 AM<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>Annual Fund New Family Breakfast Meeting</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?id=602&amp;verbose=29632&amp;backcal=602</link>
			
			<description>
				<![CDATA[
				Date: Mon, 22 Aug 2016<br />
				Event Time: 8:00 AM<br />
				Location: Fireplace Room<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>&quot;B SCHEDULE&quot;</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?id=602&amp;verbose=29476&amp;backcal=602</link>
			
			<description>
				<![CDATA[
				Date: Tue, 23 Aug 2016<br />
				Event Time: 7:55 AM<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>Blessing of the new Science Center</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?id=602&amp;verbose=29631&amp;backcal=602</link>
			
			<description>
				<![CDATA[
				Description: <p><a href="http://www.cardinalnewman.org/forward.cfm?dest=http%3A%2F%2Fwww%2Ecardinalnewman%2Eorg%2Fuploaded%2F07%5FSupport%5FCNHS%2FEvents%2FBlessing%5FPostcard%5FWeb%2Epdf&destkey=734D500CCB6D37A9AD21C4C632AB5C0725E24FCFF76768E474D62C421B882BD1" target="_blank" data-file-name="Blessing_Postcard_Web.pdf">Blessing Invitation</a></p><br />
				Date: Tue, 23 Aug 2016<br />
				Event Time: 5:00 PM<br />
				Location: Angela Merici Science Center Courtyard<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item> 
		<item>
			<title>Welcome Dinner</title>
			
			<link>http://www.cardinalnewman.org/page.cfm?id=602&amp;verbose=29263&amp;backcal=602</link>
			
			<description>
				<![CDATA[
				Date: Tue, 23 Aug 2016<br />
				Event Time: 6:00 PM<br />
				Location: Jake\'s Place<br />
				]]>
			</description>
			<pubDate>Wed, 27 Jul 2016 00:02:51 GMT</pubDate>
		</item>
  </channel>
</rss>

';

$xml = simplexml_load_string($xml_string);
$json = json_encode($xml);
$array = json_decode($json,true); 
print $array[0];
*/

?>
