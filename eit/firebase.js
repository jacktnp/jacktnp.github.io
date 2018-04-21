window.onload = function() {
	showData();
}

function loginFirebase() {
	var firebaseRef = firebase.database().ref("User");
}

function regisFirebase() {
	var username = document.getElementById('user');
	var password = document.getElementById('pass');
	var confirmpw = document.getElementById('confirmpw');
	if (username.value === "" || password.value === "") {
		alert("Please enter your username and password.")
	} else if (password.value == confirmpw.value) {
		insertData(username.value, password.value);
	} else{
		alert("Your password doesn't match.");
	}
	showData();
}

function insertData(username, password) {
	var firebaseRef = firebase.database().ref("User");
	firebaseRef.push({	//add data to firebase database
		username:username,
		password:password
	});
}

function showData() {
	var firebaseRef = firebase.database().ref("User").orderByChild("key"); //call firebaseRef root name "User"
	firebaseRef.once('value').then(function(data) { //call database
		data.forEach(function(childSnapshot) {
			var childKey = childSnapshot.key;
			var childData = childSnapshot.val();
			console.log(childData);
		});
	});
}