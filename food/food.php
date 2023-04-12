<?php
 require_once 'food-objeto.php';
 $foods = Food::readFood();
?>

<?php include('../partials/navbar.php'); ?>

    <div class="container">

        <div class="container-small">
        <h1>Administrar comidas</h1>
            <br>

            <a href="./food-create.php" class="btn btn-primary">Crear comida</a>

            <br>

            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Category_id</th>
                        <th>Admin_id</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($foods as $item): ?>
                    <tr>
                        <td> <?php echo $item['id']; ?> </td>
                        <td> <?php echo $item['title']; ?>  </td>
                        <td> <?php echo $item['description']; ?> </td>
                        <td> <?php echo $item['price']; ?> </td>
                        <td> <?php echo $item['category_id']; ?> </td>
                        <td> <?php echo $item['admin_id']; ?> </td>
                        <td>
                            <a href="./food-update.php?id=<?php echo $item['id']; ?>" class="btn btn-success">Actualizar</a>
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