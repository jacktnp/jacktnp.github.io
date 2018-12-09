<!DOCTYPE html>
<html>
<head>
	<title>WebTech Lab 9 : PHP RESULT | Jack'tnp</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css?v=1">
</head>
<body>
<div class="container">
	<h1>เปิดบัญชีสำเร็จ</h1>
	<table width="100%">
		<tr>
			<td>ข้อมูล</td>
		</tr>
		<tr>
			<td>ชื่อ-สกุล</td>
			<td><?php echo $_POST["name"];?></td>
		</tr>
		<tr>
			<td>เงินเปิดบัญชี</td>
			<td><?php echo $_POST["money"];?> บาท</td>
		</tr>
		<tr>
			<td>ประเภทบัญชี</td>
			<td><?php echo $_POST["account"]; ?></td>
		</tr>
	</table>
	<a href="index.php"><div class="btn-return">RETURN</div></a>
</div>
</body>
</html>