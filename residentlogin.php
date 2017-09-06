<?php
	session_start();
?>
<html>
<head>
	<title> CC-first  </title>
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet"> 
	<link rel ="stylesheet" href="css/style.css" >
	<style>
	h1
	{
		color: #2c3e50;
		font: 900 50px 'Poiret One', cursive;
		margin-top : 20px;
	}
	h3
	{
		color: #2c3e50;
		font: 900 20px 'Poiret One', cursive;
	}
	ul
	{
		list-style : none;
		padding : 0;
		margin : 0;
		position: absolute;
	}
	li{
		float: left;
		margin-top : 30px;
		margin-right : 50px;
	}
	a
	{
		width : 150 px;
		color : white;
		display: block;
		text-decoration : none;
		font-size : 20 px;
		text-align : center;
		padding : 10px;
		border-radius : 10px;
		font-family : Century Gothic;
		font-weight : bold;
	}
	a:hover
	{
		background: #669900;
		transition : 0.6s;
	}
	</style>
</head>
<body  style="background-color: #FFFFFF">
<h1> Credit complaint </h1>

<h3 align="right"> Welcome  
<?php echo $_SESSION['username'] ?>
<?php echo '<img class="avatarlogin" src="'.$_SESSION["imagelink"].'">';?>
</h3>
<div class ="nav">
	<ul>
		<li> <a href="first.php">Home</a></li>
		<li> <a href="#">complaints</a></li>
		<li> <a href="#">status</a></li>
		<li> <a href="#">my profile</a></li>
		<li> <a href="#">delete my account</a></li>		<li> <a href="#">Contact</a></li>
	</ul>
	
</div>
<?php
	session_destroy();
?>
</body>
</html>
