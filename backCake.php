<?php
session_start();

include './getPhoto.php';
if(!isset($_SESSION['verif'])){
    header('location: ./index.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./backO.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>CINDY'S CAKES</title>
</head>
<body>
    <!-- JE CREE MA NAVBAR -->
    <header class="navbar">
        <img src="./IMAGE_MAQUETTE/NoPath - Copie (15).png" class="mainLogo" alt="">
        <a href="index.html">Accueil</a>
        <a href="sndpage.php" class="sndpage">Produit</a>
        <img src="./IMAGE_MAQUETTE/gateau_good_.png" alt="" class="logoNav">
        <a href="contact.php" class="contact">Contact</a>
        <a href="deconnexion.php" class="deco">deconnexion</a>
    </header>
    <!-- CES L'IMAGE D'ACCUEIL -->
    <div class="accueil">
        <div class="menuNavbar">
            <a href="index.html" class="acc">Accueil</a>
            <a href="sndpage.php">Produit</a>
            <a href="contact.php" class="contact">Contact</a>
            <!-- <p>Connexion Admin</p> -->
        </div>
    </div>


    <form action="upload.php" method="post" enctype="multipart/form-data" class="upFichier">
        <h2><u>Upload Fichier</u></h2>
        <label for="fileUpload">Fichier:</label>
        <input type="file" name="photo" id="fileUpload" data-preview=".preview">
        <!-- <input type="submit" name="submit" value="Upload" > -->
        <img src="" alt="" class="preview">
        <p><strong>Note:</strong> Seuls les formats .jpg, .jpeg, .jpeg, .gif, .png sont autorisés jusqu'à une taille maximale de 5 Mo.</p>
    
        <h2><u> rajouter nom et description</u> </h2>
                <label for="nom">Nom:</label>
                <input type="text" name="nomCake" class="Nom">

                <label for="description">Description:</label>
                <input type="text" name="descriptionCake" class="Prenom">

                <label for="categorie">categorie: </label>
                
                <select name="categorie" id="categorie">
                    <option value="">--Catégorie--</option>
                    <option value="super héros">super heros</option>
                    <option value="dessin animé">dessin animé</option>
                    <option value="jeux video">jeux video</option>
                    <option value="film">film</option>
                </select>

                <input type="submit" name="submit" value="Enregistrer" >

                <span><?php
                   if(isset($_SESSION['format'])){
                       echo $_SESSION['format'];
                   }
                ?></span>
    </form>
    <h2><u>tous les gâteaux</u></h2>
<div class="allPicture">
    

    <?php foreach ($arrayPhoto as $key => $value) { ?>
        <!-- <?php var_dump($value['gateau_id']); ?>  -->
        <div class="containerBack">   
                <img src="<?php echo $value['photo'] ?>"alt="" srcset="" width="150em">
                <?php
                // $requeteGetNom = "SELECT `id`, `nom`, `description` FROM `gateau` WHERE id = ?";
                // $prep = $database->prepare($requeteGetNom);

                $prep->execute([$value['gateau_id']]);

                $arrayNom = $prep->fetchAll(PDO::FETCH_ASSOC);
                // var_dump($arrayNom);
                foreach ($arrayNom as $value => $newValue) {
                    // var_dump($newValue['nom']);
                    ?>
                    
                        <u>Nom:</u> 
                    <?php echo $newValue['nom']?>

                    <u>Description:</u>
                    <?php echo $newValue['description'] ?> 
                    <!-- <input type="hidden" value="<?php$value['gateau_id']?>"> -->

                    <a href="delete.php?id=<?php echo $newValue['id'];?>">supprimer</a>
                
                    <?php
                }
                ?>
        </div>            
        <?php    
        }
        ?>
    </div>
   

  

    <footer class="leFooter">
        <!-- <p> facebook: CINDY'S CAKES <br> fait par M.G</p> -->
        <!-- <img src="./IMAGE_MAQUETTE/NoPath - Copie (2).png" alt="" class="icon1"> -->
    </footer>
</body>
<script src="./gateau.js" defer></script>
<script src="./uploadFichier.js" defer></script>
</html>