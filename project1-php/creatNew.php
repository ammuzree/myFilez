

<?php
     session_start();
     $connection=mysqli_connect("localhost","root","","login");

     $_SESSION['name']="All";
     

     if(isset($_POST['submit'])){
        
    //    $fname=$_POST['fname'];
    //    $lname=$_POST['lname'];
    //    $id=$_POST['id'];
       $uname=$_POST['username'];
       $password=$_POST['password'];
    //    $cpassword=$_POST['cpassword'];

       if(!empty($uname) && !empty($password)){

       

          $query="INSERT INTO log(`username`,`password`) VALUES('$uname','$password')";
        //   $query="UPDATE log SET username='$uname', password='$password' WHERE 1";
          $query_run=mysqli_query($connection,$query);

          if($query_run){
           
           echo '<script> alert ("DATAS ARE INSERT!"); </script>';
           header("location:login.php");
          
           
          }else{    
           echo '<script> alert ("DATAS ARE NOT INSERT!")</script>';
           }       }else{
        echo '<script> alert ("PLEASE FILE IN THE TAB!")</script>';
       }

       
    }
    // if(isset($_SESSION['uzer-name'])){
    //     header("location:login.php");
    // }
   
    

    
    ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>creatAccount</title>
    <link rel="stylesheet" href="creatNew.css">
</head>

<body>
    <div class="account">
        <form action="" method="post">
            <p>WELCOME <?php echo $_SESSION['name'];?></p>
            <input type="text" name="fname" placeholder="First Name"><br><br>
            <input type="text" name="lname" placeholder="Last Name"><br><br>
            <input type="text" name="username" placeholder="User Name"><br><br>
            <input type="Password" name="password" placeholder="Password"><br><br>
            <input type="text" name="number" placeholder="Phone Number"><br><br> 
            <button type="submit" name="submit">submit</button>
            <!-- <button type="submit" name="submit"><a href="#">submit</a></button> -->

        </form>
    </div>

    <?php
    // session_unset($_SESSION['uzer-name']);
    // session_destroy();
    // header("location:login.php");
    // exit();


    // $_SESSION=[];
    // session_start();

    // $connection=mysqli_connect("localhost","root","","login");


    // if (!isset($_SESSION['uzer-name'])){
    //     // session_destroy();
    //      header("location:login.php");
    //     die();
    // }
    ?>



</body>

</html>