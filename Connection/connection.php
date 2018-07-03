<?php
$connection = mysqli_connect('localhost','root','','pizza_hut');
if(!$connection){
    echo mysqli_error($connection); 
}

?>