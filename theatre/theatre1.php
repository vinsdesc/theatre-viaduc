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
		
		<?php include 'video/video.php';?>
		<?php include 'audio/audio.php';?>
		
		<button type="button" id="play" class="btn btn-secondary" onclick="playPause()">play</button>

	</body>
		<script>

		//video cachée au démarage, theatre1.php
			$("video").hide();
			$(".objet").click(function(){
		    $("video").show();
			});
		//la fenetre video disparait lorsqu'il y a un bouton sonore
		$(".chandelier_toggle").click(function(){
		    $("video").hide();
		});
		$(".cle_toggle").click(function(){
		    $("video").hide();
		});
		$(".chaussure_toggle").click(function(){
		    $("video").hide();
		});
		</script>
		<script type= "text/javascript" src="video/video1.js"></script>
</html>