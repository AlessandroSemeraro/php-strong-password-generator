<?php
require_once __DIR__ .'/utilities/functions.php';

//condizione dove se la psw è popolata in questo modo allora genera psw//
if ($_GET['length'] && is_numeric($_GET['length'])){ ?>
    <h1>
        Your newly SUPER SAFE generated password is:
    </h1>
    <pre>
        <?php
            $generatedPsw = createPassword( intval($_GET['length']), $_GET['repeatRadio'], generateCharsPool( $_GET['chars'],1, isset($_GET['numbers']), isset($_GET['symbols'])));

            echo $generatedPsw;
        ?>
    </pre>
<?php } else {?>
    <p>
        <strong>
            Mistakes have been made... please try again!
        </strong>
    </p>
<?php }