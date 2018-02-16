//Initialize firebase
var app_fireBase = {};
(function(){
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
    
  app_fireBase = firebase;
    
})()