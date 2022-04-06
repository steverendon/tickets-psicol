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
                <h5 class="card-header">Agregar un Comprador</h5>
                <div class="card-body">
                    <form action="index.php?controller=Buyer&action=store" method="POST">
                        <div class="form-group mb-3">
                            <label for="">Nombre:</label>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Juan"
                                name="first_name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Apellido:</label>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Perez"
                                name="last_name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Direccion:</label>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Cll 4 # 44-44"
                                name="address">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email:</label>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="ejemplo@email.com"
                                name="email">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Telefono:</label>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="7777777"
                                name="phone">
                        </div>
                        <button class="btn btn-primary">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- add new client -->
        <div class="col-lg-9">
            <div class="card mt-2">
                <h5 class="card-header text-center">Compradores Registrados</h5>
                <div class="card-body">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Acciones</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Direccion</th>
                                <th scope="col">Email</th>
                                <th scope="col">Telefono</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($buyer = $buyers->fetch()) { ?>
                                <tr>
                                    <td>
                                        <a href=<?php echo "index.php?controller=Buyer&action=destroy&id=".$buyer['id'] ?> class="link-danger mx-2">Eliminar</a>
                                        <a href=<?php echo "index.php?controller=Buyer&action=edit&id=".$buyer['id'] ?> class="link-success mx-2">Editar</a>
                                    </td>
                                    <td><?php echo $buyer['first_name'] .' '. $buyer['last_name']?></td>
                                    <td><?php echo $buyer['address'] ?></td>
                                    <td><?php echo $buyer['email'] ?></td>
                                    <td><?php echo $buyer['phone'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>