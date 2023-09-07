<?php

$titulo_livro = $_POST ['titulo_livro'];
$autor_livro = $_POST['autor_livro'];
$isbn = $_POST['isbn'];
$id_categoria = $_POST['id_categoria'];

$conexão = mysqli_connect('localhost', 'root', '', 'biblioteca');
$sql = "insert into professores(titulo_livro, autor_livro, isbn, id_categoria) values ('$titulo_livro', '$autor_livro', '$isbn', '$id_categoria')";
$inserir = mysqli_query($conexão, $sql);

if($inserir){
   echo"Cadastrado com sucesso!";
}
else{
   echo"erro";
}

mysqli_close($conexão);

?>
