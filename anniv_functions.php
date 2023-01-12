<?php
$list_anniv = [
    'Amélie' => '2010-08-09',
    'Pauline' => '2013-01-31',
    'Alex' => '1982-09-09',
    'Maman' => '1953-12-21',
    'Thierry' => '1976-01-26',
    'Benjamin' => '1978-04-04',
    'Flo' => '1984-06-23',
    'Papa' => '1952-01-21',
    'Raphaël' => '2007-05-01',
    'Maël' => '2012-02-05',
    'Alice' => '2015-09-25',
    'Céline' => '1982-08-15',
    "Test" => '2012-10-31',
    "cicdd" => '2012-10-31',
    "Test3" => '2012-11-07',
    "Test2" => '2012-11-14'
];

$happyBdarr = [];
$actualDate = new DateTime();

function french_date($datefr) {
    $datepart = str_replace('/', '-', $datefr);
    $anniv = new DateTime($datepart);
    $dateMail = $anniv->add(new DateInterval('P1D')); // ajout d'un jour pour corriger bug de la date lors de l'envoi du mail
    $annive = $dateMail->format('Y-m-d');
    $fmt = new IntlDateFormatter(
        "fr-FR", 
        IntlDateFormatter::FULL, 
        IntlDateFormatter::FULL, 
        'Etc/UTC', 
        IntlDateFormatter::GREGORIAN, 
        'd MMMM'
    );
    return $fmt->format(new DateTime($annive));
}

function preBDay($list_anniv, $actualDate) : array
{
    foreach($list_anniv as $k => $anniv) {
        $realAnniv = new DateTime($anniv);
        $dateAnniv = new DateTime($anniv);
        $interval = new DateInterval('P1W');
        $bDay7 = $dateAnniv->sub($interval);
        $dateAnniv2 = new DateTime($anniv);
        $interval2 = new DateInterval('P2W');
        $bDay14 = $dateAnniv2->sub($interval2);
        $ageDay = $actualDate->diff($realAnniv, true)->y;
        switch ($actualDate->format('m-d')) {
            case $realAnniv->format('m-d'):
                $happyBdarr[] = ['name' => $k, 'date' => $realAnniv->format('d/m/Y'), 'age' => $ageDay, 'birthday' => 0];
                break;
            case $bDay7->format('m-d'):
                $happyBdarr[] = ['name' => $k, 'date' => $realAnniv->format('d/m/Y'), 'age' => $ageDay, 'birthday' => 7];
                break;
            case $bDay14->format('m-d'):
                $happyBdarr[] = ['name' => $k, 'date' => $realAnniv->format('d/m/Y'), 'age' => $ageDay, 'birthday' => 14];
                break;
            default :
                $happyBdarr[] = ['name' => $k, 'date' => $realAnniv->format('d/m/Y'), 'age' => $ageDay, 'birthday' => 1];
        }
    }
    return $happyBdarr;
}

$happyBirthday = preBDay($list_anniv, $actualDate);

