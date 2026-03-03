<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hr_sample";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "";
$sql = "SELECT * FROM employee_details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<style>
            table { width: 100%; border-collapse: collapse; font-family: sans-serif; }
            th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
            th { background-color: #f4f4f4; color: #333; }
            tr:nth-child(even) { background-color: #f9f9f9; }
            tr:hover { background-color: #f1f1f1; }
          </style>";

          echo"<br>";
          echo"<br>";
          echo"<br>";
          echo"<br>";
          echo"<br>";
          echo"<br>";
          echo"<br>";
          echo"<br>";
         

    echo "<table>";
    echo "<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Job Title</th>
            <th>Employment Date</th>
            <th>Manager</th>
            <th>Department</th>
            <th>Location</th>
          </tr>";

   
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['Employee ID'] . "</td>";
        echo "<td>" . $row['Name'] . "</td>";
        echo "<td>" . $row['Job Title'] . "</td>";
        echo "<td>" . $row['Employment Date'] . "</td>";
       
        echo "<td>" . ($row['Manager Name'] ?? 'N/A') . "</td>"; 
        echo "<td>" . $row['Department Name'] . "</td>";
        echo "<td>" . $row['Location'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}











?>