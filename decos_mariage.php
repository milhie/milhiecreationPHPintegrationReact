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
        <title>MilhieCréation décorations mariage</title>
  <script src='js/jquery.min.js'></script>

    </head>

    <body>

    	<section id="page">
            <div id="element">
                <header id="title">

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
                        <h2 class="epingle"><img src="images/ico_epingle.png" alt="Accueil" class="ico_categorie" /> Décorations de mariage.</h2>
                    </header>

                    <nav class="navigation">
                        <div class="Diapos">
                            <header class="description">
                                <h2>Marques places.</h2>
                                <p>Idéal pour une table de mariage. Forme et couleur du fil au choix.
                                    <br/>Prévoir un délais de fabrication et un délais supplémentaire si la couleur demandée n'est pas en stock.
                                    <br/>Réduction sur les grosses commandes. N'hésitez pas à <a href="mailto:milhiecreation.com"> me contacter</a> 
                                    <br/> Création de modèles sur mesure.</p>
                            </header>

                            <ul class="diapo" id="decoMariage">
                                <li class="item">
                                    <?php include("decosMariage/diapo1.php"); ?>
                                </li>
                                <li class="item">
                                    <?php include("decosMariage/diapo2.php"); ?>
                                </li>
                                <li class="item"><p>Marque place sur verre</p><img src="images/decosMariage/mariage3.jpeg"></li>
                                <li class="item"><img src="images/decosMariage/mariage4.jpeg"></li>
                            </ul>
                        </div>
                    </nav>
                </article>
            </section>

            <footer>
                <?php include("pied_de_page.php"); ?> 
                <?php include("compteur/compteurDecosMariage.php"); ?> 

            </footer>
        </section>
    <script src="ui.js"></script>
</body>
</html>