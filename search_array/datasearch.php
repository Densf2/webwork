<?php
include "datasearchviewresult.php";

$cars = array(
'Audi A6' => array(
	'mark' => 'audi',
	'year' => 2000,
	'type' => 'sedan',
	'number' => 'LU404',
	'engine' => 2.2
),
'VW Golf' => array(
		'mark' => 'volkswagen',
		'year' => 2010,
		'type' => 'hatchback',
		'number' => 'PL2022',
		'engine' => 1.6
		),
'Suzuki Swift' => array(
		'mark' => 'suzuki',
		'year' => 2001,
		'type' => 'hatchback',
		'number' => PL2022,
		'engine' => 1.6
	),
	'Renault Logan' => array(
		'mark' => 'renault',
		'year' => 2015,
		'type' => 'sedan',
		'number' => HM2016,
		'engine' => 1.6
	),
	'VAZ kopeyka' => array(
		'mark' => 'VAZ',
		'year' => 1977,
		'type' => 'sedan',
		'number' => Hm4321,
		'engine' => 1.60
	),
	
);
//$searchKey;
$sParams = $_GET;
var_dump($_GET);
echo"<br />";
$res = [];
	function search($sArray, $sParams) {
		foreach($cars as $cName => $cObj) {
		
			foreach($sParams as $param){
			
				$check = 0;
			
				if($param['val'] != '' && $param['key'] != ''){
					if($cObj[$param['key']] == $param['val']){
						$check = 1;
					}		
				}else{
					$check = 0;
					break;
				}
				
				if( $check == 1 ) $res[$cName] = $cObj;
			}
		}
	}
	$res = search($cars, $_GET);
 echo "<br />";
var_dump($res);
/*Перевірка по запису до текствого файлу
echo "<br />";
$filename = '/d/dwonloads/projects/1app/file.txt';
	if(file_exists($filename)){
		echo"File YE";
	}else{
		echo"Nifiga NYE";
	}*/
?>