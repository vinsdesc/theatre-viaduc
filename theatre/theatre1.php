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
		    	<button   class="objet chandelier_toggle" id="chandelier" > </button> 
				<p style="display: none" class="objet chandelier_toggle text_toggle">lalalaalal</p>
		    </li>
		    <li movieurl="video/demo.mp4"> 
		    	<button   class="objet lampe_toggle" id="cle" ></button>
		    	<p style="display: none" class="objet cle_toggle text_toggle">lalalaalal</p>
		    </li>          
		    <li movieurl="video/demo.mp4"> 
		    	<button   class="objet chaussure_toggle" id="chaussure" > </button>
		    	<p style="display: none" class="objet chaussure_toggle text_toggle">lalalaalal</p>
		    </li>   
		    <li movieurl="video/demo.mp4"> 
		    	<button   class="objet cafetiere_toggle" id="cafetiere" > </button>
		    	<p style="display: none" class="objet cafetiere_toggle text_toggle">lalalaalal</p>
		    </li> 
		    <li movieurl="video/demo.mp4"> 
		    	<button   class="objet chaise_toggle" id="chaise" > </button>
		    	<p style="display: none" class="objet chaise_toggle text_toggle">lalalaalal</p>
		    </li> 
		    <li movieurl="video/demo.mp4"> 
		    	<button   class="objet ombrelle_toggle" id="ombrelle" > </button>
		    	<p style="display: none" class="objet ombrelle_toggle text_toggle">lalalaalal</p>
		    </li> 
		    <li movieurl="video/demo.mp4"> 
		    	<button  class="objet phono_toggle" id="phono" > </button>
		    	<p style="display: none" class="objet phono_toggle text_toggle">lalalaalal</p>
		    </li>    
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