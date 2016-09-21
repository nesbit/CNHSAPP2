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

?>
