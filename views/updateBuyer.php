<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

<div class="container-fluid">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Tickets</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=Home&action=index">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=Assignment&action=index">Asignar Boletas</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <!-- navbar -->

    <?php if(isset($_GET['status'])) { ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?php echo $_GET['status'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>

    <div class="row">
        <!-- add new client -->
        <div class="col-lg-3">
            <div class="card mt-2">
                <h5 class="card-header">Actualizar Comprador</h5>
                <div class="card-body">
                    <form action="index.php?controller=Buyer&action=update" method="POST">
                        <div class="form-group mb-3">
                            <label for="">Nombre:</label>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Juan"
                                name="first_name"
                                value="<?php echo $buyer['first_name'] ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Apellido:</label>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Perez"
                                name="last_name"
                                value="<?php echo $buyer['last_name'] ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Direccion:</label>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Cll 4 # 44-44"
                                name="address"
                                value="<?php echo $buyer['address'] ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email:</label>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="ejemplo@email.com"
                                name="email"
                                value="<?php echo $buyer['email'] ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Telefono:</label>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="7777777"
                                name="phone"
                                value="<?php echo $buyer['phone'] ?>">
                        </div>
                        <input
                            type="hidden"
                            name="id"
                            value="<?php echo $buyer['id'] ?>">
                        <button class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>