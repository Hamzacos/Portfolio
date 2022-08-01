<?php
require_once('DbConnection.php');
$sql = 'SELECT * FROM `projet`';
$query = $db_conn->prepare($sql);
$query->execute();
$user = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>HAMZA LAQRAA</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico">  
    
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
    
    <!-- FontAwesome JS -->
    <script defer src="assets/fontawesome/js/all.js"></script>
    
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">  
    
    <!-- github calendar css -->
    <link rel="stylesheet" href="assets/plugins/github-calendar/dist/github-calendar-responsive.css">
    <!-- github activity css -->  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/2.0.2/octicons.min.css">  
    <link rel="stylesheet" href="assets/plugins/github-activity/src/github-activity.css">

    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    
</head> 

<body>
    <!-- ******HEADER****** --> 
    <header class="header">
        <div class="container">     
	        <div class="row align-items-center">
			    <div class="col">         
		            <img   width="150px" height="150px" class=" profile-image rounded-circle" src="assets/images/profile.JPG" alt="profile image" />
		            <div class="profile-content">
		                <h1 class="name">Hamza LaQraa</h1>
		                <h2 class="desc">Développeur d'applications Web</h2>   
		                <ul class="social list-inline">
		                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
		                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/hamza-laqraa-a55b59175/"><i class="fab fa-linkedin-in"></i></a></li>
		                    <li class="list-inline-item"><a href="https://github.com/Hamzacos/Hamzacos"><i class="fab fa-github-alt"></i></a></li>    
		                    <li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow"></i></a></li>   
		                    <li class="list-inline-item last-item"><a href="#"><i class="fab fa-codepen"></i></a></li>                
		                </ul> 
		            </div><!--//profile-->
			    </div><!--//col-->
	            <div class="col-12 col-md-auto">
		            <div class="dark-mode-switch d-flex">
						<div class="form-check form-switch mx-auto mx-md-0">
							<input type="checkbox" class="form-check-input me-2" id="darkSwitch" />
							<label class="custom-control-label" for="darkSwitch">Dark Mode</label>
						</div>
			        </div><!--//dark-mode-switch-->
	                <a class="btn btn-cta-primary" href="Contacte.php" ><i class="fas fa-paper-plane"></i> Contact Me</a>        
	            </div><!--//col-->
	        </div><!--//row-->         
        </div><!--//container-->
    </header><!--//header-->
    
    <div class="container sections-wrapper py-5">
        <div class="row">
            <div class="primary col-lg-8 col-12">
                <section class="about section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">À propos de moi</h2>
                        <div class="content">
                            <p> Je suis Hamza LaQraa développeur passionné dans le domaine du web depuis plus de 2 ans,
                                actuellement développeur Web.
                                Je conçois et réalise des sites web du cahier des charges à la mise en ligne.
                                 Je cherche à résoudre les problèmes dans le monde réel, 
                                j'ai la passion à apprendre et partager mes connaissances avec les autres,</p>
                         
                        </div><!--//content-->
                    </div><!--//section-inner-->                 
                </section><!--//section-->
    
               <section class="latest section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Dernier projets</h2>
                        <div class="content">    
                                               
                            <div class="item featured text-center">
                                
                                <div class="featured-image has-ribbon">
                                    <a href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/launch-bootstrap-4-template-for-saas-businesses/" target="_blank">
                                    <img class="img-fluid project-image rounded shadow-sm "  src="assets/images/projects/cover.png" alt="project name" />
                                    </a>
                                    <div class="ribbon">
                                        <div class="text">New</div>
                                    </div>
                                </div>
                                
                                <h3 class="title mb-3"><a href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/launch-bootstrap-4-template-for-saas-businesses/" target="_blank">Aretemis_Jobs</a></h3>
                                    
                                <div class="desc text-start">                                    
                                    <p>ArtemisJobs est une application où les employées actuels et les anciens d'une entreprise
                                         évaluent leur environnement de travail (partage d'expérience - évaluation entreprise - ).
                                         L’objectif de cette plateforme web est de dénicher l’emploie sur mesure et avoir un aperçu sur l’entreprise sa culture, les salaires, 
                                         et son processus d’embauche, tout cela en toute transparence. 
                                    </p>
                                </div><!--//desc-->         
                                <a class="btn btn-cta-secondary" href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/launch-bootstrap-4-template-for-saas-businesses/" target="_blank"><i class="fas fa-thumbs-up"></i> Soutenir mon projet</a>                 
                            </div><!--//item-->
                            <hr class="divider" />


                            <?php foreach($user as $key => $val):?>
                                   
                            <div class="item row">
                                <a class="col-md-4 col-12" href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/coderpro-bootstrap-4-startup-template-for-software-projects/" target="_blank">
                                <img class="img-fluid project-image rounded shadow-sm"  src="./assets/images/projects/<?php echo $val['img'] ?>" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-12">
                                    <h3 class="title"><a href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/coderpro-bootstrap-4-startup-template-for-software-projects/" target="_blank"><?php echo $val['name'] ?></a></h3>
                                    <p class="mb-2"><?php echo $val['des'] ?></p>
                                </div><!--//desc-->                          
                            </div><!--//item-->
                            
                            <?php endforeach;; ?>
                            
                        </div><!--//content-->  
                    </div><!--//section-inner-->                
                </section><!--//section-->
                
                <section class="projects section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Autres projets</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title"><a href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/free-bootstrap4-resume-cv-template-for-developers-pillar/" target="_blank">Pillar - Free Boootstrap Resume/CV Template for Developers</a></h3>
                                <p class="summary">Provide a brief description of your project. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatu.</p>
                                <p><a class="more-link" href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/free-bootstrap4-resume-cv-template-for-developers-pillar/" target="_blank"><i class="fas fa-external-link-alt"></i>Download Now</a></p>
                            </div><!--//item-->
                            
                            <a class="btn btn-cta-secondary" href="https://github.com/Hamzacos">More on GitHub <i class="fas fa-chevron-right pt-1"></i></a>
                            
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </section><!--//section-->
                
                <section class="experience section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">L'expérience professionnelle</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title">Téléconseiller<span class="place"><a href="#">ITS</a></span> <span class="year">(septembre - décembre 2019)</span></h3>
                                <p>Prospection téléphonique Prise de Rendez-vous</p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title">Stagiaire développeur web et mobile - <span class="place"><a href="#">MTDS</a></span> <span class="year">(février - mars 2019)</span></h3>
                                <p>Création d’une application de gestion de facture avec Dolibarr</p>
                                    <P>techno utilisée : Dolibarr(CRM,ERP)
                                    </p>
                            </div><!--//item-->
                            
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </section><!--//section-->
                <section class="github section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Mon GitHub</h2> 
                        <div id="github-graph" class="github-graph">

                        </div><!--//github-graph-->

                        <!-- <p>You can also embed your GitHub activities using Casey Scarborough's <a href="https://github.com/caseyscarborough/github-activity" target="_blank">GitHub Activity Stream</a> widget.         -->
                        <!--//Usage: https://caseyscarborough.com/projects/github-activity/ -->                       
                        <!-- <div id="ghfeed" class="ghfeed"> -->
                        <!-- </div> -->
                        
                    </div><!--//secton-inner-->
                </section><!--//section-->
            </div><!--//primary-->
            <div class="secondary col-lg-4 col-12">
                 <aside class="info aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading sr-only">Basic Information</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-map-marker-alt"></i><span class="sr-only">Location:</span>Rabat, MR</li>
                                <li><i class="fas fa-envelope"></i><span class="sr-only">Email:</span><a href="#">Hamza.laqraa@hotmail.com</a></li>
                            </ul>
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </aside><!--//aside-->
                
                <aside class="skills aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Skills</h2>
                        <div class="content">
                            
                            <div class="skillset">
                               
                                <div class="item">
                                    <h3 class="level-title">HTML5, CSS3<span class="level-label" data-bs-toggle="tooltip" data-bs-placement="left" title="You can use the tooltip to explain more about your skill level..."><i class="fas fa-info-circle"></i>Maitrise	satisfaisante</span></h3>

                                    <div class="level-bar progress">
									    <div class="progress-bar level-bar-inner" role="progressbar" style="width: 76%" aria-valuenow="76"  aria-valuemin="0" aria-valuemax="76"></div>
									</div><!--//level-bar-->                               
                                </div><!--//item-->
                                
                                <div class="item">
                                    <h3 class="level-title">Javascript<span class="level-label" data-bs-toggle="tooltip" data-bs-placement="left" title="You can use the tooltip to explain more about your skill level..."><i class="fas fa-info-circle"></i>Maitrise satisfaisante</span></h3>
                                    <div class="level-bar progress">
									    <div class="progress-bar level-bar-inner" role="progressbar" style="width: 73%" aria-valuenow="73"  aria-valuemin="0" aria-valuemax="73"></div>
									</div><!--//level-bar-->                                   
                                </div><!--//item-->
                                
                                <div class="item">
                                    <h3 class="level-title">langace C<span class="level-label" data-bs-toggle="tooltip" data-bs-placement="left" title="You can use the tooltip to explain more about your skill level..."><i class="fas fa-info-circle"></i>Maitrise satisfaisante</span></h3>
                                    <div class="level-bar progress">
									    <div class="progress-bar level-bar-inner" role="progressbar" style="width: 75%" aria-valuenow="75"  aria-valuemin="0" aria-valuemax="96"></div>
									</div><!--//level-bar-->                                  
                                </div><!--//item-->
                                
                                <div class="item">
                                    <h3 class="level-title">php / SQL<span class="level-label" data-bs-toggle="tooltip" data-placement="left" title="You can use the tooltip to explain more about your skill level..."><i class="fas fa-info-circle"></i>Maitrise satisfaisante</span></h3>
                                    <div class="level-bar progress">
									    <div class="progress-bar level-bar-inner" role="progressbar" style="width: 80%" aria-valuenow="80"  aria-valuemin="0" aria-valuemax="96"></div>
									</div><!--//level-bar-->                                  
                                </div><!--//item-->
                                
                                <p><a class="more-link" href="https://github.com/Hamzacos/Hamzacos"><i class="fas fa-external-link-alt"></i>More on GitHub</a></p> 
                            </div>              
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </aside><!--//section-->

                <aside class="education aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Education</h2>
                        <div class="content">
                            <div class="item">                      
                                <h3 class="title"><i class="fas fa-graduation-cap"></i>Full Stack Developer</h3>
                                <h4 class="university">certification Simplon, Youcode <span class="year">(octobre 2021 - actuellement)</span></h4>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><i class="fas fa-graduation-cap"></i> Technicien spécialisé en Développement multimédia</h3>
                                <h4 class="university">ISTA NTIC, Rabat <span class="year">(septembre 2017 - juin 2019)</span></h4>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><i class="fas fa-graduation-cap"></i> Baccalauréat</h3>
                                <h4 class="university">Imam EL Bokhari<span class="year">(septembre 2016 - juin 2017)</span></h4>
                            </div><!--//item-->
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
                            
                <aside class="languages aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Languages</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li class="item">
                                    <span class="title"><strong>ARABE:</strong></span>
                                    <span class="level">langue maternelle<br class="visible-xs"/><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span>
                                </li><!--//item-->
                                <li class="item">
                                    <span class="title"><strong>Francais:</strong></span>
                                    <span class="level">courant<br class="visible-xs"/><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span>
                                </li><!--//item-->
                                <li class="item">
                                    <span class="title"><strong>Anglais:</strong></span>
                                    <span class="level">intermédiaire <br class="visible-sm visible-xs"/><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i></span>
                                </li><!--//item-->
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
                
               
                <aside class="list music aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Favourite coding music</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-headphones"></i> <a href="#">the Beatles</a></li>
                                <li><i class="fas fa-headphones"></i> <a href="#">guns n roses</a></li>
                                <li><i class="fas fa-headphones"></i> <a href="#">AC/DC</a></li>
                                <li><i class="fas fa-headphones"></i> <a href="#">Kaleo</a></li>
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
                
            </div><!--//secondary-->    
        </div><!--//row-->
    </div><!--//masonry-->
    
    <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="container text-center">
                <!--/* This template is free as long as you keep the attribution link below. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Hamza LaQraa <span> Ⓒ 2022</span></a></small>
        </div><!--//container-->
    </footer><!--//footer-->
 
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/popper.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>    
    <script type="text/javascript" src="assets/plugins/vanilla-rss/dist/rss.global.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/dark-mode-switch/dark-mode-switch.min.js"></script> 
    <!-- github calendar plugin -->
    <script type="text/javascript" src="assets/plugins/github-calendar/dist/github-calendar.min.js"></script>
    <!-- github activity plugin -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js"></script>
    <script type="text/javascript" src="assets/plugins/github-activity/src/github-activity.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.js"></script>            
</body>
</html> 

