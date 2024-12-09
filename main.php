<HTML>
	<HEAD>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta http-equiv="x-ua-compatible" content="ie=edge" />
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css" />
		<!-- Google Fonts Roboto -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
		<!-- MDB -->
		<link rel="stylesheet" href="assets/css/mdb.min.css" />
		<link rel="icon" type="assets/image/png" href="img/HIcons.png">
		<title class="fas fa-poll-h">Hackathon</title>
		<img class="fas fa-poll-h" alt="Favicon">
	</HEAD>


	<BODY> 

		<!--Main Navigation-->
		<header>

    	<!-- Intro settings -->
		<style>
			#intro {
				/* Margin to fix overlapping fixed navbar */
				margin-top: 0px;
			}
      #bt_small_screen{
        display : none;
      }

			@media (max-width: 991px) {
				#intro {
				/* Margin to fix overlapping fixed navbar */
				margin-top: 45px;
				}
        #bt_small_screen{
          display: block; 

          text-align: center;
      }
      #div_button{
        display: flex; 
          justify-content: center;
          align-items: center;
      }


			}
			td {
				padding-right: 25px;
			}

			.logo_organizer{
				width: 100px; /* Set the width of the div */
				height: 100px; /* Set the height of the div */
				/* overflow: hidden; Ensures the image doesn't overflow the div */
				/* position: relative; Enables positioning for the image */
				text-align:center;
			}
			.logo_organizer img {
				width: 100%; /* Makes the image fill the div horizontally */
				height: 100%; /* Makes the image fill the div vertically */
				/* position: absolute; Keeps the image positioned within the div */
				text-align:center;
			}
      .btn-custom {
            background-color: #0d6efd;;
            color: #fff;
      }
      .btn-custom:hover {
          background-color: #0d6efd;;
          display:inline-flex;
      }
      a{
          text-decoration: none;
          margin-left: 10px;
      }
      .same-height {
        height: 300px;      /* Set a uniform height */
        object-fit: cover;  /* Crop the image to fit without distortion */
        width: 100%;        /* Ensure full width within the container */
    }
    .gx-5 {
      --mdb-gutter-x: 1.5rem;
    }
		</style>


		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
			<div class="container-fluid">
				<a class="navbar-brand" rel="nofollow" href="index.php">
				<i class="fas fa-poll-h" style="font-size: 30px;"></i>
				</a>
				<button class="navbar-toggler" type="button" data-mdb-collapse-init data-mdb-target="#navbarExample01"
				aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarExample01">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item active">
						<a class="nav-link" aria-current="page" href="#hackathon">Aperçu</a>
						</li>
            
						<li class="nav-item">
						<a class="nav-link" href="#wiif" rel="nofollow">Participants</a>
						</li>
						
            <!-- <li class="nav-item">
						<a class="nav-link" href="#lieu"  rel="nofollow">Lieu</a>
						</li> -->
            <li class="nav-item">
						<a class="nav-link" href="#subjects"  rel="nofollow">Sujets</a>
						</li>
            
						<li class="nav-item">
						<a class="nav-link" href="#judges"  rel="nofollow">Superviseurs</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="#planning"  rel="nofollow">Planning</a>
						</li>
            <!-- <li class="nav-item">
						<a class="nav-link" href="#contact"  rel="nofollow">Contact</a>
						</li> -->
						<li class="nav-item">
						<a class="nav-link" href="#organizer"  rel="nofollow">Partenaires</a>
            </li>
            <li>
            <a class="btn btn-custom w-100" href="https://docs.google.com/forms/d/1yC97V1RfWNLYLdtmkFFLKDqjsX9ZoJwpasNPT5fYVgw/edit"  rel="nofollow" target="_blank">S'enregistrer</a>
            </li>
            <!-- </li>
            <a class="nav-link" href="register.php"  rel="nofollow">Register</a>
            </li> -->
					</ul>

					<ul class="navbar-nav d-flex flex-row">
						<li class="nav-item me-3 me-lg-0">
						<a class="nav-link" href="" rel="nofollow">
							<i class="fab fa-youtube"></i>
						</a>
						</li>
						<li class="nav-item me-3 me-lg-0">
						<a class="nav-link" href="" rel="nofollow">
							<i class="fab fa-facebook-f"></i>
						</a>
						</li>
						<li class="nav-item me-3 me-lg-0">
						<a class="nav-link" href="" rel="nofollow">
							<i class="fab fa-twitter"></i>
						</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
     
  		</header>

  <!--Main layout-->
  <main class="my-5" style="margin: top 10px !important;">
	<!-- <center class = " border-bottom mb-6 " style = "display-inline : block;">
			<img src="assets/img/logo3.jpg" alt="what image shows" height="300" width="300">
	</center> -->
    <div class="container mb-4" style="padding-top:45px;">
      <!--Section: News of the day-->

      <h1 class = "mb-6" style="text-align:center; margin-bottom:30px"> <strong>L'aurore de la recherche en informatique au Cameroun, première édition</strong></h1>

      <section class="border-bottom mb-4">
        <div class="row gx-5">
          <div class="col-md-6 mb-4" style="margin-top: -10px;">
            <div data-mdb-ripple-init data-mdb-ripple-color="light">
              <img src="assets/img/student.jpeg" class="img-fluid same-height" />
              <a href="#!">
                <div style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>
          <div class="col-md-6 mb-4" style="margin-top: -10px;"> 
            <!-- <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">News of the day</span> -->
            <h1 id="hackathon"><strong>Aperçu</strong></h1>
            <span style="display: block;"><i class="far fa-calendar-alt"></i> 18 Décembre, 2024 - 27 Décembre, 2024</span>
            <span style="display: block;"><i class="fas fa-map-marker-alt"></i> Bibliothèque, Département d'informatique UY1 </span>
            <span style="display: block; margin-bottom:5px;"><i class="fas fa-phone"></i> 673163762/695659451/679640734 </span>
            <p style="margin-top:0px;">
              Bienvenue au Hackathon de Yaoundé 2024, un événement innovant et collaboratif qui réunira les étudiants chercheurs passionnés pour relever des défis technologiques ambitieux.
              Lors de cet évènement, les participants travailleront en équipes pour concevoir des solutions innovantes à des problèmes réels.
            </p>
            <!--<button type="button" class="btn btn-primary" data-mdb-ripple-init>Read more</button>-->
          </div>
        </div>
      </section>

      <section class="border-bottom mb-4">
        <div class="row gx-5">
          <div class="col-md-6">
            <!-- <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">News of the day</span> -->
            <h1 id="wiif"><strong>Participants</strong></h1>
            <p class="text-muted">
              45 participants de Master 1 informatique et plus, répartis ainsi:
            </p>
            <ul>
              <li>10 de l'École national supérieur Polytechnique de Yaoundé</li>
              <li>15 du campus d'Ambam</li>
              <li>15 de l'Université de Yaoundé I (UYI)</li>
              <li>05 de l'Université de Douala</li>
            </ul>
            <p style = "color: red">
              Les participants seront organisés en équipes de 4 pour relever les défis du hackathon.
            </p>
          </div>

          <div class="col-md-6 mb-4">
            <div data-mdb-ripple-init data-mdb-ripple-color="light">
              <img src="assets/img/black_white.jpeg" class="same-height img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- <section class="border-bottom mb-4">
        <div class="row gx-5">
          <div class="col-md-6 mb-4">
            <h1 id="wiif"><strong>Participants</strong></h1>
            


            <p class="text-muted">
              45 participants au total, répartis ainsi :
            </p>
            <ul>
              <li>10 de l'École national supérieur Polytechnique de Yaoundé</li>
              <li>15 du campus d'Ambam</li>
              <li>15 de l'Université de Yaoundé I (UYI)</li>
              <li>05 de l'Université de Douala</li>
            </ul>
            <p style = "color: red">
              Les participants seront organisés en équipes de 4 pour relever les défis du hackathon.
            </p>
          </div>

          <div class="col-md-6 mb-4">
            <div data-mdb-ripple-init data-mdb-ripple-color="light">
              <img src="assets/img/student.jpeg" class="same-height img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>
        </div>
      </section> -->

      <!--Section: News of the day-->
       
	  <section>
      <div id="intro_theme" class="text-center bg-light">
        <h1 class="mb-3" id="subjects" style="text-align: left;">Sujets</h1>
      </div>


      <div id="themes_short ">
          <div class="theme-container standard-margin">
                <!--Sujet 1-->
                <div class="theme-desc medium-margin-left inline-block v-align-top">
                  <div class="large weight-700 dark">
                    <strong style="font-size: 20px; color: orange;">
                      <i class="fa-solid fa-1"></i>.&nbsp;RNN frugal et parallèle pour la détection des messages haineux. 
                    </strong>
                  </div> 
                  <div class="regular dark" style="margin-top:3px">
                    <div class="theme-small-description-box">
                      <div class="theme-full-description-box">
                        <p>
                        <strong>Resumé: </strong>Ce sujet de recherche se concentre sur deux points, la parallélisation et la frugalité dans l’apprentissage artificiel avec les réseaux de neurones récurrents.                    </p>
                        <p><strong>Tâches:</strong></p>
                        <ol>
                          <li>Effectuer une collecte de données pour les messages haineux</li>
                          <li>Faire une analyse de la consommation énergétique du modèle d’apprentissage parallèle</li>
                          <li>Proposer un modèle d’apprentissage de RNN parallèle frugal sur la base des observations réalisées</li>
                          <li>Proposer une application(Web/Mobile) exploitant ce modèle.</li>
                        </ol>
                        <p><strong>Compétences du candidat :</strong></p>
                        <ul>
                          
                          <li>  Maitrise de la programmation C ou C++ (pour la mise en place du modèle) </li>
                          <li>  Maitrise des notions de base en apprentissage artificiel.</li>
                          <li>  Aptitude à apprendre le développement mobile (pour l’intégration du modèle dans l’application mobile existante) </li>
                        </li>
                          
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>

          <div class="theme-container standard-margin mb-3">

            <!-- <div class="theme-image align-center inline-block v-align-top">
                <img src="https://uc-s.hackerearth.com/he-s3/media/sprint/tem-e-thon/3e9a4e1icons_Environment_and_sustainability.png?Expires=1733572375&amp;Signature=gDoP4SmaDRf2kTg-KAw5ktfuqDE6~itT9hoW9cSmMKh9YVFJZBaBv4QyA~GkaPcfGZNI0vtIDLzFWnyv2z3SS745Z3W0Q8v-cZG5gvrhMOqJo704wvidD2h7CvTHoXO87OYou~3oIawLApSzz~LnYImhVx4-qshK4M0c6mXgQdEdwP2rXsURBiJUZMRnh~xyFoCCmvsdDOZtzm8xwQNXqRzX2t~0ZJL0wPsLhatNGKt6ZbIQecashUAF~0qkDi0al7WWcIn6x0HUAdbt72lpyPeUQzSkyhTbr4H4-YZvyJDF4WQsh~HYJbo7Hd7gQVeLimNrmk4lm5n1JCEB5MUJPQ__&amp;Key-Pair-Id=K3QY2UWZZ9RL0H">
            </div> -->
            <div class="theme-desc medium-margin-left inline-block v-align-top">
                <div class="large weight-700 dark"><strong style="font-size: 20px; color: orange;"><i class="fa-solid fa-2"></i>.&nbsp;ML4OS : ML-based memory prefetchers</strong></h4></div>
                <div class="regular dark" style="margin-top:3px">
                    <div class="theme-small-description-box">
                        <div class="theme-full-description-box">
                            <!-- <h3><strong>Problem statement 1: Waste management optimization</strong></h3> -->
                            <p><strong>Resumé: </strong> Prefetching in the OS is a proactive memory management technique used to load data or memory pages into RAM before they are explicitly requested by a process. 
                            This reduces latency and improves system performance, as the necessary data is often already available when accessed.
                             ML has been increasingly applied to optimize prefetching strategies by predicting future memory accesses based on historical patterns. The goal os this hackathon is to replace existing heuristic-based prefetchers by an ML model.</p>
                            <p><strong>Some references:</strong></p>
                            <ol>
                            <li>TransforMAP: Transformer for Memory Access Prediction</li>
                            <li>C-MemMAP: clustering-driven compact, adaptable, and generalizable meta-LSTM models for memory access prediction.</li>
                            <li>Learning Memory Access Patterns.</li>
                            </ol>
                            <!-- <p><strong>Compétences du candidat :</strong></p>
                            <ul>
                              <li> Maitrise de la programmation C ou C++ (pour la mise en place du modèle)</li>
                              <li>Maitrise des notions de base en apprentissage artificiel.</li>
                            </ul>                             -->
                      </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>

        <div class="theme-container standard-margin mb-2">

            <!-- <div class="theme-image align-center inline-block v-align-top">
                <img src="https://uc-s.hackerearth.com/he-s3/media/sprint/tem-e-thon/3e9a4e1icons_Environment_and_sustainability.png?Expires=1733572375&amp;Signature=gDoP4SmaDRf2kTg-KAw5ktfuqDE6~itT9hoW9cSmMKh9YVFJZBaBv4QyA~GkaPcfGZNI0vtIDLzFWnyv2z3SS745Z3W0Q8v-cZG5gvrhMOqJo704wvidD2h7CvTHoXO87OYou~3oIawLApSzz~LnYImhVx4-qshK4M0c6mXgQdEdwP2rXsURBiJUZMRnh~xyFoCCmvsdDOZtzm8xwQNXqRzX2t~0ZJL0wPsLhatNGKt6ZbIQecashUAF~0qkDi0al7WWcIn6x0HUAdbt72lpyPeUQzSkyhTbr4H4-YZvyJDF4WQsh~HYJbo7Hd7gQVeLimNrmk4lm5n1JCEB5MUJPQ__&amp;Key-Pair-Id=K3QY2UWZZ9RL0H">
            </div> -->
            <div class="theme-desc medium-margin-left inline-block v-align-top">
                <div class="large weight-700 dark"><strong style="font-size: 20px; color: orange;"><i class="fa-solid fa-3"></i>.&nbsp;IAAS4Firecracker </strong></h4></div>
                <div class="regular dark" style="margin-top:3px">
                    <div class="theme-small-description-box">
                        <div class="theme-full-description-box">
                            <!-- <h3><strong>Problem statement 1: Waste management optimization</strong></h3> -->
                            <p><strong>Resumé: </strong> Un service de type IaaS (similaire à Amazon EC2) est un service en ligne permettant à un usager de créer des machines virtuelles à distance dans une structure d'hébergement appelée datacenter. 
                            L'usager peut, avec un navigateur web, utiliser une application web (que nous appelons frontal) 
                            permettant de créer des machines virtuelles, puis déployer sur ces machines virtuelles des applications pour hébeger des services en ligne (par exemple de site de e-commerce en ligne).</p>
                            <p>Dans ce hackathon, l'objectif est d'utiliser le logiciel de virtualisation Firecracker (introduit par Amazon). Firecracker est opensource et peut être facilement installé sur des ordinateur de type PC. On peut ainsi créér des machines virtuelles sur ces PC. Pour fournir le service d'allocation depuis un navigateur web, il faut développer une application web (le frontal lui même hébergé dans le datacenter). Cette application Web pourra être réalisée par adaptation d'une application web existante (par exemple Cockpit) ou bien être développée à partir de zéro.
