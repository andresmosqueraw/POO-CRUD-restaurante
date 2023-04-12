<?php include('../partials/navbar.php'); ?>

<br>

    <div class="container">
        <div class="container-small">
            <form action="./guardar.php" method="POST" id="form">
                <h1 class="text-center">Crear Orden</h1>
                <br>
                <div class="mb-3">
                    <label for="">ID Categoria</label>
                    <select name="food_id" placeholder="Food ID" required>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
                
                <div class="mb-3">
                    <input type="number" name="quantity" min="1" class="form-control" id="quantity" placeholder="Cantidad" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="customer_name" class="form-control" id="customer_name" placeholder="Nombre" required pattern="[A-Za-z ]+">
                </div>
                <div class="mb-3">
                    <input type="email" name="customer_email" class="form-control" id="customer_email" placeholder="Correo Electronico" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="customer_address" class="form-control" id="customer_address" placeholder="Dirección" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Crear Orden</button>
            </form>
        </div>
    </div>
<br>

<?php include('../partials/footer.php'); ?>