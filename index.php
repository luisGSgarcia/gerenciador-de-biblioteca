<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Biblioteca Ana Vanda Bassara</title>
</head>
<body>

    <header>
        <a href="index.php"><img src="logo.png" alt="logotipo"></a>
    </header>
    
    <div id="menu">
        <nav>
        <ul>
            <li>Cadastrar
                <ul>
                    <li><a href="cadastrar_aluno.html">Cadastrar Aluno</a></li>
                    <li><a href="cadastrar_professor.html">Cadastrar Professor</a></li>
                    <li><a href="cadastrar_livro.html">Cadastrar Livro</a></li>
                </ul>
            </li>
            <li>Cadastrados
                <ul>
                    <li><a href="alunos_cadastrados.php">Alunos</a></li>
                    <li><a href="professores_cadastrados.php">Professores</a></li>
                </ul>
            </li>
            <li>Categoria</li>
        </ul>
    </nav>
    </div>
    
    <div id="content">
        <h2>Tabela de Livros</h2>
       
        <?php
        $conexao = mysqli_connect('localhost', 'root', '', 'biblioteca');
        $sql = "select * from livros";
        $executar = mysqli_query($conexao, $sql);
        
        echo "<table>
                <tr>
                <th>Código</th>
                <th>titulo</th>
                <th>autor</th>
                <th>isbn</th>
                <th>Emprestimo</th>
                <th>Excluir</th>
                </tr>";

        while($res = mysqli_fetch_array($executar)){
        echo "<tr><td>".$res['id_livro']."</td><td>".$res['titulo_livro']."</td><td>".$res['autor_livro ']."</td><td>".$res['isbn']."<td><a href='remove_livro.php?cod=".$res['id_livro']."'>Excluir</a></td></tr>";
        }
        echo "</table>";

        mysqli_close($conexao);
    ?>

    </div>

</body>
</html>
