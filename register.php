<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .inputs{
            
            position: absolute;
            transform: translate(-50%,50%);
            left: 50%;
            top: -20%;
            width: 300px;
            height: auto;

            
        }
        input{
             
            width: 90%;
            height: 35px;
        }
        .cover{
            background-color: rgb(182, 192, 192);
            height: 100vh;
        }
        h1{
            text-align: center;
            color: rgb(226, 79, 21);
        }
        button{
    margin-top: 10px;
    border-radius: 5px;
    text-align: center;
    margin-left: 30%;
    font-size: large;
     
    background-color: rgb(240, 77, 13);
 }
    </style>
</head>
<body>
    <div class="cover">

   
    <div class="inputs">
        <h1>Sign Up</h1>
        <form  method="post">
            <label for="">first Name</label><br><br>
            <input type="text" name="name" placeholder="first Name"> <br><br>
            <label for=""> Last Name</label><br><br>
            <input type="text"  name="uname" placeholder="Last name"><br><br>
            <label for="">Email</label><br><br>
            <input type="text" name="email" placeholder="Email"><br><br>
            <label for="">password</label><br><br>
            <input type="text" name="password" placeholder="password"><br><br>
            <button type="submit" name="btn">Submit</button>
        </form>
    </div>
</div>

<?php 
if(isset($_POST['btn']))
    { 
         $fname=$_POST['name'];
        $lname=$_POST['uname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
 
/* $fname=isset($_POST['fname']);
$lname=isset($_POST['lname']);
$email=isset($_POST['email']);
$password=isset($_POST['password']); */


         $host="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname="login";

        $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);

        if(mysqli_connect_error()){
            echo"error";
            die();
        }
        else{
            $sql="insert into users(fname,lname,email,password)VALUES('fname','lname','email','password')";
            if($conn->query($sql)){
                echo"registration successful";
            }
            else{
                echo"error";
                die();
            }

        }
        $conn->close();
 
    }



?>
</body>
</html>