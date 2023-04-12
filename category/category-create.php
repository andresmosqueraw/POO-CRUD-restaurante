<?php include('../partials/navbar.php'); ?>

<br>

    <div class="container">
        <div class="container-small">
            <form action="./guardar.php" method="POST" id="form">
                <h1 class="text-center">Crear Categoria</h1>
                <br>
                <div class="mb-3">
                    <input type="text" class="form-control" name="title" id="title" placeholder="Nombre" required pattern="[A-Za-z ]+">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Crear Categoria</button>
            </form>
        </div>
    </div>

<br>

<?php include('../partials/footer.php'); ?>