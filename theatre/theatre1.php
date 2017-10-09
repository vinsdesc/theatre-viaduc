<!DOCTYPE html>
<html>

	<?php include 'head.php';?>
		

	<body>
		<?php include 'accueil.php';?>
			
		<video id="videoarea" poster="" src=""></video>

		<ul id="playlist">
		    <li movieurl="video/demo.mp4"> <button   class="objet" id="chandelier" class="play" > </button> </li>
		    <li movieurl="video/demo.mp4"> <button   class="objet" id="lampe" class="play" > </button> </li>          
		    <li movieurl="video/demo.mp4"> <button   class="objet" id="chaussure" class="play" > </button></li>   
		    <li movieurl="video/demo.mp4"> <button   class="objet" id="cafetiere" class="play" > </button></li> 
		    <li movieurl="video/demo.mp4"> <button   class="objet" id="chaise" class="play" > </button></li> 
		    <li movieurl="video/demo.mp4"> <button   class="objet" id="ombrelle" class="play" > </button></li> 
		     <li movieurl="video/demo.mp4"> <button  class="objet" id="phono" class="play" > </button></li>    
		</ul>
		<button onclick="playPause()">Play/Pause</button> 
	</body>
			<script>
				var myVideo = document.getElementById("videoarea"); 

			function playPause() { 
			    if (myVideo.paused) 
			        myVideo.play(); 
			    else 
			        myVideo.pause(); 
			} 
/*			//video cachée au démarage, theatre1.php
			$("video").hide();
			$(".objet").click(function(){
		    $("video").show();
			});*/
		/*la fenetre video disparait lorsqu'il y a un bouton sonore
		$("#lit").click(function(){
		    $("video").hide();
		});*/
		</script>
		<script type= "text/javascript" src="video1.js"></script>
</html>