<?php 
require_once 'db_connector.php'; // The mysql database connection script
if(isset($_POST['add'])){

$namn = name;
/*$data = json_decode(file_get_contents("php://input"));
$namn = $data->name;


$data = json_decode(file_get_contents("php://input"));
$prod_name = $data->prod_name;
$prod_desc = $data->prod_desc;
$prod_price = $data->prod_price;
$prod_qunatity = $data->prod_quantity;

$namn = $_POST['insert'];

$Street = $_POST[''];;
$City = $_POST[''];;
$land = $_POST[''];;
$job = $_POST[''];;
$payment = $_POST[''];;
'$', '$', '$', '$', '$', '$', '$'*/

$query="INSERT INTO employeed(Name /*,Phone, Email, Street, City, Country, Payed, Job*/)  VALUES 
($namn', )";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$result = $mysqli->affected_rows;

echo $json_response = json_encode($result);
}
/*

$data = json_decode(file_get_contents("php://input"));
		$fstname = mysql_real_escape_string($data->fstname);
		$lstname = mysql_real_escape_string($data->lstname);
		mysql_connect("localhost", "root", "") or die(mysql_error()); 
		mysql_select_db("angularjs") or die(mysql_error()); 
		mysql_query("INSERT INTO friends (fname,lname) VALUES ('$fstname', '$lstname')"); 
		Print "Your information has been successfully added to the database."; 

*/
?>