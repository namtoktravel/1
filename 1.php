<?php
$conn = new mysqli("localhost", "root", "", "libary");
}

$sql = "SELECT * FROM member";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Member</title>
</head>
<body>

<h2>ข้อมูลสมาชิก</h2>

<table border="1">
    <tr>
        <th>รหัสนักศึกษา</th>
        <th>ชื่อนักศึกษา</th>
        <th>เบอร์โทรศัพท์</th>
    </tr>

<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["mem_id"]."</td>";
        echo "<td>".$row["mem_fname"]." ".$row["mem_lname"]."</td>";
        echo "<td>".$row["mem_phone"]."</td>";
        echo "</tr>";
    }
}
?>
</table>
</body>
</html>
