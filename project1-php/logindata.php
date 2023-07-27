
 
 
 <?php
session_start();

// if(isset($_POST['submit'])){
//     header("location:login.php");
// }

//  $con=mysqli_connect("localhost","root","","login");
 

if(!isset($_SESSION['uzer-name'])) {
// echo"<pre>";
// print_r($_SESSION);

    header("location:login.php");
    // die();
}



?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project-1</title>
    <link rel="stylesheet" href="logindata.css">
</head>
<body>
    <div class="loginpage">
         <form action="" method="post"> 
            <!-- <input type="text" name="loginName" placeholder="userName"><br><br>
            <input type="password" name="loginPassword" placeholder="Password"><br> <br> -->
            <p>WELCOME! <?php echo $_SESSION['uzer-name']; ?></p><br><br>
            <div class="div">

<!-- <button type="submit" name="submit">Logout</button> -->

            <!-- <a href="#" name="logout">Logout</a> -->

            <a href="logout.php">Logout</a>
            </div>
        </form>
    </div>

    <?php
    // session_destroy();
    // $_SESSION=[];
    ?>
</body>
</html>