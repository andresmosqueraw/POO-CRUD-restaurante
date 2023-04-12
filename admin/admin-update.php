<?php
    require_once "admin-objeto.php";

    $id=$_GET['id'];

    $admin_actual = Admin::searchId($id);
?>

<?php include('../partials/navbar.php'); ?>

<br>

    <div class="container">
        <div class="container-small">
            <form action="./actualizar.php" method="POST" id="form">
                <input type="hidden" name="id" value="<?php echo $admin_actual->id; ?>">
                <h1 class="text-center">Actualizar Administrador</h1>
                <br>
                <div class="mb-3">
                <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Nombre" value="<?php echo $admin_actual->getFullname(); ?>" required pattern="[A-Za-z ]+">
                </div>
                <div class="mb-3">
                <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de Usuario" value="<?php echo $admin_actual->username; ?>" required>
                </div>
                <div class="mb-3">
                <input type="password" class="form-control" name="password" id="password" minlength="8" maxlength="40" placeholder="Contraseña" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Actualizar Administrador</button>
            </form>
        </div>
    </div>

<br>

<?php include('../partials/footer.php'); ?>