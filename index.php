<!DOCTYPE html>
<html>
<head>
	<title>WebTech Summary Code | Jack'tnp</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css?v=2">
</head>
<body onload="getLocation()">
<div class="container" id="openacc">
	<form action="result.php" method="post" name="Acc" onsubmit="return validateForm()">
	<h1>เปิดบัญชีใหม่</h1>
		<p>ชื่อ-สกุล <input type="text" name="name" ></p>	
		<p>เงินฝากเริ่มต้น <input type="number" name="money" placeholder="300 บาทขึ้นไป"></p>
		<p>เลือกรูปแบบบัญชี 
			<select name="account">
				<option value="บัญชีออมทรัพย์">บัญชีออมทรัพย์</option>
				<option value="บัญชีเงินฝากประจำ">บัญชีเงินฝากประจำ</option>
				<option value="บัญชีเงินเดือน">บัญชีเงินเดือน</option>
			</select>
		</p>
		<input type="submit" style="border: 0px;padding: .25em;">
		<div style="clear: both;"></div>
		<!--<button onclick="getLocation()">Get coordinates</button>-->
		<p id="Location"></p>
		</form>
</div>
<div class="container" id="info">
	<h1>กองทุนแนะนำ</h1>
</div>

<div class="container" id="passport">
<h1>Passport</h1>
<?php
	$url =
	"https://www.booknomads.com/api/v0/isbn/9789000010134";
	$response = file_get_contents($url);
	$result = json_decode($response);
	echo "ISBN : " . $result->ISBN . "<br>";
	echo "Title : " . $result->Title . "<br>";
	echo "Author : " . $result->Authors[0] -> Name . "<br>";
?>
</div>

<div class="container" id="passport">
<h1>แลกเปลี่ยนค่าเงิน</h1>
<form action="" method="POST">
    <p>จำนวนเงิน <input type="number" name="money" required></p>
    <p>สกุลเงินที่มีปัจจุบัน <select name="original">
        <option value="THB" selected>THB</option>
        <option value="JPY">JPY</option>
        <option value="CNY">CNY</option>
        <option value="SGD">SGD</option>
        <option value="USD">USD</option>
    </select></p>
    <p>สกุลเงินที่ต้องการแลก
    <select name="exchange">
        <option value="THB">THB</option>
        <option value="JPY" selected>JPY</option>
        <option value="CNY">CNY</option>
        <option value="SGD">SGD</option>
        <option value="USD">USD</option>
    </select></p>
    <input type="submit" value="Exchange" style="border: 0px;padding: .25em;">
    <div style="clear: both;"></div>
    <?php
    	if(isset($_POST['money'])){
	    $money = intval($_POST['money']);
	    $ori = $_POST['original'];
	    $exc = $_POST['exchange'];
	    $url ="http://ratesapi.io/api/latest?base=" . $ori . "&symbols=" .$exc;
	    $response = file_get_contents($url);
	    $result = json_decode($response);
	    $rate = $result -> rates -> $exc;
	    echo "<br><div class='exchange-box'>" . $money . " " . $ori . " แลกเปลี่ยนได้ " . $rate*$money . " " . $exc . "</div>";
	    }
	?>
</form>
</div>

<script type="text/javascript">
function validateForm() {
	var name = document.forms["Acc"]["name"].value;
	if (name.length < 5) {
		alert("กรุณากรอกชื่อให้สมบูรณ์");
		document.getElementsByName("name")[0].style.color = "red";
		return false;
	}
	else{
		document.getElementsByName("name")[0].style.color = "black";
	}

	var money = document.forms["Acc"]["money"].value;
	if (money.length < 3 || parseInt(money) < 300) {
		alert("เงินเปิดบัญชีไม่ถึง 300 บาท");
		document.getElementsByName("money")[0].style.color = "red";
		return false;
	}
	else{
		document.getElementsByName("money")[0].style.color = "black";
	}
}
/*
var myObj = {
	"firstname": "John",
	"lastname": "Doe",
	"age": 30,
	"cars": ["Ford","BMW","Fiat"] };
document.write(myObj.firstname);
document.write(myObj.cars[0]);
*/

var xmlhttp = new XMLHttpRequest();
var url = "info.json";
xmlhttp.onreadystatechange = function() {
	if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		var myArr = JSON.parse(xmlhttp.responseText);
		myFunction(myArr);
	}
};
xmlhttp.open("GET", url, true);
xmlhttp.send();


function myFunction(arr) {
	for(i = 0; i < arr.length; i++) {
		document.getElementById("info").innerHTML += "<p>" + "<a href='" + arr[i].url + "'>" + arr[i].url + "</a>" + " " + arr[i].display + "</p>";
	}
}

/* Geolocation */
function getLocation() {
	navigator.geolocation.watchPosition(showPosition);
}
function showPosition(position) {
	document.getElementById("Location").innerHTML= "LOCATION -> " + "Latitude: " + position.coords.latitude + ", Longitude: " + position.coords.longitude;
}
</script>

</body>
</html>
