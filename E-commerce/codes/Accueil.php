<!DOCTYPE html>

<html >
    <head>
        
        <meta charset="utf-8" />	
        
        <link rel="stylesheet" href="../css/design.css?<?php echo time();?>"/>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <link rel="stylesheet"  href="../bootstrap/css/bootstrap.css"/>
    
        <script src="../jquery-3.4.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.js"> </script>
      
        <title>Gestion des produits</title>
    
    </head>
    
    
    <body>
    
    
        <nav class="navbar  navbar-default navbar-fixed-top" >
            
            <img class="logo" src='images/im_header.PNG' alt="logo"/>
                    
            <div class="container elements-menu" style="margin-right:-22%;margin-top:0.5%" >
                            
                <ul class="d-none d-sm-block nav navbar-nav">
                            
                    <li>  
                         
                        <a href="../Accueil.php">Accueil</a> 
                    
                    </li>
                           

                    <li>  
                        
                        <a href="../" >Règles de confidentialité</a>
                    
                    </li>
                    
                    
                    <li >  
                        
                        <a href="../">Contact</a>
                    
                    </li>


                    <li class="dropdown btn-connect" >  
                        
                        <button type="button"  class="btn btn-success dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Se connecter</button>
                            
                        <ul class="dropdown-menu">
                                
                            <li class="dropdown-header">En tant que:</li>
                                
                            <li class="divider"></li>
                                
                            <li><a href="../">Vendeur</a></li>
                                
                            <li class="divider"></li>
                                
                            <li><a href="../">Client</a></li>
                                                    
                         </ul>

                    </li>
                         

                            
                    <li class="dropdown btn-inscription"> 
                        
                        <button type="button"  class="btn btn-success dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">S'inscrire</button>
                                
                        <ul class="dropdown-menu">
                                        
                            <li class="dropdown-header">En tant que:</li>
                                        
                            <li class="divider"></li>
                                        
                            <li><a href="../inscriptioncommerciale.php">Vendeur</a></li>
                                        
                            <li class="divider"></li>
                                        
                            <li><a href="../inscriptionclient.php">Client</a></li>
                                
                        </ul>
                            
                    </li>                                                                                                    
                
                
                </ul>
            
            
            </div>
                
                
        </nav>

        
        
        
        <header class="now">
                
            <h1 style="animation: flash 1.4s linear infinite;letter-spacing:20px;text-align:center">MY SITE E-COMMERCE</h1>
              
                   
        </header>
               
					

        <script>

            $(".now").hide(0,'linear')

            $(".now").slideDown(1000,'linear');



        </script>



        <!-- Les produits -->
        <div class="container" style="margin-top:5%;margin-bottom:20%">

                <br/>
                <br/>

        </div> 


        

        <footer id="footer" class="foot">
           
           <div class="footer-top  footer-default">
           
               <div class="container">
       
                   <div class="row">
           

                        <div class="col-lg-4 col-md-6 footer-info"> 
               
                           <h3 style="animation: flash 1.4s linear infinite">Site E-Commerce</h3>
                          
                           <p> ________ ________ ________ ________ _________
                               ________  _______ _________  _______  _______
                               ________ _________ ___________
                           </p>
            
                        </div> 

                       
                        <div class="col-lg-2 col-md-6 footer-links">
               
                           <h4> Liens utiles <h4>
                          
                           <ul>
                       
                               <li><a href="../#">Link</a></li>
                               <li><a href="../#">Link</a></li>
                               <li><a href="../#">Link</a></li>
                               <li><a href="../#">Link</a></li>
                               <li><a href="../#">Link</a></li>
                            
                            </ul>
                        
                        </div>
             
             
                        <div class="col-lg-3 col-md-6 footer-contact"> 
             
                             <h4> Contactez-nous</h4>
                             
                             <p>
                                Hann Bel Air   Rue:6 <br/>
                                Hann,  Dakar<br/>
                                Sénégal<br/>
                                <strong>Téléphone:</strong>+221 78 130 45 98<br/> 
                                <strong>Em@il:</strong>Amar@gmail.com<br/>
                             </p>
          
                        
                            <div class="social-links">
                      
                                <a href="../#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="../#" class="twitter"><i class="fa fa-facebook"></i></a>
                                <a href="../#" class="twitter"><i class="fa fa-instagram"></i></a> 
                                <a href="../#" class="twitter"><i class="fa fa-google-plus"></i></a>
                                <a href="../#" class="twitter"><i class="fa fa-linkedin"></i></a>      
                    
                            </div> 
                
                    
                        </div>  
                  
                  
                        <div class="col-lg-3 col-md-6 footer-newsletter">
                            
                            <h4>Our Nemsletter</h4>
                            
                            <p> ________ ________ ________ ________ _________
                                ________  _______ _________  _______  _______
                                ________ _________ ___________
                            </p>
                            
                            <form accept="" mthod="post">
                        
                                <input type="email"  name="email"/><input type="submit" value="s'abonner"/>
                            
                                </form>
                        </div>
               
                    </div>
    
                </div>
            
            </div>
          
   
            <div class="container">
            
                <div class="copyright">
            
                    &copy; Copyright<strong>SiteECommerce</strong>. Tout Droits Reservés
       
                </div>

                <div class="credits">
           
                    Designed by <a href="../#">Babacar Ndong</a>
       
                </div>
            
            </div>
        
        </footer>


        
    </body>

    
</html>
