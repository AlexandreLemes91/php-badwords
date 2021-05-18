<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>
<body>
    
    <?php
    //Creare una variabile con assegnato un testo per popolare un paragrafo
    $text = "L'unica cosa migliore di una mucca è un uomo.. a meno che non ti serva il latte, allora è meglio una mucca.";
    //Passare un parametro (query string) nella url chiamato badword con assegnato il valore di una parola scelta da voi, ottenere il suo valore con GET in PHP e sostituire ogni ricorrenza di questa parola, all'interno del testo creato da voi sopra, con tre *.
    $censure = $_GET['badword'];
    echo var_dump($text);
    echo var_dump($censure);
    ?>

    <!-- Visualizzare a schermo il paragrafo. -->
    <p>
        Walter Bishop say: <?php echo $text ?> <br/>
        Lunghezza string: <?php echo strlen($text) ?> <br/>
        testo censurato: <?php echo str_replace($censure, '*****', $text) ?>
    </p>
</body>
</html>