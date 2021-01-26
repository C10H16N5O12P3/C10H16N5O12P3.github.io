<doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="style.css?<?php echo time()?>" rel="stylesheet">
<title>Projet S2</title>
</head>

<body>
<script src="script.js"></script>
<?php //set the language

$lang="fr";
if( isset( $_GET['lang'] ) ) {
    $lang=$_GET['lang']; 
}

$json=file_get_contents("languages/".$lang.".json");
$txt = json_decode($json);
?>

<nav>
<ul>
  <li><a href="#home" id="play_button"><?php echo ($txt->{'buttons'})[0]?></a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><?php echo ($txt->{'buttons'})[1]?></a>
    <div class="dropdown-content">
      <a href="#"><?php echo ($txt->{'dropdown'})[0]?></a>
      <a href="#"><?php echo ($txt->{'dropdown'})[1]?></a>
      <a href="index.php?lang=<?php if($lang=="en"){echo "fr";}else{echo "en";}?>"><?php echo ($txt->{'dropdown'})[2]?></a>
    </div>
  </li>
</ul>
<a href="index.php?lang=<?php echo $lang ?>"><img src="" id="logo" width="43px" height="50px"></a>
</nav>

<div class="content">
<?php
include "content/home.php"
?>

</div>

<footer></footer>
</body>
</html>