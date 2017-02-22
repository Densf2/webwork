<?php
	echo "This is GuestBookView";
	echo "<br />";
	
	
	/*Мій старий код по виведенню з файла json
	$json_data = file_get_contents('db.txt');
    
	$json_data = json_decode($json_data, true);
		var_dump($json_data);
	*/
	
	//Новий код по виведенню
	?>
	

	<div class="messages">
		
	</div>
	
<!--	<form id="guestForm" action="guestbook.php" method="POST">
		<input type="text" id="name" name="name" placeholder="Name"><br />
		<input type="text" id="email" name="email" placeholder="E-mail"><br />
		<input type="text" id="message" name="message" placeholder="Message"><br />
		<button type="submit">Send</button>
	</form>
		
	<script 
		src="https://code.jquery.com/jquery-3.1.1.min.js"
		  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
		  crossorigin="anonymous">
	</script>
	
	<script>
	$(document).ready(function(){
	
		$('#guestForm').submit(function(e) {
			e.preventDefault();
				$.ajax({
					method: 'POST',
					url: 'guestbook.php',
					data: {
						name: $('#name').val(),
						email: $('#email').val(),
						message: $('#message').val()
					},
					}).done(function(data){
							
					var res = JSON.parse('$res');
						console.log(response);
					if(res.result > 0){
						var el = document.createElement('div');
						$(el).html(
						$('#name').val() + '<br />' +
						$('#email').val() + '<br />' +
						$('#message').val() +'<br /><br /><hr />');
						console.log(el);
						$('#messages').apend('el');
					}
				  });
				  });
				});
				
	</script>
	-->
	
	<form id="guestForm" action="/GuestBook.php" method="POST">

 <input type="text" id="name" name="name" placeholder="Name"> <br/>
 <input type="text" id="email" name="email" placeholder="Email"> <br/>
 <input type="text" id="message" name="message" placeholder="Message"> <br/>

 <button type="submit">SEND</button>

</form>


<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

			<script>
			 $(document).ready( function(e) { // Загрузка документа
			  
			  $('#guestForm').submit( function(e) {
			   e.preventDefault();
			   
			   $.ajax({
				method: "POST",
				url: "/GuestBook.php",
				data: { 
				 name: $('#name').val(), 
				 email: $('#email').val(),
				 message:  $('#message').val()
				}
				}).done( function( data ) {

						var res = JSON.parse( data );
						
						if( res.result > 0 ) {
						 el = document.createElement('div');
						 $(el).html(res.result.time +'<br/>');
						 $('.messages').prepend(el);
						}    
				});
			   });
			  });
			  
			 
			 
			</script>
