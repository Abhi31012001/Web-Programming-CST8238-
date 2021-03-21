
<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php

$q = $_GET['q'];

$con = mysqli_connect('localhost','abhipate_cst8238','abhi_cst8238','abhipate_cst8238');
if (!$con){
    die('Could not connect: ' . mysqli_error($con));
}
$sql="SELECT * FROM employee WHERE EmployeeId = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Telephone Number</th>
<th>SocialInsuranceNumber</th>
<th>Password</th>
<th>EmailAddress</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['FirstName'] . "</td>";
    echo "<td>" . $row['LastName'] . "</td>";
    echo "<td>" . $row['TelephoneNumber'] . "</td>";
    echo "<td>" . $row['SocialInsuranceNumber'] . "</td>";
    echo "<td>" . $row['Password'] . "</td>";
    echo "<td>" . $row['EmailAddress'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>