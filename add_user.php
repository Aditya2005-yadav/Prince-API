<?php
            header('Access-Control-Allow-Origin: *');
            header('Content-Type: application/json');
            //Database File
            include ("connection.php");
            
            if(isset($_POST['name'])  && isset($_POST['email']))
            {
                $name=$_POST['name'];
                $email=$_POST['email'];
                $str="insert into user_tbl(name,email) values('$name','$email')";
                
                $result=mysqli_query($conn,$str);
                if($result){

                    echo json_encode(array("message" => "User add successfully"));
                }
                else{
                    echo json_encode(array("message"=>"user not added"));
                }
            }
            else
            {
                echo json_encode(array("Invalid Input"));
            }
?>