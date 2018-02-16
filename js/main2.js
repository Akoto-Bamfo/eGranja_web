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


 var rootRef = firebase.database().ref().child('products');
rootRef.on('child_added', snapshot => {

   // var image = 
    var name = snapshot.child('name').val();
    var price = snapshot.child('price').val();
    var image = snapshot.child('image1').val();
    var id = snapshot.key;

    $('#allproducts').append("<a href='single.php?product_id="+id+" '>" + "<div class='col-md-3 col-sm-6 col-xs-6 team-grids' data-aos='fade-down'>"
          + "<div class='thumbnail team-inner'>" + 
           " <img src="+image+" class='img-responsive' height='800' width='450' alt='' />" +
           " <div class='wthree-team-caption'>" +
           " <h4>" +name+ "</h4> " +
           " <p>" +price+ "</p>" +
           " <div class='social-icons-agileits-w3layouts'>" +
           " <ul> " +
           " <li><a href='#''><span class='fa fa-phone' aria-hidden='true'></span></a></li>" +
           " <li><a href='#'><span class='fa fa-envelope-o' aria-hidden='true'></span></a></li>" +
           " <li><a href='#'><span class='fa fa-map-marker' aria-hidden='true'></span></a></li>" +
           " </ul>" +
           " </div> " +
           " </div>" +
           " </div>" +
           " </div> " +
           " </a> ");













      // "<h4>" + name + "</h4>"
      //                    +"<p>" + price + "</p>");
});
