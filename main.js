// Initialize Firebase
  var config = {
    apiKey: "AIzaSyCypfqra_790aBImDWgtegLBVSR8bXB2uQ",
    authDomain: "egranja-ef9a1.firebaseapp.com",
    databaseURL: "https://egranja-ef9a1.firebaseio.com",
    projectId: "egranja-ef9a1",
    storageBucket: "egranja-ef9a1.appspot.com",
    messagingSenderId: "14066426053"
  };
  firebase.initializeApp(config);

  //Reference message collection
  var messaegesRef = firebase.database().ref().child('users');

// Listen for form submit
document.getElementById('registerForm').addEventListener('submit', submitForm);

//Submit form
function submitForm(e){
    e.preventDefault();
    
    window.alert("Working");
    //Get values
    var firstName = getInputVal('firstName');
    var lastName = getInputVal('lastName');
    var email = getInputVal('email');
    var tel = getInputVal('tel');
    var secQuestion = getInputVal('secQuestion');
    var answer = getInputVal('answer');
    var password1 = getInputVal('password1');
    var password2 = getInputVal('password2');
    
    //Save Message
    saveMessage(firstName, lastName, email, tel, secQuestion, answer, password1, password2);
}

// Function to get form values
function getInputVal(id){
    return document.getElementById(id).value;
}

//Save message to firebase
function saveMessage(firstName, lastName, email, tel, secQuestion, answer, password1, password2){
    var newMessageRef = messagesRef.push();
    newMessageRef.set({
        fristName: fristName,
        lastName: lastName,
        email: email,
        tel: tel,
        secQuestion: secQuestion,
        answer: answer,
        password1: password1,
        password2: password2
    });
}

var rootRef = firebase.database().ref().child('products');
rootRef.on('child_added', snapshot => {

   // var image = 
    var name = snapshot.child('name').val();
    var price = snapshot.child('price').val();

    $("#product").append("<h4>" + name + "</h4>"
                         +"<p>" + price + "</p>")
});








//    var rootRef = firebase.database().ref().child('users');
    
//    $('#submit').click(function(){
//        rootRef.set({
//            FirstName:$('#firstName').val(),
//            lastName:$('#lastName').val(),
//            email:$('#email').val(),
//            tel:$('#tel').val(),
//            secQuestion:$('#secQuestion').val(),
//            answer:$('#answer').val(),
//            password1:$('#password1').val(),
//            password2:$('#password2').val(),
//        });
//    })










