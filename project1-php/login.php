
<!-- <script>
    function preventback(){
        window.history.forward();
    }
    setTimeout("preventback()",0);
     window.onunload=function(){null;}


</script> -->


<?php
session_start();



$con=mysqli_connect("localhost","root","","login");
$mzg="";

if(isset($_POST['submit'])){
    // echo "<pre>";
    // print_r($_POST);

    // $uzer=mysqli_real_escape_string($con,$_POST['username']);
    // $pazz=mysqli_real_escape_string($con,$_POST['password']);


    $uzer=$_POST['username'];
    $pazz=$_POST['password'];

    //zet query
    $sql="SELECT * FROM log WHERE username='$uzer' && password='$pazz' ";


    $sql_run=mysqli_query($con,$sql);
    

    //ztore zql number of row in uzer defined variable
    $number=mysqli_num_rows($sql_run);

    if ($number>0){
        // echo "fund";

        //zhow array in associative array

        $row=mysqli_fetch_assoc($sql_run);

        //zet the variable in to session it is used to destroy the web page 
        
        $_SESSION['uzer-name']=$row['username'];
        $_SESSION['uzer-pazz']=$row['password'];
        // header("location:logindata.php");

        



        

    }else{
        $mzg="Enter valid data!";
    }




}



if(isset($_SESSION['uzer-name'])){
    header("location:logindata.php");
}
// elseif(isset($_SESSION['uzer-name'])){
//     header("location:creatNew.php");
// }

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project-1</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="regForm">
    <form action="" method="post" id="register">
        <p>LOGIN PAGE</p>
        <input type="text" name="username" placeholder="username..."><br><br>
        <input type="password" name="password" placeholder="password"><br><br>
        <div class="mzg"> <?php echo $mzg; ?></div>

        <button type="submit" name="submit" value="Login">Login</button><br><br>
        <div class="para">
            Creat an account <a href="creatNew.php">creat new!</a>
        </div>
    </form>
</div>

<?php



?> 

    
</body>
</html>