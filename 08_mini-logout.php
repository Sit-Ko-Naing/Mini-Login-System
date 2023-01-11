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
<body class="bg-black">
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
                    <button href="08_mini-logout.php" class="btn btn-danger mt-5 " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom" style = "width : 200px;">Logout</button>
               </div>
            </div>
            <!-- ---------------------------------------------------------------- -->
            <div class="col-5 mt-5">              
              
                <div class="offcanvas offcanvas-top  text-bg-dark" tabindex="-5" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasBottomLabel">Logout Successful</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body small">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit consectetur minus voluptate repellendus fuga maxime neque facere eveniet, quia incidunt! Illum, odit ullam! Quae minima incidunt quidem placeat, quaerat eos.
                </div>
                </div> 
                
              
            </div>
        </div>
    </div>

<?php
    session_start();

    session_destroy();
?>
                       
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</html>