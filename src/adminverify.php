<?php


session_start(); 

include "config.php";

function validate($data){

    $data = trim($data);

    $data = stripslashes($data);

    $data = htmlspecialchars($data);

    return $data;

 }

if (isset($_POST['ausername']) && isset($_POST['apass'])) {

    

    $uname = $_POST['ausername'];

    $pass = $_POST['apass'];

    echo $uname;

    if (empty($uname)) {

        header("Location: index.php?error=UserNameisrequired");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM admin WHERE A_email='$uname' AND A_pass='$pass'";

        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['A_email'] == $uname && $row['A_pass'] == $pass) {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['A_email'];

                // $_SESSION['name'] = $row['name'];

                // $_SESSION['id'] = $row['id'];

                header("Location: admin.html");

                exit();

            }else{

                header("Location: adminlogin.html");

                exit();

            }

        }else{

            header("Location: adminlogin.html");

            exit();

        }

    }

}else{

    header("Location: admin.html");

    exit();

}
?>
 