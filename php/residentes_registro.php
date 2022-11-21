<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assipark</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link href="../css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/logo_assipark.jpg" type="image/x-icon">

</head>
<body>
    <div class="container ">
    <script >console.log()</script>
        <form  class="row mt-2 needs-validation" action="agregar.php" method ="post">
            <div class="col-3">
                <label for="validationCustom04" class="form-label" name="Tipo_documento">Tipo de documento</label>
                <select class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">seleccionar</option>
                    <option value="1">Cedula de Ciudadania</option>
                    <option value="2">Cedula de Extrajeria</option>
                    <option value="3">Tarjeta de Identidad</option>
                </select>
                <div class="invalid-feedback">
                    Por favor seleccionar tipo de documento.
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="validationCustom01" class="form-label">Numero de Documento</label>
                    <input type="number" name="N_documento" class="form-control" id="validationCustom01" placeholder="Ingrese su numero de Documento" value="Mark" required maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                <div class="valid-feedback">
                    Looks good!
                </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="validationServer01" name="Nombre_usuario" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="validationServer01" value="" placeholder="Ingrese Nombre" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    </div>
                    <div class="col-md-6">
                    <label for="validationServer02" class="form-label">Apellido</label>
                    <input type="text" class="form-control" name="Apellido_usuario" id="validationServer02" value="" placeholder="Ingrese apellido" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-3">
                    Sexo
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="Sexo_usuario" id="validationFormCheck2"  required>
                        <label class="form-check-label" for="validationFormCheck2">Femenino</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="Sexo_usuario" id="validationFormCheck3" required>
                        <label class="form-check-label" for="validationFormCheck3">Masculino</label>
                        <div class="invalid-feedback"></div>
                    </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" name="Telefono_usuario" id="validationCustom03" placeholder="Ingrese el Teléfono" required>
                    <div class="invalid-feedback">
                        Llenar campo vacio.
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Celular</label>
                    <input type="number" class="form-control" name="Celular_usuario" id="validationCustom03" placeholder="Ingrese el Celular" required maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                    <div class="invalid-feedback">
                        Llenar campo vacio.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Email</label>
                    <input type="email" class="form-control" name="Email_usuario" id="validationCustom03" placeholder="Ingrese correo electronico" required>
                    <div class="invalid-feedback">
                        Llenar campo vacio.
                    </div>
                </div>
            </div>
            <div class="row mt-2 justify-content-center">
                <div class="col-2 ">
                    <div>
                        <button class="btn btn-primary " name="button_usuario" type="submit">Enviar</button>
                        <button class="btn btn-danger " type="submit"><a id="btn-close-usuario" href="administrador.php">Cerrar</a> </button>
                    </div>
                </div>
            </div>
        </form>

    </div>
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>