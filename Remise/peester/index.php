<?php

$config = array();




$config['email']= 'darkside-mg@hotmail.com';

$config['sujet']= "Un message du formulaire de Peester";
$config['page_mail']= 'index.php';
// Messages d'erreur
$config['no_surname']="Vous avez oublié votre prénom";
$config['no_name']="Vous avez oublié votre nom";
$config['no_email']="Vous avez oublié votre adresse email";
$config['wrong_email']="Vous avez fait une erreur";
$config['no_message']= "Vous avez oublié votre message";


$errors= array();

if(isset($_POST) && count($_POST)>0){

	if(!strpos($_SERVER['HTTP_REFERER'],$_SERVER['HTTP_HOST'])){
		// si la requête ne vient pas de ce serveur, l'interrompre, quelqu'un tente de l'utiliser pour envoyer du spam.
		die("you should'nt be here.");
	}
	
	$prenom = trim($_POST['prenom']);
	$nom = trim($_POST['nom']);
	$email = trim($_POST['email']);
	$message = trim($_POST['message']);


	if(empty($prenom)){
		// Le prénom a-t-il bien été introduit?
		$errors[]=  $config['no_surname'];
	}
	
	if(empty($nom)){
		// Le nom a-t-il bien été introduit?
		$errors[]=  $config['no_name'];
	}

	if(empty($message)){
		// Le message a-t-il bien été introduit?
		$errors[]= $config['no_message'];
	}

	if(empty($email)){
		// L'adresse email a-t-elle bien été encodée?
		$errors[]= $config['no_email'];
	}

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		// l'adresse email est-elle valide?
		$errors[]= $config['wrong_email'];
	}



	if(count($errors)<1){

		$message= "$prenom $nom ($email) a écrit: \n\r$message";
		
		foreach ($_POST as $k=>$v){
			if (!in_array($k, array('prenom','nom','email','message'))){
			if(is_array($v)){
				$message.="\n\r$k = ".implode(',', $v);
			}else{
				$message.="\n\r$k = $v";
			}
			}
		}

		$message = wordwrap($message, 70, "\r\n");
		// send the email

		mail($config['email'], $config['sujet'], $message);
		
		header("Location: ".$config['page_mail']);
		
		exit;
	}
}

?>


