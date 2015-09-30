<html>
	<head>
	  <title>CHARON</title>
		<link href="css/login/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="js/login/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="js/login/jquery.validate.min.js"></script>
		<script src="demoad.js"></script>
		<script>
			function abcd()
			{
				if (document.getElementById('Service_ProviderSignUp').checked)
				{
					var serviceprovider = document.getElementById('Service_ProviderSignUp').value;
					document.location="Signup_Service_Provider.php?RegisteredAs="+serviceprovider;
				}
				else if (document.getElementById('PhysicainSignUp').checked)
				{
					var Physician = document.getElementById('PhysicainSignUp').value;
					document.location="Signup_Physician.php?RegisteredAs="+Physician;
				}
				else if (document.getElementById('RestaurantsSignUp').checked)
				{
					var Partner = document.getElementById('RestaurantsSignUp').value;
					document.location="Signup_Restaurant.php?RegisteredAs="+Partner;
				}
				else if(document.getElementById('SubscriberSignUp').checked)
				{
					var patient = document.getElementById('SubscriberSignUp').value;
					document.location="Signup_Subscriber.php?RegisteredAs="+patient;
				}
			}
		</script>
		<script>  
		  $(document).ready(function(){
			$('#login_form').validate();   
			$(document).on('click','#btn-login',function(){
			  var url = "login.php";       
				if($('#login_form').valid()){
				  $('#logerror').html('<img src="images/loader.gif" align="absmiddle"> Please wait...');  
				  $.ajax({
					type: "POST",
					  url: url,
					   data: $("#login_form").serialize(), // serializes the form's elements.
						 success: function(data)
						   {                    
							 if(data==1) {               
							   window.location.href = "dashboard.php";
							  } 
							 else {
								   $('#logerror').html('The Email/UserName or Password you entered is incorrect.');
								   $('#logerror').addClass("error");
								 }
						   }
					   });
					 }
				return false;
			   });
		});
		</script>		
		<style type="text/css">
			.error
			{
				margin-top: 6px;
				margin-bottom: 0;
				color: #000;
				background-color: #D65C4F;
				display: table;
				padding: 5px 8px;
				font-size: 11px;
				font-weight: bold;
				line-height: 14px;
			}
			.Login_BoxDisplay
			{
				padding:100px 0 0 420px;
			}
			
			{
				color: #ebebeb;
				width:450PX;
				height:450px;
				font: 12px Arial, Helvetica, sans-serif;
			   	background: rgba(110,105,30, 0.8); 
				box-shadow:
				0 2px 2px rgba(0,0,0,0.2),
				0 1px 5px rgba(0,0,0,0.2),
				0 0 0 12px rgba(255,225,255,0.4); 
				border-radius:8px;
			}
			 header h1
		{
			position: relative;
			color: #275973;
			font-weight: 700;
			font-style: normal;
			font-size: 25px;
			padding: 0px 0px 5px 0px;
			text-shadow: 0px 1px 1px rgba(255,255,255,0.8);
		}
		 header h1 strong
		{
			font-family: 'Open Sans Condensed', 'Arial Narrow', Arial, sans-serif;
			padding: 0px 5px 0px 5px;
			line-height: 35px;
			color: #275973;
			font-size: 28px;
			text-transform: uppercase;
		}
			 header h1 span
		{
			font-family: 'Alegreya SC', Georgia, serif;
			font-size: 20px;
			line-height: 20px;
			display: block;
			font-weight: 400;
			font-style: italic;
			color: #5a99ba;
			text-shadow: 1px 1px 1px rgba(0,0,0,0.1);
		}
		.userstyle
		{
			color:#F00;
		}
		#three-d span {
	text-shadow: 0px 1px 1px #4d4d4d; color: #222; font: 15px 'LeagueGothicRegular';
}
		</style>
		<link rel="stylesheet" type="text/css" href="css/login/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/login/animate-custom.css" />
	</head>
	<body style="background:url(images/login/bg8.jpg); background-repeat:no-repeat;">
		<div class="Login_BoxDisplay"><!--1-->
			 <section>				
               	<div id="container_demo"><!--2-->
					<a class="hiddenanchor" id="toregister"></a>
					<a class="hiddenanchor" id="tologin"></a>
					<div id="wrapper"><!--3-->
						<div id="login" class="animate form"><!--4-->
                            <form  id="login_form" autocomplete="on"> 
								<h1>User Login</h1> 
								<div class="modal-body with-padding"><!--5-->                          
    				           		 <div class="form-group"><!--6-->
                  						<div class="row"><!--7-->
						                    <div class="col-sm-10"><!--8-->
                      							<label style="color:#0000A0">Email/Username <span style="color:red">*</span></label>
												<input type="text" id="username" name="username"  class="form-control required">
											</div><!--8-->
										</div><!--7-->
									</div><!--6-->
									<div class="form-group"><!--9-->
										<div class="row"><!--10-->
											<div class="col-sm-10"><!--11-->
												<label style="color:#0000A0">Password <span style="color:red">*</span></label>
												<input type="password" id="password" name="password" class="form-control required" value="">
											</div><!--11-->
										</div><!--10-->
									</div> <!--9-->
								</div><!--5-->
								<div class="error" id="logerror"></div> 
								<div class="modal-footer"><!--12-->
									<input type="hidden" name="id" value="" id="id">
									<button type="submit" id="btn-login" class="btn btn-primary" value="Submit">Submit</button>
								</div><!--12--> 
								<p class="change_link">
									Not a member yet ?<a href="#toregister" class="to_register">Join us</a>
								</p>
							</form>
                        </div><!--4-->
                        <div id="register" class="animate form"><!--13-->
							<form method="post" autocomplete="off"> 
								<header><h1><span>New User Registration</span> </h1></header>
								<table width="300" border="0" align="center">
									<tr>
									<td><div id="three-d"><span>New Insurance Company</span></div></td>
                                        <td><a href="Signup_Service_Provider.php?RegisteredAs=serviceprovider"><span class="glyphicon glyphicon-hand-right"></span> Click Here</a></td>
                                        </tr>
                                        <tr>
										<td><div id="three-d"><span>New Physician</span></div></td>
                                        <td><a href="Signup_Physician.php?RegisteredAs=Physician"><span class="glyphicon glyphicon-hand-right"></span> Click Here</a></td>
                                        </tr>
                                        <tr>
										<td><div id="three-d"><span>New Partner</span></div></td>
                                        <td><a href="Signup_Restaurant.php?RegisteredAs=Partner"><span class="glyphicon glyphicon-hand-right"></span> Click Here</a></td>
                                        </tr>
                                        <tr>
										<td><div id="three-d"><span>New Patient</span></div></td>
                                        <td><a href="Signup_Subscriber.php?RegisteredAs=patient"><span class="glyphicon glyphicon-hand-right"></span> Click Here</a></td>
									</tr>
								</table>
								<span style="color:#FF0000; font-size:14px; font-weight:bold;">
									<div id="SignUp_Page"></div>
								</span>
								<p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register">Login</a>
								</p>
							</form>
						</div><!--13-->
					</div><!--3-->
				</div> <!--2-->
			</section>
		</div><!--1-->
	</body>
</html>
