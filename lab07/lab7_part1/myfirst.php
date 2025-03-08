<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Using PHP Variables</title>
</head>
<body>
    <h1>PHP Variables, arrays, and operators</h1>
<?php
    $marks = array (85,85,95);
    $marks[1] = 90;
    $ave = ($marks[0] + $marks[1] + $marks[2])/3;
    if($ave >= 50)
        $status = "Passed";
    else
        $status = "Failed"
    echo "<p>The average score is $ave. You $status.</p>"
?>

</body>
</html>