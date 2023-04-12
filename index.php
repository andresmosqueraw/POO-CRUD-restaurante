<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/login.css">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <form action="./admin/admin.php">
            <h1 class="text-center">Iniciar Sesion</h1>
            <br>
            <div class="mb-3">
              <input type="text" class="form-control" id="" name="username" pattern="^jmahechav@uniempresarial\.edu\.co$" value="jmahechav@uniempresarial.edu.co" placeholder="Nombre de Usuario" required>
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" name="password" id="" pattern="^mosquera3$" value="mosquera3" minlength="8" maxlength="40" placeholder="Contraseña" required>
            </div>
            <button type="submit" class="btn btn-danger">Iniciar Sesion</button>
        </form>
    </div>

    <footer class="fixed-bottom" style="background-color: #000 !important; color:white;">
      <a href="./index.html" class="btn btn-danger">¡Da click aqui para contactarnos!</a>
      <div class="d-flex flex-column justify-content-between py-1">
          <p class="text-center">© 2023 All rights reserved, Ana Gourmet. Desarrollado por - Andres Mosquera & Juan Mahecha. </p>
      </div>
  </footer>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>