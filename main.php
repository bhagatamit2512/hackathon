<?php



include 'header.php';?>
<!DOCTYPE html>
<html>
<head><link href="https://fonts.googleapis.com/css?family=Mansalva&display=swap" rel="stylesheet">
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:#42f5ec;
  box-shadow: 0 3px 5px rgba(0,0,0,0.6);
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #2b9bcf;}
  .a{
  	font-family: 'Mansalva', cursive;
  	color: red;
  	text-align: center;
  	margin-left: 350px;
  	font-size: 60px;
  }
.q{height:80px;
width: 150px;
padding-top:2px;}

.feed
         	{margin-top: 100px;
			margin-left: 310px;
			width:400px;
			height:350px;
			float:left;
			font-size: 70px;
			color: #2e3634;


			box-shadow: 0 3px 5px rgba(,0,0,0.6) }
			@import url('https://fonts.googleapis.com/css?family=Lato&display=swap');

* {
	box-sizing: border-box;
	margin: 0;
	padding: 0;
	outline: none;
	user-select: none;
}

:focus {
	outline: none;
}



main {
	display: flex;
	align-items: center;
	justify-content: center;

}

.search-wrapper {
	display: flex;
	padding: .5rem;
	border-radius: 64px;

	transition: all ease-out .8s;
}

.search-wrapper:hover {
	box-shadow: 0 0 12px 3px rgba(255, 255, 255, .4);
}

.search-wrapper input {
	width: 0;
	height: 0;
	padding: 0;
	border: 0;
	border-top-left-radius: 30px;
	border-bottom-left-radius: 30px;
	box-shadow: 0 0 5px inset rgba(0, 0, 0, .8);
	opacity: 0;
	outline: none;

	font-family: 'Lato', sans-serif;
	font-size: 1.5rem;
	font-weight: bold;
	letter-spacing: 2px;
	transition: all linear .2s;
}

.search-wrapper button {
	width: 64px;
	height: 64px;
	appearance: none;
	border-radius: 50%;
	border: none;
	outline: none;
	background: linear-gradient(to top, #09203f 0%, #537895 100%);
	cursor: pointer;
	pointer-events: none;
}

.search-wrapper:hover input {
	width: 280px;
	height: 64px;
	padding: .3rem 1rem;
	opacity: 1;
}

.search-wrapper:hover button {
	border-radius: 0;
	border-top-right-radius: 50%;
	border-bottom-right-radius: 50%;
	pointer-events: all;
}

.search-wrapper button::after {
	content: '';
	display: block;
	width: 35px;
	height: 35px;
	margin: auto;
	background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='96' height='96' fill='white' viewBox='0 0 24 24'%3E%3Cpath d='M21.172 24l-7.387-7.387c-1.388.874-3.024 1.387-4.785 1.387-4.971 0-9-4.029-9-9s4.029-9 9-9 9 4.029 9 9c0 1.761-.514 3.398-1.387 4.785l7.387 7.387-2.828 2.828zm-12.172-8c3.859 0 7-3.14 7-7s-3.141-7-7-7-7 3.14-7 7 3.141 7 7 7z'/%3E%3C/svg%3E") no-repeat;
	background-size: 100% 100%;
	pointer-events: none;
}

.search-wrapper button:hover {
	background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="main.php">Home</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
  <li class="a">socialize <img class="q" src="8.jpg"></li>

	<div class="search-wrapper">
		<input type="text" name="query" autocomplete="off" placeholder="Search for&hellip;">
		<button type="submit"></button>
	</div>
