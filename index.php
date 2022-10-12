<?php
include_once 'dbh.inc.php';
?>
<!DOCTYPE html>

<html>

<head>
	<title>  </title>
	<style>
	table th{text-align:left;
			border: 1px solid #e33e3e;
			padding: 4px 8px;
	}
	table td{text-align:left;
			border: 1px solid #e33e3e;
			padding: 4px 8px;
	}
	</style>
</head>
<body>
<form  method="POST">
<input type= "text" name="query" placeholder="Query command" style="height:90px;width: 1200px;"><br> 
<input type= "submit" value="Search">
</form>
<?php
$sqlQuery = $_POST['query'];
$sql = stripcslashes($sqlQuery);
$word = "DROP";
$word2 = "drop";
if ($sql == ''){
echo "Empty search!";
}
else if(strpos($sql, $word) !== false){
    echo "Drop command is not allowed!";
}
else if(strpos($sql, $word2) !== false){
    echo "Drop command is not allowed!";
}

//else{
//$result = mysqli_query($conn, $sql);
//$resultCheck = mysqli_num_rows($result);
//if ($resultCheck>0){
//	while ($row = mysqli_fetch_assoc($result)){
//echo $row['SubjectID']."<br>";
//	}
//}
//}
else{
$result = mysqli_query($conn, $sql);
if (($result)||(mysql_errno == 0))
{
  echo "<table width='50%'><tr>";
  if (mysqli_num_rows($result)>0)
  {
          //loop thru the field names to print the correct headers
          //$i = 0;
          //while ($i < mysqli_num_fields($result))
          //{
       //echo "<th>". mysqli_fetch_fields($result) . "</th>";
       //$i++;
    //}
    //echo "</tr>";

    //display the data
    while ($rows = mysqli_fetch_assoc($result))
    {
      echo "<tr>";
      foreach ($rows as $data)
      {
        echo "<td align='center'>". $data . "</td>";
      }
    }
  }else{
    echo "<tr><td colspan='" . ($i+1) . "'>You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax.</td></tr>";
  }
  echo "</table>";
}
else{
  echo "Error in running query :". mysqli_error();
}
}
?>
</html>
<html>
<h2>subject</h2>
<table>
	<tr>
		<th>SubjectID</th>
		<th>CategoryName</th>
	</tr>
	<tr>
		<td>1</td>
		<td>category1</td>
	</tr>
	<tr>
		<td>2</td>
		<td>category2</td>
	</tr>
	<tr>
		<td>3</td>
		<td>category3</td>
	</tr>
		<tr>
		<td>4</td>
		<td>category4</td>
	</tr>
		<tr>
		<td>5</td>
		<td>category5</td>
	</tr>
</table>
<h2>shipper</h2>
<table>
	<tr>
		<th>ShipperID</th>
		<th>ShipperName</th>
	</tr>
		<tr>
		<td>1</td>
		<td>shipper1</td>
	</tr>
	<tr>
		<td>2</td>
		<td>shipper2</td>
	</tr>
	<tr>
		<td>3</td>
		<td>shipper3</td>
	</tr>
		<tr>
		<td>4</td>
		<td>shipper4</td>
	</tr>
</table>
<h2> employee</h2>
<table>
	<tr>
		<th>EmployeeID</th>
		<th>LastName</th>
		<th>FirstName</th>
	</tr>
		<tr>
		<td>1</td>
		<td>lastname5</td>
		<td>firstname5</td>
	</tr>
		<tr>
		<td>2</td>
		<td>lastname6</td>
		<td>firstname6</td>
	</tr>
		<tr>
		<td>3</td>
		<td>lastname9</td>
		<td>firstname9</td>
	</tr>
	</table>
	<h2>customer</h2>
<table>
	<tr>
		<th>CustomerID</th>
		<th>LastName</th>
		<th>FirstName</th>
		<th>Phone</th>
	</tr>
 <tr>
		<td>1</td>
		<td>lastname1</td>
		<td>firstname1</td>
		<td>334-001-001</td>
	</tr>
	 <tr>
		<td>2</td>
		<td>lastname2</td>
		<td>firstname2</td>
		<td>334-002-002</td>
	</tr>
		 <tr>
		<td>3</td>
		<td>lastname3</td>
		<td>firstname3</td>
		<td>334-003-003</td>
	</tr>
		 <tr>
		<td>4</td>
		<td>lastname4</td>
		<td>firstname4</td>
		<td>334-004-004</td>
	</tr>
</table>
	<h2>supplier</h2>
<table>
	<tr>
		<th>SupplierID</th>
		<th>CompanyName</th>
		<th>ContactLastName</th>
		<th>ContactFirstName</th>
		<th>Phone</th>
	</tr>
	<tr>
		<td>1</td>
		<td>supplier1</td>
		<td>company1</td>
		<td>company1</td>
		<td>1111111111</td>
	</tr>
	<tr>
		<td>2</td>
		<td>supplier2</td>
		<td>company2</td>
		<td>company2</td>
		<td>2222222222</td>
	</tr>
	<tr>
		<td>3</td>
		<td>supplier3</td>
		<td>company3</td>
		<td>company3</td>
		<td>3333333333</td>
	</tr>
	<tr>
		<td>4</td>
		<td>supplier4</td>
		<td>company4</td>
		<td> </td>
		<td>4444444444</td>
	</tr>
