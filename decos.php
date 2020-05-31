<!DOCTYPE html>
<html lang="fr">
    <head>
        
        <meta charset="utf-8" />
        <meta name="description" content="site milhie creation, presentation de bijoux, arbres de vie, decorations en fil d'aluminium, perles, pierres de litotherapie. Tout est fait main par moi-même.">     
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="side-menu.css">
        <link rel="stylesheet" type="text/css" href="style_pages.css">
        <link rel="stylesheet" type="text/css" href="stylebase.css">
        <link rel="shortcut icon" href="images/favicon.ico">
        <link href="https://fonts.googleapis.com/css2?family=Calligraffitti&family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
        <title>MilhieCréation décorations chambre d'enfants</title>
    </head>

    <body>

        <section id="page">
            <div id="element">
                <header id="title"> <!--Désigne l'en-tête, il peux y avoir plusieurs en-têtes dans une même page-->
                    <?php include("tete_de_page.php"); ?>

                </header>   

                <nav>
                    <?php include("menu.php"); ?>                    
                </nav>
            </div>
                
            
            
            
            <section id="main"> 
                <h2 class="titre">Créations en perle et fil d'aluminium, bijoux, décorations, pièges à rêves, arbres de vie , lytothérapie. </h2>
                <article class="contentitem">

                    <!--<h2 class="titre">Créations en perle et fil d'aluminium, bijoux, décorations, pièges à rêves, arbres de vie , lytothérapie. </h2>-->

                    <header>
                        <h2 class="epingle"><img src="images/ico_epingle.png" alt="Accueil" class="ico_categorie" />Décorations pour chambre d'enfant </h2>
                    </header>
                        
                    <nav>
                        
                        <div class="Diapos">
                            <header class="description">
                                <h2>Décorations murale:</h2>
                                <p><br/>Mes décorations murales sont en fil d'aluminium. <p/> 
                                <p>Chaque pièce est unique et totalement personnalisable.</p>
                                
                                <p>N'hésitez pas à me contacter, tous les thèmes sont possibles.</p>

                                <p>Voici quelques exemples sur des thèmes différents, les dinosaures, pompiers, bateau pirate, chateaux forts ou chateaux de princesse etc... </p>
                                
                                <p>Le prix est noté à coté de chaques photos, il dépend des options choisies.</p>
                                
                                <p>Pour plus d'informations <a href="mailto:milhiecreation@gmail.com">me contacter. </a></p>
                            </header>
                            
                            <ul class="diapo" id="decosMurales">
                                <li class="item">
                                    <p><span>Dinosaures:</span></p> 
                                    <p>3O€<br/><img src="images/decosMurales/decoDino1.jpeg" alt="Décoration murale dinosaures"></p>
                                </li>
                                <li class="item">
                                    <p><span>Dinosaures:</span></p> 
                                    <p>3O€<br/><img src="images/decosMurales/decoDino2.jpeg" alt="Décoration murale dinosaures"></p>
                                </li>
                                <li class="item">
                                    <p><span>Chateau de princesse:</span></p> 
                                    <p>30€<br/><img src="images/decosMurales/decoChateauPrincess.jpeg" alt="decoration murale chateau de princesse"></p>
                                </li>
                                <li class="item">
                                    <p><span>Chateau fort:</span></p> 
                                    <p>30€<br/><img src="images/decosMurales/decoChateauFort.jpeg" alt="decoration murale chateau fort"></p>
                                </li>
                                <li class="item">
                                    <p><span>Camion de pompiers:</span></p> 
                                    <p>25€<br/><img src="images/decosMurales/decoPompier.jpeg" alt="decoration murale Camion de pompiers"></p>
                                </li>
                         
                                <li class="item">
                                    <p><span>Nuage:</span></p> 
                                    <p>20€<br/><img src="images/decosMurales/decoNuage.png" alt="decoration murale nuage"></p>
                                </li>
                                <li class="item">
                                    <p><span>Bateau pirates:</span></p> 
                                    <p>30€<br/><img src="images/decosMurales/bateauPirate.jpeg" alt="decoration murale bateau pirate"></p>
                                </li>
                                <li class="item">
                                    <p><span>Loup:</span></p> 
                                    <p>30€<br/><img src="images/decosMurales/loup.png" alt="decoration murale loup"></p>
                                </li>
                                <li class="item">
                                    <p><span>Chat dans les étoiles:</span></p> 
                                    <p>30€<br/><img src="images/decosMurales/chat.jpeg" alt=" décoration murale chat dans les étoiles"></p>
                                </li>
                         
                                <li class="item">
                                    <p><span>Vélo:</span> </p>
                                    <p>30€<br/><img src="images/decosMurales/velo.jpeg" alt="Décoration murale Vélo"></p>
                                </li>
                                <li class="item">
                                    <p><span>Coeur:</span><br/>déco de porte: </p>
                                    <p>15€<br/><img src="images/decosMurales/coeur.jpeg" alt="decoration murale coeur"></p>
                                </li>
                                <li class="item">
                                    <p><span>"fanArt" buzz l'éclair:</span><p/>
                                    <p>30€<br/><img src="images/decosMurales/buzz.png" alt="decoration murale fanart buzz l'eclair"></p></li>
                                <li class="item">
                                    <p></p>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </article>
            </section>
                    
           
            <footer>
                <?php include("pied_de_page.php"); ?> 
                <?php include("compteur/compteurDecos.php"); ?> 
            </footer>

        </section>
<script src="ui.js"></script>
    </body>
</html>