<html>
<head>
<title>Result</title>
</head>
<body">
<?php
// Validate input
if (!empty($_POST['name'] && !empty($_POST['weight']) && !empty($_POST['height']) && !empty($_POST['age']))) {
$name = $_POST['name'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$e = $_POST['age'];
$gender = $_POST['gender'];
echo "<div class='div1'>
    <p>Below are your details:</b></p>
    <b> Name : </b> $name <br><br>
    <b> Age : </b> $e <br><br>
    <b> Weight: </b> $weight <br><br>
    <b> Height : </b> $height <br><br>
    <b> gender : </b> $gender <br><br>
    </div>";
} 
else{
    $name = NULL;
echo '<p><b>Incomplete Form! Please resubmit.</b></p>';
}
$bmi = $weight / ($height*$height);
$lbm = 0;
if($gender == "male"){
    $lbm = (1.20 * $bmi) + (0.23 * $age - 16.2);
}
elseif($gender == "female"){
    $lbm = (1.20 * $bmi) + (0.23 * $age - 5.4);
}
echo "<div class='div2'>
    <p>BMI = $bmi<br></p>
    <p>LBM = $lbm<br></p>";
?>
</body>
</html>
<style>
    .div1{
        position: absolute;
        top: 100px;
        left: 50px;
        width: 300px;
        border: 3px solid #73AD21;
        padding: 10px;
    }
    .div2{
        position: absolute;
        top: 100px;
        left: 400px;
        width: 300px;
        border: 3px solid #73AD21;
        padding: 10px;
    }