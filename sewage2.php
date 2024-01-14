<?php

//$connect=mysqli_connect("localhost","id21105897_project1","Iamproject@1","id21105897_project") or die(mysqli_connect_error());


if(isset($_GET['back']))
{
echo ' <script language="javascript" type="text/javascript">
parent.document.location="index.php";
</script>';
}

//$query=mysqli_query($connect,"SELECT * FROM `sewage` WHERE 1 ") or die(mysqli_error($connect));

/*$row=mysqli_fetch_array($query);

    $temp=$row['temp'];
    $hum=$row['hum'];
    $meth=$row['meth'];
    $aqi=$row['aqi'];
    $lvl=$row['lvl'];
?>*/


<!DOCTYPE html>

<html>
<head>
    
    <meta http-equiv="refresh" content="20">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/home.css" type="text/css" rel="stylesheet">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="css/about.css" type="text/css" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 50%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


/* Remove extra left and right margins, due to padding */
.row1 {margin: 0 -5px;}

/* Clear floats after the columns */
.row1:after {
  content: "";
  display: table;
  clear: both;
}

.column1 {
  float: left;
  width: 50%;
  padding: 0 10px;
}
.bg-img1 {
  /* The image used */
  width:100%;

  background-color: white;
  background-color: #FAF2F1;
border-style: redge;
}

.bg-img2 {
  /* The image used */
  width:100%;
color: white;
  background-color: #2F4B78 ; //#0158A0
border-style: redge;

}
/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
 // box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f4f4f3;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column1 {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card1 {
 // box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: white;
}
.container5 {
   display: flex;
   display: flex;
    align-items: center;
    justify-content: center;
//    align-items: flex-start;
  }
  
  .responsive5 {
    width: 150px;
    height: 150px;
    display: inline-block;

  }
  
  .heading5 {
    margin-left: 10px;
   
  }
  
  .main-heading {
    margin: 0; /* Remove default margins */
   // font-size:100px;
   font-weight: bold; 
   color: #F6F6F6;
    padding-left: 15px;
    padding-right: 10px;
      
  }

  .sub-heading {
    margin-top: 5px; /* Add margin to top */
    //color: #333;
  //font-size:50px;
    color: pink;
    font-weight: bold;
    padding-left: 15px;
      
    padding-right: 10px;
  }
  
  
/* Media query for smaller screens */
@media (max-width: 768px) {
    .main-heading {
        font-size: 20px; /* Adjust font size for smaller screens */
    }
}

/* Media query for even smaller screens */
@media (max-width: 480px) {
    .main-heading {
        font-size: 18px; /* Further adjust font size for very small screens */
    }
}
  
/* Media query for smaller screens */
@media (max-width: 768px) {
    .sub-heading {
        font-size: 18px; /* Adjust font size for smaller screens */
    }
}

/* Media query for even smaller screens */
@media (max-width: 480px) {
    .sub-heading {
        font-size: 15px; /* Further adjust font size for very small screens */
    }
}
  
/* Float four columns side by side */
.column {
  float: left;
  width: 50%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


/* Remove extra left and right margins, due to padding */
.row1 {margin: 0 -5px;}

/* Clear floats after the columns */
.row1:after {
  content: "";
  display: table;
  clear: both;
}

.column1 {
  float: left;
  width: 100%;
  padding: 0 10px;
}
.column2 {
  float: left;
  width: 50%;
  padding: 0 10px;
}.column3 {
  float: left;
  width: 100%;
  padding: 0 10px;
}
.bg-img1 {
  /* The image used */
  width:100%;

  background-color: white;
  background-color: #FAF2F1;
border-style: redge;
}
/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
 // box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
 background-color: #f4f4f3;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column1 {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card1 {
 // box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f4f4f3;
}

.body2 {
  background-color: #474e5d;
  font-family: Helvetica, sans-serif;
}
/* The actual timeline (the vertical ruler) */
.timeline {
  position: relative;
  max-width: 1200px;
  margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
  content: '';
  position: absolute;
  width: 6px;
  background-color: white;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}

/* Container around content */
.container {
  padding: 10px 40px;
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.container::after {
  content: '';
  position: absolute;
  width: 25px;
  height: 25px;
  right: -17px;
  background-color: white;
  border: 4px solid #FF9F55;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.left {
  left: 0;
}

/* Place the container to the right */
.right {
  left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 30px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
  left: -16px;
}

/* The actual content */
.content {
  padding: 20px 30px;
  background-color: white;
  position: relative;
  border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
  left: 31px;
  }
  
  /* Full-width containers */
  .container {
  width: 100%;
  padding-left: 70px;
  padding-right: 25px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .container::before {
  left: 60px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
  left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  .right {
  left: 0%;
  }
}
hr {
            height: 2px;
            background-color: white;
            border: none;
        } 
        h3
        {
            padding-left: 15px;
            padding-right: 15px;
            
        }
        
</style>


</head>

<body>
<!-- <img src="eshwar logo1.png" alt="Nature" class="responsive" width="100%" height="300">
<br><br>
-->


<div class="bg-img2">

<br>
<div class="container5">
  <img src="esh.png" alt="Nature" class="responsive5">
   <div class="headings">
    <center><h1 class="main-heading">Sri Eshwar College of Engineering</h1>
    <hr>
    <h2 class="sub-heading">Department of ECE</h2>
  </center>
  </div>
</div>

<!--
<h3><center>Sri Eshwar College of Engineering and Technology</center></h3>
<h4><center>Department of Electronics and Communication Engineering</center></h4>
<h5><center>Inter College Events</center></h5>
-->

<br>

</div>
<br><br>
<form method="GET" action="sewage.php">
 <button type="submit" name="back" class="registerbtn">Back</button> 
 </form>   

<br><br>
<center><h3 style="font-weight: bold; color: green">Drainage Monitoring System</h3></center>
<br><br>

<form method="GET" action="sewage.php">
<div class="row">

 <div class="column">
    <div class="card">
      <h3>Methane Gas Level</h3>
	 <img src="methane.png" alt="Nature" width="200px" height="200px"><br><br>
     Methane Gas : <?php echo $meth." PPM" ?>
      
      
 <br><br>   </div>
  </div>
 
 
 
  <div class="column">
    <div class="card">
      <h3>Air Quality Level</h3>
	 <img src="air.png" alt="Nature" width="200px" height="200px"><br><br>
     Air Quality : <?php echo $aqi." PPM" ?>
      
      
 <br><br>   </div>
  </div>
  
</div>
<br><br>
<div class="row">

 <div class="column">
    <div class="card">
      <h3>Temperature and Humidity Values</h3>
      <img src="temphum.png" alt="Nature" width="200px" height="200px"><br><br>
      Temperature : <?php echo $temp."*c" ?><br><br>
      Humidity : <?php echo $hum."%" ?>
      <br> </div>
  </div>


 <div class="column">
    <div class="card">
      <h3>Drainage Level</h3>
      <img src="drainage.png" alt="Nature" width="200px" height="200px"><br><br>
      Level : <?php echo $lvl."%" ?><br><br>
      <br> </div>
  </div>

</div>

<br><br>

<br><br>
<script>

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}

</script>
</body>

</html>
