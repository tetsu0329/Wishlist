var config = {
    apiKey: "AIzaSyBFfd5onKxZxCkhXCEMuoiz5vw7BpR09wU",
    authDomain: "chatapp-564dd.firebaseapp.com",
    databaseURL: "https://chatapp-564dd.firebaseio.com",
    projectId: "chatapp-564dd",
    storageBucket: "chatapp-564dd.appspot.com",
    messagingSenderId: "281381170522"
};
firebase.initializeApp(config);

function register(){
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    firebase.auth().createUserWithEmailAndPassword(email, password).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        // ...
      });
}

function login(){
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        // ...
      });
}