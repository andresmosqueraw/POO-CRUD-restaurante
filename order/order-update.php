<?php
    require_once "order-objeto.php";

    $id=$_GET['id'];

    $order_actual = Order::searchId($id);
?>

<?php include('../partials/navbar.php'); ?>

<br>

    <div class="container">
        <div class="container-small">
            <form action="./actualizar.php" method="POST" id="form">
                <input type="hidden" name="id" value="<?php echo $order_actual->id; ?>">
                <h1 class="text-center">Actualizar Orden</h1>
                <br>
                <div class="mb-3">
                    <label for="">Food ID</label>
                    <select name="food_id" placeholder="Food ID" value="<?php echo $order_actual->food_id; ?>" required>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
                
                <div class="mb-3">
                    <input type="number" name="quantity" class="form-control" id="quantity" placeholder="Cantidad" value="<?php echo $order_actual->quantity; ?>" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="customer_name" class="form-control" id="customer_name" placeholder="Primer Nombre" value="<?php echo $order_actual->customer_name; ?>" required pattern="[A-Za-z ]+">
                </div>
                <div class="mb-3">
                    <input type="email" name="customer_email" class="form-control" id="customer_email" placeholder="Correo Electronico" value="<?php echo $order_actual->customer_email; ?>" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="customer_address" class="form-control" id="customer_address" placeholder="Dirección" value="<?php echo $order_actual->customer_address; ?>" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Actualizar Orden</button>
            </form>
        </div>
    </div>

<br>

<?php include('../partials/footer.php'); ?>