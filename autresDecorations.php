<!DOCTYPE html>
<html lang="fr">
    <head>
        
        <meta charset="utf-8" />
        <meta name="description" content="site milhie creation, presentation de bijoux, arbres de vie, decorations en fil d'aluminium, perles, pierres de litotherapie. Tout est fait main par moi-même.">    
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="side-menu.css">
        <link rel="stylesheet" type="text/css" href="style_pages.css">
        <link rel="stylesheet" type="text/css" href="stylebase.css">
        <link rel="stylesheet" type="text/css" href="stylediapo.css">
        <title>MilhieCréation autres décorations</title>

  <script src='js/jquery.min.js'></script>

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
                    
                    <header>
                    
                        <h2 class="epingle"><img src="images/ico_epingle.png" alt="Accueil" class="ico_categorie" />Autres décorations</h2>
                    </header>

                    <nav class="navigation">
                        <div class="Diapos">
                            <header class="description">
                                <h2>Décorations de Noël</h2>
                                <p>Fait main en fil d'aluminium et perles</p>
                            </header>

                            <ul class="diapo" id="autres">
                                <li class="item">
                                    <?php include("autresDecos/diapo1.php"); ?>
                                </li>
                                <li class="item">
                                    <?php include("autresDecos/diapo2.php"); ?>
                                </li>
                                <!--Decoration de table de Noel -->
                                <li class="item">
                                    <?php include("autresDecos/diapo3.php"); ?>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="Diapos">
                            <header class="description">
                                <h2>Portes bijoux</h2>
                                <p>Fait main en fil d'aluminium et perles</p>
                            </header>

                            <ul class="diapo" id="porteBjx">
                                <li class="item">Porte bijoux à suspendres 30cm de diamètre: 30€ pièce...<img src="images/autresDecos/arbreBjx1.jpeg" alt="arbre porte bijoux"></li>
                                <li class="item"></li>
                            </ul>
                        </div>
                        <div class="Diapos">
                            <header class="description">
                                <h2>Décorations de fenêtre</h2>
                                <p>Fait main en fil d'aluminium et perles</p>
                            </header>

                            <ul class="diapo" id="Windows">
                                <li class="item"><p>Piège à rêve porte plante aériennes pour décoration de fenêtre ou décoration murale. 30€ vendu sans plantes.<img src="images/autresDecos/decoWin1.jpeg" alt="piège à rêve porte plante"></p></li>
                                <li class="item"><p>Piège à rêve porte plante aériennes pour décoration de fenêtre ou décoration murale. 30€ vendu sans plantes.<img src="images/autresDecos/decoWin2.jpeg" alt="piège à rêve porte plante"></p></li>
                                <li class="item"></li>
                            </ul>
                        </div>
                    </nav>
                </article>
            </section>

            <footer>
                <?php include("pied_de_page.php"); ?> 
                <?php include("compteur/compteurAutresDecos.php"); ?> 
            </footer>

        </section>
    <script src="ui.js"></script>
		
    </body>
</html>