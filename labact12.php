<?php
$pn = $_POST['pn'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$nd = $_POST['nd'];
$id = $_POST['id'];

if ($gender == 'Female') {
    $bp = 8.500;
    }
elseif ($gender == 'Male') {
    $bp = 150.000;
   }

   $ta = $bp * $nd;

if ($age < 7) {
    $discount = $ta * 0.10;
}
elseif ($age >= 7 && $age < 18) {
    $discount = $ta * 0.075;
}
elseif ($age >= 18 && $age < 30) {
    $discount = $ta * 0.0525;
}
elseif ($age >= 30 && $age < 60) {
    $discount = $ta * 0.03;
}
elseif ($age >= 60 && $age < 80) {
    $discount = $ta * 0.0675;
}
else{
    $discount = $ta * 0.08;
}

$na = $ta - $discount;
$balance = $na - $id;

echo "Patient: $pn <br>";
echo "\nGender: $gender  <br>";
echo "\nAge: $age  <br>";
echo "\nNumber of Days: $nd  <br>";
echo "\nInitial Deposit: $id  <br>";
echo "\nBasic Price: $bp  <br>";
echo "\nTotal Amount: $ta  <br>";
echo "\nDiscount: $discount  <br>";
echo "\nNet Amount: $na  <br>";
echo "\nBalance: $balance  <br>";
?>