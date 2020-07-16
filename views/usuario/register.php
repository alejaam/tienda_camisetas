<h1>Registrarse</h1>

<form action="index.php?controller=usuario&action=save" method="post">
    <label for="name">Nombre</label>
    <input type="text" name="name" required>

    <label for="lastname">Apellidos</label>
    <input type="text" name="lastname" required>

    <label for="email">Email</label>
    <input type="text" name="email" required>

    <label for="password">Contraseña</label>
    <input type="password" name="password" required>

    <input type="submit" value="Rregistrarse">
</form>