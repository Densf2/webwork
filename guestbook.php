<?php
 
 

 /*$arr = json_encode($_POST);
 
		$failik = 'db.txt';
			file_put_contents($failik, $arr, FILE_APPEND);
	*/

 
 
 define('DB_PATH', 'db.txt');
 
 $newMessage = $_POST;
 $newMessage['time'] = date("Y-m-d H:i:s");
	if( $newMessage['name'] != '' && $newMessage['email'] != '' && $newMessage['message'] != '' ) {
 
		 if( file_exists( DB_PATH ) && file_get_contents( DB_PATH ) != '' ) { 
			$allMessages = json_decode ( file_get_contents( DB_PATH ), true );
			array_unshift( $allMessages, $newMessage );
		 }
		 else {
			$allMessages = [$newMessage];
		 }
			$res = file_put_contents( DB_PATH, json_encode( $allMessages ) );
	}
 
				if(
					 isset($_SERVER['HTTP_X_REQUESTED_WITH']) 
					 && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) 
					 && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
					) {
					 // Если к нам идёт Ajax запрос, то ловим его
					 echo json_encode( [ 'result' => $newMessage ] );
					 exit;
					}
 
include "GuestBookView.php";
 ?>