<head>
		<meta charset="utf-8">
		<title>Robot Arm </title>
		
		<link href ="styles.css" type="text/css" rel="stylesheet">
	
	</head>
	
	<body>
		<h2 style="margin: 10px auto 10 120 ">Robot Arm Control Panael</h2>
		<div class="slideContainer">
	
	<form action="index.php"method="post">
	
	<p>Motor1<span id= "M1"></span> </p>
	
			<input type="range" min="0" max="180" value="0" id="FirstSliderRange" class="FirstSlider" name="S1">
			<p class="valuetext">Valiue:<span id="FirstValue"></span></p>
		
		
		</br>
		
		<p>Motor2<span id= "M2"></span> </p>
		
			<input type="range" min="0" max="180" value="0" id="SecondSliderRange" class="SecondSlider" name="S2">
			<p class="valuetext">Valiue:<span id="Secondvalue"></span></p>

		
		</br>
		
		<p>Motor3<span id= "M3"></span> </p>
		
			<input type="range" min="0" max="180" value="0" id="ThirdSliderRange" class="ThirdSlider" name="S3">
			<p class="valuetext">Valiue:<span id="Thierdvalue"></span></p>
		
		
		</br>
		<p>Motor4<span id= "M4"></span> </p>
		
		
			<input type="range" min="0" max="180" value="0" id="FourthSliderRange" class="FourthSlider" name="S4">
			<p class="valuetext">Valiue:<span id="Fourthvalue"></span></p>
		
		
		</br>
		
		<p>Motor5<span id= "M5"></span> </p>
		
			<input type="range" min="0" max="180" value="0" id="FifthSliderRange" class="FifthSlider" name="S5">
			<p class="valuetext">Valiue:<span id="Fifthvalue"></span></p>
		
		
		</br>
		
		<p>Motor6<span id= "M6"></span> </p>
		
			<input type="range" min="0" max="180" value="0" id="SixthSliderRange" class="SixthSlider" name="S6">
			<p class="valuetext">Valiue:<span id="Sixthvalue"></span></p>
		
		</br>
		<input type="submit" value = "Save and Run" name="save_and_run" style="border 1 px solid #700; padding: 9px; color:#fff; background:#700;
		border-radius:4px;  /*butten frame */ transition:all 0.5s; font-size: 17px; margin-left:20; margin-top:1;" >
		
		</div>
</form>
<script src= "main.js"></script>
</body>
	</html>

<?php 
error_reporting(E_ALL&~E_NOTICE);
ini_set('display_errors',1);


$ServerName = "localhost";
$UserName = "root";
$dbName = "robotarm";
$password = "";

// Create connection
$conn = mysqli_connect($ServerName, $UserName, $password ,$dbName );

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


//ارسال المعلومات المدخله الي قاعدة البيانات 

if(isset($_POST['save_and_run'])){

$p1 =$_POST['S1'];
$p2 =$_POST['S2'];
$p3 =$_POST['S3'];
$p4 =$_POST['S4'];
$p5 =$_POST['S5'];
$p6 =$_POST['S6'];



	
$query ="INSERT INTO robotarm (Id,Motor1,Motor2,Motor3,Motor4,Motor5,Motor6,Save_and_Run)VALUES('','$p1','$p2','$p3','$p4','$p5','$p6','S')";


if(mysqli_query($conn,$query)){

	echo "Save";
}
	
else
{
	echo "Soryy Is Not Save Data";
}
mysqli_close($conn);
}

?>