<?php

$con=mysqli_connec("localhost", "root", "demo", "votingsytem"),
if($con){
    echo "connection successfull",

}else{
    die(mysqli_error($con)),
}



?>