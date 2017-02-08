<?php
include_once ("config.php");
$output='';
$sql="select * from user where blood_group LIKE'%".$_POST["search"]."%'";
$result=mysql_query($sql);

if(empty($_POST["search"]))
{


}
else if(mysqli_num_rows($result)>0)
	{

		 $output.= '<h4>SEARCH RESULTS</h4>';
		 $output= '<div id="abir">
		      <table >
			    <tr>
				  <th>BOOK ID</th>
				  <th>BOOK NAME</th>
				   <th>AUTHOR NAME</th>
				     <th>CATEGORY</th>
					 <th>YEAR</th>
					 




				</tr>';

				while($row=mysqli_fetch_array($result))
				{
					$output .= '
					<tr>
					 <td>'.$row["name"].'</td>
					 <td>'.$row["email"].'</td>
					 <td>'.$row["blood_group"].'</td>
					  <td>'.$row["birth_day"].'</td>
					   <td>'.$row["location"].'</td>
					






					</tr>
					';





				}

				echo $output;
}

	# code...


	else
				echo "<br/><br/>BOOK NOT FOUND";



















?>
