<?php
 require_once 'admin-objeto.php';
 $admins = Admin::readAdmin();
?>

<?php include('../partials/navbar.php'); ?>

    <div class="container">

        <div class="container-small">
        <h1>Manejar Administradores</h1>
            <br>

            <a href="./admin-create.php" class="btn btn-primary">Crear Administrador</a>

            <br>

            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Primer Nombre</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($admins as $item): ?>
                    <tr>
                        <td> <?php echo $item['id']; ?> </td>
                        <td> <?php echo $item['fullname']; ?>  </td>
                        <td> <?php echo $item['username']; ?> </td>
                        <td> <?php echo $item['passwords']; ?> </td>
                        <td>
                            <a href="./admin-update.php?id=<?php echo $item['id']; ?>" class="btn btn-success">Actualizar</a>
                        </td>
                        <td>
                            <a href="./eliminar.php?id=<?php echo $item['id']; ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>

    <br>

    <script>
        $(document).ready( function () {
        $('#table_id').DataTable();
        } );
    </script>

<?php include('../partials/footer.php'); ?>