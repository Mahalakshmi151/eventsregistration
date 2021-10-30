<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.navabt{
  background-image: url(https://cdn.manomano.com/images/images_products/1504056/P/31934290_1.jpg);

    overflow: hidden;
    
    height: 63px;
    margin-top: -5px;
}
.navabt a{
    float: right;
    border-left: 1px solid dimgrey;
    color:black;
    text-align: center;
    padding: 20px 16px;
    font-size: 18px;
    width: 150px;
    text-decoration: none;
    font-weight: bold;

}
.conabt a{
    float:left;
    font-size: 20px;
    
}

.navabt a:hover{
   
    color:rgb(211, 157, 39);
}
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 100%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
.container {
  position: relative;
  width: 100%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color:#ffe6ff;
  overflow: hidden;
  width: 100%;
  height: 100%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: .3s ease;
  transition: .3s ease;
}

.container:hover .overlay {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.text {
  color: black;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.click{
  text-align: center;
}
</style>
</head>
<body>
<div class="navabt">
    <a href="index.php"><i class="fas fa-power-off"></i>
                    LOGOUT</a>
</div>
<div class="row">
  <div class="column">
    <div class="container">
  <img src="https://media.istockphoto.com/photos/data-scientists-male-programmer-using-laptop-analyzing-and-developing-picture-id1295900106?b=1&k=20&m=1295900106&s=170667a&w=0&h=kQ2UWilU4Bild5aP03CaF65gMbSI-chG--7dd2oS8GM=" alt="Avatar" class="image" >
  <div class="overlay">
    <div class="text">TECHNICAL<br><br><div class="click">
<a href="tech.php" class="myButton" style="width:200px;height: 50px;text-align: center;padding-left: center;">VIEW EVENTS</a>
</div></div>
  </div>
</div>
  </div>
  <div class="column">
    <div class="container">
  <img src="https://nexuskec.com/wp-content/uploads/2021/02/public-speaker-template-hero-img-bg.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">NON TECHNICAL<br><br><div class="click">
<a href="#" class="myButton" style="width:200px;height: 50px;text-align: center;padding-left: center;">VIEW EVENTS</a>
</div></div>
  </div>
</div>
  </div>
  <div class="column">
    <div class="container">
  <img src="https://miro.medium.com/max/1200/1*0n78FVuZdA_8AO3WNIsCvg.jpeg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">PROJECT DISPLAY<br><br><div class="click">
<a href="#" class="myButton" style="width:200px;height: 50px;text-align: center;padding-left: center;">VIEW EVENTS</a>
</div></div>
  </div>
</div>
  </div>
</div>

</body>
</html>