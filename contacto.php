<!DOCTYPE html>
<html>
<?php
include "head.php";
?>

<body>
    <?php
    include "header.php";
    ?>

    <form>
        <h1 class="mensajecontacto">Contacto</h1>
        <p>Si quieres tener mas informacionde nosotros, llena el siguiente formulario porfavor.</p>
        <div class="form-group">
            <label for="exampleInputPassword1">Nombre:</label>
            <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre.">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Correo electronico:</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email.">
            <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button><br><br>
    </form>

    <?php
    include "footer.php";
    ?>

</body>

</html>