<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
$x=11;
function show(){
    echo $GLOBALS['x'];
}
show();
?>

</body>
</html>