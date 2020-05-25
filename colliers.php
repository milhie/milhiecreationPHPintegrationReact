<!DOCTYPE html>
<html lang="fr">

<head>
        
    <meta charset="utf-8">
    <meta name="description" content="site milhie creation, presentation de bijoux, arbres de vie, decorations en fil d'aluminium, perles, pierres de litotherapie. Tout est fait main par moi-même.">  
    <title>Milhie Création colliers et pendentifs</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="side-menu.css">
    <link rel="stylesheet" type="text/css" href="style_pages.css">
    <link rel="stylesheet" type="text/css" href="stylebase.css">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Calligraffitti&family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">


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
                    <h2 class="epingle"><img src="images/ico_epingle.png" alt="Milhie creation" class="ico_categorie" /> Colliers et pendentifs en fil d'aluminium</h2>
                    <!--<p class="retour"><a href="bijoux.html"> Retour</a></p>-->
                </header>
                
                <nav class="navigation">
                   
                    <p class="return"><a href="bijoux.php">RETOUR</a></p>

                    <div class="Diapos">
                        <header class="description">
                            <h2>Colliers: produits disponibles à la commande.</h2> 
                            <p>Création de modèles sur mesure.</p>
                        </header>
                            
                        <ul class="diapo">
                            <li class="item">                                
                                <?php include("colliers/collier1.php"); ?>
                            </li>
                            <li class="item">
                                <?php include("colliers/collier2.php"); ?>
                            </li>
                           
                        </ul>
                    </div>
                </nav> 

                <p class="return"><a href="bijoux.php">RETOUR</a></p>

            </article>
                       
        </section>
            
        <footer>
            <?php include("pied_de_page.php"); ?>
            <?php include("compteur/compteurColliers.php"); ?>
        </footer>
    </section>
    <script src="ui.js"></script>

</body>
</html>