<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 11/11/2018
 * Time: 21:50
 */
$annee=[2005,2006,2007,2008,2009,2010];
$tab=["Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi"];
for ($i=0;$i<count($annee);$i++) {
    $day = date("w", mktime(00, 00, 00, 05, 01, $annee[$i]));
    if ($day==='0' || $day==='6') echo $annee[$i]." ".$tab[$day]." désolé "."<br>";
        elseif ($day==='1' || $day==='5') echo $annee[$i]." ".$tab[$day]." week-end prolongé "."<br>";
        else echo  $annee[$i]." ".$tab[$day]."<br>";
}
?>