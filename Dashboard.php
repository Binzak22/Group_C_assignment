<?php
session_start();
if (!isset ($_SESSION['id'])){
    header('location:../');
}
$data=$_SESSION['data'];
if($_SESSION['status']==1){
    $status='<b class="text-successful">voted</b>'
} else{
    $status='<b class="text-danger">Not voted</b>'
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
     crossorigin="anonymous">

    

</head>
<body class="bg-secondary text-light">
<div class="container my-5">
    <a href="Login.php"><button class="btn btn-dark text-light px-5">back</button> </a>
    <a href="logout.php"><button class="btn btn-dark text-light px-5">logout</button> </a>
    <h1>voting system</h1>
    <div class="row my-5">
        <!--user profile-->
        <img src="../upload"/ <?php echo $data['phpto']?> alt="usre image">
        <br>
        <br>
        <strong class="text-dark h5">Name:</strong>
        <?php echo $data['uername'] ;?><br><br>
        <strong class="text-dark h5">Mobile:</strong>
        <?php echo $data['mobile'] ; ?><br><br>
        <strong class="text-dark h5">status</strong>
        <?php echo $status ;?> <br><br>

    </div>
    <div>
        <h1>President</h1>
    
        <input type="checkbox" name="APC" id="">APC
        
        <input type="checkbox" name="PDP" id="">PDP
        
        <input type="checkbox" name="ANPP" id="">ANPP
        
        <input type="checkbox" name="LP" id="">LP
        
        <input type="checkbox" name="ADP" id="">ADP
        <br>
        <br>
        <h1>Senator</h1>
        
        <input type="checkbox" name="APC" id="">APC
        
        <input type="checkbox" name="PDP" id="">PDP
        
        <input type="checkbox" name="ANPP" id="">ANPP
        
        <input type="checkbox" name="LP" id="">LP
        
        <input type="checkbox" name="ADP" id="">ADP
        <br>
        <br>
        <h1>Reprsentative</h1>
        
        <input type="checkbox" name="APC" id="">APC
        
        <input type="checkbox" name="PDP" id="">PDP
        
        <input type="checkbox" name="ANPP" id="">ANPP
        
        <input type="checkbox" name="LP" id="">LP
        
        <input type="checkbox" name="ADP" id="">ADP
        <br>
        <br>
        <h1>House assembly</h1>
        
        <input type="checkbox" name="APC" id="">APC
        
        <input type="checkbox" name="PDP" id="">PDP
        
        <input type="checkbox" name="ANPP" id="">ANPP
        
        <input type="checkbox" name="LP" id="">LP
        
        <input type="checkbox" name="ADP" id="">ADP
        <br>
        <br>
        <h1>Chairman</h1>
        
        <input type="checkbox" name="APC" id="">APC
        
        <input type="checkbox" name="PDP" id="">PDP
        
        <input type="checkbox" name="ANPP" id="">ANPP
        
        <input type="checkbox" name="LP" id="">LP
        
        <input type="checkbox" name="ADP" id="">ADP
        <br>
        <br>
        <h1>councellor</h1>
        
        <input type="checkbox" name="APC" id="">APC
        
        <input type="checkbox" name="PDP" id="">PDP
        
        <input type="checkbox" name="ANPP" id="">ANPP
        
        <input type="checkbox" name="LP" id="">LP
        
        <input type="checkbox" name="ADP" id="">ADP
        <br>
        <br>

    </div>
    <div style="text-align: center;" >
        <button type="submit">Submit</button>

    </div>
</div>
</body>
</html>
