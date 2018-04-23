<!DOCTYPE html>
<html>
<head>
	<title>KMITL LOST&FOUND</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<link rel="shortcut icon" href="images/icon.png">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<script src="https://www.gstatic.com/firebasejs/4.12.0/firebase.js"></script>
	<script type="text/javascript" src="action.js"></script>
	<script type="text/javascript" src="firebase.js"></script>
	<script type="text/javascript" src="config.js"></script>
	<script>
	  // Initialize Firebase
	  var config = {
	    apiKey: "AIzaSyAVwv3cCzZGmo4IvPxzVAADEWyIFtxXN04",
	    authDomain: "eit-project.firebaseapp.com",
	    databaseURL: "https://eit-project.firebaseio.com",
	    projectId: "eit-project",
	    storageBucket: "",
	    messagingSenderId: "702863059720"
	  };
	  firebase.initializeApp(config);</script>
</head>

<body>
<div class="login" id="login-btn" onclick="login()">LOGIN</div>
<div class="regis" id="regis-btn" onclick="regis()">SIGN UP</div>
<a class="enter" href="found.php">ENTER SITE</a>

<!-- Popup -->
	<div id="login-popup" class="hide">

		<h1>กรุณาลงชื่อเข้าสู่ระบบก่อนใช้งาน</h1>
			Username  :  <input id="username" type="text" name="username" placeholder="username"><br>
			Password  :  <input id="password" type="password" name="password" placeholder="password"><br><br>
			<button style="position: static;" value="Login" class="btn" onclick="loginFirebase();">Login</button>

		<div class="close-window" onclick="popupClose()"><b>X</b></div></div>
    <div id="regis-popup" class="hide">

		<h1>สมัครสมาชิก</h1>
			Username : <input id="user" type="text" name="username" placeholder="Enter your username"><br>
			Password : <input id="pass" type="password" name="password" placeholder="Enter your password"><br>Confirm Password : <input id="confirmpw" type="password" name="confirmpw" placeholder="Contirm your password"><br><br>
			<button style="position: static;" class="btn" onclick="regisFirebase()">Register</button>

		<div class="close-window" onclick="popupClose()"><b>X</b></div></div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>