<?php
error_reporting (E_ALL);
ini_set ("display_errors", 1);
$num = 10;
$myray = array();
for ($i = 0; $i < 5; $i++){
    $myray [$i] = $i;
    if ($myray [$i] % 2 == 0)
    {
        echo $myray [$i], "\n";
    }
}
echo "Reverse the list:\n";
rsort ($myray);

$cars = ["Ford" => "Mustang", "Chevy" => "Corvette", "Toyota" => "Prius"];
echo $cars["Ford"], "\n";
foreach ($cars as $model)
    echo $model, "\n";

?>