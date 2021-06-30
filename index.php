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
    <?php include __DIR__ .'/header.php'; ?>


    <main>
        <!-- ciclo sui dischi -->
        <?php foreach($dischi as $DiscoSingolo){; ?>
        
        
        <div class='disco-singolo'>
            <img src="<?php echo $DiscoSingolo['poster']; ?>" alt="immagine disco">
            <div class="titolo">
                <?php echo $DiscoSingolo['titolo']; ?>
            </div>
            <div class="autore">
                <?php echo $DiscoSingolo['autore']; ?>
            </div>
            <div class="genere">
                <?php echo $DiscoSingolo['genere']; ?>
            </div>
            <div class="anno">
                <?php echo $DiscoSingolo['anno']; ?>
            </div>
            
            
        </div>



        <?php 
        
        }; ?>
        
    </main>





    <?php include __DIR__ .'/footer.php'; ?>
</body>
</html>
