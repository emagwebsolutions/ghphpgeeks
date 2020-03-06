<!DOCTYPE html>
<html>
<head>
<title>capitalsGH</title>
<style type="text/css">
.container{
	width: 200px;
	padding: 20px;
	border: solid 1px #ccc;
	margin: 0 auto;
	margin-top: 200px;
	border-radius: 10px;
}
.title{
	color: #555;
	text-align: center;
	font-size: 22px;
}
.result{
	color: #333;
	text-align: center;
	font-size: 20px;
}
.regions{
	width: 100%;
	padding: 5px;
	border-radius: 8px;
	border: solid 1px #555;
}
</style>
</head>
<body>
<div class="container">
<h4 class="title">
capitalsGH
</h4>
<?php
if(isset($_POST['submit'])){
$regions = $_POST['regions'];
if($regions == 'Ashanti'){
	echo "<div class='result'>Kumasi</div>";
}
elseif($regions == 'Brong-Ahafo'){
	echo "<div class='result'>Sunyani</div>";
}
elseif($regions == 'Greater Accra'){
	echo "<div class='result'>Accra</div>";
}
elseif($regions == 'Central'){
	echo "<div class='result'>Cape Coast</div>";
}
elseif($regions == 'Eastern'){
	echo "<div class='result'>Koforidua</div>";
}
elseif($regions == 'Northern'){
	echo "<div class='result'>Tamale</div>";
}
elseif($regions == 'Western'){
	echo "<div class='result'>Sekondi-Takoradi</div>";
}
elseif($regions == 'Upper East'){
	echo "<div class='result'>Bolgatanga</div>";
}
elseif($regions == 'Upper West'){
	echo "<div class='result'>Wa</div>";
}
elseif($regions == 'Volta'){
	echo "<div class='result'>Ho</div>";
}
else{
	echo "<div class='result'>No entry found</div>";
}
}

?>
<br>
<form method="post" action="index.php">
<select class="regions" name="regions">
<option>Ashanti</option>
<option>Brong-Ahafo</option>
<option>Greater Accra </option>
<option>Central</option>
<option>Eastern</option>
<option>Northern</option>
<option>Western</option>
<option>Upper East</option>
<option>Upper West</option>
<option>Volta</option>
</select>
<br>
<br>
<input type="submit" name="submit" value="Ask">
</form>
<br>
</div>
</body>
</html>