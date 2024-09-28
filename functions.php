<?php

function calculateFullAge($dob) {
    $birthDate = new DateTime($dob);
    $currentDate = new DateTime();
    $age = $currentDate->diff($birthDate);
    return $age->y . " years, " . $age->m . " months, and " . $age->d . " days";
}

