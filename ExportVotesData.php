<?php

namespace Phppot;
require_once __DIR__ . './lib/DataSource.php';
$db = new DataSource();
$result =$db->select("SELECT text,vote,explication FROM message,votes,utilisateur WHERE message.id = votes.id_message AND utilisateur.id = votes.id_user");

if(!empty($result)){
	$delimiter = ",";
	$filename = "dataVotes.csv";
	$f = fopen('php://memory','w');
	
	$fields = array('Text','Vote_Utilisateur','Explication_Utilisteur');
	fputcsv($f,$fields,$delimiter);
	foreach($result as $re){
		$lineData = array($re['text'], $re['vote'],$re['explication']);
		fputcsv($f,$lineData,$delimiter);
	}
	
	fseek($f,0);
	
	//header('Content-Type:text/csv');
	header('Content-Disposition:attachment; filename = "' .$filename . '";');
	
	fpassthru($f);
}
exit;

?>