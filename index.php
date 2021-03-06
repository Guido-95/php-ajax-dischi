<?php 
    // struttura dati
    include __DIR__ .'/dati/database.php';  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>php dischi</title>
</head>
<body>
    <!-- header -->
    <?php include __DIR__ .'/header.php'; ?>
    <!-- /header -->

    <main>
        <!-- ciclo sui dischi -->
        <?php foreach($dischi as $DiscoSingolo){; ?>
        <!-- /ciclo sui dischi -->   
        
        <!-- disco -->
        <div class='disco-singolo'>
            <img src="<?php echo $DiscoSingolo['poster']; ?>" alt="immagine disco">
            <div class="titolo">
                <h3> <?php echo $DiscoSingolo['titolo']; ?> </h3>
            </div>
            <div class="autore">
                <h4><?php echo $DiscoSingolo['autore']; ?></h4>
            </div>
            <div class="genere">
               <h4><?php echo $DiscoSingolo['genere']; ?></h4> 
            </div>
            <div class="anno">
                <?php echo $DiscoSingolo['anno']; ?>
            </div>
        </div>
        <!-- /disco -->

        <!-- chiusura ciclo -->
        <?php 
        
        }; ?>
        <!-- /chiusura ciclo -->
    </main>
    <!-- footer -->
    <?php include __DIR__ .'/footer.php'; ?>
    <!-- /footer -->
</body>
</html>
