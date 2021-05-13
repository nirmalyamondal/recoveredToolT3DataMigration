<?php
require_once('dbConnection.php');

// Turn on/ off all error reporting
error_reporting(1);
ini_set("display_errors", 1);
ini_set('memory_limit', '-1');
ini_set('max_execution_time', 1800);

// Declaring variables
global $dbConn;
global $timeNow;
global $allFilePath;

// Initializing variables
$pid = 107; #Local:40, Online:107
$timeNow = time();
$allFilePath = '/fileadmin/devegaproduct/all_ks_files/';

$selectBilderextrasSql = "SELECT uid, tx_kbks_slider_picture FROM tx_kbks_werteliste WHERE deleted=0";
$selectBilderextras = $dbConn->query($selectBilderextrasSql); 

while($dataRow = $selectBilderextras->fetch_assoc()) {	//print_r($dataRow); die();
	$uid		= $dataRow['uid'];
	$imageTitle	= $dataRow['tx_kbks_slider_picture'];	
	if($imageTitle){
		$fileName		= $identifier = $extension = '';
		$fileName		= trim($imageTitle);
		$identifier		= $allFilePath.$fileName;
		$extension		= pathinfo($fileName, PATHINFO_EXTENSION); 
		_insert_each_sys_file($identifier, $fileName, $extension, $uid, 'tx_kbks_slider_picture');
	}
}

	function _insert_each_sys_file($identifier, $name, $extension, $uid_foreign, $fieldname) {  
		global $dbConn; global $pid; global $timeNow; 
		$insertSysfileSql = "INSERT INTO sys_file (pid, identifier, name, extension, tstamp, creation_date) VALUES ";
		$insertSysfileSql .= '('.$pid.',"'.$identifier.'","'.$name.'","'.$extension.'",'.$timeNow.','.$timeNow.')';
		$dbConn->query($insertSysfileSql) or die('Error:'.$insertSysfileSql); //echo '$uid_local='.$uid_local; die();
		$uid_local = $dbConn->insert_id;
		_insert_product_mm_sys_file_reference($uid_local, $uid_foreign, $fieldname, $name);
	}

	function _insert_product_mm_sys_file_reference($uid_local, $uid_foreign, $fieldname, $title ) {
		global $dbConn; global $pid; global $timeNow; 
		$insertSysfileRefSql = "INSERT INTO sys_file_reference 
									(uid_local, uid_foreign, tablenames, fieldname, table_local, pid, title, sorting, sorting_foreign, tstamp, crdate ) VALUES ";

		$insertSysfileRefSql .= '('.$uid_local.',"'.$uid_foreign.'","tx_kbks_werteliste","'.$fieldname.'","sys_file",'.$pid.',"'.$title.'",8886,8886,'.$timeNow.','.$timeNow.')';
		$dbConn->query($insertSysfileRefSql) or die('Error:'.$insertSysfileRefSql);
	}

/*
Cleaning Up Database Queries -

DELETE FROM sys_file WHERE pid = 40;
DELETE FROM sys_file_reference WHERE pid = 40;
*/



