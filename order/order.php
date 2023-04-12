<?php
 require_once 'order-objeto.php';
 $orders = Order::readOrder();
?>

<?php include('../partials/navbar.php'); ?>

    <div class="container">

        <div class="container-small">
        <h1>Manejar Ordenes</h1>
            <br>

            <a href="./order-create.php" class="btn btn-primary">Crear Orden</a>

            <br>

            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID Comida</th>
                        <th>Cantidad</th>
                        <th>Nombre Cliente</th>
                        <th>Correo</th>
                        <th>Dirección</th>
                        <th>Subtotal</th>
                        <th>Iva</th>
                        <th>Total</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($orders as $item): ?>
                    <tr>
                        <td> <?php echo $item['id']; ?> </td>
                        <td> <?php echo $item['food_id']; ?>  </td>
                        <td> <?php echo $item['quantity']; ?> </td>
                        <td> <?php echo $item['customer_name']; ?> </td>
                        <td> <?php echo $item['customer_email']; ?> </td>
                        <td> <?php echo $item['customer_address']; ?> </td>
                        <td> <?php echo $item['subtotal']; ?> </td>
                        <td> <?php echo $item['iva']; ?> </td>
                        <td> <?php echo $item['total']; ?> </td>
                        <td>
                            <a href="./order-update.php?id=<?php echo $item['id']; ?>" class="btn btn-success">Actualizar</a>
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