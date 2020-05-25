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
        <link rel="shortcut icon" href="images/favicon.ico">
        <link href="https://fonts.googleapis.com/css2?family=Calligraffitti&family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
        <title>Milhie Création boucles d'oreille</title>
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
                    <header>
                        <h2 class="epingle"><img src="images/ico_epingle.png" alt="Accueil" class="ico_categorie" /> Boucles d'oreilles en fil d'aluminium</h2>
                    </header>    

                    <nav class="navigation">
                        <p class="return"><a href="bijoux.php">RETOUR</a></p>

                    
                        <div class="Diapos">
                            <header class="description">
                                <h2>Boucles d'oreilles en fil d'aluminium.</h2>
                                <p>Boucles en fil d'aluminium, faites main par mes soins. <br/>Possibilité de création de modèles sur mesure selon vos envies, n'hésitez pas à prendre<a href="mailto:milhiecreation@gmail.com"> contact </a></p>
                            </header>

                            <ul class="diapo" id="boucles"> 
                                <li class="item"><p><a href="https://www.vinted.fr/femmes/boucles-doreilles/241562348-boucles-doreilles-fil-aluminium"><span>Boucle n°1:</span> 6€ <br/><br/> Disponible <img src="images/bijoux/boucles/boucles1.jpeg"></p></a></li>
                                <li class="item"><p><span>Boucle n°2:</span> ..€ <p/><img src="images/bijoux/boucles/boucles2.jpeg"></li>
                                <li class="item"><p><span>Boucle n°3:</span> ..€ <p/><img src="images/bijoux/boucles/boucles3.jpeg"></li>
                                <li class="item"><p><span>Boucle n°4:</span> ..€ <p/><img src="images/bijoux/boucles/boucles4.jpeg"></li>
                            </ul>
                        </div>
                    </nav>
                    <p class="return"><a href="bijoux.php">RETOUR</a></p>

                </article>
            </section>

            <footer>
                <?php include("pied_de_page.php"); ?>
                <?php include("compteur/compteurBoucles.php"); ?>
            </footer>
        </section>
<script src="ui.js"></script>

    </body>
</html>


