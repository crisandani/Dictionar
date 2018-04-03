<?php
$conn= mysqli_connect('localhost','root','','dictionar');
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>