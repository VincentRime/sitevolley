<?php
    session_start();
    if (!empty($_SESSION['nom'])){
        $utilisateur = 'Utilisateur';
    }
    else {
        $utilisateur = '';
    }
?>
<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo $homeSiteDir?>index.php"><h1>VBC <span>V2R</span></h1> </a>
			</div>
			<!--/.navbar-header-->
		
			<div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
				    <li class="dropdown">
						<a href="schedule.html" class="dropdown-toggle" data-toggle="dropdown">Equipes Féminines<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo $homeSiteDir?>equipes/equipe-f1/equipe.php">F1 1ère ligue</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo $homeSiteDir?>equipes/equipe-f3-1/equipe.php">F3-1 3ème ligue</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo $homeSiteDir?>equipes/equipe-f3-2/equipe.php">F3-2 3ème ligue</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo $homeSiteDir?>equipes/equipe-fm17/equipe.php">FM17</a></li>
							<li class="divider"></li>
						</ul>
					  </li>
				    <li class="dropdown">
						<a href="<?php echo $homeSiteDir?>schedule.html" class="dropdown-toggle" data-toggle="dropdown">Equipes Masculines<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo $homeSiteDir?>equipes/equipe-mm17/equipe.php">MM17</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo $homeSiteDir?>equipes/equipe-mm15/equipe.php">MM15</a></li>
						</ul>
					  </li>
				    <li class="dropdown">
						<a href="<?php echo $homeSiteDir?>schedule.html" class="dropdown-toggle" data-toggle="dropdown">Volley jeunesse<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="divider"></li>
							<li><a href="<?php echo $homeSiteDir?>equipes/equipe-fm15-4x4/equipe.php">FM15 4x4</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo $homeSiteDir?>equipes/equipe-mm15-4x4/equipe.php">MM15 4x4</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo $homeSiteDir?>equipes/equipe-fm13-4x4/equipe.php">FM13 4x4</a></li>
							<li class="divider"></li>
							<li><a href="<?php echo $homeSiteDir?>equipes/equipe-mm13-4x4/equipe.php">MM13 4x4</a></li>
							<li class="divider"></li>
                                                        <li><a href="<?php echo $homeSiteDir?>equipes/equipe-kids/equipe.php">Kids</a></li>	
						</ul>
					  </li>
				    <li class="dropdown">
						<a href="<?php echo $homeSiteDir?>schedule.html" class="dropdown-toggle" data-toggle="dropdown">Loisirs<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo $homeSiteDir?>equipes/equipe-loisir-1/equipe.php">Loisirs 1</a></li>
						</ul>
					  </li>
					<li><a href="<?php echo $homeSiteDir?>contact.php">Contact</a></li>
                                        <li>
                                            <?php
                                            if (empty($_SESSION['nom'])){
                                            echo '<form action="include/connexion.inc.php" id="signin" class="form-inline mt-2 mt-md-0" role="form" method="post">
                                                    <span class="fa-stack fa-lg">
                                                        <i class="fa-reverse fa-lock fa-stack-2x"></i>
                                                    </span>

                                                    <input id="email" type="email" class="form-control" name="email" value="" placeholder="Email Address">                                        

                                                    <span class="fa-stack fa-lg">
                                                        <i class="fa-reverse fa-lock fa-stack-2x"></i>
                                                    </span>

                                                    <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password">                                        

                                                    <button type="submit" class="btn btn-primary">Login</button>
                                                </form>';
                                       }
                                            else {
                                                echo    '<form action="deco.php" id="signin" class="form-inline mt-2 mt-md-0" role="form" method="post">                                                    
                                                        <button type="submit" class="btn btn-primary">deconnexion</button>
                                                        </form>';
                                            }
                                            ?>
                                        </li>
				</ul>
			</div>
			<!--/.navbar-collapse-->
	 <!--/.navbar-->
	</nav>