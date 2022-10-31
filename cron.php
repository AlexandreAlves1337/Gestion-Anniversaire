<?php
require "anniv_functions.php";

$columns = array_column($happyBirthday , 'birthday');
array_multisort($columns, SORT_ASC, $happyBirthday);

$i=0;
$j=0;

$message = "Bonjour Alexandre.<br/>";
foreach($happyBirthday as $k => $bDvalue) {
    switch ($bDvalue['birthday']) {
        case 0:
            $j++;
            if ($j==1) {$subject = "C'est l'anniversaire de ";}
            if ($j>1) {$subject .= " et de ";}
            $subject .= "{$bDvalue['name']}";
            $message .= "<p>C'est l'anniversaire de {$bDvalue['name']} qui vient d'avoir {$bDvalue['age']} ans</p>";
            break;
        case 7:
        case 14:
            $i++;
            if ($j==0 && $i==1) {$subject = "C'est bientôt l'anniversaire de ";}
            if ($j>0 && $i==1) {$subject .= " et c'est bientôt l'anniversaire de ";}
            if ($i>1) {$subject .= " et de ";}
            $subject .= "{$bDvalue['name']}";
            $agef = $bDvalue['age']+1;
            $dateAnniv = french_date($bDvalue['date']);
            $semaine = ($bDvalue['birthday'] == 7) ? "une semaine" : "deux semaines";
            $message .= "<p>C'est bientôt l'anniversaire de {$bDvalue['name']} qui va avoir {$agef} ans dans {$semaine} le {$dateAnniv}</p>";
            break;
    }
}

$message .= 'Pour faire valoir ce que de droit.<br/><a href="https://alexandrealves.fr/anniv.php">Voir la liste des anniversaires</a>';

if (!empty($subject)) {
    $to = "a.alves1337@gmail.com";
    $headers = [
        "From" => "Alexandre Alves <no-reply@alexandrealves.fr>",
        "Content-Type" => "text/html; charset=utf-8"
    ];
    //mail($to, $subject, $message, $headers);
}

echo $message;