<?php
    require_once 'include/inc.dtbase';
    $cnn = getConnexion('sitevolley');

    // récuperer les artciles et les catégories
    $stmt = $cnn->prepare('SELECT nom_equipe,categorie FROM tblequipe');
    $stmt->execute();

    //Lire chaque enregistrement et placer  dans le tableau de produis
    $equipe = $stmt->fetchALL(PDO::FETCH_OBJ);

?>
<!DOCTYPE HTML>
<html>
<head>
<title>VBC Val-de-ruz Sport</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="VBC Val-de-ruz sport" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel="stylesheet" type="text/css">
<!-- Custom Theme files -->
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<script src="js/jquery.min.js"> </script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
</head>
<body>
 <div class="container">
  <div class="header" id="home">
	 <div class="subhead white">
             <?php
             // include navigation bar
                $homeSiteDir = './';
                include_once $homeSiteDir.'include/menu.php';
             ?>
  </div>
 </div>
    <!--/start-main-->
    <div class="main-content">
        <!--/soccer-inner-->
        <div class="soccer-inner">
            <!--/soccer-left-part-->
            <div class="col-md-8 soccer-left-part">
                <!--/Accueil-->
                <div class="about">
                    <form method="POST" action="include/connexion.inc.php" class="form">
                        <label for="username" >E-Mail : </label>
                        <input class="form-control" type="text" name="username" id="username" placeholder=""/><br />

                        <label for="password" >Mot de passe : </label>
                        <input class="form-control" type="password" name="password" id="password" placeholder=""/><br />

                        <input class="btn btn-default" type="submit" name="submit" value="Connexion" >
                    </form>
                </div>
            </div>
	</div>
        <!--//accueil-->
    </div>
    <!--//soccer-left-part-->
    <!--/soccer-right-part-->
    <!--//soccer-right-part-->
    <div class="clearfix"> </div>
    </div>

		</div>
		<!--//soccer-inner-->
	 </div>
	<!--/start-footer-section-->
			<div class="footer-section">
			   <div class="container">
					<div class="footer-grids">

					<div class="clearfix"></div>
					</div>
				</div>
			</div>
	<!--//end-footer-section-->
			<!--/start-copyright-section-->
				<div class="copyright">
						  <p>&copy; VBC Val-de-ruz Sport. All Rights Reserved | Design by Psi </p>
					</div>


				<!--start-smoth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear'
								 		};
										*/

										$().UItoTop({ easingType: 'easeOutQuart' });

									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


<!--JS-->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

<!--//JS-->

</body>
</html>
