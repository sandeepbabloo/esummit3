<?php
$con = mysqli_connect('localhost','root','','esummit_18');
$city = $_POST['city'];
$run = mysqli_query($con,"select distinct `name` from `allcollege_trimmed` where `city`='$city' order by `name`");
$str = "<option value='select'>College</option>";
while($get=mysqli_fetch_assoc($run)){
	$college = strtoupper($get['name']);
	$str = $str."<option value='$college'>$college</option>";
}
if($city!='select')
$str = $str."<option value='other'>Other</option>";
echo $str;

?>
