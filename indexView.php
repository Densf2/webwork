
<html>
<head>
	<title>Form for working with json</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<!--меню на головній сторінці-->
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Бренд та перемикач згруповані для кращого відображення на мобільних пристроях -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Бренд</a>
    </div>


      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">Головна</a></li>
		<li><a href="#">Новини</a></li>
		<li><a href="#">Каталог</a></li>
		<li><a href="#">Контакти</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Спадне меню <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Дія</a></li>
            <li><a href="#">Інша дія</a></li>
            <li><a href="#">Тут ще щось</a></li>
            <li class="divider"></li>
            <li><a href="#">Відокремлений лінк</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="page-header">
  <h1>The main text <small>Header text</small></h1>
</div>
<div class="container-fluid">
<div class="row">
	<div class="col-sm-6 col-md-4">
		<div class="thumbnail">
		<div class="caption">
        <h3 class="text-center">Some text</h3>
        <p class="text-center">...</p>
        
      </div>
		</div>
	</div>
	<div class="col-sm-6 col-md-4">
		<div class="thumbnail">
		<div class="caption">
        <h3 class="text-center">Some text</h3>
        <p class="text-center">...</p>
        
      </div>
		</div>
	</div>
	<div class="col-sm-6 col-md-4">
		<div class="thumbnail">
		<div class="caption">
        <h3 class="text-center">Some text</h3>
        <p class="text-center">...</p>
        
      </div>
		</div>
	</div>
</div>
	<div class="row">
	<div class="col-md-6 col-sm-12">
		<form class="text-center" method="post" action="guestbook.php">
			<input type="text" name="name">Name</input><br />
			<input type="text" name="email">Email</input><br />
			<input type="text" name="message">Message</input><br />
			<button type="submit">send</button>
		</form>
	</div>
	 <div class="col-md-6 col-sm-12">
		<ul class="list-group">
			  <li class="list-group-item">Cras justo odio</li>
			  <li class="list-group-item">Dapibus ac facilisis in</li>
			  <li class="list-group-item">Morbi leo risus</li>
			  <li class="list-group-item">Porta ac consectetur ac</li>
			  <li class="list-group-item">Vestibulum at eros</li>
		</ul>
	</div>
</div>
</div>