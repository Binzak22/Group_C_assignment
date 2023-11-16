<?php

include("connect.php"),

$username=$_POST['username'],
$mobile=$_POST['mobile'],
$password=$_POST['password'],
$cpassword=$_POST["cpassword"],
$image=$_POST['phoyo']['name'],
$tmp_name=$_POST['photo']['tmp_name']
$std=$_POST['std']

if($password=!$cpassword){
    echo '<script>
    alert("password do not match");
    window.location="../patial/registration.php";
    </script>'
   
}

else{
    move_upload_file( $std_name, " ../upload /$image");
    $sql="insert into 'userdata' (username, mobile, photo, standard, status, vote) value ('$username', '$mobile', '$password',
     '$image','$std', 0,0";

    $result=mysqli_query($con,$sql); 

    if($result){
        echo '<script>
        alert("Registration successfull");
        window.location="../";
        </script>';
    }else{
         die(mysqli_error($con));
    }

}

?>