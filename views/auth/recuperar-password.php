<h1 class="nombre-pagina">Recuperar Password</h1>
<p class="descripcion-pagina">Introduce tu nuevo password</p>

<?php
@include_once __DIR__ . "/../templates/alertas.php";
?>

<?php if ($error) return; ?>

<form method="POST" class="formulario">
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Tu Nuevo Password" name="password" />
    </div>
    <input type="submit" class="boton" value="Guardar nuevo Password">
</form>



<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes cuenta? Crear una cuenta</a>
</div>