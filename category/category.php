<?php
 require_once 'category-objeto.php';
 $category = Category::readCategory();
?>

<?php include('../partials/navbar.php'); ?>

    <div class="container">

        <div class="container-small">
        <h1>Manejar Categorias</h1>
            <br>

            <a href="./category-create.php" class="btn btn-primary">Crear Categoria</a>

            <br>

            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($category as $item): ?>
                    <tr>
                        <td> <?php echo $item['id']; ?> </td>
                        <td> <?php echo $item['title']; ?>  </td>
                        <td>
                            <a href="./category-update.php?id=<?php echo $item['id']; ?>" class="btn btn-success">Actualizar</a>
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