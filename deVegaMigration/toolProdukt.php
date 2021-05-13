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
$pid = 107;
$timeNow = time();
$allFilePath = '/fileadmin/devegaproduct/all_ks_files/';

$selectBilderextrasSql = "SELECT uid, tx_kbks_p_layoutkontur, tx_kbks_p_bild_top, tx_kbks_p_bild, tx_kbks_p_bild_hilte, tx_kbks_p_bild_2_t_abheft, tx_kbks_p_bild_3_t_abheft, tx_kbks_p_bild_fensterstanzung, tx_kbks_p_bild_fuellhoehe, tx_kbks_p_bild_gest_abheft, tx_kbks_p_bild_gummizug, tx_kbks_p_bild_klettpunkt_magnet, tx_kbks_p_bild_vk_schlitze, tx_kbks_p_bild_vk_tasche, tx_kbks_slider_bilder FROM tx_kbks_produkt WHERE deleted=0";
$selectBilderextras = $dbConn->query($selectBilderextrasSql); 

while($dataRow = $selectBilderextras->fetch_assoc()) {	//print_r($dataRow); die();
	$uid		= $dataRow['uid'];
	if($dataRow['tx_kbks_p_layoutkontur']){
		$fileName		= $identifier = $extension = '';
		$fileName		= trim($dataRow['tx_kbks_p_layoutkontur']);
		$identifier		= $allFilePath.$fileName;
		$extension		= pathinfo($fileName, PATHINFO_EXTENSION); 
		_insert_each_sys_file($identifier, $fileName, $extension, $uid, 'tx_kbks_p_layoutkontur');
	}
	if($dataRow['tx_kbks_p_bild_top']){
		$fileName		= $identifier = $extension = '';
		$fileName		= trim($dataRow['tx_kbks_p_bild_top']);
		$identifier		= $allFilePath.$fileName;
		$extension		= pathinfo($fileName, PATHINFO_EXTENSION); 
		_insert_each_sys_file($identifier, $fileName, $extension, $uid, 'tx_kbks_p_bild_top');
	}
	if($dataRow['tx_kbks_p_bild']){
		$fileName		= $identifier = $extension = '';
		$fileName		= trim($dataRow['tx_kbks_p_bild']);
		$identifier		= $allFilePath.$fileName;
		$extension		= pathinfo($fileName, PATHINFO_EXTENSION); 
		_insert_each_sys_file($identifier, $fileName, $extension, $uid, 'tx_kbks_p_bild');
	}
	if($dataRow['tx_kbks_p_bild_hilte']){
		$fileName		= $identifier = $extension = '';
		$fileName		= trim($dataRow['tx_kbks_p_bild_hilte']);
		$identifier		= $allFilePath.$fileName;
		$extension		= pathinfo($fileName, PATHINFO_EXTENSION); 
		_insert_each_sys_file($identifier, $fileName, $extension, $uid, 'tx_kbks_p_bild_hilte');
	}
	if($dataRow['tx_kbks_p_bild_2_t_abheft']){
		$fileName		= $identifier = $extension = '';
		$fileName		= trim($dataRow['tx_kbks_p_bild_2_t_abheft']);
		$identifier		= $allFilePath.$fileName;
		$extension		= pathinfo($fileName, PATHINFO_EXTENSION); 
		_insert_each_sys_file($identifier, $fileName, $extension, $uid, 'tx_kbks_p_bild_2_t_abheft');
	}
	if($dataRow['tx_kbks_p_bild_3_t_abheft']){
		$fileName		= $identifier = $extension = '';
		$fileName		= trim($dataRow['tx_kbks_p_bild_3_t_abheft']);
		$identifier		= $allFilePath.$fileName;
		$extension		= pathinfo($fileName, PATHINFO_EXTENSION); 
		_insert_each_sys_file($identifier, $fileName, $extension, $uid, 'tx_kbks_p_bild_3_t_abheft');
	}
	if($dataRow['tx_kbks_p_bild_fensterstanzung']){
		$fileName		= $identifier = $extension = '';
		$fileName		= trim($dataRow['tx_kbks_p_bild_fensterstanzung']);
		$identifier		= $allFilePath.$fileName;
		$extension		= pathinfo($fileName, PATHINFO_EXTENSION); 
		_insert_each_sys_file($identifier, $fileName, $extension, $uid, 'tx_kbks_p_bild_fensterstanzung');
	}
	if($dataRow['tx_kbks_p_bild_fuellhoehe']){
		$fileName		= $identifier = $extension = '';
		$fileName		= trim($dataRow['tx_kbks_p_bild_fuellhoehe']);
		$identifier		= $allFilePath.$fileName;
		$extension		= pathinfo($fileName, PATHINFO_EXTENSION); 
		_insert_each_sys_file($identifier, $fileName, $extension, $uid, 'tx_kbks_p_bild_fuellhoehe');
	}
	if($dataRow['tx_kbks_p_bild_gest_abheft']){
		$fileName		= $identifier = $extension = '';
		$fileName		= trim($dataRow['tx_kbks_p_bild_gest_abheft']);
		$identifier		= $allFilePath.$fileName;
		$extension		= pathinfo($fileName, PATHINFO_EXTENSION); 
		_insert_each_sys_file($identifier, $fileName, $extension, $uid, 'tx_kbks_p_bild_gest_abheft');
	}
	if($dataRow['tx_kbks_p_bild_gummizug']){
		$fileName		= $identifier = $extension = '';
		$fileName		= trim($dataRow['tx_kbks_p_bild_gummizug']);
		$identifier		= $allFilePath.$fileName;
		$extension		= pathinfo($fileName, PATHINFO_EXTENSION); 
		_insert_each_sys_file($identifier, $fileName, $extension, $uid, 'tx_kbks_p_bild_gummizug');
	}
	if($dataRow['tx_kbks_p_bild_klettpunkt_magnet']){
		$fileName		= $identifier = $extension = '';
		$fileName		= trim($dataRow['tx_kbks_p_bild_klettpunkt_magnet']);
		$identifier		= $allFilePath.$fileName;
		$extension		= pathinfo($fileName, PATHINFO_EXTENSION); 
		_insert_each_sys_file($identifier, $fileName, $extension, $uid, 'tx_kbks_p_bild_klettpunkt_magnet');
	}
	if($dataRow['tx_kbks_p_bild_vk_schlitze']){
		$fileName		= $identifier = $extension = '';
		$fileName		= trim($dataRow['tx_kbks_p_bild_vk_schlitze']);
		$identifier		= $allFilePath.$fileName;
		$extension		= pathinfo($fileName, PATHINFO_EXTENSION); 
		_insert_each_sys_file($identifier, $fileName, $extension, $uid, 'tx_kbks_p_bild_vk_schlitze');
	}	
	if($dataRow['tx_kbks_p_bild_vk_tasche']){
		$fileName		= $identifier = $extension = '';
		$fileName		= trim($dataRow['tx_kbks_p_bild_vk_tasche']);
		$identifier		= $allFilePath.$fileName;
		$extension		= pathinfo($fileName, PATHINFO_EXTENSION); 
		_insert_each_sys_file($identifier, $fileName, $extension, $uid, 'tx_kbks_p_bild_vk_tasche');
	}
	if($dataRow['tx_kbks_slider_bilder']){
		$sliderBilderArr	= @explode(",",$dataRow['tx_kbks_slider_bilder']);
		foreach($sliderBilderArr as $sbkey=>$sbValue) {
			$fileName		= $identifier = $extension = '';
			$fileName		= trim($sbValue);
			$identifier		= $allFilePath.$fileName;
			$extension		= pathinfo($fileName, PATHINFO_EXTENSION); 
			_insert_each_sys_file($identifier, $fileName, $extension, $uid, 'tx_kbks_slider_bilder');
		}
	}	
	
}

	function _insert_each_sys_file($identifier, $name, $extension, $uid_foreign, $fieldname) {  
		global $dbConn; global $pid; global $timeNow; 
		$insertSysfileSql = "INSERT INTO sys_file (pid, metadata, identifier, name, extension, tstamp, creation_date) VALUES ";
		$insertSysfileSql .= '('.$pid.',7777,"'.$identifier.'","'.$name.'","'.$extension.'",'.$timeNow.','.$timeNow.')';
		$dbConn->query($insertSysfileSql) or die('Error:'.$insertSysfileSql); //echo '$uid_local='.$uid_local; die();
		$uid_local = $dbConn->insert_id;
		_insert_product_mm_sys_file_reference($uid_local, $uid_foreign, $fieldname, $name);
	}

	function _insert_product_mm_sys_file_reference($uid_local, $uid_foreign, $fieldname, $title ) {
		global $dbConn; global $pid; global $timeNow; 
		$insertSysfileRefSql = "INSERT INTO sys_file_reference 
									(uid_local, uid_foreign, tablenames, fieldname, table_local, pid, title, sorting, sorting_foreign, tstamp, crdate ) VALUES ";

		$insertSysfileRefSql .= '('.$uid_local.',"'.$uid_foreign.'","tx_kbks_produkt","'.$fieldname.'","sys_file",'.$pid.',"'.$title.'",8885,8885,'.$timeNow.','.$timeNow.')';
		$dbConn->query($insertSysfileRefSql) or die('Error:'.$insertSysfileRefSql);
	}
