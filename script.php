<?php 

$text ='‘Severus, here,’ said Voldemort, indicating the seat on his
immediate right. ‘Yaxley – beside Dolohov.’
The two men took their allotted places. Most of the eyes
around the table followed Snape and it was to him that Voldemort
spoke first.
‘So?’
‘My Lord, the Order of the Phoenix intends to move Harry
Potter from his current place of safety on Saturday next, at
nightfall.’
The interest around the table sharpened palpably: : some
stiffened, others fidgeted, all gazing at Snape and Voldemort';

// <a href="script.php?bad_word=Voldemort">Link</a>

$bad_word = $_GET['bad_word'];

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

<h2>THE DARK LORD ASCENDING</h2>

<h3>This is an Extract from Harry-Potter-and-the-Deathly-Hallows </h3>

<p> <?php echo $text ?> </p>

<span><strong>Paragraph length:</strong> <?php echo strlen($text); ?> lettere</span>

<h3>Since Voldemort is "You-Know-Who" or "He-Who-Must-Not-Be-Named" and therefore written or read...</h3>

<p> 
    <?php 
        $new_text = str_replace( $bad_word, '(***)', $text);
        echo $new_text ;
    ?> 
</p>

<span><strong>Paragraph length:</strong> <?php echo strlen($new_text); ?> lettere</span>



    
</body>
</html>