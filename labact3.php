<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADAMSON UNIVERSITY ONLINE REGISTRATION</title>
</head>
<body><center>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<h1>ADAMSON UNIVERSITY ONLINE REGISTRATION</h1>

<table border="12">
 <tr>
  <td>STUDENT NAME</td>
  <td><input type="text" name="sname" required /></td>
 </tr>

 <tr>
  <td>COURSE</td>
  <td>
   <select name="course" required>
    <option value="IT">IT (Information Technology)</option>
    <option value="CE">CE (Civil Engineering)</option>
    <option value="ACC">ACC (Accountancy)</option>
    <option value="N">N (Nursing)</option>
   </select>
  </td>
 </tr>
 <tr>
  <td>NUMBER OF UNITS</td>
  <td><input type="number" name="units" min="1" required /></td>
 </tr>
</table>
<br/>
<input type="submit" name="submit" value="SUBMIT" />
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sname = $_POST["sname"];
    $course = $_POST["course"];
    $units = $_POST["units"];

    if (empty($sname) || $units <= 0) {
        echo "<br>Please fill all required fields with valid values!";
        exit;
    }

    switch ($course) {
        case "IT":
            $ratePerUnit = 1500.25;
            break;
        case "CE":
            $ratePerUnit = 1000.75;
            break;
        case "ACC":
            $ratePerUnit = 800.25;
            break;
        case "N":
            $ratePerUnit = 1200.50;
            break;
        default:
            echo "INVALID INPUT!!!";
            exit;
    }

    $tuitionFee = $ratePerUnit * $units + 2500;
    $dp = ($tuitionFee > 10000) ? $tuitionFee * 0.25 : $tuitionFee * 0.10;
    $balance = $tuitionFee - $dp;

    echo "<br /><br /><br /><br /><h2>TUITION FEE BILL RECEIPT</h2>";
    echo "Student Name: $sname<br /><br />";
    echo "Course Code: $course<br /><br />";
    echo "Number of Units: $units<br /><br />";
    echo "Tuition Fee Rate Per Unit: $ratePerUnit<br /><br />";
    echo "Tuition Fee Bill: $tuitionFee<br /><br />";
    echo "Downpayment: $dp<br /><br />";
    echo "Remaining Balance: $balance<br /><br />";
}
?>
<footer>
  <br><br><p>2024 Adamson University. All Rights Reserved</p>
</footer>
</center>
</body>
</html>