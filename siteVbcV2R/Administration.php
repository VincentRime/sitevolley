<?php
    require_once 'include/inc.dtbase';
    require_once 'modifier.php';

    $cnn = getConnexion('sitevolley');

    // récuperer les équipes
    $stmt = $cnn->prepare('SELECT * FROM tblequipe');
    $stmt->execute();

    //récuperer les joueurs
    $stmt2 = $cnn->prepare('SELECT * FROM tbljoueur');
    $stmt2->execute();

    //récuperer les admins
    $stmt3 = $cnn->prepare('SELECT * FROM tbladmin');
    $stmt3->execute();

    //récuperer Galerie
    $stmt4 = $cnn->prepare('SELECT * FROM galerie');
    $stmt4->execute();

    //récuperer les news
    $stmt5 = $cnn->prepare('SELECT * FROM news');
    $stmt5->execute();

    //Lire chaque enregistrement
    $equipe = $stmt->fetchALL(PDO::FETCH_OBJ);
    $joueur = $stmt2->fetchALL(PDO::FETCH_OBJ);
    $tbladmin = $stmt3->fetchALL(PDO::FETCH_OBJ);
    $galerie = $stmt4->fetchALL(PDO::FETCH_OBJ);
    $news = $stmt5->fetchALL(PDO::FETCH_OBJ);
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


  <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="tabbable" id="tabs-37998">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#panel-405136" data-toggle="tab">Les équipes</a>
					</li>
          <li>
						<a href="#panel-999425" data-toggle="tab">Joueur</a>
					</li>
          <li>
						<a href="#panel-999426" data-toggle="tab">Utilisateur</a>
					</li>
          <li>
						<a href="#panel-999423" data-toggle="tab">Galerie</a>
					</li>
          <li>
						<a href="#panel-999424" data-toggle="tab">News</a>
					</li>

				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="panel-405136">
                                            <div class="container-fluid">

                  <div class="row">
                      <div class="col-md-12">
                          <table class="table table-bordered">
                              <thead>
                                  <tr>
                                      <th>Nom équipe</th>
                                      <th>catégorie</th>
                                      <th>Modifier - Supprimer</th>
                                  </tr>
                              </thead>
                              <tbody>
                              <?php
                                  for ($i = 0 ; $i < count($equipe); $i++){

                                  echo '<tr class="active">';
                                  echo '	<td class="one">'. $equipe[$i]->nom_equipe .'</td>';
                                  echo '	<td class="one">'. $equipe[$i]->categorie .'</td>';


                               //   echo '<td class="one"> <input id="email" type="email" class="form-control" name="email" value="" placeholder="'.$equipe->numero.'"> </td>';
                                 // echo '<td class="one"> <input id="email" type="email" class="form-control" name="email" value="" placeholder="'.$equipe->nom_equipe.'"> </td>';
                                  echo '  <td class="one">
                                          <div class="container-fluid">
                                              <div class="row">
                                                  <div class="col-md-12">
                                                      <div class="btn-group">

                                                              <button>
                                                                  <a href="delete.php?numero='.$equipe[$i]->numero.'">
                                                                      <em class="glyphicon glyphicon-pencil"></em> Delete
                                                                  </a>
                                                              </button>

                                                              <button
                                                                  <a href="Modifier.php?id='.$equipe[$i]->numero.'">
                                                                      <em class="glyphicon glyphicon-pencil"></em> Modifier
                                                                  </a>
                                                              </button>

                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          </td>
                                      </tr>';
                                  }
                              ?>
                              </tbody>
                          </table>
                      </div>
                  </div>

              </div>
         </div>
       <div class="tab-pane" id="panel-999425">
              <div class="container-fluid">

                  <div class="row">
                      <div class="col-md-12">
                          <table class="table table-bordered">
                              <thead>
                                  <tr>
                                      <th>Prenom</th>
                                      <th>Nom</th>
                                      <th>Equipe</th>
                                      <th>Modifier - Supprimer</th>
                                  </tr>
                              </thead>
                              <tbody>
                              <?php
                                  for ($i = 0 ; $i < count($joueur); $i++){

                                  echo '<tr class="active">';
                                  echo '	<td class="one">'. $joueur[$i]->prenomjoueur .'</td>';
                                  echo '	<td class="one">'. $joueur[$i]->nomjoueur .'</td>';
                                  echo '	<td class="one">'. $joueur[$i]->num_equipejoueur .'</td>';


                                  //   echo '<td class="one"> <input id="email" type="email" class="form-control" name="email" value="" placeholder="'.$equipe->numero.'"> </td>';
                                  // echo '<td class="one"> <input id="email" type="email" class="form-control" name="email" value="" placeholder="'.$equipe->nom_equipe.'"> </td>';
                                  echo '  <td class="one">'
                                      . '<div class="container-fluid">
                                              <div class="row">
                                                  <div class="col-md-12">
                                                      <div class="btn-group">
                                                          <form>
                                                              <button>
                                                                  <a href="delete.php?id=<?=$joueur[$i]->numero?>
                                                                      <em class="glyphicon glyphicon-pencil"></em> Delete
                                                                  </a>
                                                              </button>

                                                              <button
                                                                  <a href="Modifier.php?id=<?=$joueur[$i]->numero?>
                                                                    <em class="glyphicon glyphicon-pencil"></em> Modifier
                                                                  </a>
                                                              </button>
                                                          </form>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div> '
                                      . '</td>';
                                  echo '</tr>';
                                  }
                              ?>
                              </tbody>
                          </table>
                      </div>
                  </div>

              </div>
           </div>

           <div class="tab-pane" id="panel-999426">
               <div class="container-fluid">

                   <div class="row">
                       <div class="col-md-12">
                           <table class="table table-bordered">
                               <thead>
                                   <tr>
                                       <th>Nom</th>
                                       <th>prenom</th>
                                       <th>mot de passe</th>
                                       <th>email</th>
                                       <th>status</th>
                                       <th>équipe gerer</th>
                                       <th>Modifier - Supprimer</th>
                                   </tr>
                               </thead>
                               <tbody>
                               <?php
                                   for ($i = 0 ; $i < count($tbladmin); $i++){

                                   echo '<tr class="active">';
                                   echo '	<td class="one">'. $tbladmin[$i]->nomadmin .'</td>';
                                   echo '	<td class="one">'. $tbladmin[$i]->prenomadmin .'</td>';
                                   echo '	<td class="one">'. $tbladmin[$i]->motdepasse .'</td>';
                                   echo '	<td class="one">'. $tbladmin[$i]->email .'</td>';
                                   echo '	<td class="one">'. $tbladmin[$i]->status .'</td>';
                                   echo '	<td class="one">'. $tbladmin[$i]->num_equipeadmin .'</td>';


                                  //   echo '<td class="one"> <input id="email" type="email" class="form-control" name="email" value="" placeholder="'.$equipe->numero.'"> </td>';
                                  // echo '<td class="one"> <input id="email" type="email" class="form-control" name="email" value="" placeholder="'.$equipe->nom_equipe.'"> </td>';
                                   echo '  <td class="one">'
                                       . '<div class="container-fluid">
                                               <div class="row">
                                                   <div class="col-md-12">
                                                       <div class="btn-group">
                                                           <form>
                                                               <button>
                                                                   <a href="delete.php?id=<?=$galerie[$i]->numero?>
                                                                       <em class="glyphicon glyphicon-pencil"></em> Delete
                                                                   </a>
                                                               </button>

                                                               <button
                                                                   <a href="Modifier.php?id=<?=galerie[$i]->numero?>
                                                                       <em class="glyphicon glyphicon-pencil"></em> Modifier
                                                                   </a>
                                                               </button>
                                                           </form>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div> '
                                       . '</td>';
                                   echo '</tr>';
                                   }
                               ?>
                               </tbody>
                           </table>
                       </div>
                   </div>

               </div>
            </div>

          <div class="tab-pane" id="panel-999423">
              <div class="container-fluid">

                  <div class="row">
                      <div class="col-md-12">
                          <table class="table table-bordered">
                              <thead>
                                  <tr>
                                      <th>Titre</th>
                                      <th>Lien</th>
                                      <th>equipe</th>
                                      <th>Modifier - Supprimer</th>
                                  </tr>
                              </thead>
                              <tbody>
                              <?php
                                  for ($i = 0 ; $i < count($galerie); $i++){
                                  echo '<tr class="active">';
                                  echo '	<td class="one">'. $galerie[$i]->nom .'</td>';
                                  echo '	<td class="one">'. $galerie[$i]->equipe .'</td>';
                                  echo '	<td class="one"><img style="width: auto;height: 50px;" src="data:image/jpeg;base64,'. base64_encode($galerie[$i]->lien) .'"/></td>';

                                 //   echo '<td class="one"> <input id="email" type="email" class="form-control" name="email" value="" placeholder="'.$equipe->numero.'"> </td>';
                                 // echo '<td class="one"> <input id="email" type="email" class="form-control" name="email" value="" placeholder="'.$equipe->nom_equipe.'"> </td>';
                                  echo '  <td class="one">'
                                      . '<div class="container-fluid">
                                              <div class="row">
                                                  <div class="col-md-12">
                                                      <div class="btn-group">
                                                          <form>
                                                              <button>
                                                                  <a href="delete.php?id=<?=$galerie[$i]->numero?>
                                                                      <em class="glyphicon glyphicon-pencil"></em> Delete
                                                                  </a>
                                                              </button>

                                                              <button
                                                                  <a href="Modifier.php?id=<?=galerie[$i]->numero?>
                                                                      <em class="glyphicon glyphicon-pencil"></em> Modifier
                                                                  </a>
                                                              </button>
                                                          </form>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div> '
                                      . '</td>';
                                  echo '</tr>';
                                  }
                              ?>
                              </tbody>
                          </table>
                      </div>
                  </div>

              </div>
           </div>

          <div class="tab-pane" id="panel-999424">
              <div class="container-fluid">

                  <div class="row">
                      <div class="col-md-12">
                          <table class="table table-bordered">
                              <thead>
                                  <tr>
                                      <th>Titre</th>
                                      <th>Le contenu</th>
                                      <th>date</th>
                                      <th>Modifier - Supprimer</th>
                                  </tr>
                              </thead>
                              <tbody>

                        <?php

                            for ($i = 0 ; $i < count($news); $i++){

                            echo '<tr  class="active">';
                            var_dump($_GET);

                            if (@$_GET['submit'] == $i){
                                var_dump($_GET);

                                echo '    <form method="GET" action="'. $_SERVER['PHP_SELF'] .'" class="form">';

                                echo '        <td class="one"><input class="form-control" type="text" name="titre" id="titre" placeholder="'.$news[$i]->titre.'"/><br /></td>';

                                echo '        <td class="one"><input class="form-control" type="text" name="contenu" id="contenu" placeholder="'.$news[$i]->contenu.'"/><br /></td>';

                                echo '        <td class="one"><input class="form-control" type="text" name="date" id="date" placeholder="'. $news[$i]->date .'"/><br /></td>';


                              }  else {
                                  echo '	<td class="one">'. $news[$i]->titre .'</td>';
                                  echo '	<td class="one">'. $news[$i]->contenu .'</td>';
                                  echo '	<td class="one">'. $news[$i]->date .'</td>';


                              }


                            echo '  <td class="one">'

                                . '<div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="btn-group">

                                                        <button>
                                                            <a href="delete.php?id=<?=$news[$i]->numero>&tbl=news">
                                                                <em class="glyphicon glyphicon-pencil"></em> Delete
                                                            </a>
                                                        </button>

                                                        <button>
                                                            <a href="Administration.php?id="'. $news[$i]->numero .'">
                                                                <em class="glyphicon glyphicon-pencil"></em> Modifier
                                                            </a>
                                                        </button>

                                                        <button TYPE = "Submit" name="Submit" VALUE = "">
                                                            <a href="Administration.php" >
                                                              <em class="glyphicon glyphicon-pencil"></em> Valider
                                                            </a>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div> '
                                . '</td>';
                            echo '</tr>';
                            }
                        ?>
                      </tbody>
                    </table>
                </div>
            </div>

          </div>
					</div>
				</div>
			</div>
		</div>
	</div>
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
