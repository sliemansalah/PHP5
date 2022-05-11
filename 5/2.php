<?php
    $lessonName= "Concatenation";
    $homePage= "PHP Variables " . $lessonName;
    $heading = "Welecome To Variables";
    $brief = "This lesson talk about variables and how to use it";
    $languages = "<ul>";
    $languages = "<li>HTML</li>" . "<li>CSS</li>";
    $languages .="<li>PHP</li>";
    $languages .="</ul>";
// test
# test
/* test 2 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $homePage; ?></title>
</head>
<body>
<h1><?php echo $heading;?></h1>
<p><?php echo $brief;?></p>

<?php echo $languages; ?>

</body>
</html>
