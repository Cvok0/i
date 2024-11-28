<?php
function hlavicka($title, $description = "") {
?>

<!doctype html>
<html><head>
<meta charset="utf-8">
<title><?=empty($title) ? "SUS web" : $title . " je sus"?></title>
<link rel="stylesheet" href="style/tailwind.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width,initial-scale=1">
<?php if (!empty($description)) { ?>
<meta name="description" content="<?=$description?>">
<?php } ?>
</head>

<body class="bg-black">

<div class="prose w-4/6 m-auto sm:w-full">

<br><br><br><br>
<?php } 
function paticka() {
?>

<hr>
<p>Web vytvořil Vlasta Dědek 2024
<br><br>
</div></body></html>
<?php } ?>
