<?php

$a = 10;
$b = 2;

if ($b == 0) {
    echo "Nie można obliczyć wyniku - nie wolno dzielić przez zero.<br>";
} else {
    echo "Wynik: " . ($a / $b) . "<br>";
}


$a = 10;
$b = 2;
$c = 6;
$d = 3;

if ($b == 0 || $d == 0) {
    echo "Nie można obliczyć wyniku - nie wolno dzielić przez zero.<br>";
} else {
    echo "Wynik: " . ($a / $b + $c / $d) . "<br>";
}


$a = 10;
$b = 6;

if ($b - 4 == 0) {
    echo "Nie można obliczyć wyniku - mianownik nie może być równy zero.<br>";
} else {
    echo "Wynik: " . (($a + 6) / ($b - 4)) . "<br>";
}


$liczba = 8;

if ($liczba % 2 == 0) {
    echo "Liczba jest parzysta.<br>";
} else {
    echo "Liczba jest nieparzysta.<br>";
}


$a = 20;
$b = 5;

if ($b == 0) {
    echo "Nie można dzielić przez zero.<br>";
} elseif ($a % $b == 0) {
    echo "Pierwsza liczba jest podzielna przez drugą.<br>";
} else {
    echo "Pierwsza liczba nie jest podzielna przez drugą.<br>";
}


$liczba = -5;

if ($liczba > 0) {
    echo "Liczba jest dodatnia.<br>";
} elseif ($liczba < 0) {
    echo "Liczba jest ujemna.<br>";
} else {
    echo "Liczba jest równa 0.<br>";
}


$a = 15;
$b = 8;
$c = 20;

$najwieksza = $a;

if ($b > $najwieksza) {
    $najwieksza = $b;
}

if ($c > $najwieksza) {
    $najwieksza = $c;
}

echo "Największa liczba: " . $najwieksza . "<br>";


$a = 8;
$b = 3;
$c = 5;

if ($a > $b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

if ($a > $c) {
    $temp = $a;
    $a = $c;
    $c = $temp;
}

if ($b > $c) {
    $temp = $b;
    $b = $c;
    $c = $temp;
}

echo $a . ", " . $b . ", " . $c . "<br>";


$dataUrodzenia = new DateTime("2008-09-22");
$dzisiaj = new DateTime();

$wiek = $dzisiaj->diff($dataUrodzenia)->y;

if ($wiek >= 18) {
    echo "Osoba jest pełnoletnia. Wiek: " . $wiek . "<br>";
} else {
    echo "Osoba nie jest pełnoletnia. Wiek: " . $wiek . "<br>";
}


$znak = "A";

if (ctype_upper($znak)) {
    echo "Jest to duża litera.<br>";
} elseif (ctype_lower($znak)) {
    echo "Jest to mała litera.<br>";
} elseif (ctype_digit($znak)) {
    echo "Jest to cyfra.<br>";
} else {
    echo "Jest to inny znak.<br>";
}


$liczba = 121;

if ($liczba < 100 || $liczba > 999) {
    echo "Podana liczba nie jest trzycyfrowa.<br>";
} else {
    $setki = intdiv($liczba, 100);
    $jednosci = $liczba % 10;

    if ($setki == $jednosci) {
        echo "Liczba jest palindromem.<br>";
    } else {
        echo "Liczba nie jest palindromem.<br>";
    }
}


$liczba = 28;

if ($liczba < 0 || $liczba > 99) {
    echo "Podaj liczbę maksymalnie dwucyfrową.<br>";
} else {
    $dziesiatki = intdiv($liczba, 10);
    $jednosci = $liczba % 10;

    if (($dziesiatki % 2 == 0 && $jednosci % 2 == 0) || ($dziesiatki + $jednosci == 4)) {
        echo "Warunek jest spełniony.<br>";
    } else {
        echo "Warunek nie jest spełniony.<br>";
    }
}


$punkty = 85;

if ($punkty >= 0 && $punkty <= 29) {
    echo "Ocena niedostateczna";
} elseif ($punkty <= 59) {
    echo "Ocena dopuszczająca";
} elseif ($punkty <= 74) {
    echo "Ocena dostateczna";
} elseif ($punkty <= 89) {
    echo "Ocena dobra";
} elseif ($punkty <= 99) {
    echo "Ocena bardzo dobra";
} elseif ($punkty == 100) {
    echo "Ocena celująca";
} else {
    echo "Nieprawidłowa liczba punktów.";
}

?>
