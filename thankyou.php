<?php ?><!DOCTYPE HTML>
<html>
<head>
	<title>Newchamps</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" >

	<script src="js/angular.min.js"></script>
	

	<link rel="stylesheet" type="text/css" href="css/default.css">
	<script type="text/javascript">
			function SearchOn(){

				document.getElementById('searchxyz').style.display="block";
			}
	</script>		
	</head>

		

<body ng-app="mainApp" class="bodystyle">

	
<?php include("fragments/head.fragment.php"); ?>


<?php include("fragments/menu.fragment.php"); ?>
					
 
<?php include("views/left.view.php"); ?>
		

		<div class="main-view">
	
<?php 

	
if(isset($_POST['sub']))
{
	include('connect_db.php');

	/*mysql_connect("localhost","root", "");
	mysql_select_db("newchamps");*/
	$iname = $_POST['iname'];
	$iemail = $_POST['iemail'];
	$ititle = $_POST['ititle'];
	$imsg = $_POST['imsg'];

	if(mysql_query("insert contact VALUES('', '$iname', '$iemail', '$ititle' , '$imsg' )")){
		echo "thank you for connecting";
		  
	}  
	else
		echo mysql_error();
}

?>

	<a href="contact.php">Back</a>



	<script src="js/controller1.js"></script>	
</body>

</html>