Pour réaliser ce projet, les participants devront utiliser leurs propres PC (sous ubuntu 22.04). Ils peuvent créer un cluster de PC (leurs laptops) pour implanter le datacenter, ou bien créer sur un seul PC des machines virtuelles KVM (représentant les PC du datacenter) dans lesquelles est installé Firecracker (on fait de la virtualisation imbriquée).
Le frontal à développer devra permettre d'allouer ou supprimer des machines virtuelles, et de monitorer l'état de ces machines virtuelles (utilisation de la ressource CPU principalement).</p>
                            <p><strong>La démonstration du service IaaS implanté devra montrer:</strong></p>
                            <ol>
                            <li>Le déploiement du service sur un ensemble de machines (PC). Si on fournit un ensemble de PC sous ubuntu 22.04 
                              avec un accès root avec SSH, un script doit permettre de déployer Firecracker et le frontal.</li>

                            <li>Son utilisation pour allouer une ou plusieurs machines virtuelles, 
                              et l'installation sur ces machines virtuelles d'une application minimale 
                              (par exemple un serveur Apache incluant quelques pages Web).</li>
                            </ol>
                            <p><strong>Remarques :</strong></p>
                            
                            <ul>
                              <li>  l'installation de Firecracker est relativement simple et des tutoriaux sont disponibles en ligne</li>
                              <li>l'utilisation de Cockpit ou une autre application web existante pour le frontal n'est pas obligatoire, 
                                vous devez faire le meilleur choix entre récupération d'une application existante et développement à partir de zéro. </li>
                            </ul>

                            <p><strong>Références:</strong></p>
                            
                            <ul>
                              <li> Firecracker : <a href="https://firecracker-microvm.github.io/">https://firecracker-microvm.github.io/</a></li>
                              <li>Cockpit : <a href="https://cockpit-project.org/">https://cockpit-project.org/</a></li>
                            </ul>
                            <!-- <p><img alt="" height="4" src="https://uc.hackerearth.com/he-public-data/divider%20%283%29d6a714d.png" width="800"></p> -->
                      </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>

        <div class="theme-container standard-margin border-bottom">

            <div class="theme-desc medium-margin-left inline-block v-align-top">
                <div class="large weight-700 dark"><strong style="font-size: 20px; color: orange;"><i class="fa-solid fa-4"></i>.&nbsp; Finetuning des modèles multilingues auto supervisés pour la transcription de la parole en langue camerounaise</strong></h4></div>
                <div class="regular dark" style="margin-top:3px">
                    <div class="theme-small-description-box"> 
                        <div class="theme-full-description-box">
                            <!-- <h3><strong>Problem statement 1: Waste management optimization</strong></h3> -->
                            <p><strong>Resumé: </strong>Ce projet consiste à affiner des modèles multilingues auto supervisés pour la
