<!DOCTYPE html>
<html lang="fr">
    <head>
        
        <meta charset="utf-8" />
        <meta name="description" content="site milhie creation, presentation de bijoux, arbres de vie, decorations en fil d'aluminium, perles, pierres de litotherapie. Tout est fait main par moi-même.">    
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="side-menu.css">
        <link rel="stylesheet" type="text/css" href="styleAccueil.css">
        <link rel="stylesheet" type="text/css" href="stylebase.css">
        <link rel="shortcut icon" href="images/favicon.ico">
        <link href="https://fonts.googleapis.com/css2?family=Calligraffitti&family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
        <title>MilhieCréation bijoux</title>
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
                <article class="content">
                    <h2 class="titre">Créations en perles et fils d'aluminium</h2>
                
                    <header>
                        <h2 class="epingle"><img src="images/ico_epingle.png" alt="Accueil" class="ico_categorie" /> Bijoux</h2>
                            

                    </header>

                    <nav>

                            <ul id="bjx">
                                <li id="bracelets_manchettes" class="item"><p> <a href="bracelets.php" class="bouton">Bracelets et manchettes <img src="images/flecheblanchedroite.png" alt="" /></a></p></li>
                                <li id="bagues" class="item"><p><a href="bagues.php" class="bouton">Bagues <img src="images/flecheblanchedroite.png" alt="" /></a></p></li>
                                <li id="boucles" class="item"><p><a href="boucles.php" class="bouton">Boucles d'oreilles<img src="images/flecheblanchedroite.png" alt="" /></a></p></li>
                           
                                <!--<li id="bijoux_mariage" class="item"><p><a href="bjx_mariage.html" class="bouton">Bijoux de mariage  <img src="images/flecheblanchedroite.png" alt="" /></a></p></li>-->
                                <li id="colliers" class="item"><p><a href="colliers.php" class="bouton">Colliers <img src="images/flecheblanchedroite.png" alt="" /></a></p></li>
                                <li id="pendentifs" class="item"><p><a href="pendentifs.php" class="bouton">Pendentifs <img src="images/flecheblanchedroite.png" alt="" /></a></p></li>
                            </ul>

                    </nav>
                    <p class="return"><a href="index.php">RETOUR</a></p>


                </article>
            </section>
            <footer>
                <?php include("pied_de_page.php"); ?>
                <?php include("compteur/compteurBijoux.php"); ?>
            </footer>
        </section>
    <script src="ui.js"></script>

    </body>
</html>