<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LabAct1</title>
</head>
<body>
    <form action="labact12.php" method="post">
    <table border="1">
    <tr>
        <td>Patient Name</td>
        <td><input type="text" name="pn"></td>
    </tr>
    <tr>
    <td>Gender
    <select name="gender">
    <option>Female</option>
    <option>Male</option>
    </td>
    <tr>
        <td>Age</td>
        <td><input type="text" name="age"></td>
    </tr>
    <tr>
        <td>Number of Days</td>
        <td><input type="text" name="nd"></td>
    </tr>
    <tr>
        <td>Initial Deposit</td>
        <td><input type="text" name="id"></td>
    </tr>
    
    <tr>
        <td colspan="2" align="center">
        <input type="submit" value="SUBMIT"></td>
    </tr>
    </table>

    </form>
</body>
</html>