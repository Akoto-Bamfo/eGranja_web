<!doctype html>
<html>
<head>
<title>eGranja | Sign In</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>
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
				<li class="active" style = "margin-left: 115px; margin-top: 40px;":><a href="index.php" style="color: #ff471a; margin-left: 65px;">Home</a></li>
				
                
				<div class="clear"></div>
			</ul>
		    </nav>
	     <div class="clear"></div>
  <div class="clear-fix"></div>
    
    
    
    
<div class="container">
	<div class="container_wrap animated bounceInLeft">
		<div class="header_top">
		    <div class="col-sm-3 logo"><h3 style="font-size: 2.5em; color: #ff471a;">eGranja</h3></div>
			<div class="clearfix"> </div>
	      </div>
	      <div class="content">
      	     <div class="registerLogin">
			   <div class="col-md-6 login-left">
			  	 <h3>Don't have an account?</h3>
				 <p>By creating an account with us, you will be able to advertise your produce and view other produce. Buying or selling, this is the place for you. Join us today to experience a whole new world to advertise your produce and discover what you've been missing.</p>
				 <a class="acount-btn" href="register.php">Create an Account</a>
			   </div>
			   <div class="col-md-6 login-right">
			  	<h3>Already have an account?</h3>
				<p>If you have an account with us, please Sign In.</p>
				<form method="POST">
				  <div>
					<input type="email" name="email-address"  id="email" placeholder="Email Address*" required style="width: 500px;"> 
				  </div>
				  <div>
                    <input type="password" name="password"  id="password" placeholder="Password*" required style="width: 500px;"> 
				  </div>
				  <a class="forgot" href="#">Forgot Your Password?</a>
				  <input type="submit" id="submit" value="Sign In">
			    </form>
			   </div>	
			   <div class="clearfix"> </div>
		     </div>
           </div>
    </div>
</div>	

<script src="connect.js"></script>
<script src="in.js"></script>

<script>
    
var config = {
    apiKey: "AIzaSyCypfqra_790aBImDWgtegLBVSR8bXB2uQ",
    authDomain: "egranja-ef9a1.firebaseapp.com",
    databaseURL: "https://egranja-ef9a1.firebaseio.com",
    projectId: "egranja-ef9a1",
    storageBucket: "egranja-ef9a1.appspot.com",
    messagingSenderId: "14066426053"
  };
  firebase.initializeApp(config);
    
    (function(){
    // Initialize the FirebaseUI Widget using Firebase.
var ui = new firebaseui.auth.AuthUI(firebase.auth());
var uiConfig = {
  callbacks: {
    signInSuccess: function(currentUser, credential, redirectUrl) {
      // User successfully signed in.
      // Return type determines whether we continue the redirect automatically
      // or whether we leave that to developer to handle.
      return true;
    },
    uiShown: function() {
      // The widget is rendered.
      // Hide the loader.
      document.getElementById('loader').style.display = 'none';
    }
  },
  // Will use popup for IDP Providers sign-in flow instead of the default, redirect.
  signInFlow: 'popup',
  signInSuccessUrl: 'indexSignedin.php',
  signInOptions: [
    // Leave the lines as is for the providers you want to offer your users.
    //firebase.auth.GoogleAuthProvider.PROVIDER_ID,
    //firebase.auth.FacebookAuthProvider.PROVIDER_ID,
    //firebase.auth.TwitterAuthProvider.PROVIDER_ID,
    //firebase.auth.GithubAuthProvider.PROVIDER_ID,
    //firebase.auth.EmailAuthProvider.PROVIDER_ID,
    //firebase.auth.PhoneAuthProvider.PROVIDER_ID,
      
      firebase.auth.EmailAuthProvider.PROVIDER_ID,
  ],
  // Terms of service url.
  tosUrl: '<your-tos-url>'
};

// The start method will wait until the DOM is loaded.
ui.start('#firebaseui-auth-container', uiConfig);
})()

</script>

    
    
</body>
</html>
