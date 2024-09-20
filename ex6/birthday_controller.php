<?php

if ($_SERVER['REQUEST_METHOD'] && isset($_POST['date'])) {
    $now = new DateTime('now',new DateTimeZone('Europe/Madrid'));

    $birthday = new DateTime($_POST['date'], new DateTimeZone('Europe/Madrid'));

    if ($now > $birthday) {
        $birthday->modify('+1year');
    }

    $diff = $now->diff($birthday);

    echo "Falten ",$diff->days." pel teu cumple";

}
