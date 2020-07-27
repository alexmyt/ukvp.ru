<?php

date_default_timezone_set('Europe/Moscow');

if(!defined('SCRIPT_ROOT')) {
	define('SCRIPT_ROOT', dirname(__FILE__)."/"); 
}

// Получим XML со свежим списком экстремистов
$xml_dir = SCRIPT_ROOT.'storage/terrorists/';
$xml_fname = $xml_dir.'terrorists.xml';

if(!is_dir($xml_dir)){
	if(!mkdir($xml_dir)) return false;
}

if(is_writable($xml_fname) && $xml_doc = simplexml_load_file($xml_fname)){
	$doc_date = DateTime::createFromFormat('d.m.y', $xml_doc['crDate']);
	if($doc_date->diff(new DateTime("now"))->d > 0){
		$xml_doc=create_xml($xml_fname);
	}
}else{
	$xml_doc=create_xml($xml_fname);
}

//$xml_doc=create_xml($xml_fname);

if(!$xml_doc) return false;


//$_GET['what']='list';

if ($_GET['what']=='list') {
	// перечень имеющихся файлов с версиями списков
	$flist = glob(SCRIPT_ROOT.'storage/terrorists/*');
	$xml_flist = new SimpleXMLElement("<?xml version='1.0'  encoding='windows-1251' standalone='yes'?><list></list>");
	foreach($flist as $fname){
		if(basename($fname)=='terrorists.xml') continue;

		$xml_file=simplexml_load_file($fname);
		$createDate = DateTime::createFromFormat('d.m.y', $xml_file['crDate']);
		$elementFile = $xml_flist->addChild("file");
		$elementFile->addAttribute("fname",basename($fname));
		$elementFile->addAttribute("crDate",$createDate->format("d.m.Y"));
	}

	$elementFile = $xml_flist->addChild("file");
	$elementFile->addAttribute("fname",'terrorists.xml');
	$elementFile->addAttribute("crDate",'27.11.2014');
	$elementFile = $xml_flist->addChild("file");
	$elementFile->addAttribute("fname",'terrorists.xml');
	$elementFile->addAttribute("crDate",'20.11.2014');
	$elementFile = $xml_flist->addChild("file");
	$elementFile->addAttribute("fname",'terrorists.xml');
	$elementFile->addAttribute("crDate",'13.11.2014');
	$elementFile = $xml_flist->addChild("file");
	$elementFile->addAttribute("fname",'terrorists.xml');
	$elementFile->addAttribute("crDate",'30.10.2014');
	$elementFile = $xml_flist->addChild("file");
	$elementFile->addAttribute("fname",'terrorists.xml');
	$elementFile->addAttribute("crDate",'24.10.2014');
	$elementFile = $xml_flist->addChild("file");
	$elementFile->addAttribute("fname",'terrorists.xml');
	$elementFile->addAttribute("crDate",'06.10.2014');

	$content = $xml_flist->asXML();
	header("Content-type: text/xml");
	header("Content-length: " . strval(strlen($content)));
	echo $content;

}elseif (($_GET['what']=='md5')) {
	// md5 текущего файла с перечнем
	$content = 	md5($xml_doc->list->asXML());
	header("Content-type: text/plain");
	header("Content-length: " . strval(strlen($content)));
	echo $content;

}else{
	$content = $xml_doc->asXML();
	header("Content-type: text/xml");
	header("Content-length: " . strval(strlen($content)));
	echo $content;
	//echo($xml_doc->asXML());
}

function create_xml($fname){

	$xmlstr = "<?xml version='1.0'  encoding='windows-1251' standalone='yes'?><terrorists><list></list></terrorists>";
	$xmlstr = "<?xml version='1.0'  encoding='UTF-8' standalone='yes'?><terrorists><list></list></terrorists>";

	$url='http://fedsfm.ru/documents/terrorists-catalog-portal-act';

	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	curl_setopt($ch, CURLOPT_ENCODING, ' gzip, deflate');
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.162 Safari/537.36');
	$html = curl_exec($ch);
	curl_close($ch);

	//var_dump($html);

	if($html){
	
		//$html = iconv('UTF-8','Windows-1251',$html);

		$xml_doc = new SimpleXMLElement($xmlstr);

		require_once SCRIPT_ROOT.'nokogiri/nokogiri.php';
		$saw = new nokogiri($html);

		$matches=array();
		foreach($saw->get('div#russianFL li') as $fl){
			//var_dump($fl);
			preg_match('/^(\d+)\.\s([^\*,]+)\*?,\s(\d\d\.\d\d\.\d\d\d\d)?/',$fl['#text'][0],$matches);
			//var_dump($matches);
			$terrorist=$xml_doc->list->addChild('terrorist');
			$terrorist->addChild('Number',$matches[1]);
			$terrorist->addChild('FIO',$matches[2]);
			$terrorist->addChild('Birthday',(count($matches)>3) ? $matches[3] : "");
			if(preg_match('/\d\d\.\d\d\.\d\d\d\d.+,\s(.+);$/',$fl['#text'][0],$matches)){
				$terrorist->addChild('Address',$matches[1]);
			}else{
	         		$terrorist->addChild('Address');
	      		}
		}

		$xml_doc->addAttribute('crDate',date("d.m.y"));
		$xml_doc->addAttribute('crTime',date("H:i:s"));

		$handle = fopen($fname,'w+');
		fwrite($handle,$xml_doc->asXML());
		fclose($handle);
		
		// если еще нет файла с версией этого списка - создадим
		$md5 = md5($xml_doc->list->asXML());
		$md5_fname = SCRIPT_ROOT.'storage/terrorists/'.$md5;
		if(!file_exists($md5_fname)){
			$handle = fopen($md5_fname,'w+');
			fwrite($handle,$xml_doc->asXML());
			fclose($handle);
		}


		return $xml_doc;

	}

	return FALSE;
}
?>