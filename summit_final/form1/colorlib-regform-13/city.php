<?php
$con=mysqli_connect('localhost','root','','esummit_18');

$state = $_POST['state'];
$run = mysqli_query($con,"select * from `city` where `state`='$state' order by `city_name`");
if(mysqli_query($con,"select * from `city` where `state`='$state' order by `city_name`")){
	echo "success";
}
else{
	echo "faliure";
}
$str = "<option value='select'>City</option>";
while($get=mysqli_fetch_assoc($run)){
	$city = $get['city_name'];
	$str = $str."<option value='$city'>$city</option>";
}
echo $str;

?>
