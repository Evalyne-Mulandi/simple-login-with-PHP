<!-- <?php 
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



?> -->