<?php 
    $badWord = $_POST["badWordInput"];

    $sentence = $_POST["sentenceInput"];

    $newSentence = str_replace($badWord, "***", $sentence);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BEEP!</title>
    </head>

    <body>
        <h2>
            You wrote: <?php echo $sentence ?>
        </h2>

        <h3>
            The bad word is "<?php echo $badWord ?>".
        </h3>

        <h1>
            BEEP!
        </h1>

        <h4>
            Rude...Watch your language.
        </h4>

        <h3>The POLITE sentence would be: <?php echo $newSentence ?></h3>
    </body>
</html>