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
				<div ng-controller="people"  style="float: left; margin:20px; display: none;" id="searchxyz">
					<ul>
						<!-- <h2>Your Result</h2> -->
						<li ng-repeat="person in persons | filter:searchBox" style="list-style: none;">
							<a href="{{person.link}}">{{ person.Name + ' ' + person.Age +' '+ person.Application }}</a>
						</li>
					</ul>
				</div>	
			

			<div style=" float: left; padding:20px;"> hello every one
	        	<div style=" margin-top: 1px;">
	        		<a href="index.html"><img src="images/logo.png"></a>
	        	</div>
	        	<div style=" margin-top: 1px;">
	        		<a href="index.html"><img src="images/hand.jpg" width="100%"></a>
	        	</div>
			

			</div>


			</div>
		</div>

	<script src="js/controller1.js"></script>	
</body>

</html>