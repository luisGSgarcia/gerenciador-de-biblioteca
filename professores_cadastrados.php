<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_professores_cadastrados.css">
    <title>Professores Cadastrados</title>
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
        <h2>Professores Cadastrados</h2>
        
        <?php
        $conexao = mysqli_connect('localhost', 'root', '', 'biblioteca');
        $sql = "select * from professores";
        $executar = mysqli_query($conexao, $sql);
        echo "<table>
         <tr>
           <th>ID</th>
           <th>Nome do professor</th>
           <th>RG</th>
           <th>Email professor</th>
           <th>Número professor</th>
           <th>Excluir</th>
        
         </tr>";
        while($res = mysqli_fetch_array($executar)){
            echo "<tr><td>".$res['id_professor']."</td><td>".$res['nome_professor']."</td><td>".$res['rg']."</td><td>".$res['email_professor']."</td><td>".$res['numero_professor']."</td><td><a href='remove_professor.php?cod=".$res['id_professor']."'>Excluir</a></td></tr>";
        }
        echo "</table>";
        mysqli_close($conexao);
        ?>
    </div>
</body>
</html>
