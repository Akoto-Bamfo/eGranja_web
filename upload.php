<!doctype html>
<html>
<head>
<title>eGranja | Upload Product</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/index.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <script src="client/fine-uploader.js"></script>
    <link href="client/fine-uploader-gallery.css" rel="stylesheet">
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
		    <div class="col-sm-3 logo"><h3 style="font-size: 2.5em; color: #ff471a;">eGranja</h3><h4 style="font-size: 1em; color: #fff;">Upload Product</h4></div>
		    <div class="clearfix"> </div>
	      </div>
	      <div class="content" style="height: 450px;">
      	     <div class="register">
		  	  <form id="registerForm"> 
				 <div class="register-top-grid col-sm-6">
					<div>
						<input type="text" id="productName" name="productName" placeholder="Product Name" required> 
					 </div>
                     <div class="clearfix"></div>
					 <div>
						<!--Categories--><select class=""style="width: 500px; height: 35px; outline-color: #ff471a;">
                            <option id="" selected>-- Select Category --</option>
                            <option id="tuber">Tubers</option>
                            <option id="fruit">Fruits</option>
                            <option id="vegetable">Vegetables</option>
                            <option id="grain">Grains & Cereals</option>
                            <option id="meat">Meat & Fish</option>
                        </select>
					 </div>
                     
					 </div>
				     <div class="register-top-grid col-sm-6" style="padding-bottom: -1px;">
						 <div>
                             <textarea type="text" id="description" name="description" placeholder="Type description here." style="width: 500px; height: 149px; outline-color: #ff471a;"></textarea>
					 </div>
                  </div>
                  
                     
					<div class="register-top-grid col-sm-6" style="float: right;"> 
                    <!--Unit of Measurement--><div>
                                                <select class=""style="width: 500px; height: 35px; outline-color: #ff471a;">
                                                    <option id="" selected>-- Select Unit of Measurement --</option>
                                                    <option id="bag">Bag(s)</option>
                                                    <option id="basket">Basket(s)</option>
                                                    <option id="cup">Cup(s)</option>
                                                    <option id="kilo">Kilo(s)</option>
                                                    <option id="sack">Sack(s)</option>
                                                    <option id="box">Box(es)</option>
                                                </select>
                                             </div>
                  </div>
					 
                     <div class="register-bottom-grid col-sm-6" style="margin-top: -57px;">
						    <!--Price--><div>
								<input type="text" id="price" name="price" placeholder="Price" required>
							 </div>
                             <div class="clearfix"></div>
							<!--Quantity--> <div>
								<div>
						<input  style="width: 500px; height: 35px; outline-color: #ff471a;" type="number" id="quantity" name="quantity" placeholder="Quantity" required> 
					 </div>
							 </div>
					 </div>
                  <div class="register-bottom-grid col-sm-6" style="margin-top: -10px;">
                      <div>
                        <input type="file" id="img1">
                      </div>
                      <div>
                        <input type="file" id="img2">
                      </div>
                      <div>
                        <input type="file" id="img3">
                      </div>
                      <div>
                        <input type="file" id="img4">
                      </div>
				  </div>
				</form>
				<div class="register-button">
				   <form style="margin-top: 10px;">
					   <input id="submit" type="submit" value="Upload">
				   </form>
				</div>
		   </div>
           </div>
    </div>
</div>
    <script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>
    <script src="connect.js"></script>
    <script>
    
    //Add signup event
    var rootRef = firebase.database().ref().child('products');
    
    $('#submit').click(function(){
        
        rootRef.push().set({
            FirstName:$('#productName').val(),
            lastName:$('#lastName').val(),
            email:$('#email').val(),
            tel:$('#tel').val(),
            secQuestion:$('#secQuestion').val(),
            answer:$('#answer').val(),
            password1:$('#password1').val(),
            password2:$('#password2').val(),
        });
    });
        
    var product = ("productName");
    var tuber = ("tuber");
    var fruit = ("fruit");
    var vegetable = ("vegetable");
    var grain = ("grain");
    var meat = ("meat");
    var description = ("description");
    var bag = ("bag");
    var basket = ("basket");
    var cup = ("cup");
    var kilo = ("kilo");
    var sack = ("sack");
    var price = ("price");
    var img1 = ("img1");
    var img2 = ("img2");
    var img3 = ("img3");
    var img4 = ("img4");
    var submit = ("submit");
    
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