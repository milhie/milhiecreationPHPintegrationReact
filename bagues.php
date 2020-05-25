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
        <title>Milhie Création bagues</title>
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
                        <h2 class="epingle"><img src="images/ico_epingle.png" alt="" class="ico_categorie" />Bagues</h2>
                    </header>

                    <nav class="navigation">
                        
                        <p class="return"><a href="bijoux.php">RETOUR</a></p>

                        <div class="Diapos">
                            <header class="description">
                                <h2>Bagues en fil d'aluminium</h2>
                                <p> Stock épuisé, sur commande uniquement. N'hésitez pas à ma contacter <a href="mailto:milhiecreation@gmail.com">->ici</a> <br/> Les modèles présentés sont des exemples de créations, la plupart des bracelets présents sur <a href="bracelets.php">-> cette page</a> sont déclinables en bague.</p>
                            </header>

                            <ul class="diapo" id="rings">
                                <li class="item"><p>Bague N°1:<br/>Fleur en résine <br/>8€.</p> <img src="images/bagues/bague1_259.jpeg" alt="bague1"></li>
                                <li class="item"><p>Bague N°2:<br/>Clé de sol <br/>5€. </p><img src="images/bagues/bague2_259.jpeg" alt="bague2"></li>
                                <li class="item"><p>Bague N°3:<br/>Toupies en verre <br/>5€.</p> <img src="images/bagues/bague3_259.jpeg" alt="bague3"></li>
                                <li class="item"><p>Bague N°4:<br/>Hématite et toupies<br/> en verre. 8€.</p><img src="images/bagues/bague4_259.jpeg" alt="bague4"></li>
                                <li class="item"><p>Bague N°5:<br/> fil aluminium <br/>5€.</p><img src="images/bagues/bague5_259.jpg" alt="bague5"></li>
                                <li class="item"><p>Bague N°6:<br/>Hématite et perles<br/>en verre: 8€.</p><img src="images/bagues/bague6_259.jpg" alt="bague6"></li>
                                <li class="item"><p>Bague N°7:<br/>Perles en verre:<br/>8€.</p><img src="images/bagues/bague7_259.jpg" alt="bague7"></li>
                                <li class="item"><p>Bague N°8:<br/>Arbre de vie: <br/>5€.</p><img src="images/bagues/bague8_259.jpg" alt="bague8"></li>
                                
                            </ul>
                        </div>
                    </nav>
                    <p class="return"><a href="bijoux.php">RETOUR</a></p>

                </article>
            </section>
                         
                        
            
            <footer>
                <?php include("pied_de_page.php"); ?>  
                <?php include("compteur/compteurBagues.php"); ?>  
            </footer>

            
        </section>
<script src="ui.js"></script>

    </body>
</html>