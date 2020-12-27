<!DOCTYPE html>
<?php session_start()?>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <!-- debut angular -->
        <script type="text/javascript" src="angular/angular.min.js"></script>
        <script type="text/javascript" src="angular/angular-route.js"></script>
        <!-- fin angular -->
        <!-- bootstap -->
        <link rel="stylesheet" href="css/design.css?<?php echo time();?>"/>
        <link rel="stylesheet"  href="bootstrap/css/bootstrap.css"/>
        <script src="jquery-3.4.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"> </script>
        <!-- fin bootstrap -->
        <title>Boutique</title>
    </head>
    <body ng-app="myApp">

        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
              <a style="height: auto;" class="navbar-brand" href="#!accueil">Boutique.com <br><span style="font-size:10px" ng-click="utilisateurFunction()">
                        {{Utilisateur.prenom+" "+Utilisateur.nom}}
                </span></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li> 
                    <a href="#!accueil" data-toggle="collapse" data-target="#myNavbar">Accueil</a> 
                </li>
                <li> 
                    <a href="#!creerBoutique" data-toggle="collapse" data-target="#myNavbar">Ajouter boutique</a> 
                </li>
                <li>
                    <a href="#!insertProd" data-toggle="collapse" data-target="#myNavbar">Ajouter produits</a>
                </li>
                <li > 
                    <a href="#!contact" data-toggle="collapse" data-target="#myNavbar">Contact</a>
                </li>
                <li ng-hide="Utilisateur">  
                    <a href="#!connexion" data-toggle="collapse" data-target="#myNavbar">Se connecter</a>
                </li>     
                <li ng-hide="Utilisateur"> 
                    <a  href="#!inscription" data-toggle="collapse" data-target="#myNavbar">S'inscrire</a>
                </li>     
                <li ng-show="Utilisateur"> 
                    <a  href="#!deconnexion" data-toggle="collapse" data-target="#myNavbar">Deconnexion</a>
                </li> 
                <li ng-click="utilisateurFunction()">
                        {{Utilisateur.prenom+" "+Utilisateur.nom}}
                </li>
              </ul>
            </div>
          </div>
        </nav>
      
    
        <!-- <header class="now">
                
            <h1 style="animation: flash 1.4s linear infinite;letter-spacing:20px;text-align:center">MY SITE E-COMMERCE</h1>
              
                   
        </header>
        <script>

            $(".now").hide(0,'linear')

            $(".now").slideDown(1000,'linear');

        </script> -->



        <!-- Les produits -->
        <div ng-view class="container">

        </div> 


        

        <footer id="footer" class="foot">
           
           <div class="footer-top  footer-default">
           
               <div class="container">
       
                   <div class="row">
                        <div class="col-lg-12 col-md-12 "> 
                           <h3 style="animation: flash 1.4s linear infinite">Site E-Commerce</h3>
                        </div>
                        <div class="col-xs-6 col-md-6">
                           <h4> Nos partenaires <h4>
                           <ul>
                               <li>Partenaire 1</li>
                               <li>Partenaire 2</li>
                               <li>Partenaire 3</li>
                               <li>Partenaire 4</li>
                            </ul>
                        </div>
                        <div class="col-xs-6 col-md-6 "> 
                            <h4> Contactez-nous</h4>
                            <p>
                                Hann Bel Air   Rue:6 <br/>
                                Hann,  Dakar<br/>
                                Sénégal<br/>
                                <strong>Téléphone:</strong>+221 78 130 45 98<br/> 
                                <strong>Em@il:</strong>Amar@gmail.com<br/>
                             </p>
          
                        
                            <div class="social-links">
                      
                                <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-instagram"></i></a> 
                                <a href="#" class="twitter"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-linkedin"></i></a>      
                    
                            </div> 
                
                    
                        </div>  
                  
                  
                        <!-- <div class="col-lg-3 col-md-6 footer-newsletter">
                            
                            <h4>Our Nemsletter</h4>
                            
                            <p> ________ ________ ________ ________ _________
                                ________  _______ _________  _______  _______
                                ________ _________ ___________
                            </p>
                            
                            <form accept="" mthod="post">
                        
                                <input type="email"  name="email"/><input type="submit" value="s'abonner"/>
                            
                                </form>
                        </div> -->
               
                    </div>
    
                </div>
            
            </div>
          
   
            <div class="container">
            
                <div class="copyright">
            
                    &copy; Copyright<strong>SiteECommerce</strong>. Tout Droits Reservés
       
                </div>

                <div class="credits">
           
                    Designed by <a href="#">Bassirou Gueye</a>
       
                </div>
            
            </div>
        
        </footer>

        <script type="text/javascript" src="codeAngular.js"></script>
    </body>
</html>