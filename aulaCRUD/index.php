<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./php/crud/validar.php" method="POST">

    ADM
    <input type="radio" name="perfil" value="adm" />
    USER
    <input type="radio" name="perfil" value="user" checked />
    <br />
        Login:
        <input type="text" name="cxlogin"><br />
        Senha:
        <input type="password" name="cxsenha"><br />
        <input type="submit" value="Acessar">
    </form>
</body>
</html>