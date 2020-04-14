<?php
include('connect_db.php');
$rainfall = $_POST['rainfall'];
$shade = $_POST['shade'];
$organic_carbon = $_POST['organic_carbon'];
$phosphorus = $_POST['phosphorus'];
$potassium = $_POST['potassium'];
$shade = $_POST['shade'];
$age = $_POST['age'];
$rainfall_count = $_POST['rainfall_count'];
$season_count = $_POST['season_count'];
$yield_type = $_POST['yield_type'];
$number_of_bags = $_POST['number_of_bags'];
// echo $rainfall;
// echo $shade;
// echo $yield_type;
// echo $number_of_bags;
if($yield_type == "Parchment"){
   $initial_value = $number_of_bags * 50 * 0.8;
}
else if($yield_type == "Cherry"){
    $initial_value = $number_of_bags * 50 * 0.5;
}

$initial_value_1 = $initial_value/100;
$standard_value_1 = 10 * $initial_value_1;
$standard_value_2 = 7 * $initial_value_1;
$standard_value_3 = 10 * $initial_value_1;
if($initial_value<=1000){
    $base_value_1 = $standard_value_1 + 20;
    $base_value_2 = $standard_value_2 + 20;
    $base_value_3 = $standard_value_3 + 20;
    echo round($base_value_1);
    echo ":";
    echo round($base_value_2);
    echo ":";
    echo round($base_value_3);
    echo "<br>";
}
else if($initial_value>1000){
    $base_value_1 = $standard_value_1 + 30;
    $base_value_2 = $standard_value_2 + 30;
    $base_value_3 = $standard_value_3 + 30;
    echo round($base_value_1);
    echo ":";
    echo round($base_value_2);
    echo ":";
    echo round($base_value_3);
    echo "<br>";
}
//nutrients values fetched
//nitrogen
if (($organic_carbon <= 1.0) && ($organic_carbon>0.7)){
    $nitrogen_base_value = $base_value_1 + ($base_value_1 * 0.1);
}
else if(($organic_carbon <= 0.7) && ($organic_carbon >=0)){
    $nitrogen_base_value = $base_value_1 + ($base_value_1 * 0.2);
}
else if(($organic_carbon <= 2.5) && ($organic_carbon >=1)){
    $nitrogen_base_value = $base_value_1;
}
else{
    $nitrogen_base_value = $base_value_1;
}
// echo $nitrogen_base_value;
//phosphorus
if (($phosphorus <= 9.0) && ($phosphorus>6.3)){
    $phosphorus_base_value = $base_value_2 + ($base_value_2 * 0.1);
}
else if(($phosphorus <=6.3) && ($phosphorus >=0)){
    $phosphorus_base_value = $base_value_2 + ($base_value_2 * 0.2);
}
else if(($phosphorus <=22.0) && ($phosphorus >=9.0)){
    $phosphorus_base_value = $base_value_2;
}
else if(($phosphorus <=26.6) && ($phosphorus >22.0)){
    $phosphorus_base_value = $base_value_2 - ($base_value_2 * 0.1);
}
else if(($phosphorus <=35.2) && ($phosphorus >26.6)){
    $phosphorus_base_value = $base_value_2 - ($base_value_2 * 0.2);
}
else{
    $phosphorus_base_value = $base_value_2 - ($base_value_2 * 0.2);
}
// echo $phosphorus_base_value;
// potassium
if (($potassium <= 125.0) && ($potassium>87.5)){
    $potassium_base_value = $base_value_3 + ($base_value_3 * 0.1);
}
else if(($potassium <=87.5) && ($potassium >=0)){
    $potassium_base_value = $base_value_3 + ($base_value_3 * 0.2);
}
else if(($phosphorus <=250.0) && ($phosphorus >=125.0)){
    $potassium_base_value = $base_value_3;
}
else if(($phosphorus <=325.0) && ($phosphorus >250.0)){
    $potassium_base_value = $base_value_3 - ($base_value_3 * 0.1);
}
else if(($phosphorus <=400.0) && ($phosphorus >325.0)){
    $potassium_base_value = $base_value_3 - ($base_value_3 * 0.2);
}
else{
    $potassium_base_value = $base_value_3 - ($base_value_3 * 0.2);
}
// echo $potassium_base_value;
echo round($nitrogen_base_value);
echo ":";
echo round($phosphorus_base_value);
echo ":";
echo round($potassium_base_value);
echo "<br>";

