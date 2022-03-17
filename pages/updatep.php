<?php
include('db.php');
                     
                       if(isset($_POST['update'])){
                            
                            $name=$_POST["name"];
                            $code=$_POST["code"];
                            $price=$_POST["price"];
                           $query="UPDATE products set name='$name', code='$code', price='$price' where code='$code'";
                          mysqli_query($con,$query);
                          header("location:admin.php");
                       }



                   ?>