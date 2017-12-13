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
<title><?php echo $equipe->nom_equipe; ?>VBC Val-de-ruz Sport</title>
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
   <!--/start-banner-->
  <div class="banner">
	       <div class="banner-inner">
						<div class="callbacks_container">
						<ul class="rslides callbacks callbacks1" id="slider4">
							<li class="callbacks1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								<h3>FORMATION, LE MEILLEUR DE SOI </h3>
								<p>A partir de 7ans, fille ou garçon notre club t'accueille</p>
								</div>
							</li>
							<li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								<h3>CHAMPIONNATS </h3>
								 <p>Participation aux championnats cantonaux et nationaux</p>
								</div>
							</li>
							<li class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
								<div class="banner-info">
								<h3>MAIS AVANT TOUT...</h3>
								<p>Le plasir reste notre motivation principale</p>
								</div>
							</li>
						</ul>
						</div>
						<!--banner-Slider-->
						<script src="js/responsiveslides.min.js"></script>
						 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
						auto: true,
						pager: true,
						nav:false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						  $('.events').append("<li>before event fired.</li>");
						},
						after: function () {
						  $('.events').append("<li>after event fired.</li>");
						}
						  });

						});
						  </script>
				</div>
  </div>
    <!--//end-banner-->
     <!--/start-main-->
          <div class="main-content">
		      <!--/soccer-inner-->
	                 <div class="soccer-inner">
					  <!--/soccer-left-part-->
					  <div class="col-md-8 soccer-left-part">


                     <!--/Accueil-->
					      <div class="about">
						      <div class="sap_tabs">
								<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
									  <ul class="resp-tabs-list">
										  <li class="resp-tab-item grid1" aria-controls="tab_item-0" role="tab"><span>LE CLUB</span></li>
										  <li class="resp-tab-item grid2" aria-controls="tab_item-1" role="tab"><span>NOS EQUIPES</span></li>
										  <li class="resp-tab-item grid3" aria-controls="tab_item-2" role="tab"><span>LES ENTRAINEMENTS</span></li>
									  </ul>
										<div class="resp-tabs-container">
											<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
												<div class="facts">
												     <div class="tab_list">
                             <table><tr><td>
                            <div class="single-bottom">
                            <h1>Nos valeurs</h1>
                            <p>Par leur adhésion au VBC Val-de-ruz sport, les joueurs, parents, entraîneurs, officiels et dirigeants du club s’engagent à respecter les valeur, créant ainsi des conditions idéales pour faire de la pratique du volley-balle, un lieu privilégié d’épanouissement et d’intégration.
                            </p>
                            <h1>Plaisir</h1>
                            <p>Le volley-ball est avant tout un jeu. Il doit être une source d’expériences constructives, un lieu où célébrer la joie d’être ensemble et d’appartenir à une collectivité qui se caractérise par des valeurs positives.
                            </p>
                            <h1>Respect</h1>
                            <p>Faire preuve d’esprit sportif, c’est respecter l’ensemble des acteurs qui permettent le déroulement de l’activité sportive ainsi que soi-même, par l’adoption d’un comportement irréprochable aussi bien dans la victoire que dans la défaite.
                            </p>
                            <h1>Loyauté</h1>
                            <p>Il n’y a pas de sport sans règles. Leur respect est la condition indispensable pour assurer l’égalité des chances dans une compétition. Être loyal, ce n’est pas seulement accepter les décisions arbitrales, mais aussi être animé par un état d’esprit conforme à la beauté du jeu.
                            </p>
                            <h1>Solidarité</h1>
                            <p>L’esprit d’équipe est un élément essentiel du sport d'équipe. Savoir placer l’intérêt collectif avant la performance individuelle est un indice de générosité, de compréhension mutuelle et d‘humilité, autant de valeurs permettant de savourer pleinement les succès et accepter sans regrets les revers.
                            </p>
                            <h1>Engagement</h1>
                            <p>L’activité sportive incite à développer la force de volonté et le goût de l’effort. La confrontation avec autrui n’est pas un but en soi, mais l’occasion de mieux se connaître et s’améliorer.
                            </p>
                          </td></tr></table>
                         </div>
												</div>

											</div>
											<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
												<div class="facts">
												    <div class="tab_list">
														 <table>
																<thead>
																<tr>
																	<th class="one">Equipe</th>
																	<th class="one">Catégorie</th>
																</tr>
																</thead>
																<tbody>
                                <?php
                                foreach ($equipe as $uneequipe){
                                    echo '<tr>';
                                    echo '	<td class="one">'. $uneequipe->nom_equipe .'</td>';
                                    echo '	<td class="one">'. $uneequipe->categorie .'</td>';
                                    echo '</tr>';
                                    }
																?>
																</tbody>
															</table>
													  </div>
											         </div>
												</div>
											<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
												<div class="facts">
												    <div class="tab_list">
														 <table>
																<thead>
																<tr>
																	<th class="one">Jour</th>
																	<th class="one">Horaire</th>
																	<th class="one">Lieu</th>
																	<th class="one">Catégorie</th>
																</tr>
																</thead>
																<tbody>
																<tr>
																	<td class="one">Lundi</td>
																	<td class="one">18h00-19h15</td>
																	<td class="one">La Fontennlle (ancienne)</td>
																	<td class="one">M13 garçons (jusqu'à 11ans)</td>

																</tr>
																<tr>
																	<td class="one">Lundi</td>
																	<td class="one">20h00-22h00</td>
																	<td class="one">La Fontenelle</td>
																	<td class="one">Ligue Féminine</td>

																</tr>
																<tr>
																	<td class="one">Lundi</td>
																	<td class="one">20h00-22h00</td>
																	<td class="one">La Fontenelle (ancienne)</td>
																	<td class="one">Loisirs mixte</td>

																</tr>
																<tr>
																	<td class="one">Lundi</td>
																	<td class="one">18h00-20h00</td>
																	<td class="one">La Fontenelle (ancienne)</td>
																	<td class="one">M15 filles (jusqu'à 13ans)</td>
																</tr>
																<tr>
																	<td class="one">Mercredi</td>
																	<td class="one">13h25-14h35</td>
																	<td class="one">La Rebatte</td>
																	<td class="one">Kids et M13 (jusqu'à 11ans)</td>
																</tr>
																<tr>
																	<td class="one">Mercredi</td>
																	<td class="one">19h45-21h30</td>
																	<td class="one">La Fontenelle (ancienne)</td>
																	<td class="one">M15 et M17 garçons (jusqu'à 15ans)</td>
																</tr>
																<tr>
																	<td class="one">Mercredi</td>
																	<td class="one">20h00-22h00</td>
																	<td class="one">La Fontenelle</td>
																	<td class="one">Ligue féminine</td>
																</tr>
																<tr>
																	<td class="one">Jeudi</td>
																	<td class="one">19h00-20h45</td>
																	<td class="one">Fontaines (Collège)</td>
																	<td class="one">M17 filles (jusqu'à 15ans)</td>
																</tr>
																<tr>
																	<td class="one">Jeudi</td>
																	<td class="one">20h30-22h00</td>
																	<td class="one">Fontaines (Collège)</td>
																	<td class="one">M19/3ème ligue</td>
																</tr>
																</tbody>
															</table>
													  </div>
												</div>
											</div>
										 <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
											<script type="text/javascript">
												$(document).ready(function () {
													$('#horizontalTab').easyResponsiveTabs({
														type: 'default', //Types: default, vertical, accordion
														width: 'auto', //auto or any width like 600px
														fit: true   // 100% fit in a container
													});
												});
											   </script>
						                    </div>
					                   </div>
								 </div>
							</div>
							   <!--//accueil-->


					 </div>
					<!--//soccer-left-part-->
					<!--/soccer-right-part-->
						<div class="col-md-4 soccer-right-part">


										<!--connected-->
										<div class="top-news">
											<h4 class="side">STAY CONNECTED</h4>
											<div class="top-inner">
												<div class="c5-element-facebook"><a href="https://www.facebook.com/groups/vbc.vdr/" target="blank"><span class="icon"></span><span class="text">Suivez-nous...</span></a></div>
											</div>
										  </div>
										<!--//connected-->



										<!--agenda/Calendar-->
										<div class="top-news">
											<h4 class="side">Calendrier régional</h4>
											<div class="top-inner">
												<p>Championnat régionaux</p>
												<div class="c5-element-facebook">
													<a class="btn btn-block" href="http://svrn.ch/indoor/championnat-regional" target="blank"> <span class="glyphicon glyphicon-info-sign"></span><span class="text"> SVRN</span></a>
												</div>
											</div>
											<h4 class="side">Agenda du club</h4>
											<div class="top-inner">
												<p>Prêtez attention à la catégorie !</br>
													F-M15 signifie : filles M15 .</br>
													M-M17 : garçons M17 </br>
												</p>
												<iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=q5k0bfnlcda1grptie8tg0g68c%40group.calendar.google.com&amp;color=%23875509&amp;ctz=Europe%2FZurich"
												style=" border:solid 1px #777 " width="300" height="300" frameborder="0" scrolling="no">
												</iframe>
											</div>
										  </div>
										  	<!--//agenda/Calendar-->



                                        <!--/top-news-->
                                                 <div class="top-news">
                                                    <?php
                                                    $news=array();
                                                    if (file_exists("news/news.csv"))
                                                    {
                                                        if (($handle = fopen("news/news.csv", "r")) !== FALSE) {
                                                          while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                                                            $news[$data[0]]=$data[1];
                                                          }
                                                          fclose($handle);
                                                        }
                                                        $news = array_reverse($news);
                                                    }
                                                    ?>
                                                    <h4 class="side">News</h4>
                                                    <div class="top-inner">
                                                    <?php
                                                    //$files = scandir('news');
                                                    foreach ($news as $key => $value)
                                                    {
                                                        if(file_exists('news/'.$key))
                                                        {
                                                           echo '<div class="top-text">
                                                                        <img src="news/'.$key.'" class="img-responsive img-rounded" alt=""/>
                                                                        <p>'.$value.'</p><br/><br/>
                                                                </div>';
                                                        }
                                                        else
                                                        {
                                                           echo '<div class="top-text">
                                                                        <p>'.$value.'</p><br/><br/>
                                                                </div>';
                                                        }
                                                    }
                                                    ?>

                                                    </div>
                                                </div>
					<!--//top-news-->
                                                 <img src="images/logo-noir-graduation.jpg" class="img-responsive img-circle" alt="Logo du club">

		            </div>
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
