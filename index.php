<?php
$colors = ["red", "amber", "blue", "green", "deeporange", "deeppurple", "teal"];
$i = 0;
$left = false;
function side_and_color() {
	global $i, $colors, $left;
	$left = !$left;
	return(($left ? "left" : "right") . " " . $colors[$i++ % count($colors)]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Experiments &middot; ChandlerSwift.com</title>
  <meta name="description" content="Some web hacks I've thrown together over the years">
  <meta name="author" content="Chandler Swift">
  <!--<link rel="stylesheet" href="css/styles.css?v=1.0">-->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,300italic,400italic' rel='stylesheet' type='text/css'>
  <style>
  * {
	  padding:0;
	  margin:0;
  }
  body {
    margin:
  }
  .title {
	  padding: 10px 10px 0 10px;
	  font-family: 'Open Sans', sans-serif;
	  font-size: 64px;
	  font-weight: 300;  
  }
  .heavy-text {
	  font-weight: 700;
  }
  .description {
    padding: 0 10px 10px 10px;
    font-family: 'Open Sans', sans-serif;
	  font-size: 24px;
    font-weight: 400; 
  }
  .subtitle {
    padding: 0 10px 10px 10px;
    font-family: 'Open Sans', sans-serif;
	  font-size: 24px;
	  font-weight: 400;
    color: #888;
  }
  .container-left {
    width:100%;
    text-align: left;
  }
  .container-right {
    width:100%;
    text-align: right;
  }
  .title-container {
    position:fixed;
    top:0px;
    left:0px;
    width:100%;
    color:#CCC;
    background:#333;
    padding-bottom:20px;
  }
  .title-container-under {
    width:100%;
    color:#CCC;
    background:#333;
    padding-bottom:20px;
  }
  a {
    text-decoration:none;
    color:#fff;
  }
  a:hover {
    color: #428bca;
    /* font-weight:400; */
  }
  .link:hover {
    background-color:#aaa;
  }
  .red {
    background-color:#F44336;
    color:#fff;
  }
  .pink {
    background-color:#E91E63;
    color:#fff;
  }
  .purple {
    background-color:#9C27B0;
    color:#fff;
  }
  .deeppurple {
    background-color:#673AB7;
    color:#fff;
  }
  .indigo {
    background-color:#3F51B5;
    color:#fff;
  }
  .blue {
    background-color:#2196F3;
    color:#fff;
  }
  .lightblue {
    background-color:#03A9F4;
    color:#fff;
  }
  .cyan {
    background-color:#00BCD4;
    color:#fff;
  }
  .teal {
    background-color:#009688;
    color:#fff;
  }
  .green {
    background-color:#4CAF50;
    color:#fff;
  }
  .lightgreen {
    background-color:#8BC34A;
    color:#fff;
  }
  .lime {
    background-color:#CDDC39;
    color:#fff;
  }
  .yellow {
    background-color:#FFEB3B;
    color:#fff;
  }
  .amber {
    background-color:#FFC107;
    color:#fff;
  }
  .orange {
    background-color:#FF9800;
    color:#fff;
  }
  .deeporange {
    background-color:#FF5722;
    color:#fff;
  }
  .brown {
    background-color:#795548;
    color:#fff;
  }
  .grey {
    background-color:#9E9E9E;
    color:#fff;
  }
  .white-on-black {
    background-color: #000;
    color:#fff;
  }
  .center {
    text-align:center;
  }
  </style>
</head>

<body>
  <div class="title-container-under white-on-black center">
    <h1 class="title"><span class="heavy-text">Experiments &middot;</span> <a href="https://chandlerswift.com">ChandlerSwift.com</a></h1>
    <h2 class="subtitle">Some web hacks I've thrown together <span title="@villnoweric">(or contributed to)</span> over the years (see <a href="https://github.com/ChandlerSwift/">GitHub</a>)</h2>
  </div>
  <a href="https://duluth.chandlerswift.com/">
    <div class="container-<?= side_and_color() ?> link">
      <div class="title">ChandlerSwift @ Duluth</div>
      <div class="description">Light switch, camera, and other projects at my place</div>
    </div>
  </a>
  <a href="https://duluth.chandlerswift.com/light/">
    <div class="container-<?= side_and_color() ?> link">
      <div class="title">Light Switch</div>
      <div class="description">Using an ESP8266 and a relay to control my lights (see also <a href="https://blog.chandlerswift.com/2017/esp8266-light-switch-a-few-revisions/">blog</a> for more info)</div>
    </div>
  </a>
  <a href="/piano-heatmap/">
    <div class="container-<?= side_and_color() ?> link">
      <div class="title">Piano Heatmap</div>
      <div class="description">Takes MIDI dumps and performs per-key frequency analysis</div>
    </div>
  </a>
  <a href="/villnow-lighting/">
    <div class="container-<?= side_and_color() ?> link">
      <div class="title">Villnow Lighting</div>
      <div class="description">Controlling Belkin Wemo lights with an HTML/PHP interface</div>
    </div>
  </a>
  <a href="https://github.com/ChandlerSwift/RaceClock">
    <div class="container-<?= side_and_color() ?> link">
      <div class="title">RaceClock</div>
      <div class="description">Records go-kart and dirt bike race times and displays per-racer stats</div>
    </div>
  </a>
  <a href="https://github.com/ChandlerSwift/SmartLocker">
    <div class="container-<?= side_and_color() ?> link">
      <div class="title">SmartLocker</div>
      <div class="description">Technology enhancements for High School lockers (still a work in progress!)</div>
    </div>
  </a>
  <a href="minecraft-social-laravel-test/public/">
    <div class="container-<?= side_and_color() ?> link">
      <div class="title">MinecraftSocial</div>
      <div class="description">A Laravel port of my Social Network for Minecraft Users: Posts, Chat, Announcements, and more!</div>
    </div>
  </a>
  <a href="/moodle/">
    <div class="container-<?= side_and_color() ?> link">
      <div class="title">Moodle</div>
      <div class="description">Not my project, exactly, but I'm doing some work on it.</div>
    </div>
  </a>
  <a href="/resume/">
    <div class="container-<?= side_and_color() ?> link">
      <div class="title">HTML Resume</div>
      <div class="description">as seen on github.com/lduo/resume</div>
    </div>
  </a>
  <a href="/mss/">
    <div class="container-<?= side_and_color() ?> link">
      <div class="title">MeetStatusScreen</div>
      <div class="description">For my FRC team 4665</div>
    </div>
  </a>
</body>
</html>
