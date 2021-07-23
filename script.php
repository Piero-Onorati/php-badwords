<?php 

$text ='Apelle, figlio di Apollo fece una palla di pelle di pollo,  tutti i pesci vennero a galla  per vedere  quella bella palla di pelle di pollo fatta da Apelle, figlio di Apollo';

// <a href="script.php?parola=Apelle">Link</a>

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

<h2>Scioglilingua</h2>

<p> <?php echo $text ?> </p>

<h3> La lunghezza del paragrafo è : <?php echo strlen($text); ?> lettere</h3>
    
</body>
</html>