transcription de la parole en langues camerounaises, permettant de convertir des
enregistrements audio en texte. L'objectif est de créer des outils efficaces pour la
documentation et la préservation des langues locales.</p>
                            <p><strong>Tâches:</strong></p>
                            <ol>
                            <li>Recherche sur les modèles multilingues existants.</li>
                            <li>Collecte de corpus de parole en langues camerounaises.</li>
                            <li>Prétraitement et nettoyage des données audio.</li>
                            <li>Finetuning des modèles pré-entraînés avec les données collectées.</li>
                            
                            <li>Évaluation de la performance des modèles.</li>
                            </ol>

                            <!-- <p><strong>Resources</strong></p>
                            <ul>
                            <li><strong><strong>Cloud platforms for data storage and processing</strong></strong>
                            <ul>
                            <li>Amazon Web Services (AWS):<a href="https://aws.amazon.com/"> AWS</a></li>
                            <li>Google Cloud Platform (GCP):<a href="https://cloud.google.com/"> Google Cloud</a></li>
                            <li>Microsoft Azure:<a href="https://azure.microsoft.com/"> Azure</a></li>
                            </ul>
                            </li>
                            <li><strong><strong>Data analytics tools</strong></strong>
                            <ul>
                            <li>Python: <a href="https://www.python.org/">Python Official Site</a></li>
                            <li>R: <a href="https://www.r-project.org/">R Project</a></li>
                            </ul>
                            </li>
                            </ul> -->
                            <!-- <p><img alt="" height="4" src="https://uc.hackerearth.com/he-public-data/divider%20%283%29d6a714d.png" width="800"></p> -->
                      </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
      </div>


      <!--Section: Content-->
	</section>

  <div  id ="div_button" class="text-center bg-light mb-4">
  <a id = "bt_small_screen" class="btn btn-custom w-50" href="https://docs.google.com/forms/d/1yC97V1RfWNLYLdtmkFFLKDqjsX9ZoJwpasNPT5fYVgw/edit"  rel="nofollow">S'enregistrer</a>
  </div>

  <section>
        <div id="intro_judges" class="text-center bg-light">
          <h2 class="mb-3" id="judges">Les Superviseurs</h2>
          <span class="mb-3" style="display: block;">Obtenez l'opportunité d'être superviser par les meilleurs et des plus brillants du domain</span>
        </div>
        
        <div class="row gx-5 standard-margin border-bottom mb-3" style="text-align:center!important;width:83%;margin: auto;">
        
            <div class="col-lg-3 col-md-12 mb-4">
              <!-- Featured image -->
              <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                <img src="assets/img/Prof_Tchana.jpeg" class="img-fluid"   height="150" width="150"/>
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <!-- Article title and description -->
              <a href="" class="text-dark">
                <h5>Alain Tchana</h5>
                <p style="font-size:14px">
                Professeur des Universités
                </p>
              </a>

            </div>
            <div class="col-lg-3 col-md-12 mb-4">
              <!-- Featured image -->
              <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                <img src="assets/img/Doc_Messi.jpeg" class="img-fluid"   height="150" width="150"/>
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>

              <!-- Article title and description -->
              <a href="" class="text-dark">
                <h5>Messi Thomas</h5>

                <p style="font-size:14px">
                Senior lecturer at University Of Yaounde I
                </p>
              </a>

              <!-- <hr /> -->
            </div>

            <div class="col-lg-3 col-md-12 mb-3">
              <!-- Featured image -->
              <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                <img src="assets/img/Dr_Paulin.png" class="img-fluid"   height="150" width="150"/>
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>

               
              <!-- Article title and description -->
              <a href="" class="text-dark">
                <h5>Paulin Melataglia</h5>

                <p style="font-size:14px">
                Senior lecturer at University Of Yaounde I
                </p>
              </a>

              <!-- <hr /> -->
            </div>

            <div class="col-lg-3 col-md-12 mb-4">
              <!-- Featured image -->
              <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                <img src="assets/img/bromberg.jpg" class="img-fluid"   height="150" width="150"/>
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>

               
              <!-- Article title and description -->
              <a href="" class="text-dark">
                <h5>David Bromberg</h5>

                <p style="font-size:14px">
                Professeur des Universités
                </p>
              </a>
            </div>
      </section>


      <section class="border-bottom mb-3" style="margin:0 auto;width:83%">
        <div id="intro_planning" class="text-center bg-light mb-4">
          <h2 class="mb-3" id="planning">Planning</h2>
          <span class="mb" style="display: block;"> <strong> <i class="far fa-calendar-alt"></i> 18 Décembre 2024 : </strong> </span> 
          <span class="mb-4" style="display: block;"> Céromonie d'ouverture et début des activités. </span>
          
          <span class="" style="display: block;"> <i class="far fa-calendar-alt"></i> 
         <strong> 27 Décembre 2024 :  </strong>
          </span>
          <span> Présentation des vainquers et remise des prix. </span>

        </div>
        <!-- <div class="row gx-5 standard-margin" style="margin: 0 auto;width: 80%;">
          <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
            <div>
              <a href="" class="text-dark">
                <h5 style="color: red;">Day 1 </h5>
                <span><strong>Saturday, Febuary 13</strong></span>
    
                <table>
                    <tr>
                      <td>Opening Ceremony</td>
                      <td>9:00 AM</td>
                    </tr>
                    <tr>
                      <td>Breakout to Design!</td>
                      <td>9:30 AM</td>
                    </tr>
                    <tr>
                      <td>Team Formation</td>
                      <td>9:30 AM</td>
                    </tr>
                    <tr>
                      <td>Ideating Good Design Solutions with Eric</td>
                      <td>10:30 AM</td>
                    </tr>
                </table>
              </a>

            </div>
          </div>

          <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
            <div>
              <a href="" class="text-dark">
                <h5 style="color: red;">Day 2</h5>
                <span><strong>Sunday, Febuary 13</strong></span>
                <table>
                    <tr>
                      <td>Opening Ceremony</td>
                      <td>9:00 AM</td>
                    </tr>
                    <tr>
                      <td>Breakout to Design!</td>
                      <td>9:30 AM</td>
                    </tr>
                    <tr>
                      <td>Team Formation</td>
                      <td>9:30 AM</td>
                    </tr>
                    <tr>
                      <td>Ideating Good Design Solutions with Eric</td>
                      <td>10:30 AM</td>
                    </tr>
                </table>
              </a>

            </div>
          </div>
        </div> -->
      </section>

      <section class="mb-3">
        <div id="intro_organizer" class="text-center bg-light" >
          <h2 class="mb-3" id="organizer">Partenaires</h2>
          <span class="mb-6" style="display: block;"> Cet événement est organisé par : </span>
        </div>
        <div class="row gx-5 standard-margin" style="margin: 0 auto;width: 70%; " >
        <center class="col-lg-3 col-md-12 mb-4 mb-lg-0">
              <!-- News block -->
              <div class="mb-4 logo_organizer" data-mdb-ripple-init data-mdb-ripple-color="light">
                <a href="https://www.liglab.fr/fr">
                  <img src="assets/img/myIcon.jpg" class="img-fluid" />
                </a>
              </div>
              <!-- News block -->
        </center>

          <center class="col-lg-3 col-md-12 mb-4 mb-lg-0">
            <!-- News block -->
            <div class="mb-4 logo_organizer" data-mdb-ripple-init data-mdb-ripple-color="light">
              <a href="https://www.liglab.fr/fr">
                 <img src="assets/img/uy1_logo.jpg" class="img-fluid" />
              </a>
            </div>
            <!-- News block -->
			</center>

          <center class="col-lg-3 col-md-12 mb-4 mb-lg-0">
            <!-- News block -->
            <div class="mb-4 logo_organizer" data-mdb-ripple-init data-mdb-ripple-color="light">
              <img src="assets/img/inria.jpg" class="img-fluid" />
               
            </div>
            <!-- News block -->
          </center>

          <center class="col-lg-3 col-md-12 mb-4 mb-lg-0">
            <!-- News block -->
            <div class="mb-4 logo_organizer" data-mdb-ripple-init data-mdb-ripple-color="light">
              <img src="assets/img/ENSPY.jpg" class="img-fluid" />   
			      </div>
            <!-- News block -->
			</center>

        </div>

        <div class="row gx-5 standard-margin" style="margin: 0 auto;width: 70%; " >
			<center class="col-lg-3 col-md-12 mb-4 mb-lg-0">
            <!-- News block -->
            <div class="mb-4 logo_organizer" data-mdb-ripple-init data-mdb-ripple-color="light">
              <a href="#">
                <img src="assets/img/logo_douala.jpeg" class="img-fluid" />
              </a>
            </div>
            <!-- News block -->
			</center>
          <center class="col-lg-3 col-md-12 mb-4 mb-lg-0">
            <!-- News block -->
            <div class="mb-4 logo_organizer" data-mdb-ripple-init data-mdb-ripple-color="light">
              <img src="assets/img/logo_Krakos.jpeg" class="img-fluid" />
               
            </div>
            <!-- News block -->
			</center>

          <center class="col-lg-3 col-md-12 mb-4 mb-lg-0">
            <!-- News block -->
            <div class="mb-4 logo_organizer" data-mdb-ripple-init data-mdb-ripple-color="light">
              <img src="assets/img/WIDE_logo.png" class="img-fluid" />
               
            </div>
            <!-- News block -->
          </center>

          <center class="col-lg-3 col-md-12 mb-4 mb-lg-0">
            <!-- News block -->
            <div class="mb-4 logo_organizer" data-mdb-ripple-init data-mdb-ripple-color="light">
              <img src="assets/img/logo-inria-main.png" class="img-fluid" />   
			      </div>
            <!-- News block -->
			</center>

        </div>


        <div class="row gx-5 standard-margin" style="margin: 0 auto;width: 70%; " >
          <center class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- News block -->
                <div class="mb-4 logo_organizer" data-mdb-ripple-init data-mdb-ripple-color="light">
                  <a href="#">
                    <img src="assets/img/estlc.jpeg" class="img-fluid" />
                  </a>
                </div>
                <!-- News block -->
          </center>
          <center class="col-lg-3 col-md-12 mb-4 mb-lg-0">
              <!-- News block -->
              <div class="mb-4 logo_organizer" data-mdb-ripple-init data-mdb-ripple-color="light">
                <img src="assets/img/LIA.jpeg" class="img-fluid" />
                
              </div>
              <!-- News block -->
          </center>
        </div>
		</section>

