//var firstName = document.getElementById("firstName");
//var lastName = document.getElementById("lastName");
//var email = document.getElementById("email");
//var tel = document.getElementById("tel");
//var secQuestion = document.getElementById("secQuestion");
//var answer = document.getElementById("answer");
//var password1 = document.getElementById("password1");
//var password2 = document.getElementById("password2");
const submit = document.getElementById("submit");


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
rootRef.on('child_added', snap => {

   // var image = 
    var name = snap.child('name').val();
    var price = snap.child('price').val();

    $("#allproducts").append("<h4>" + name + "</h4>"
                         +"<p>" + price + "</p>");
});

    
    var rootRef = firebase.database().ref().child('users');
    
    $('#submit').click(function(){
        
        rootRef.push().set({
            FirstName:$('#firstName').val(),
            lastName:$('#lastName').val(),
            email:$('#email').val(),
            tel:$('#tel').val(),
            secQuestion:$('#secQuestion').val(),
            answer:$('#answer').val(),
            password1:$('#password1').val(),
            password2:$('#password2').val(),
        });
    });

firebase.initializeApp(config);

 var rootRef = firebase.database().ref().child('products');
rootRef.on('child_added', snapshot => {

   // var image = 
    var name = snapshot.child('name').val();
    var price = snapshot.child('price').val();

    $('#allproducts').append("<h4>" + name + "</h4>"
                         +"<p>" + price + "</p>")
});

