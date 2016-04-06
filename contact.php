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
			function ContactValid(){
				var cname = document.getElementById('iname');
				var cemail = document.getElementById('iemail');
				var ctitle = document.getElementById('ititle');
				var cmsg = document.getElementById('imsg');	

				if(cname.value == ''){
					alert("Enter your name");
					cname.focus();
					return false;
				}
				else if(cemail.value == ''){
					alert("Enter your email address");
					cemail.focus();
					return false;
				}
				else if(ctitle.value == ''){
					alert("Enter your Title");
					ctitle.focus();
					return false;
				}
				else if(cmsg.value == ''){
					alert("Enter your Message");
					cmsg.focus();
					return false;
				}
				else{
					return true;
				}
			}
		</script>
	
</head>

		

<body  ng-app="" class="bodystyle">

	
<?php include("fragments/head.fragment.php"); ?>

<?php include("fragments/menu.fragment.php"); ?>
					

		<?php include("views/left.view.php"); ?>
	
		<div class="main-view">
				
			

			<div style=" float: left; padding:20px;">
					<div style="">
						
			<!--			<form action="thankyou.php" method="post" onsubmit="return ContactValid();">
						<div >
						<label>Name </label>
							<input type="text" id="iname" name="iname"></input></div>

						<div >
						<label>Email </label>
							<input type="text" id="iemail" name="iemail"></input></div>

						<div ><label>Title</label> 
						<input type="text" id="ititle" name="ititle"></input></div>

						<div ><label>Message </label>
						<textarea type="text" id="imsg" name="imsg"></textarea></div>

						<input type="submit" name="sub" value="Submit">						</form>

		 -->
		 
		 <form action="thankyou.php" method="post" name="myForm" >
						<div >
						<label>Name </label>
							<p><input type="text" id="iname" name="iname" ng-model="iname" required>
<span style="color:red; font-size: 20px;" ng-show="myForm.iname.$touched && myForm.iname.$invalid">Enter your Name.</span></p>
							</div>

						<div >
						<p><label>Email </label>
							<input type="email" id="iemail" name="iemail" ng-model="iemail" required>
						<span style="color:red; font-size: 20px;" ng-show="myForm.iemail.$touched && myForm.iemail.$invalid">Enter valid Email.</span>	
						</p>
						</div>

						<div>
						<p><label>Title</label> 
						<input type="text" id="ititle" name="ititle" ng-model="ititle" required>
<span style="color:red; font-size: 20px;" ng-show="myForm.ititle.$touched && myForm.ititle.$invalid">Enter your Message title.</span><p>
						</div>

						<div >
						<p><label>Message </label>
						<textarea type="text" id="imsg" name="imsg" ng-model="imsg" required></textarea>
<span style="color:red; font-size: 20px;" ng-show="myForm.imsg.$touched && myForm.imsg.$invalid">Enter your Message title.</span><p>

						</div>

						<input type="submit" name="sub" value="Submit">				
		</form>	



					</div>
			</div>


			</div>
		</div>


	<script src="js/controller1.js"></script>	
</body>

</html>