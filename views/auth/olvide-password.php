<h1 class="nombre-pagina">Olvidé Password</h1>
<p class="descripcion-pagina">Restablece tu password escribiendo tu email</p>

<?php
@include_once __DIR__ . "/../templates/alertas.php";
?>

<form method="POST" action="/olvide" class="formulario">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Tu Email" name="email" />
    </div>
    <input type="submit" class="boton" value="Restablecer Password">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes cuenta? Crear una cuenta</a>
</div>