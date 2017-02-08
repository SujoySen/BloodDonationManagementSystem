<html>
<head>
</head>
<body>

<?php
$q = $_GET['q'];

include_once ("config.php");
 $result = mysql_query("SELECT * FROM user WHERE blood_group='".$q."'");
if($result!=null){
echo "<table border='1'>
			<tr>   
			       <td>Name</td>
			       <td>Email</td>
				   <td>Location</td>
		           <td>User Type</td>
				   <td>Cover Picture</td>
				   <td>Blood Group</td>
			</tr>";
while($row = mysql_fetch_array($result)) {
    echo "<tr>";
	echo "<td>1</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['location'] . "</td>";
	echo "<td>" . $row['role'] . "</td>";
	echo '<td> <img src="'.$row["photo"].'" alt="Not Available" style="width:100px;height:100px;"> </td>';
    echo "<td>" . $row['blood_group'] . "</td>";
    
    echo "</tr>";
}
echo "</table>";
}
else
echo"<p><h1>Book Not Found</h1></p>";
?>
</body>
</html>