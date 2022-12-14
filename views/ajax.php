<?php

$names = ["BurgerX", "SultanDine", "Burgerlogy", "Burgerking", "Burgerhub",
"CoffeeHouse", "Takeout", "Takeout2", "Tstack", "kacchivai", "HaziBirani",
"HanifBirani", "Hoa chi", "KolkataBirani", "Magpie", "La royale",
"cafe sub", "just juice", "latest Receipe", "Seasonal tea", "olea", "Aqua",
"Pizzahub", "pizzalogy", "pizzaking", "indiaFood", "pizzaburg",
"dhakai", "bigbit", "sultan", "hamimRestuarnt", "Cha pi",
"coffeehub", "Teahub", "99", "sip bite", "yim cha"];


$input = $_REQUEST["i"];

 
$suggestion = "";

 
if ($input !== "") {
    $input = strtolower($input);
    $len=strlen($input);
    foreach($names as $name) {
        if (stristr($input, substr($name, 0, $len))) {
            if ($suggestion === "") {
                $suggestion = $name;
            } else {
                $suggestion .= ", $name";
            }
        }
    }
}


if($suggestion === "") {
	echo "Sorry Data not found. Please try again";
} else{
	echo $suggestion;
}
?>