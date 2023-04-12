<?php
    require_once "category-objeto.php";

    $id=$_GET['id'];

    $category_actual = Category::searchId($id);
?>

<?php include('../partials/navbar.php'); ?>

<br>

    <div class="container">
        <div class="container-small">
            <form action="./actualizar.php" method="POST" id="form">
                <input type="hidden" name="id" value="<?php echo $category_actual->id; ?>">
                <h1 class="text-center">Actualizar Categoria</h1>
                <br>
                <div class="mb-3">
                <input type="text" class="form-control" name="title" id="title" placeholder="Nombre" value="<?php echo $category_actual->title; ?>" required pattern="[A-Za-z ]+">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Actualizar Categoría</button>
            </form>
        </div>
    </div>

<br>

<?php include('../partials/footer.php'); ?>