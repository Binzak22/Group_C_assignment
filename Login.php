<?php

SESSION_start();
include('connect.php')

$usernam=$_POST['username'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$std=$_POST['std'];


$sql=" select * from 'userdata' where username='$usernam' and mobile= '$mobile' and password= '$password'
and std= '$std'";


$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    $sql="select username, photo, vote,id from 'userdata' where standard='group'";
    $resultgroup=mysqli_query($con,$sql);
    if(mysqli_num_rows($resultgroup)>0){
        $group=mysqli_fech_all($resultgroup,MYSQLI_ASSOC);
        $_SESSION['group']=$group
    }
    $data=musqli_fech_array($result);
    $_SESSION['id']=$data['id'];
    $_SESSION['status']=$data['status'];
    $_SESSION['data']=$data;

    echo '<script>
    window.location="../partial/dashboard.php";
    </csript>'

}else{
    echo '<script>
    alert("invalid credentials");
    window.location="../";
    </csript>'
}

?>