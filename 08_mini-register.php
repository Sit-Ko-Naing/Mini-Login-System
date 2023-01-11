<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
        


        <!-- Font Awesome -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
        />
        <!-- Google Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
        />
        <!-- MDB -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
        rel="stylesheet"
        />  

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        </head>
<body >
    <div class="container">
        <div class="row d-flex justify-content-center">
             <div class="col-3"> <!----------------------------------------- -->
               <div class="text-center">
                <a href="08_mini-login.php">
                    <button class="btn btn-primary text-white mt-5 " style = "width : 200px;">Login</button>
                </a>
               </div>

                <div class="text-center">
                <a href="08_mini-register.php">
                    <button class="btn btn-success text-white mt-5 " style = "width : 200px;">Register</button>
                </a>
               </div>

               <div class="text-center">
                <a href="08_mini-logout.php">
                    <button class="btn btn-danger  text-white mt-5 " style = "width : 200px;">Logout</button>
                </a>
               </div>

            </div>
            <!-- ---------------------------------------------------------------- -->
            <div class="col-5">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3>Register</h3>
                        <form action="" method= "POST">
                            <div class="mt-2">
                                <label for="">Name</label>
                                <input type="text" name="name" id="" class="form-control">
                            </div>

                             <div class="mt-2">
                                <label for="">Email</label>
                                <input type="text" name="email" id="" class="form-control">
                            </div>

                             <div class="mt-2">
                                <label for="">Password</label>
                                <input type="text" name="password" id="" class="form-control">
                            </div>

                            <div class="mt-2">
                                <label for="">Confirm Password</label>
                                <input type="text" name="confirmPassword" id="" class="form-control">
                            </div>

                            <button type="submit" class="btn bg-dark text-white mt-3 float-end" name = "register">Register</button>
                       </form>

                    </div>
                </div>

          
            </div>
        </div>
    </div>


    <?php

    session_start();

    function checkStrongPassword($password){
        $upperStatus = false;
        $lowerStatus = false;
        $numberStatus = false;
        $specialStatus = false;

        if(preg_match('/[A-Z]/',$password)){
             $upperStatus = true;
        }

        if(preg_match('/[a-z]/',$password)){
             $lowerStatus = true;
        }

        if(preg_match('/[0-9]/',$password)){
             $numberStatus = true;
        }

        if(preg_match('/[!@#$$%&*]/',$password)){
             $specialStatus = true;
        }

        if($upperStatus && $lowerStatus && $numberStatus && $specialStatus){
            return true;
        }else{
            return false;
        }

    }
    // checkStrongPassword("Pass3");

        if(isset($_POST['register'])){
            $name = $_POST['name'];
            $email  = $_POST['email'];
            $password = $_POST['password'];
            $comfirmPassword = $_POST['confirmPassword'];

            if ($name != "" && $email != "" && $password != "" && $comfirmPassword != "") {
                if(strlen($password) >= 6 && strlen($comfirmPassword) >= 6){
                    if($password == $comfirmPassword){
                       $status = checkStrongPassword($password);
                       if($status){
                         $_SESSION['email2'] = $email;
                        $_SESSION['password'] = password_hash($password,PASSWORD_BCRYPT);
                        // $_SESSION['confirmPassword'] = $comfirmPassword;
                        echo "Register Success!";
                       }else{
                        echo "Your password isn't strong password.(eg.A-z,a-z,0-9,!@#$%&)";
                       }
                    }else{
                        echo "Password not same.Try agnain.";
                    }

                }else{
                    echo "Password must be greater than 6.";
                }
            }else{
                echo "Need to completely fill.";
            }
        }


    ?>
</body>
</html>