<!--Section: Content-->

<!-- Pagination -->
<!-- <nav class="my-4" aria-label="...">
  <ul class="pagination pagination-circle justify-content-center">
	<li class="page-item">
	  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
	</li>
	<li class="page-item"><a class="page-link" href="#">1</a></li>
	<li class="page-item active" aria-current="page">
	  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
	</li>
	<li class="page-item"><a class="page-link" href="#">3</a></li>
	<li class="page-item">
	  <a class="page-link" href="#">Next</a>
	</li>
  </ul>
</nav> -->
</div>


</main>
<!--Main layout-->


  

  <!--Footer-->
  <footer class="bg-light text-lg-start">

    <div class="text-center py-4 align-items-center">
      <a href="" class="btn btn-primary m-1" role="button" data-mdb-ripple-init
        rel="nofollow">
        <i class="fab fa-youtube"></i>
      </a>
      <a href="" class="btn btn-primary m-1" role="button" rel="nofollow" data-mdb-ripple-init
        >
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="btn btn-primary m-1" role="button" rel="nofollow" data-mdb-ripple-init
        >
        <i class="fab fa-twitter"></i>
      </a>
      <!-- <a href="#" class="btn btn-primary m-1" role="button" rel="nofollow" data-mdb-ripple-init
        target="_blank">
        <i class="fab fa-github"></i>
      </a> -->
    </div>

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2024 Copyright:
      <a class="text-dark" href="">University Of Yaounde I</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!--Footer-->
    <!-- MDB -->
    <script type="text/javascript" src="assets/js/mdb.umd.min.js"></script>
	</BODY>



</HTML>