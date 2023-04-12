<?php
    require_once "food-objeto.php";

    $id=$_GET['id'];

    $food_actual = Food::searchId($id);
?>

<?php include('../partials/navbar.php'); ?>

<br>

    <div class="container">
        <div class="container-small">
            <form action="./actualizar.php" method="POST" id="form">
                <input type="hidden" name="id" value="<?php echo $food_actual->id; ?>">
                <h1 class="text-center">Actualizar comida</h1>
                <br>
                <div class="mb-3">
                <input type="text" class="form-control" name="title" id="title" placeholder="Nombre" value="<?php echo $food_actual->getTitle(); ?>" required pattern="[A-Za-z ]+">
                </div>
                <div class="mb-3">
                <textarea type="text" class="form-control" id="description" name="description" placeholder="Description" value="<?php echo $food_actual->getDescription(); ?>" required pattern="[A-Za-z ]+"></textarea>
                </div>
                <div class="mb-3">
                <input type="number" class="form-control" name="price" id="price" minlength="8" maxlength="40" placeholder="Precio" value="<?php echo $food_actual->getPrice();?>"required>
                 </div>
                <div class="mb-3">
                    <label for="">Categoria</label>
                    <select class="form-control" name="category_id" placeholder="Categoria" value="<?php echo $food_actual->getCategory_id();?>" required>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Admin</label>
                    <select class="form-control" name="admin_id" placeholder="Admin" value="<?php echo $food_actual->getAdmin_id();?>" required>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>5</option>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Actualizar comida</button>
            </form>
        </div>
    </div>

<br>

<?php include('../partials/footer.php'); ?>