<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Peester</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">

		<link rel="shortcut icon" href="img/favicon.ico">
		<link rel="icon" type="image/png" href="img/favicon.png">
	</head>

	<body>

		<header>
		<nav id="menu">
				<h1 id="logo"><a href="#presentation">Peester</a></h1>
				<!--Modifier en index.php-->
				<ul>
					<li><a href="#video">Vidéo</a></li>
					<li><a href="#toilette">Toilette</a></li>
					<li><a href="#appli">Application</a></li>
					<li><a href="#concepteurs">Concepteurs</a></li>
			</nav>
		</header><!-- /header -->
	
		<div id="container">
		
			
			
			<section id="presentation">
				<div class="colonne-gauche">
					<img src="img/wc-presentation.png" id="wc-presentation" alt="Schéma d'une toilette" />
				</div><!--end colonne-gauche-->
				<div class="colonne-droite">
					<h2>L'innovation s'invite dans vos toilettes.</h2>
					<p>Peester est une nouvelle gamme de toilettes. Grâce à ses capteurs, cette toilette intelligente vous donnera des informations importantes sur votre santé telles que votre taux de sucre, votre alcoolémie, et bien d’autres.</p>
					
					<a href="app/index.html" class="bouton-appli">Télécharger l'application</a>
				</div><!--colonne-droite-->
			</section>
			
			<section id="video">
				<video controls>
					<source src="video/peester.mp4" type="video/mp4">
					<source src="video/peester.webm" type="video/webm">
					<source src="video/peester.ogv" type="video/ogg">
					Votre navigateur ne sait pas lire votre video.
				</video>
			</section>
			
			<section id="toilette">
			 <div class="bloc">
			 </div><!--end bloc-->
			 
			 <div class="bloc">
			 	<h2>Une expertise à domicile</h2>
			 	<p>Plus besoin de prendre rendez-vous au cabinet, de vous y déplacer, de patienter avant d’aller aux toilettes avec le bocal d’analyses et d’attendre les résultats. Avec Peester, le cabinet se trouve chez vous et vous recevrez vos résultats en quelques minutes.</p>
			 </div><!--end bloc-->
			 
			 <div class="bloc">
			 </div><!--end bloc-->
			 
			 <div class="bloc">
			 	<h2>Une cuvette connectée</h2>
			 	<p>Un simple passage de votre smartphone devant la borne permet de vous connecter via <abbr title="Near Field Communication">NFC</abbr> à votre profil. Celle-ci vous enverra en quelques minutes vos résultats d’analyses après l’acte accompli. La borne vous offre également le choix d’intensité de la chasse.</p>
			 </div><!--end bloc-->
			 
			 <div class="bloc">
			 </div><!--end bloc-->
			 
			 <div class="bloc">
			 	<h2>Un dispositif de pointe</h2>
			 	<p>La cuvette dispose d’un clapet qui s’ouvre à la connexion de votre profil. Lorsque vous urinez, une partie est réceptionnée dans un récipient intégré qui est doté d’une dizaine de capteurs, chacun ayant son rôle. Lorsque l’analyse est terminée et envoyée, le récipient est vidé et nettoyé à l’eau oxygênée.</p>
			 </div><!--end bloc-->
			 
			 <div class="bloc">
			 </div><!--end bloc-->
			 
			 <div class="bloc">
			 	<h2>Une multitude d’analyses</h2>
			 	<p>Peester vous envoie les analyses de protéines, de calcium, de glucose, de sodium et de potassium pour surveiller votre alimentation et les analyses d’hémoglobine, d’urée, de créatine, d’êthanol et d’albumine pour veiller à votre santé. Il vous indiquera également si vous êtes enceinte grâce à l’analyse d’HCG.</p>
			 </div><!--end bloc-->
			 
			 <div class="bloc">
			 </div><!--end bloc-->
			</section>
				
			<section id="appli">

				<div class="etapes-appli">
					<div class="colonne-gauche">
						<h2>Accès à vos analyses</h2>
						<p>En un coup d’œil, vous avez un aperçu évolutif de votre état de santé et vous avez la possibilité d’afficher les détails concernant chacun de vos passages sous forme de graphiques ou de listes. Vous serez conseillés en cas de manque ou d’excès et avertis en cas de grossesse.</p>
					</div><!--end colonne-gauche-->
					<div class="colonne-droite">
						<img src="img/appli-analyse.png" alt="Screenshoot de l'application" />
					</div><!--end colonne-droite-->
				</div><!--end etapes-appli-->
				
				<div class="etapes-appli">
					<div class="colonne-gauche">
						<h2>Conseils nutritionnels adaptés</h2>
						<p>Si vous avez un taux anormalement élevé ou trop bas dans l’une des sections d’analyses, vous recevrez une suggestion alimentaire santé qui vous aidera à le réguler. Grâce à ce suivi régulier, nous allons pouvoir détecter à temps toute altération de votre santé.</p>
					</div><!--end colonne-gauche-->
					<div class="colonne-droite">
						<img src="img/appli-conseil.png" alt="Screenshoot de l'application" />
					</div><!--end colonne-droite-->
				</div><!--end etapes-appli-->
				
				<div class="etapes-appli">
					<div class="colonne-gauche">
						<h2>En contact avec votre médecin</h2>
						<p>En cas d’anomalies détectées, le médecin traitant peut être mis au courant de votre dernière analyse en lui transférant vos statistiques en un clic. Vous avez aussi la possibilité d’annoter vos statistiques pour préciser les raisons des irrégularités.</p>
					</div><!--end colonne-gauche-->
					<div class="colonne-droite">
						<img src="img/appli-medecin.png" alt="Screenshoot de l'application" />
					</div><!--end colonne-droite-->
				</div><!--end etapes-appli-->
				
				<h2 class="titre-iframe">Testez notre application</h2>
				<iframe src="app/"></iframe>
			</section>
			
			<section id="concepteurs">
				<h2>Concepteurs</h2>
				<ul id="team">
					<li>
						<a href="http://twitter.com/desallev" target="_blank">
							<figure>
								<img src="img/profil-desalle.jpg" alt="Photo de Vincent de Salle" />
								<figcaption>
									<strong>Vincent de Salle</strong>
									<span>@desallev</span>
								</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="http://twitter.com/DarksideMG" target="_blank">
							<figure>
								<img src="img/profil-godefroid.jpg" alt="Photo de Mathieu Godefroid" />
								<figcaption>
									<strong>Mathieu Godefroid</strong>
									<span>@DarksideMG</span>
								</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="http://twitter.com/rhaqqazi" target="_blank">
							<figure>
								<img src="img/profil-haq-qazi.jpg" alt="Photo de Raza Haq Qazi" />
								<figcaption>
									<strong>Raza Haq Qazi</strong>
									<span>@rhaqqazi</span>
								</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="http://twitter.com/ThsKINGperso" target="_blank">
							<figure>
								<img src="img/profil-kingunia.jpg" alt="Photo de Thomas Kingunia" />
								<figcaption>
									<strong>Thomas Kingunia</strong>
									<span>@ThsKINGperso</span>
								</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="http://twitter.com/CicMateus" target="_blank">
							<figure>
								<img src="img/profil-mateus.jpg" alt="Photo de Cindy Mateus" />
								<figcaption>
									<strong>Cindy Mateus</strong>
									<span>@CicMateus</span>
								</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="http://twitter.com/fast_ef" target="_blank">
							<figure>
								<img src="img/profil-rossi.jpg" alt="Photo de Stéphano Rossi" />
								<figcaption>
									<strong>Stefano Rossi</strong>
									<span>@fast_ef</span>
								</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="http://twitter.com/Frei2505" target="_blank">
							<figure>
								<img src="img/profil-troye.jpg" alt="Photo de Sophie Troye" />
								<figcaption>
									<strong>Sophie Troye</strong>
									<span>@Frei2505</span>
								</figcaption>
							</figure>
						</a>
					</li>
				</ul>
			</section>
			
			<footer>
				<h3>Notre gamme de cuvettes vous intéresse? <span>Contactez-nous pour plus de renseignements.</span></h3>
				 <form action="index.php"  method="post">
				 	<input type="text" name="prenom" id="prenom" value="prenom" placeholder="Votre prénom">
				 	<input type="text" name="nom" id="nom" value="nom" placeholder="Votre nom">
				 	<input type="email" name="email" id="email" value="email " placeholder="Votre adresse e-mail">
				 	<textarea name="message" id="message" placeholder="Ecrivez votre message"></textarea>
				 	<input type="submit" name="submit" value"Envoyer">
				 </form>
				 
				 <div id="info-footer">
					 <span>©Peester 2014 - Crédits : 
					 	<a href="http://www.istockphoto.com/" target="_blank">IStock</a> - 
					 	<a href="http://tympanus.net/codrops/" target="_blank">Codrops</a>
					 </span>
					 
				 </div>
			</footer>
			
			
		
		</div><!--end container -->

		<script src="js/jquery-1.8.3.min.js"></script>
		<script src="js/scrollto.js"></script>
		<script src="js/classie.js"></script>
		<script>
		    function init() {
		        window.addEventListener('scroll', function(e){
		            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
		                shrinkOn = 200,
		                header = document.querySelector("header");
		            if (distanceY > shrinkOn) {
		                classie.add(header,"smaller");
		            } else {
		                if (classie.has(header,"smaller")) {
		                    classie.remove(header,"smaller");
		                }
		            }
		        });
		    }
		    window.onload = init();
		</script>
	</body>
</html>
