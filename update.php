 <?php
    $temp=$_GET['temp'];
    $hum=$_GET['hum'];
    $meth=$_GET['meth'];
    $aqi=$_GET['aqi'];
    $lvl=$_GET['lvl'];
    $db=mysqli_connect("localhost","id21105897_project1","Iamproject@1","id21105897_project") or die(mysqli_connect_error());
mysqli_query($db,"UPDATE `sewage` SET `temp`='$temp',`hum`='$hum',`meth`='$meth',`aqi`='$aqi',`lvl`='$lvl' ")or die(mysqli_error($db));

?>