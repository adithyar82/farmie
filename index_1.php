<?php
include('connect_db.php');
$rainfall = $_POST['rainfall'];
$shade = $_POST['shade'];
$organic_carbon = $_POST['organic_carbon'];
$phosphorus = $_POST['phosphorus'];
$phosphorus_1 = $_POST['phosphorus_1'];
$nitrogen = $_POST['nitrogen'];
$nitrogen_1 = $_POST['nitrogen_1'];
$potassium = $_POST['potassium'];
$potassium_1 = $_POST['potassium_1'];
$shade = $_POST['shade'];
$age = $_POST['age'];
$block_type = $_POST['block_type'];
$rainfall_count = $_POST['rainfall_count'];
$season_count = $_POST['season_count'];
$yield_type = $_POST['yield_type'];
$yield_type_1 = $_POST['yield_type_1'];
$number_of_bags = $_POST['number_of_bags'];
echo $age;
echo $yield_type;
echo $yield_type_1;
// echo $rainfall;
// echo $shade;
// echo $yield_type;
// echo $number_of_bags;
if($age>=5){
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

}
else if($age == 1 && $block_type = "arabica"){
    $base_value_1 = 20;
    $base_value_2 = 10;
    $base_value_3 = 20;
}
else if($age == 2 && $block_type = "arabica"){
    $base_value_1 = 20;
    $base_value_2 = 10;
    $base_value_3 = 20;
}else if($age == 3 && $block_type = "arabica"){
    $base_value_1 = 25;
    $base_value_2 = 15;
    $base_value_3 = 25;
}else if($age == 4 && $block_type = "arabica"){
    $base_value_1 = 25;
    $base_value_2 = 15;
    $base_value_3 = 25;
}else if($age == 1 && $block_type = "robusta"){
    $base_value_1 = 38;
    $base_value_2 = 28;
    $base_value_3 = 28;
}else if($age == 2 && $block_type = "robusta"){
    $base_value_1 = 38;
    $base_value_2 = 28;
    $base_value_3 = 38;
}else if($age == 3 && $block_type = "robusta"){
    $base_value_1 = 38;
    $base_value_2 = 28;
    $base_value_3 = 38;
}
else if($age == 4 && $block_type = "robusta"){
    $base_value_1 = 40;
    $base_value_2 = 30;
    $base_value_3 = 40;
}
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
    $nitrogen_average_value_1 = $nitrogen_base_value_1 / $season_count;
    $phosphorus_average_value_1 = $phosphorus_base_value_1 / $season_count;
    $potassium_average_value_1 = $potassium_base_value_1 / $season_count;
    
    echo round($nitrogen_base_value_1);
    echo ":";
    echo round($phosphorus_base_value_1);
    echo ":";
    echo round($potassium_base_value_1);
    echo "<br>";
    echo "<p> Required Nutrients /kg/acre/splits :</p>";
    echo round($nitrogen_average_value_1);
    echo ":";
    echo round($phosphorus_average_value_1);
    echo ":";
    echo round($potassium_average_value_1);
    echo "<br>";
}
else if($shade == "medium"){
    $nitrogen_base_value_1 = $nitrogen_base_value;
    $phosphorus_base_value_1 = $phosphorus_base_value;
    $potassium_base_value_1 = $potassium_base_value;
    $nitrogen_average_value_1 = $nitrogen_base_value_1 / $season_count;
    $phosphorus_average_value_1 = $phosphorus_base_value_1 / $season_count;
    $potassium_average_value_1 = $potassium_base_value_1 / $season_count;
    
    echo round($nitrogen_base_value_1);
    echo ":";
    echo round($phosphorus_base_value_1);
    echo ":";
    echo round($potassium_base_value_1);
    echo "<br>";
    echo "<p> Required Nutrients /kg/acre/splits :</p>";
    echo round($nitrogen_average_value_1);
    echo ":";
    echo round($phosphorus_phosphorus_value_1);
    echo ":";
    echo round($potassium_average_value_1);
    echo "<br>";
}
else if($shade = "high"){
    $nitrogen_base_value_1 = $nitrogen_base_value - ($nitrogen_base_value * 0.1);
    $phosphorus_base_value_1 = $phosphorus_base_value - ($phosphorus_base_value * 0.1);
    $potassium_base_value_1 = $potassium_base_value - ($potassium_base_value * 0.1);
    $nitrogen_average_value_1 = $nitrogen_base_value_1 / $season_count;
    $phosphorus_average_value_1 = $phosphorus_base_value_1 / $season_count;
    $potassium_average_value_1 = $potassium_base_value_1 / $season_count;
    
    echo round($nitrogen_base_value_1);
    echo ":";
    echo round($phosphorus_base_value_1);
    echo ":";
    echo round($potassium_base_value_1);
    echo "<br>";
    echo "<p> Required Nutrients /kg/acre/splits :</p>";
    echo round($nitrogen_average_value_1);
    echo ":";
    echo round($phosphorus_average_value_1);
    echo ":";
    echo round($potassium_average_value_1);
    echo "<br>";
}
if($phosphorus_1 == "DAP"){
    $a = 18;
    $b = 46;
    $c = 0;
    $phosphorus_final_value = (100/$b) * $phosphorus_average_value_1;
    $nitrogen_exceed_value = ($a/100) * $phosphorus_final_value;
    $potassium_exceed_value = ($c/100) * $phosphorus_final_value;
}
else if($phosphorus_1 == "SSP"){
    $a = 0;
    $b = 16;
    $c = 0;
    $phosphorus_final_value = (100/$b) * $phosphorus_average_value_1;
    $nitrogen_exceed_value = ($a/100) * $phosphorus_final_value;
    $potassium_exceed_value = ($c/100) * $phosphorus_final_value;
}
else if($phosphorus_1 == "RP-20"){
    $a = 0;
    $b = 20;
    $c = 0;
    $phosphorus_final_value = (100/$b) * $phosphorus_average_value_1;
    $nitrogen_exceed_value = ($a/100) * $phosphorus_final_value;
    $potassium_exceed_value = ($c/100) * $phosphorus_final_value;
}
else if($phosphorus_1 == "RP-30"){
    $a = 0;
    $b = 30;
    $c = 0;
    $phosphorus_final_value = (100/$b) * $phosphorus_average_value_1;
    $nitrogen_exceed_value = ($a/100) * $phosphorus_final_value;
    $potassium_exceed_value = ($c/100) * $phosphorus_final_value;
}
else if($phosphorus_1 == "MAP"){
    $a = 18;
    $b = 46;
    $c = 0;
    $phosphorus_final_value = (100/$b) * $phosphorus_average_value_1;
    $nitrogen_exceed_value = ($a/100) * $phosphorus_final_value;
    $potassium_exceed_value = ($c/100) * $phosphorus_final_value;
}
else if($phosphorus_1 == "16"){
    $a = 16;
    $b = 16;
    $c = 16;
    $phosphorus_final_value = (100/$b) * $phosphorus_average_value_1;
    $nitrogen_exceed_value = ($a/100) * $phosphorus_final_value;
    $potassium_exceed_value = ($c/100) * $phosphorus_final_value;
}
else if($phosphorus_1 == "17"){
    $a = 17;
    $b = 17;
    $c = 17;
    $phosphorus_final_value = (100/$b) * $phosphorus_average_value_1;
    $nitrogen_exceed_value = ($a/100) * $phosphorus_final_value;
    $potassium_exceed_value = ($c/100) * $phosphorus_final_value;
}
else if($phosphorus_1 == "19"){
    $a = 19;
    $b = 19;
    $c = 19;
    $phosphorus_final_value = (100/$b) * $phosphorus_average_value_1;
    $nitrogen_exceed_value = ($a/100) * $phosphorus_final_value;
    $potassium_exceed_value = ($c/100) * $phosphorus_final_value;
}
else if($phosphorus_1 == "TSP"){
    $a = 0;
    $b = 42.5;
    $c = 0;
    $phosphorus_final_value = (100/$b) * $phosphorus_average_value_1;
    $nitrogen_exceed_value = ($a/100) * $phosphorus_final_value;
    $potassium_exceed_value = ($c/100) * $phosphorus_final_value;
}
else if($phosphorus_1 == "26"){
    $a = 10;
    $b = 26;
    $c = 26;
    $phosphorus_final_value = (100/$b) * $phosphorus_average_value_1;
    $nitrogen_exceed_value = ($a/100) * $phosphorus_final_value;
    $potassium_exceed_value = ($c/100) * $phosphorus_final_value;
}
else if($phosphorus_1 == "14"){
    $a = 14;
    $b = 28;
    $c = 14;
    $phosphorus_final_value = (100/$b) * $phosphorus_average_value_1;
    $nitrogen_exceed_value = ($a/100) * $phosphorus_final_value;
    $potassium_exceed_value = ($c/100) * $phosphorus_final_value;
}
else if($phosphorus_1 == "28"){
    $a = 28;
    $b = 28;
    $c = 0;
    $phosphorus_final_value = (100/$b) * $phosphorus_average_value_1;
    $nitrogen_exceed_value = ($a/100) * $phosphorus_final_value;
    $potassium_exceed_value = ($c/100) * $phosphorus_final_value;
}
else if($phosphorus_1 == "12"){
    $a = 12;
    $b = 32;
    $c = 16;
    $phosphorus_final_value = (100/$b) * $phosphorus_average_value_1;
    $nitrogen_exceed_value = ($a/100) * $phosphorus_final_value;
    $potassium_exceed_value = ($c/100) * $phosphorus_final_value;
}
else if($phosphorus_1 == "35"){
    $a = 14;
    $b = 35;
    $c = 14;
    $phosphorus_final_value = (100/$b) * $phosphorus_average_value_1;
    $nitrogen_exceed_value = ($a/100) * $phosphorus_final_value;
    $potassium_exceed_value = ($c/100) * $phosphorus_final_value;
}
if($nitrogen_1 == "Urea"){
    $d = 46;
    $nitrogen_calculated_value = $nitrogen_average_value_1 - $nitrogen_exceed_value;
    $nitrogen_final_value = (100/$d) * $nitrogen_calculated_value;
}
else if($nitrogen_1 == "Ammonium Sulphate"){
    $d = 21;
    $nitrogen_calculated_value = $nitrogen_average_value_1 - $nitrogen_exceed_value;
    $nitrogen_final_value = (100/$d) * $nitrogen_calculated_value;
}
else if($nitrogen_1 == "Ammonium Chloride"){
    $d = 25;
    $nitrogen_calculated_value = $nitrogen_average_value_1 - $nitrogen_exceed_value;
    $nitrogen_final_value = (100/$d) * $nitrogen_calculated_value;
}
if($potassium_1 == "MOP"){
    $potassium_calculated_value = $potassium_average_value_1 - $potassium_exceed_value;
    $potassium_final_value = (100/60) * $potassium_calculated_value;
}
echo round($phosphorus_final_value);
echo "<br>";
echo round($nitrogen_final_value);
echo "<br>";
echo round($potassium_final_value);
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

