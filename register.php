<!doctype html>
<html>
<head>
<title>eGranja | Sign Up</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/index.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
</head>
<body>
    
    
    
    <nav id="nav" role="navigation">
			<a href="#nav" title="Show navigation">Show navigation</a>
			<a href="#" title="Hide navigation">Hide navigation</a>
			<ul class="clearfix">
				<li class="active" style = "margin-left: 115px; margin-top: 40px;":><a href="index.html">Home</a></li>
				
                
				<div class="clear"></div>
			</ul>
		    </nav>
    
    
    
<div class="container">
	<div class="container_wrap">
		<div class="header_top">
		    <div class="col-sm-3 logo"><h3 style="font-size: 2.5em; color: #ff471a;">eGranja</h3></div>
		    <div class="clearfix"> </div>
	      </div>
	      <div class="content">
      	     <div class="register">
		  	  <form id="registerForm" method="POST" action=""> 
				 <div class="register-top-grid col-sm-6">
					<h3>Personal Information</h3>
					 <div>
						<span>First Name<label>*</label></span>
						<input type="text" id="firstName" name="firstName"> 
					 </div>
					 <div>
						<span>Last Name<label>*</label></span>
						<input type="text" id="lastName" name="lastName"> 
					 </div>
					 </div>
				     <div class="register-top-grid col-sm-6">
						    <h3>Contact Information</h3>
							 <div>
						<span>Email<label>*</label></span>
						<input type="text" id="email" name="email"> 
					 </div>
					 <div>
						<span>Telephone<label>*</label></span>
						<input type="text" id="tel" name="tel"> 
					 </div>
					 </div>
                  <div class="register-bottom-grid col-sm-6">
						    <h3>Security Information</h3>
							 <div>
								<span>Security Question<label>*</label></span>
								<input type="text" id="secQuestion" name="secQuestion">
							 </div>
							 <div>
								<span>Answer<label>*</label></span>
								<input type="text" id="answer" name="answer">
							 </div>
					 </div>
                  <div class="register-bottom-grid col-sm-6">
						    <h3>Login Information</h3>
                            <div>
								<span>Password<label>*</label></span>
								<input type="password" id="password1" name="password1">
							 </div>
							 <div>
								<span>Re-Type Password<label>*</label></span>
								<input type="password" id="password2" name="password2">
							 </div>
							 <div class="clearfix"> </div>
					 </div>
				</form>
				<div class="clearfix"> </div>
				<div class="register-button">
				   <form>
					   <input type="submit" id="submit" value="Sign Up">
				   </form>
				</div>
		   </div>
           </div>
    </div>
</div>
    
    
    


<script src="js/firebase.js"></script>
<script src="js/main.js"></script>
<script>
    
    //Add signup event
    $('#submit').click(function(){
        
    var email = document.getElementById("email");
    var password1 = document.getElementById("password1");
    
    //var firebase = require('firebase');
    //Get email and password
    const mail = email.value();
    const pass = password.value();
    const auth = firebase.auth();
        
    //Sign up
    //const promise = //auth.createUserWithEmailAndPassword(mail, pass);
    //promise.catch(e => console.log(e.message));
    
};    

</script>
</body>
</html>