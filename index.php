<?php
spl_autoload_register(function($className) {
$file = "{$className}.php";

$file = str_replace(
'\\',
DIRECTORY_SEPARATOR,
$file
);

if (!file_exists($file)) {
die("{$file} not found");
}

require_once $file;
});

$first_names_db=[
    "Odette",
    "Chip",
    "Osgood",
    "Trefor",
    "Fax",
    "Miranda",
    "Regan",
    "Ciel",
    "Zarah",
    "Goldie",
    "Jaquenette",
    "Sinclare",
    "Emmery",
    "Rutter",
    "Maddy",
    "Celinda",
    "Michel",
    "Bryce",
    "Naoma",
    "Bianka"
];

$last_names_db = [
    "Slogrove",
    "Maleney",
    "Dimitru",
    "Chittey",
    "Burnup",
    "Vaughn",
    "Langtree",
    "Viles",
    "Dumingos",
    "Custy",
    "Everton",
    "Oleszcuk",
    "Haseldine",
    "Nesterov",
    "Asplen",
    "Crowcher",
    "Wedlock",
    "Wyborn",
    "Gwin",
    "Tomasian"
];
$city_db=[
    "Shouchun",
    "Hamada",
    "Acheng",
    "Birmingham",
    "Conde",
    "Wahawaha",
    "San Lorenzo",
    "Lipin Bor",
    "Melaka",
    "Koper",
    "Malianzhuang",
    "Teuva",
    "Runan",
    "Wolong",
    "Kuanfatu",
    "Sete Cidades",
    "Biny Selo",
    "Delft",
    "Mosfilotí",
    "Ko Chan"
];

$humen = new NameGenerator($first_names_db, $last_names_db);
$city = new CityGenerator($city_db);

for($i=0; $i<=10; $i++) {

    echo "<b>" . $humen->generateValue() . "</b>" .  " was born in " . "<b>" . $city->generateValue() . "</b><br>";

}