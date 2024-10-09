<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MULTIPLICATION TABLE</title>
</head>
<body>
<center>
    <FORm method="post" action="">
        <h1>Multiplication Table Using PHP</h1>
        <table border="2">

        <tr>
        <td>Number of Rows</td>
        <td><input type="text" name="rows" /></td>
        </tr>

        <tr>
        <td>Number of Columns</td>
        <td><input type="text" name="columns" /></td>
        </table><br>

        <input type="submit" name="Create" value="Create" />

    </FORm>
</center>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rows = intval($_POST['rows']);
    $columns = intval($_POST['columns']);
    
    if ($rows > 0 && $columns > 0) {
        echo "<center><h2>Multiplication Table $rows x $columns </h2><table border='1' cellpadding='5'>";

        for ($i = 1; $i <= $rows; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $columns; $j++) {
                $bgColor = ($i % 2 == 0) ? 'lightpink' : 'pink';
                echo "<td style='background-color:$bgColor;'>" . $i * $j . "</td>";
            }
            echo "</tr>";
        }

        echo "</table></center>";
    } else {
        echo "<center><p style='color:red;'>Please enter valid numbers for rows and columns.</p></center>";
    }
}

?>
</body>
</html>