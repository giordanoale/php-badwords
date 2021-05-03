<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre * -->

<?php 

    $frase = "A come amore. B come bruco. C come cavalletta. D dai cazzo!";

    $badword = $_GET["parolaccia"];
    
    $frase_censurata = str_replace($badword, "***", $frase);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad words</title>
</head>
<body>
    <h1> <?php echo $frase_censurata; ?> </h1>
    <h2> La frase è formata da <?php echo strlen($frase_censurata); ?> caratteri</h2>
</body>
</html>