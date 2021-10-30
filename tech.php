<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing:fixed;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style>
</head>
<body>

<!-- MAIN (Center website) -->
<div class="main">

<h1>TECHNICAL EVENTS</h1>
<hr>

<h2>EVENTS</h2>


<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content"href="https://forms.gle/sL9yaPPT8PmbJgCy6">
      <img src="https://thejournal.com/-/media/EDU/THEJournal/2019-Images-Editorial/20190829CoderZcompetition.jpg" alt="Mountains" style="width:100%">
      <h3>Code Warrior</h3>
      <p>Coding competitions are a great way for young coders to apply what they know in a fun context and improve their analytical and problem-solving skills.<a href="https://forms.gle/sL9yaPPT8PmbJgCy6" class="myButton" style="width:200px;height: 50px;text-align: center;padding-left: center; ">APPLY</a></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="https://images2.content-hci.com/commimg/myhotcourses/blog/post/myhc_89683.jpg" alt="Lights" style="width:100%">
      <h3>Debugging</h3>
      <p>This contest tests your debugging skills. A solution will be provided with the problem description but the given solution will have several Logical Errors.<a href="#" class="myButton" style="width:200px;height: 50px;text-align: center;padding-left: center; ">APPLY</a></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="https://www.business.com/images/content/5cf/a69409c658a6f538b456e/1500-0-" alt="Nature" style="width:100%">
      <h3>Paper Presentation</h3>
      <p>Paper presentation is an individual competition where each participant is required to make a paper about a given topic or area, and then present it in front of the juries.<a href="#" class="myButton" style="width:200px;height: 50px;text-align: center;padding-left: center; ">APPLY</a></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="https://i.pinimg.com/originals/39/59/32/395932dd2a32d851b9409603c08d0d92.png" alt="Mountains" style="width:100%">
      <h3>Technical Quiz</h3>
      <p>A quiz is a game which can also be called a mind sport wherein the players, either as individuals or in teams attempt to answer questions posed to them correctly.<a href="#" class="myButton" style="width:200px;height: 50px;text-align: center;padding-left: center; ">APPLY</a></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="https://storage.googleapis.com/gweb-uniblog-publish-prod/images/Screen_Shot_2017-03-14_at_4.45.03_PM.max-1000x1000.png" alt="Mountains" style="width:100%">
      <h3>Code Jam</h3>
      <p>Put your coding skills to the test as you work your way through multiple rounds of algorithmic coding puzzles for the title of Code Jam<a href="#" class="myButton" style="width:200px;height: 50px;text-align: center;padding-left: center; ">APPLY</a></p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="https://www.freshbooks.com/blog/wp-content/uploads/2006/06/free-contract-for-web-designers.jpg" alt="Mountains" style="width:100%">
      <h3>Web Designing</h3>
      <p>Web page design contests - dozens of designs, pick your favorite. Answer a few simple questions, get dozens of designs and pick your favorite.<a href="#" class="myButton" style="width:200px;height: 50px;text-align: center;padding-left: center; ">APPLY</a></p>
    </div>
  </div>

</div>

</body>
</html>