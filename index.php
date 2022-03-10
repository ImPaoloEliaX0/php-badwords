<?php
    echo '<h1>Non dire cattive parole!</h1>';


/*definizione del termine e print*/
    $termine = $_GET['termine'];
    echo $termine;

    echo '<h3>Il termine è lungo:</h3>';

    $termineLunghezza = strlen($termine);

    echo $termineLunghezza;

    if($termine == 'parolaccia') {

        echo '<h3>Hai detto una parolaccia!</h3>';

        $termineReplace = str_replace('parolaccia', '**********', $termine);

        echo $termineReplace;
    } else {

        echo '<h3>Bene, almeno non hai detto parolacce.</h3>';
    }
    
?>