if($shade == "low"){
    $nitrogen_base_value_1 = $nitrogen_base_value + ($nitrogen_base_value * 0.1);
    $phosphorus_base_value_1 = $phosphorus_base_value + ($phosphorus_base_value * 0.1);
    $potassium_base_value_1 = $potassium_base_value + ($potassium_base_value * 0.1);
    $nitrogen_average_value_1 = $nitrogen_base_value_1 / $rainfall_count;
    $phosphorus_average_value_1 = $phosphorus_base_value_1 / $rainfall_count;
    $potassium_average_value_1 = $potassium_base_value_1 / $rainfall_count;
    echo round($nitrogen_base_value_1);
    echo ":";
    echo round($phosphorus_base_value_1);
    echo ":";
    echo round($potassium_base_value_1);
    echo "<br>";
    echo round($nitrogen_average_value_1);
    echo ":";
    echo round($phosphorus_average_value_1);
    echo ":";
    echo round($potassium_average_value_1);
    echo "<br>";
}
else if($shade == "medium"){
    $nitrogen_base_value_2 = $nitrogen_base_value;
    $phosphorus_base_value_2 = $phosphorus_base_value;
    $potassium_base_value_2 = $potassium_base_value;
    $nitrogen_average_value_2 = $nitrogen_base_value_2 / $rainfall_count;
    $phosphorus_average_value_2 = $phosphorus_base_value_2 / $rainfall_count;
    $potassium_average_value_2 = $potassium_base_value_2 / $rainfall_count;
    echo round($nitrogen_base_value_2);
    echo ":";
    echo round($phosphorus_base_value_2);
    echo ":";
    echo round($potassium_base_value_2);
    echo "<br>";
    echo round($nitrogen_average_value_2);
    echo ":";
    echo round($phosphorus_phosphorus_value_2);
    echo ":";
    echo round($potassium_average_value_2);
    echo "<br>";
}
else if($shade = "high"){
    $nitrogen_base_value_3 = $nitrogen_base_value - ($nitrogen_base_value * 0.1);
    $phosphorus_base_value_3 = $phosphorus_base_value - ($phosphorus_base_value * 0.1);
    $potassium_base_value_3 = $potassium_base_value - ($potassium_base_value * 0.1);
    $nitrogen_average_value_3 = $nitrogen_base_value_3 / $rainfall_count;
    $phosphorus_average_value_3 = $phosphorus_base_value_3 / $rainfall_count;
    $potassium_average_value_3 = $potassium_base_value_3 / $rainfall_count;
    echo round($nitrogen_base_value_3);
    echo ":";
    echo round($phosphorus_base_value_3);
    echo ":";
    echo round($potassium_base_value_3);
    echo "<br>";
    echo round($nitrogen_average_value_3);
    echo ":";
    echo round($phosphorus_phosphorus_value_3);
    echo ":";
    echo round($potassium_average_value_3);
    echo "<br>";
}

$sql = "INSERT INTO products (id, rainfall, shade, bags, age, organic_carbon, phosphorus, potassium,yield_type) VALUES (Null, '$rainfall', '$shade', '$number_of_bags','$age','$organic_carbon','$phosphorus','$potassium','$yield_type');";
$result = $conn->query($sql);
// echo $sql;
// if($result->num_rows>=0){
//     echo '
//     <script>
//     alert("Registered Successfully");
//     window.location = "index.php";
//     </script>';
// }
?>