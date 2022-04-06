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
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown link
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <!-- navbar -->

    <div class="row">
        <!-- add new client -->
        <div class="col-lg-4">
            <div class="card mt-2">
                <h5 class="card-header">Agregar un Comprador</h5>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group mb-3">
                            <label for="">Nombre:</label>
                            <input type="text" class="form-control" placeholder="Juan Perez">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Direccion:</label>
                            <input type="text" class="form-control" placeholder="Cll 4 # 44-44">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email:</label>
                            <input type="text" class="form-control" placeholder="ejemplo@email.com">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Telefono:</label>
                            <input type="text" class="form-control" placeholder="777 77 77">
                        </div>
                        <button class="btn btn-primary">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- add new client -->

        <!-- assing ticket -->
        <div class="col-lg-5">
            <div class="card mt-2">
                <h5 class="card-header">Asignar boletas</h5>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group mb-3">
                            <label for="">Cantidad de boletas:</label>
                            <input type="number" class="form-control" placeholder="0">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Comprador:</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Seleccionar</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </form>
                    <button class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </div>
        <!-- assign ticket -->

        <!-- tickets available -->
        <div class="col-lg-3">
            <div class="card mt-2">
                <h5 class="card-header">Boletas Disponibles</h5>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>50</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- tickets available -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card mt-2">
                <h5 class="card-header text-center">Boletas Asignadas</h5>
                <div class="card-body">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">Comprador</th>
                                <th scope="col">Boletas Asignadas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Juan Perez</td>
                                <td>50</td>
                            </tr>
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