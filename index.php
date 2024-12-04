<?php

echo "***** Dictionnaire ******";
echo "<br/><br/>";

// /* Exercise 1 */
$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);

$length = count($dico);
echo "Ce dictionnaire contient : {$length} mots";
echo "<br/><br/>";

/* Exercise 2 */
$counter = 0;
foreach ($dico as $value) {
    $value = trim($value);
    if (strlen($value) === 15) $counter++; 
}
echo "Nombre de mots a 15 lettres : {$counter}";
echo "<br/><br/>";

/* Exercise 3 */
$counterW = 0;
foreach($dico as $value) {
    $value = trim($value);
    if (str_contains($value, "w") || str_contains($value, "W")) $counterW++; 
}
echo "Nombre de mots avec un W : {$counterW}";
echo "<br/><br/>";

/* Exercise 4 */
$counterQ = 0;
foreach($dico as $value) {
    $value = trim($value);
    if (substr($value, -1) === "q" || substr($value, -1) === "Q") $counterQ++; 
}
echo "Nombre de mots avec un Q : {$counterQ}";
echo "<br/><br/><br/>";

echo "***** Liste de films ******";
