<?php ?><!DOCTYPE HTML>
<html>
<head>
	<title>Newchamps</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" >

	<script src="js/angular.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/default.css">
	<script src="js/regValide.js"></script>
	
</head>

		

<body ng-app="" class="bodystyle">

<?php include("fragments/head.fragment.php"); ?>

<?php include("fragments/menu.fragment.php"); ?>
					

		<?php include("views/left.view.php"); ?>
 
   	<div class="main-view">
	
			<div style=" float: left; padding:20px;">
					<div style="">
					
				<div ng-app="app">
				  <div ng-controller="homeCtrl">

						<form action="index.php" method="post" name="myForm">
						<div>
						<p>
						<label>Name </label>
							<input type="text" id="sname" name="sname" ng-model="sname" required>
							<span style="color:red; font-size: 20px;" ng-show="myForm.sname.$touched && myForm.sname.$invalid">Enter your Name.</span>
						</p>

							</div>

						<div >
						<p>
						<label>Email </label>
							<input type="email" id="semail" name="semail" ng-model="semail" required >
						<span style="color:red; font-size: 20px;" ng-show="myForm.semail.$touched && myForm.semail.$invalid">Enater your valid Email Address</span></p>
						</div>
<!-- password -->
						
<div >
        <label>Password</label>
        <input type="password" id="password" name="password" ng-model="formData.password" ng-minlength="8" ng-maxlength="20" ng-pattern="/(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z])/" placeholder="password" required />
</div>
       
<div >
         <label for="password_c">Confirm Password</label>
        <input type="password" id="password_c" name="password_c" ng-model="formData.password_c" placeholder="confirm password" valid-password-c="formData.password" required />
  </div>
  

	  <div ><label>Phone</label> 
			<input type="number" id="sphone" name="sphone" ng-model="sphone" required></div>

						<div ><label>Address</label>
						<input type="text" id="sadd" name="sadd" ng-model="sadd" required></div>

						<input type="submit" name="sub" value="Submit">						</form>

						</p>
						</div>
					</div>
					</div>
			</div>


			</div>
		</div>

	<script src="js/controller1.js"></script>	
</body>

</html>