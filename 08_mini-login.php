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
<body class="bg-white ">
    <div class="container">
        <div class="row d-flex justify-content-center ">
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
                        <h3>Login </h3> 
                        <form action="" method = "POST">
                            <div class="mt-2">
                                <label for="">Email</label>
                                <input type="email" name="email1" id="" class="form-control">
                            </div>

                            <div class="mt-2">
                                <label for="">Password</label>
                                <input type="text" name="password" id="" class="form-control">
                            </div>

                            <button type="submit" class="btn bg-dark text-white mt-3 float-end" name = "login" >Login</button>
                       </form>

                    </div>
                </div>

          
            </div>
        </div>
    </div>

    <?php

    session_start();
        if(isset($_POST['login'])){
            $userEmail = $_POST['email1'];
            $userPassword = $_POST['password'];

            if($userEmail != "" || $userPassword != ""){
                if($userEmail == $_SESSION['email2'] && password_verify($userPassword,$_SESSION['password'])){
                    echo "login Success!";
                }else{
                     echo " login fail , Try again!";
                }
            }else{
                echo " Need to fill.";
            }
        }
    ?>
</body>
</html>