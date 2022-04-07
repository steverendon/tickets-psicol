<div class="row">
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
                            <?php while($buyer = $buyers->fetch()): ?>
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
                            <?php endwhile ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>