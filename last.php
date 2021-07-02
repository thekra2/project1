<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="refresh" content ="2">
<meta name="viewport" content="width=device-width, initial-scale=">
<link rel="stylesheet" href="f.css">

<style>
    body{
      
  background: var(--color-black-1);
  border-top: var(--color-red);
    }


.slider {

margin-top: 13px;
  -webkit-appearance: none;
  width: 34.6%;
  height: 17px;
  border-radius: 9px;
  background: lightsteelblue;
  opacity: 0.5;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 40px;
  background-color:#FDCDCD;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background:var(--color-red);
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #04AA6D;
  cursor: pointer;
}


@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");

:root {
  --color-red: #ec1840;
  --color-purple: #7a18ec;
  --color-white: #fff;
  --color-black-1: #111;
  --color-black-2: #222;
  --color-black-3: #444;
  --speed-normal: 0.5s;
  --speed-fast: 0.8s;
}

a {
  position: relative;
  width: 180px;
  height: 100px;
  margin: 2px;
  line-height: 60px;
  letter-spacing: 2px;
  text-decoration: none;
  text-transform: uppercase;
  text-align: center;
  color: var(--color-white);
  border: 3px solid var(--color-red);
  font-family: cursive;

 
}

a:hover {
    border: 5px solid transparent;
    background: var(--color-red) url(https://i.postimg.cc/wBXGXbWN/pixel.png); 
    transition-delay: 0.8s;
    background-size: 70px;
    animation: animate var(--speed-fast) steps(8) forwards;
  }
  
@keyframes animate {
  0% {
    background-position-y: 0;
  }
  100% {
    background-position-y: -480px;
  }
}
p{
  font-family: cursive;
}

img {
  background-color:#111;
  filter: blur(1.3px);
  opacity: 0.7;
  width: 55%;
  display:block;
  margin-left: 41%;
  margin-top: -510px;
 border-radius: 30px;
 
}


h1{
 
  background-color: var(--color-red);
  margin-right: 65%;
  filter:opacity(80%);
  border-radius: 15px;
  color: lightsteelblue;
  font-family:cursive;
  text-align: center;
  text-transform: uppercase;

}



</style>

</head>
<body>
<div id="particle-container">
	<div class="particle"></div>
	<div class="particle"></div>
	<div class="particle"></div>
	<div class="particle"></div>
	<div class="particle"></div>
	<div class="particle"></div>
	<div class="particle"></div>
	<div class="particle"></div>
	<div class="particle"></div>
	<div class="particle"></div>
	<div class="particle"></div>
	<div class="particle"></div>
	<div class="particle"></div>
	<div class="particle"></div>
	<div class="particle"></div>
	<div class="particle"></div>
	<div class="particle"></div>
	<div class="particle"></div>
	<div class="particle"></div>
	<div class="particle"></div>
	<div class="particle"></div>
	<div class="particle"></div>
	<div class="particle"></div>
	<div class="particle"></div>
	<div class="particle"></div>
	<div class="particle"></div>
	<div class="particle"></div>
	<div class="particle"></div>
	<div class="particle"></div>
	<div class="particle"></div>
</div>

<h1 >Robot Arm Control</h1>

<div class="slidecontainer1">
  <input type="range" min="0" max="180" value="100" class="slider" id="myRange1">
  <p  style="color:lightsteelblue;"> MOTOR 1 ~ Value: <span id="demo1"></span></p>
</div>

<script>
var myRange1 = document.getElementById("myRange1");
var demo1 = document.getElementById("demo1");
demo1.innerHTML = myRange1.value;

myRange1.oninput = function() {
    demo1.innerHTML = this.value;
}
</script>


<div class="slidecontainer2">
  <input type="range" min="0" max="180" value="100" class="slider" id="myRange2">
  <p style="color:lightsteelblue;">MOTOR 2 ~ Value: <span id="demo2"></span></p>
</div>
<script>
var myRange2 = document.getElementById("myRange2");
var demo2 = document.getElementById("demo2");
demo2.innerHTML = myRange2.value;

myRange2.oninput = function() {
    demo2.innerHTML = this.value;
}
</script>

<div class="slidecontainer3">
  <input type="range" min="0" max="180" value="100" class="slider" id="myRange3">
  <p  style="color:lightsteelblue;">MOTOR 3 ~ Value: <span id="demo3"></span></p>
</div>

<script>
var myRange3 = document.getElementById("myRange3");
var demo3 = document.getElementById("demo3");
demo3.innerHTML = myRange3.value;

myRange3.oninput = function() {
    demo3.innerHTML = this.value;
}
</script>

<div class="slidecontainer4">
  <input type="range" min="0" max="180" value="100" class="slider" id="myRange4">
  <p  style="color:lightsteelblue;">MOTOR 4 ~ Value: <span id="demo4"></span></p>
</div>

<script>
var myRange4 = document.getElementById("myRange4");
var demo4 = document.getElementById("demo4");
demo4.innerHTML = myRange4.value;

myRange4.oninput = function() {
    demo4.innerHTML = this.value;
}
</script>

<div class="slidecontainer5">
  <input type="range" min="0" max="180" value="100" class="slider" id="myRange5">
  <p  style="color:lightsteelblue;">MOTOR 5 ~ Value: <span id="demo5"></span></p>
</div>

<script>
var myRange5 = document.getElementById("myRange5");
var demo5 = document.getElementById("demo5");
demo5.innerHTML = myRange5.value;

myRange5.oninput = function() {
    demo5.innerHTML = this.value;
}
</script>

<div class="slidecontainer6">
  <input type="range" min="0" max="180" value="<?php echo $r6?>" class="slider" id="myRange6">
  <p  style="color:lightsteelblue;">MOTOR 6 ~ Value: <span id="demo6"></span></p>
</div>

<script>
var myRange6 = document.getElementById("myRange6");
var demo6 = document.getElementById("demo6");
demo6.innerHTML = myRange6.value;

myRange6.oninput = function() {
    demo6.innerHTML = this.value;
}
</script>


<a href="javascript:void(0);">save value</a>
<img src="hh.png" alt="hh">

<?php


$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "control";      

$conn = new mysqli($servername, $username, $password); 
if ($conn->connect_error)
{
    echo "connection error !! " . $conn->connect_error;
}
else
{
echo "connected !!";



 }



 

/*if(isset($_GET['a'])){
$r6=mysqli_real_escape_string($db_connect,$_POST['myRange6']);


}
*/

?>


</body>
</html>
