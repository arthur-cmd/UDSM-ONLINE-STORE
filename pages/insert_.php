 <?php

 $name=$_POST['fname'];
 $email=$_POST['email'];
 $regno=$_POST['regnumber'];
 $password=$_POST['pass'];
 $confirm=$_POST['confirm'];




 
    


 if(!empty($name)||!empty($email)||!empty($regno)||!empty($password)){
    if($password==$confirm){
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="onlinestore";

    //create connection

    $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(mysqli_connect_error()){
        die('connect error ('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
        $INSERT="INSERT INTO users (fullname, email, regno, password) VALUES ('$name', '$email', '$regno', '$password')";    
         $result = $conn->query($INSERT);
      if ($result==true){
    header("location: regwelcome.php");
      }else{
    echo ("NOOOOOO");
}
    }

   else{
    echo "password dont match";
    }
 }
 else{
    echo "all fields are required";
    die();
   }

    
   
 
 ?>