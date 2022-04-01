<?php
include('./parsedown-1.7.4/Parsedown.php');
$Parsedown = new Parsedown();

$requested_locale = $_GET["lang"];
$locale = "de";
if($requested_locale == "en") {
	$locale = "en";
}

$text = file_get_contents("https://github.com/hmolsen/hmolsen.github.io/raw/main/index-$locale.md");
?>
<!DOCTYPE html>
<html lang="<? echo $locale ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/github-markdown.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Vulnerads</title>
</head>
<body>
    <div class="markdown-body">
        <?php echo $Parsedown->text($text); ?>
    </div>
</body>
</html>