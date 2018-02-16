  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCw6peLb-IWY2GVDz66JUyFMmiryT_Kgxk",
    authDomain: "egranja-0.firebaseapp.com",
    databaseURL: "https://egranja-0.firebaseio.com",
    projectId: "egranja-0",
    storageBucket: "egranja-0.appspot.com",
    messagingSenderId: "1033408040272"
  };
  firebase.initializeApp(config);

 var myParam = location.search.split('product_id=')[1] ? location.search.split('product_id=')[1] : 'myDefaultValue';


var rootRef = firebase.database().ref().child("products/").child(myParam);

rootRef.on('value', snap => {

   // var image = 
    var name = snap.val().name;
    var description = snap.val().description;
    var quantity = snap.val().quantity;
    var price = snap.val().quantity;
    var category = snap.val().category;
    var location = snap.val().location;
    var image = snap.val().image1;


    $('#productdetails').append("<div class='col-md-9 movie_box'>"
      + "<div class='grid images_3_of_2'>"
      + "<div class='movie_image'>"
      + "<span class='movie_rating'>5.0</span>"
      + "<img src="+image+" class='img-responsive' height='800' width='450' alt='' />"
      + "</div>"
      + "</div>"
      + "<div class='desc1 span_3_of_2'>"
      + "<p class='movie_option'><strong>Product Name: </strong></p>"
      + "<p class='pDescriptionText'>" +name+ "</p>"
      + "<p class='pDescription'><strong>Product Description:</strong></p>" 
      + "<p class='pDescriptionText'>" +description+ "</p>"
      + "<p class='movie_option'><strong>Quantity: </strong></p>"
      + "<p class='pDescriptionText'>" +quantity+ "</p>"
      + "<p class='movie_option'><strong>Price: </strong></p>"
      + "<p class='pDescriptionText'>" +price+ "</p>"
      + "<p class='movie_option'><strong>Category: </strong></p>"
      + "<p class='pDescriptionText'>" +category+ "</p>"
      + "<p class='movie_option'><strong>Location: </strong></p>"
      + "<p class='pDescriptionText'>" +location+ "</p>"
      + "</div>" 
      + "<div class='clearfix'>"
      + "</div>"
      + "</div>");


});

	
	//firebase.database().ref().child("products").child(user.getUid());
