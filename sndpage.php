<?php
include './vueSndPage.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./design.css">
    <title>CINDY'S CAKES</title>
</head>
<body>

    <header class="navbar">
        <img src="./IMAGE_MAQUETTE/NoPath - Copie (15).png" class="mainLogo" alt="">
        <a href="index.html">Accueil</a>
        <a href="sndpage.php" class="sndpage">Produit</a>
        <img src="./IMAGE_MAQUETTE/gateau_good_.png" alt="" class="logoNav">
        <a href="contact.php">Contact</a>
        <a href="connexionCC.php"><img src="./IMAGE_MAQUETTE/NoPath - Copie (2).png" alt="" class="iconco"></a>
        <!-- <p class="admin">connexion admin</p> -->
       
    </header>   
    <!-- RESPONSIVE NAVBAR -->
    <div class="menuNavbar">
        <a href="index.html" class="acc">Accueil</a>
        <a href="sndpage.php">Produit</a>
        <a href="contact.php" class="contact">Contact</a>
        <!-- <p>Connexion Admin</p> -->
    </div>
   
    <div id="pageProduit">
     
        <div class="miniNav">
            <section class="catNav">Categorie</section>
            <p class="categorie hero">Super héros</p>
            <p class="categorie dessinanime">Dessin Animé</p>
            <p class="categorie jeuvideo">Jeux Vidéo</p>
            <p class="categorie filme">Film</p>
            
        </div>
        <div class="mininavCategori">
            <p class="superhero boucle">Super héros</p>
            <p class="dessin boucle">Dessin Animé</p>
            <p class="jeuxvideo boucle">Jeux Vidéo</p>
            <p class="film boucle">Film</p>
        </div>



    <div class="toutelescartes">




            <section class="espaceCarteSuperHero">
            
            <?php
            foreach ($arrayNom as $key => $value) {
                if ($value['categorie']==="super héros") {
                    // var_dump($value['id']);
                    $prepa->execute([$value['id']]);
                    $arrayPhoto = $prepa->fetchAll(PDO::FETCH_ASSOC);
                foreach ($arrayPhoto as $newkey => $newValue) {
                    // var_dump($newValue);
                    ?><div class="carte"><?php
                    echo "<img src='".$newValue['photo']."'alt='' srcset='' width='150em' class='imgcarte'>";
                }

                    ?>
                    <section class="descriptionGateau">
                        <?php echo $value["nom"]; ?>
                        <?php echo $value["description"]; ?>
                        
                         
                        <div class="tout">
                            
                            <div class="systeme">
                                <img src="./IMAGE_MAQUETTE/NoPath - Copie (6).png" alt="" class="like">
                               <span class="liksys">0</span>
                            </div>
                        </div>
                    </section>
                    </div> 
                <?php    
                }
            }
            ?>
               

            </section>

            <section class="espaceCarteDessinAnime">

            
            <?php
            foreach ($arrayNom as $key => $value) {
                if ($value['categorie']==="dessin animé") {
                    // var_dump($value['id']);
                    $prepa->execute([$value['id']]);
                    $arrayPhoto = $prepa->fetchAll(PDO::FETCH_ASSOC);
                foreach ($arrayPhoto as $newkey => $newValue) {
                    // var_dump($newValue);
                    ?><div class="carte"><?php
                    echo "<img src='".$newValue['photo']."'alt='' srcset='' width='150em' class='imgcarte'>";
                }

                    ?>
                    <section class="descriptionGateau">
                        <?php echo $value["nom"]; ?>
                        <?php echo $value["description"]; ?>
                        
                         
                        <div class="tout">
                            
                            <div class="systeme">
                                <img src="./IMAGE_MAQUETTE/NoPath - Copie (6).png" alt="" class="like">
                               <span class="liksys">0</span>
                            </div>
                                <!-- <img src="./IMAGE_MAQUETTE/NoPath - Copie (26).png" alt="" class="commentaire" width="28px"> -->
                        </div>
                    </section>
                    </div> 
                <?php    
                }
            }
            ?>




             
    
                

            </section>

            <section class="espaceCarteJeuxVideo">
            
            <?php
            foreach ($arrayNom as $key => $value) {
                if ($value['categorie']==="jeux video") {
                    // var_dump($value['id']);
                    $prepa->execute([$value['id']]);
                    $arrayPhoto = $prepa->fetchAll(PDO::FETCH_ASSOC);
                foreach ($arrayPhoto as $newkey => $newValue) {
                    // var_dump($newValue);
                    ?><div class="carte"><?php
                    echo "<img src='".$newValue['photo']."'alt='' srcset='' width='150em' class='imgcarte'>";
                }

                    ?>
                    <section class="descriptionGateau">
                        <?php echo $value["nom"]; ?>
                        <?php echo $value["description"]; ?>
                        
                         
                        <div class="tout">
                            
                            <div class="systeme">
                                <img src="./IMAGE_MAQUETTE/NoPath - Copie (6).png" alt="" class="like">
                               <span class="liksys">0</span>
                            </div>
                                <!-- <img src="./IMAGE_MAQUETTE/NoPath - Copie (26).png" alt="" class="commentaire" width="28px"> -->
                        </div>
                    </section>
                    </div> 
                <?php    
                }
            }
            ?>
             
    
                

            </section>

            <section class="espaceCarteFilm">
            
                <?php
            foreach ($arrayNom as $key => $value) {
                if ($value['categorie']==="film") {
                    // var_dump($value['id']);
                    $prepa->execute([$value['id']]);
                    $arrayPhoto = $prepa->fetchAll(\PDO::FETCH_ASSOC);
                    foreach ($arrayPhoto as $newkey => $newValue) {
                        // var_dump($newValue);
                    ?><div class="carte"><?php
                    echo "<img src='".$newValue['photo']."'alt='' srcset='' width='150em' class='imgcarte'>";
                    ?>
                    <?php
                    }
                    
                    ?>
                    <section class="descriptionGateau">
                        <?php echo $value["nom"]; ?>
                        <?php echo $value["description"]; ?>
                        
                        
                        <div class="tout">
                            
                            <div class="systeme">
                                <img src="./IMAGE_MAQUETTE/NoPath - Copie (6).png" alt="" class="like">
                                <span class="liksys">0</span>
                            </div>
                           
                        </div>
                    </section>
                    
                    </div> 
                    <?php    
                }
            }
            ?>
            </section>

    </div>

        <div id="allvideo">
            <?php
            $compteur = 0;
            $autreVideo = 0;
            $precVideo = 0;
            foreach ($arrayNom as $key => $value) {
                // var_dump($value['nom']);
                


                    $prepar->execute([$value['id']]);
                    $arrayVideo = $prepar->fetchAll(\PDO::FETCH_ASSOC);

                    foreach ($arrayVideo as $newkey => $newValue) {
                        if ($newValue['video'] != NULL) {
                            
                            $compteur++;
                            $autreVideo++;
                            $precVideo++;
                            // var_dump($newValue['video']);
                            
                            echo "<section class='espacevideo$compteur'>
                            
                            <div class='titresection'>
                            <h1>Création Filmée </h1>
                            <img src='./IMAGE_MAQUETTE/NoPath - Copie (9).png' alt='' width='80px'>
                            </div>

                            <div class ='cartevideo'>

                                <video id='source' controls width='250px' muted src='".$newValue['video']."'></video>
                                <section class='description'>

                                <p class ='titresection'>".$value['nom']." ".$value['description']."</p>
                                
                                </section>

                                <section class='change'>
                                    <p class='precedent$precVideo'>Précedent</p>
                                    <p class='autre$autreVideo'>Autre vidéo</p>
                       
                                </section>
                            </div>

                            </section>";
                        }
                    }
                
            }
            ?>
          
        </div>

        <footer class="leFooter">
                <a href="https://www.facebook.com/Cindys-cakes-768045513577661">facebook: CINDY'S CAKES </a>
               <img src="./IMAGE_MAQUETTE/NoPath - Copie (2).png" alt="" class="icon1">
               
           </footer>
    </div>

   
</body>
<script src="./gateau.js" defer></script>
<script src="./produit.js" defer></script>
</html>