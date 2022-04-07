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