</table>
<h2>orders</h2>
<table>
	<tr>
		<th>OrderID</th>
		<th>CustomerID</th>
		<th>EmployeeID</th>
		<th>OrderDate</th>
		<th>ShippedDate</th>
		<th>ShipperID</th>
	</tr>
	<tr>
		<td>1</td>
		<td>1</td>
		<td>1</td>
		<td>8/1/16</td>
		<td>8/1/16</td>
		<td>1</td>
	</tr>
<tr>
		<td>2</td>
		<td>1</td>
		<td>2</td>
		<td>8/4/16</td>
		<td>NULL</td>
		<td>NULL</td>
	</tr>
<tr>
		<td>3</td>
		<td>2</td>
		<td>1</td>
		<td>8/1/16</td>
		<td>8/4/16</td>
		<td>2</td>
	</tr>
<tr>
		<td>4</td>
		<td>4</td>
		<td>2</td>
		<td>8/4/16</td>
		<td>8/5/16</td>
		<td>1</td>
	</tr>
<tr>
		<td>5</td>
		<td>1</td>
		<td>1</td>
		<td>8/4/16</td>
		<td>8/5/16</td>
		<td>1</td>
	</tr>
<tr>
		<td>6</td>
		<td>4</td>
		<td>2</td>
		<td>8/4/16</td>
		<td>8/5/16</td>
		<td>1</td>
	</tr>
<tr>
		<td>7</td>
		<td>3</td>
		<td>1</td>
		<td>8/4/16</td>
		<td>8/4/16</td>
		<td>1</td>
	</tr>
</table>
<h2>book</h2>
<table>
	<tr>
		<th>BookID</th>
		<th>Title</th>
		<th>UnitPrice</th>
		<th>Author</th>
		<th>Quantity</th>
		<th>SupplierID</th>
		<th>SubjectID</th>
	</tr>
<tr>
		<td>1</td>
		<td>book1</td>
		<td>12.34</td>
		<td>author1</td>
		<td>5</td>
		<td>3</td>
		<td>1</td>
	</tr>
<tr>
		<td>2</td>
		<td>book2</td>
		<td>56.78</td>
		<td>author2</td>
		<td>2</td>
		<td>3</td>
		<td>1</td>
	</tr>
<tr>
		<td>3</td>
		<td>book3</td>
		<td>90.12</td>
		<td>author3</td>
		<td>10</td>
		<td>2</td>
		<td>1</td>
	</tr>
<tr>
		<td>4</td>
		<td>book4</td>
		<td>34.56</td>
		<td>author4</td>
		<td>12</td>
		<td>3</td>
		<td>2</td>
	</tr>
<tr>
		<td>5</td>
		<td>book5</td>
		<td>78.9</td>
		<td>author5</td>
		<td>5</td>
		<td>2</td>
		<td>2</td>
	</tr>
<tr>
		<td>6</td>
		<td>book6</td>
		<td>12.34</td>
		<td>author6</td>
		<td>30</td>
		<td>1</td>
		<td>3</td>
	</tr>
<tr>
		<td>7</td>
		<td>book7</td>
		<td>56.9</td>
		<td>author2</td>
		<td>17</td>
		<td>3</td>
		<td>4</td>
	</tr>
<tr>
		<td>8</td>
		<td>book8</td>
		<td>33.44</td>
		<td>author7</td>
		<td>2</td>
		<td>1</td>
		<td>3</td>
	</tr>
</table>
<h2>order_detail</h2>
<table>
	<tr>
		<th>BookID</th>
		<th>OrderID</th>
		<th>Quantity</th>
	</tr>
	<tr>
		<td>1</td>
		<td>1</td>
		<td>2</td>
	</tr>
	<tr>
		<td>4</td>
		<td>1</td>
		<td>1</td>
	</tr>
	<tr>
		<td>6</td>
		<td>2</td>
		<td>2</td>
	</tr>
	<tr>
		<td>7</td>
		<td>2</td>
		<td>3</td>
	</tr>
	<tr>
		<td>5</td>
		<td>3</td>
		<td>1</td>
	</tr>
	<tr>
		<td>3</td>
		<td>4</td>
		<td>2</td>
	</tr>
	<tr>
		<td>4</td>
		<td>4</td>
		<td>1</td>
	</tr>
	<tr>
		<td>7</td>
		<td>4</td>
		<td>1</td>
	</tr>
	<tr>
		<td>1</td>
		<td>5</td>
		<td>1</td>
	</tr>
	<tr>
		<td>1</td>
		<td>6</td>
		<td>2</td>
	</tr>
	<tr>
		<td>1</td>
		<td>7</td>
		<td>1</td>
	</tr>
</table>

</body>
</html>
