<!DOCTYPE html>
<html>

	<?php include 'head.php';?>
		

	<body>
		<a href="index.php">acceuil</a>
		<video id="videoarea" controls="controls" poster="" src=""></video>

		<ul id="playlist">
		    <li movieurl="video/demo.mp4"> <button class="objet" id="play" > </button> </li>
		    <li movieurl="video/demo.mp4"> <button class="objet" id="lampe" > </button> </li>          
		    <li movieurl="video/demo.mp4"> <button class="objet" id="chaussure" > </button></li>   
		    <li movieurl="video/demo.mp4"> <button class="objet" id="cafetiere" > </button></li> 
		    <li movieurl="video/demo.mp4"> <button class="objet" id="chaise" > </button></li> 
		    <li movieurl="video/demo.mp4"> <button class="objet" id="lit" > </button></li> 
		    <li movieurl="video/demo.mp4"> <button class="objet" id="ombrelle" > </button></li> 
		     <li movieurl="video/demo.mp4"> <button class="objet" id="phono" > </button></li>    
		</ul>

	</body>

	<script>

		$(function() {
		    $("#playlist li").on("click", function() {
		        $("#videoarea").attr({
		            "src": $(this).attr("movieurl"),
		            "poster": "",
		            "autoplay": "autoplay"
		        })
		    })
		    $("#videoarea").attr({
		        "src": $("#playlist li").eq(0).attr("movieurl"),
		        "poster": $("#playlist li").eq(0).attr("moviesposter")
		    })
		});
	</script>


</html>