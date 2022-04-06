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
        <!-- assing ticket -->
        <div class="col-lg-4">
            <div class="card mt-2">
                <h5 class="card-header">Asignar boletas</h5>
                <div class="card-body">
                    <form action="index.php?controller=Assignment&action=store" method="POST">
                        <div class="form-group mb-3">
                            <label for="">Cantidad de boletas:</label>
                            <input
                                type="number"
                                class="form-control"
                                placeholder="1"
                                name="number"
                                min="1"
                                max="<?php echo $ticketsAvailable ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Comprador:</label>
                            <select
                                class="form-select"
                                aria-label="Default select example"
                                name="buyer_id">
                                <option selected>Seleccionar</option>
                                <?php while($buyer = $buyers->fetch()) { ?>
                                    <option value="<?php echo $buyer['id'] ?>">
                                        <?php echo $buyer['first_name'].' '. $buyer['last_name'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
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
                            <?php while($assignment = $assignments->fetch()) { ?>
                                <tr>
                                    <td><?php echo $assignment['first_name'] . ' ' . $assignment['last_name']?></td>
                                    <td><?php echo $assignment['number']?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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
                                <td><?php echo $ticketsAvailable; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- tickets available -->
    </div>

    </div>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>