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
        <title>Milhie Création pièges à rêve</title>
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
                <article class="contentitem">
                    <h2 class="titre">Créations en perles et fils d'aluminium</h2>
    
                    <header>
                        <h2 class="epingle"><img src="images/ico_epingle.png" alt="" class="ico_categorie" />Pièges à rêve</h2>
                    </header>

                    <nav>
                        
                        <div class="Diapos">
                            <header class="description">
                                <h2>Dreamcatcher</h2>
                                <p>Ces modèles sont pour la plupart des exemples de créations, ils sont disponibles à la commande. N'hésitez pas à <a href="mailto:milhiecreation@gmail.com">me contacter. </a></p>
                            </header>

                            <ul class="diapo" id="piegesReves">
                                <li class="item"><p>Piège à rêve N°1: 35€<br/><br/>Diametre: 30cm<br/>Sur Commande</p><img src="images/piegesReves/piege.jpeg" alt=""> </li>
                                <li class="item"><p>Piège à rêve N°2: 35€<br/><br/>Diametre: 30cm<br/>Sur Commande</p><img src="images/piegesReves/piege01.jpeg" alt=""> </li>
                                <li class="item">Piège à rêve N°3: 35€<br/><br/>Diametre: 30cm<br/>Sur Commande<img src="images/piegesReves/piege02.jpeg" alt=""> </li>
                                <li class="item">Piège à rêve N°4: 18€<br/> <br/>Petit attrape rêve fait main. Fil aluminium, fil de coton, perles en verre et plumes naturelles.
                                <br/>Environ 20 cm de hauteur. 
                                <br/><a href="https://www.vinted.fr/femmes/accessoires-autres-accessoires/246854940-petit-attrape-reve-avec-arbre-de-vie-fait-main">Disponible</a><img src="images/piegesReves/piege03.jpeg" alt=""> </li>
                                <li class="item">Piège à rêve N°5: 15€<br/><br/>Petit attrape rêve fait main
                                <br/>Diamètre: 20cm
                                <br/>Fil de coton bleu ciel et bleu vert pour le centre, perles en verre  et hématite au centre. Plumes synthétiques.  <br/><a href="https://www.vinted.fr/femmes/sacs-autres/247948481-attrape-reve">Disponible</a><img src="images/piegesReves/piege04.jpeg" alt=""> </li>
                                <!--
                                <li class="item"> </li>
                                <li class="item"> </li>
                                <li class="item"> </li>
                                <li class="item"> </li>
                                <li class="item"> </li>-->
                            </ul>
                        </div>
                    </nav>
                </article>
            </section>
			
				


           <footer>
                <?php include("pied_de_page.php"); ?>  
                <?php include("compteur/compteurPieges.php"); ?>  

            </footer>
		</section>
    <script src="ui.js"></script>

    </body>
</html>