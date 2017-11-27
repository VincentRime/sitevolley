<!DOCTYPE HTML>
<html>
<head>
<title>VBC Val-de-ruz Sport</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="VBC Val-de-ruz sport" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo $homeSiteDir?>css/bootstrap-3.1.1.min.css" rel="stylesheet" type="text/css">
<!-- Custom Theme files -->
<link href="<?php echo $homeSiteDir?>css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $homeSiteDir?>css/style.css" rel='stylesheet' type='text/css' />	
<script src="<?php echo $homeSiteDir?>js/jquery.min.js"> </script>
<script type="text/javascript" src="<?php echo $homeSiteDir?>js/move-top.js"></script>
<script type="text/javascript" src="<?php echo $homeSiteDir?>js/easing.js"></script>
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
                include_once $homeSiteDir.'include/menu.php';
             ?>
		
  </div>
 </div>
   <!--/start-banner-->
    <div class="banner two">
       <div class="container">

          </div>
    </div>
    <!--//end-banner-->
     <!--/start-main-->
          <div class="main-content">
		      <!--/soccer-inner-->
	                 <div class="soccer-inner">
					  <!--/soccer-left-part-->
					  <div class="col-md-8 soccer-left-part">
                                                <!--/team-->
							<div class="players">
                                                            <div class="modern">
							   <h3 class="tittle">Team</h3>
                                                           <?php if (file_exists('team.jpg')){
                                                               echo '<img src="team.jpg" class="img-responsive img-rounded" alt="Logo du club"> ';
                                                           }
                                                           else
                                                           {
                                                               echo '<img src="'.$homeSiteDir.'images/team.jpg" class="img-responsive img-rounded" alt="Logo du club"> ';
                                                           }
                                                           ?>
                                                           
                                                           </div>

							</div>
                                                <!--//team-->

                                                
                                                <!--/slideshow-->
                                                
                                                	<div class="players">
							   <h3 class="tittle">Diaporama</h3>
                                                                <ul id="flexiselDemo3">
                                                                <?php
                                                                $files = scandir('slideshow');
                                                                foreach ($files as $key => $image) 
                                                                { 
                                                                   if (!is_dir($image)) 
                                                                   { 
                                                                         echo '<li>
                                                                                <div class="biseller-column">
                                                                                    <a class="lightbox" href="#one">
                                                                                        <img src="slideshow/'.$image.'" alt=""/>
                                                                                    </a> 
                                                                                    <div class="lightbox-target" id="one">
                                                                                        <img src="slideshow/'.$image.'" alt=""/>
                                                                                        <a class="lightbox-close" href="#"> </a>
                                                                                        <div class="clearfix"> </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>';
                                                                   } 
                                                                } 
                                                                ?>
                                                            </ul>
                                                        </div>
                                                
                                                	<script type="text/javascript">
							 $(window).load(function() {
								$("#flexiselDemo3").flexisel({
									visibleItems:3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems:3
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:3
										},
										tablet: { 
											changePoint:768,
											visibleItems:3
										}
									}
								});
								
							});
						   </script>
						   <script type="text/javascript" src="<?php echo $homeSiteDir?>js/jquery.flexisel.js"></script>
                                                   <!--//slideshow-->
                     

					 </div>
					<!--//soccer-left-part-->
					<!--/soccer-right-part-->
                                	<div class="col-md-4 soccer-right-part">


                                        <!--/top-news-->
                                                 <div class="top-news">
                                                    <h4 class="side">Résultats et classement</h4>
                                                    <div class="top-inner">
                                                    <?php 
                                                           echo '<div class="top-text">';
                                                           echo '<p><a target="_blank" href="'.$lienVersClassement.'">Lien vers les classements </a></p>';
                                                           echo '</div>';
                                                    ?>
                                                    </div>
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
<script type="text/javascript" src="<?php echo $homeSiteDir?>js/bootstrap-3.1.1.min.js"></script>

<!--//JS-->

</body>
</html>

