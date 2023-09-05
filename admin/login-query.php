
<?php
session_start();
include('conn.php');

if(isset($_POST['submit']))
{


    $username=$_POST['email'];
    $pass=$_POST['password'];
    
    $sql="SELECT * from users where email='".$username."' AND password='".$pass."'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    if(!empty($row))
    { 
    if($row['user_type']=="1"){
        $_SESSION['username']="$userame";
        header("location:dashboard.php");
    }
    elseif($row['user_type']=="0"){
        $_SESSION['username']="$username";
        header("location:selling_page.php");
    }
    else{
        echo "<script>alert('email or password is incorrect!');</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
}
else{
    echo "<script>alert('email or password is incorrect!');</script>";
    echo "<script>window.location.href='index.php'</script>";
 
}
}

?>