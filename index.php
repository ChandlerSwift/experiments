<?php
$links = [
  ["https://duluth.chandlerswift.com/", "ChandlerSwift @ Duluth", "Light switch, camera, and other projects at my place"],
  ["https://duluth.chandlerswift.com/light/", "Light Switch", "Using an ESP8266 and a relay to control my lights (check out the blog for more info)"],
  ["/piano-heatmap/", "Piano Heatmap", "Takes MIDI dumps and performs per-key frequency analysis"],
  ["/villnow-lighting/", "Villnow Lighting", "Controlling Belkin Wemo lights with an HTML/PHP interface (unfinished)"],
  ["https://github.com/ChandlerSwift/RaceClock", "RaceClock", "Records go-kart and dirt bike race times and displays per-racer stats (deprecated)"],
  //["https://github.com/ChandlerSwift/SmartLocker", "SmartLocker", "Technology enhancements for high school lockers"],
  //["minecraft-social-laravel-test/public/", "MinecraftSocial", "An experimental Laravel port of my social network for Minecraft users, with posts, chat, announcements, and more!"],
  //["/moodle/", "Moodle", "Needs no introduction. Not my project, I'm just doing some modifications."],
  ["/resume/", "HTML Resume", "Outdated and unfinished. As seen on <a href='https://github.com/lduo/resume/'>github.com/lduo/resume</a>"],
  ["/mss/", "MeetStatusScreen", "For my FIRST Robotics team 4665 (currently no data)"]
];

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
  .deeppurple {
    background-color:#673AB7;
    color:#fff;
  }
  .blue {
    background-color:#2196F3;
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
  .amber {
    background-color:#FFC107;
    color:#fff;
  }
  .deeporange {
    background-color:#FF5722;
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
  <?php foreach ($links as $link): ?>
  <a href="<?= $link[0] ?>">
    <div class="container-<?= side_and_color() ?> link">
      <div class="title"><?= $link[1] ?></div>
      <div class="description"><?= $link[2] ?></div>
    </div>
  </a>
  <?php endforeach; ?>
</body>
</html>
