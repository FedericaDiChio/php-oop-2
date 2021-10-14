<?php 
require_once __DIR__ . '/Models/Premium.php';
require_once __DIR__ . '/Models/Ereader.php';
require_once __DIR__ . '/Models/Ebook.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- SECTION USERS  -->
    <section> 
        <!-- USER STANDARD  -->
        <div>
            <p>Utente: <?php echo $user1->getFullName(); ?></p>
            <p>Email: <?= $user1->getEmail(); ?></p>
            <p>Indirizzo di spedizione: <?= $user1->getAddress(); ?></p>
            <p>Il tuo sconto è: <?= $user1->getDiscount(); ?>%</p>
        </div>
        <hr>
        <!-- USER PREMIUM 2 -->
        <div>
            <p>Utente: <?= $premium2->getFullName(); ?></p>
            <p>Email: <?= $premium2->getEmail(); ?></p>
            <p>Indirizzo di spedizione: <?= $premium2->getAddress(); ?></p>
            <p>Livello:<?= $premium1->getLevel(); ?></p>
            <p>Il tuo sconto è: <?= $premium2->getDiscount(); ?>%</p>
        </div>
        <hr>
    </section>
    <!-- SECTION PRODUCTS  -->
    <section>   
        <h3>PRODOTTI</h3>
        <!-- PRODUCT TABLET  -->
        <div>
            <h5>TABLET</h5>
            <p>Marca: <?= $Tablet1->brand ?></p>
            <p>Memoria: <?= $Tablet1->storage ?></p>
            <p>Colore: <?= $Tablet1->color ?></p>
            <p>Prezzo €: <?= $Tablet1->price ?></p>

        </div>
        <hr>
        <!-- PRODUCT EREADER  -->
        <div>
            <h5>E-READER</h5>
            <p>Marca: <?= $Ereader1->brand ?></p>
            <p>Memoria: <?= $Ereader1->storage ?></p>
            <p>Compatibilità: <?= $Ereader1->compatibility ?></p>
            <p>Prezzo €: <?= $Ereader1->price ?></p>
        </div>
        <hr>
        <!-- PRODUCT BOOK  -->
        <div>
            <h5>LIBRO</h5>
            <p>Titolo: <?= $Book1->title ?></p>
            <p>Autore: <?= $Book1->author ?></p>
            <p>Prezzo €: <?= $Book1->price ?></p>
        </div>
        <hr>
        <!-- PRODUCT EBOOK  -->
        <div>
        <div>
            <h5>E-BOOK</h5>
            <p>Titolo: <?= $Ebook1->title ?></p>
            <p>Autore: <?= $Ebook1->author ?></p>
            <p>Formato file: <?= $Ebook1->format ?></p>
            <p>Peso file: <?= $Ebook1->size ?></p>
            <p>Prezzo €: <?= $Ebook1->price ?></p>
        </div>
        </div>
    </section>
</body>
</html>