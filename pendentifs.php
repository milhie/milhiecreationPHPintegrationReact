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
    <link rel="stylesheet" href="stylediapo.css">
  
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
                    <h2 class="epingle"><img src="images/ico_epingle.png" alt="Milhie creation" class="ico_categorie" /> Colliers et pendentifs en fil d'aluminium</h2>
                </header>


                <nav id="pendents">
                    <p class="return"><a href="bijoux.php">RETOUR</a></p>

                    <div class="Diapos">
                        <header class="description">
                            <h2>Pendentifs lytothérapie: produits disponibles à la commande.</h2> 
                            <p>Création de modèles sur mesure.</p>
                            <p>Possibilité de commander un pendentif avec un autre motif et une autre pierre de lytothérapie: cornaline, aventurine, labradorite, améthyste, œil de tigre,  tourmaline, etc.... </p>
                        </header>
                        
                        <h3>Pendentifs sur labradorite:</h3>
                        <ul class="diapo">
                            
                            <li class="item">
                                <?php include("pendentifs/lab01.php"); ?>
                            </li>
                            <li class="item">
                                <?php include("pendentifs/lab02.php"); ?>
                            </li>
                        </ul>

                        <h3>Pendentif sur améthyste:</h3>
                        <ul class="diapo">
                            <li class="item">
                                <?php include("pendentifs/amethyst01.php"); ?>
                            </li>
                        </ul>

                        <h3>Pendentifs sur obsidienne:</h3>
                        <ul class="diapo">
                            <li class="item">
                                <?php include("pendentifs/obs01.php"); ?>
                            </li>
                            <li class="item">
                                <?php include("pendentifs/obs02.php"); ?>
                            </li>
                            <li class="item">
                                <?php include("pendentifs/obs03.php"); ?>
                            </li>
                            <li class="item"> 
                                <?php include("pendentifs/obs04.php"); ?>
                            </li>

                        </ul>
                    </div>

                    <div class="Diapos">
                        <header class="description">
                            <h2>Pendentifs chakras: produits disponibles à la commande.</h2> 
                            <p>Création de modèles sur mesure.</p>
                        </header>

                        <ul class="diapo">
                            <li class="item">
                                <?php include("pendentifs/diapo3.php"); ?>
                            </li>
                            <li class="item">
                                <?php include("pendentifs/diapo4.php"); ?>
                            </li>
                            <li class="item">
                                <?php include("pendentifs/diapo5.php"); ?>
                            </li>
                        </ul>

                    </div>

                   
                </nav> 

                <p class="return"><a href="bijoux.php">RETOUR</a></p>

            </article>
                       
        </section>
            
        <footer>
            <?php include("pied_de_page.php"); ?>
            <?php include("compteur/compteurPendentifs.php"); ?>
        </footer>
    </section>
    <script src="ui.js"></script>

</body>
</html>