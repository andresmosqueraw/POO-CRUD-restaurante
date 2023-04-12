<?php include('../partials/navbar.php'); ?>

<br>

    <div class="container">
        <div class="container-small">
            <form action="./guardar.php" method="POST" id="form">
                <h1 class="text-center">Crear Administrador</h1>
                <br>
                <div class="mb-3">
                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Nombre" required pattern="[A-Za-z ]+">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de Usuario" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="password" id="password" minlength="8" maxlength="40" placeholder="Contraseña" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Crear Administrador</button>
            </form>
        </div>
    </div>

<br>

<?php include('../partials/footer.php'); ?>

