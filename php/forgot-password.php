<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Assipark</title>
    <!-- Custom fonts for this template-->
    <link href="../css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="shortcut icon" href="../img/logo_assipark.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">

</head>

<body >
    <div>
        <form action="../html/index.html">
            <button id="icono">
                <i class="fa-solid fa-arrow-left"></i>
            </button>
        </form>
    </div>
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="../img/restore_auto.png" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4 mt-5">¿Olvidaste tu Contraseña?</h1>
                                    </div>
                                    <div class="text-center mt-1 mb-1">
                                        <p>Ingrese su correo electronico y el sistemale enviara un mail con las instruciones  que debe seguir.</p>
                                    </div>
                                    <form class="user" method="post" >
                                        <div class="form-group ">
                                            <i class="fa-solid fa-envelope"></i>
                                            <input type="email" name="email" placeholder="Ingrese su corrreo electronico" class="form-control form-control-user text-center bg-gray-300"  id="exampleInputUser" aria-describedby="NumeroidentificacionHelp" required maxlength="50" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />
                                        </div>
                                        <div class="form-group">
                                        </div>
                                        <a href="new-password.php" class="btn btn-primary btn-user btn-block">
                                            Enviar Correo
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../js/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>