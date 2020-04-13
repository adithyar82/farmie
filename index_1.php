<?php
include('connect_db.php');
$rainfall = $_POST['rainfall'];
$shade = $_POST['shade'];
$age = $_POST['age'];
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
}
$sql = "INSERT INTO products (id, rainfall, shade, bags, age, yield_type) VALUES (Null, '$rainfall', '$shade', '$number_of_bags','$age','$yield_type');";
$result = $conn->query($sql);
// if($result->num_rows>=0){
//     echo '
//     <script>
//     alert("Registered Successfully");
//     window.location = "index.php";
//     </script>';
// }
?>