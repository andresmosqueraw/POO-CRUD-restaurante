<?php include('../partials/navbar.php'); ?>

<br>

    <div class="container">
        <div class="container-small">
            <form action="./guardar.php" method="POST" id="form">
                <h1 class="text-center">Crear comida</h1>
                <br>
                <div class="mb-3">
                    <input type="text" class="form-control" name="title" id="title" placeholder="Nombre" required pattern="[A-Za-z ]+">
                </div>
                <div class="mb-3">
                    <textarea type="text" class="form-control" id="description" name="description" placeholder="Descripción" required></textarea>
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control" name="price" id="price" min="10000" max="100000" placeholder="Precio" required>
                </div>
                <div class="mb-3">
                    <label for="">Categoria</label>
                    <select class="form-control" name="category_id" placeholder="Categoria" required>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Admin</label>
                    <select class="form-control" name="admin_id" placeholder="Admin" required>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>5</option>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Crear comida</button>
            </form>
        </div>
    </div>

<br>

<?php include('../partials/footer.php'); ?>