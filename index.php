<?php

## PHP - Les dates
## Pour tous les exercices, vous pouvez utiliser le site http://php.net
## N'hesitez pas à faire des pages avec du HTML/CSS

## Exercice 1 Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016)

echo date('d/m/Y');

echo "<br><br>";
## Exercice 2 Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)

echo date('d-m-y');

echo "<br><br>";

## Exercice 3 Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
## Bonus : Le faire en français.
setlocale(LC_TIME,'fr_FR');
date_default_timezone_set('Europe/Paris');
echo strftime('%A');

echo "<br><br>";

## Exercice 4 Afficher le timestamp du jour.

echo time();
echo "<br><br>";
## Afficher le timestamp du mardi 2 août 2016 à 15h00.

echo mktime('15', '00', '00', '08', '2', '2016');

echo "<br><br>";

##Exercice 5 Afficher le nombre de jours qui séparent la date du jour avec le 16 mai 2016.

echo "<br><br>";
$date = new DateTime('2016-05-16');
$today = new DateTime('2022-01-14');
$result = $date->diff($today);
echo $result->format('%a');

##Exercice 6 Afficher le nombre de jours dans le mois de février de l'année 2016.

echo "<br><br>";
$start = new DateTime('2016-02-01');
$end = new DateTime('2016-03-01');

echo $start->diff($end)->format('%a');

##Exercice 7 Afficher la date du jour + 20 jours.

$date20 = new DateTime('2022-01-14');
$date20->modify('+ 20 days');

echo "<br><br>";
echo $date20->format('d-m-Y');

##Exercice 8 Afficher la date du jour - 22 jours

echo "<br><br>";
$date2 = new DateTime('2022-01-14');

## TP Faire un formulaire avec deux listes déroulantes.
## La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
# MEGA BONUS ( surligné et caractère gras :-)  ) : En fonction des choix, afficher un calendrier ( voir libs JS ou autres )

?>

<form action="#" >
    <select name="month" id="month">
        <option value="1">janvier</option>
        <option value="2">février</option>
        <option value="3">mars</option>
        <option value="4">avril</option>
        <option value="5">mai</option>
        <option value="6">juin</option>
        <option value="7">juillet</option>
        <option value="8">aout</option>
        <option value="9">septembre</option>
        <option value="10">octobre</option>
        <option value="11">novembre</option>
        <option value="12">décembre</option>
    </select>

    <select name="year" id="year">
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
    </select>
    <input type="submit">
</form>
