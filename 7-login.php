<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Process</title>
</head>
<body>
        <h3>Login Form </h3>    

        <form action="" method = "POST">
            <input type="email" name = "userEmail" ><br>
            <input type="password" name = "userPassword"> <br>

            <input type="submit" value="Sing in" name = "LoginButton">
        </form>

        <?php


            $email = 'admin@gmail.com';
            $password = '$2y$10$KZoVGCjMPxKMHCxZY2mvcetqpa9ytWAkvTL9PNZKXtkumCVwhBTbG'; //sitkonang


              // Password Hashing
            // $hashPassword = password_hash($password,PASSWORD_BCRYPT);
            // echo $hashPassword;
            // var_dump ( password_verify($password,$hashPassword));

            if (isset($_POST['LoginButton'])) { 


                $userEmail = $_POST['userEmail'];
                $userPass = $_POST['userPassword'];

                echo $userEmail;
                echo $userPass;

                if ($email == $userEmail && password_verify($userPass,$password)   ){
                    echo " Complete !";
                }else{
                    echo "Something wrong , Try again !";
                }
   
            }


              

             
        ?>
</body>
</html>