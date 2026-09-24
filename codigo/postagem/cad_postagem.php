<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Postagem</h3>
    <!-- action: para quem estou mandando os dados -->
    <!-- method: como estou mandando os dados -->
    <form action="salvar_usuario.php" method="POST">
         Texto: <br>
        <input type="text" name="texto"> <br>

          Usuario: <br>
        <select name="idusuario">
            <?php
                $sql = "SELECT * FROM usuario";
                $resultados = mysqli_query($conexao, $sql);

                while ($linha = mysqli_fetch_array($resultados)) {
                    $idusuario = $linha['idusuario'];
                    $nome = $linha['nome'];

                    echo "<option value='$idusuario'>$nome</option>";
                }
            ?>
        </select>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>