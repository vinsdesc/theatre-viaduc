<!DOCTYPE html>
<html>

	<?php include 'head.php';?>
		

	<body>
		<?php include 'accueil.php';?>
		<div class="btn-group">
	  		<button type="button" class="btn btn-primary">micro</button>
	 		<button type="button" class="btn btn-primary">recherche</button>
	  		<button type="button" id="oeil" class="btn btn-primary">oeil</button>
		</div>
		

		<video id="videoarea" poster="" src=""></video>

		<ul id="playlist">
		    <li movieurl="video/demo.mp4"> 
		    	<button   class="objet" id="chandelier" > </button> 
				<p style="display: none" id="chandelier1">lalalaalal</p>
		    </li>
		    <li movieurl="video/demo.mp4"> <button   class="objet" id="lampe" > </button> </li>          
		    <li movieurl="video/demo.mp4"> <button   class="objet" id="chaussure" > </button></li>   
		    <li movieurl="video/demo.mp4"> <button   class="objet" id="cafetiere" > </button></li> 
		    <li movieurl="video/demo.mp4"> <button   class="objet" id="chaise" > </button></li> 
		    <li movieurl="video/demo.mp4"> <button   class="objet" id="ombrelle" > </button></li> 
		    <li movieurl="video/demo.mp4"> <button  class="objet" id="phono" > </button></li>    
		</ul>
		<button type="button" id="play" class="btn btn-secondary" onclick="playPause()">play</button>

	</body>
		<script>

		//video cachée au démarage, theatre1.php
			$("video").hide();
			$(".objet").click(function(){
		    $("video").show();
			});
		/*la fenetre video disparait lorsqu'il y a un bouton sonore
		$("#lit").click(function(){
		    $("video").hide();
		});*/
		</script>
		<script type= "text/javascript" src="video1.js"></script>
</html>