<?php
$cod = $_GET['cod'];
$conexao = mysqli_connect('localhost', 'root', '', 'biblioteca');
$sql = "delete from livros where id_livro=$cod";
$executar = mysqli_query($conexao, $sql);
if($executar == 1){
	echo "registro excluido";
}
else{
	echo "erro";
}
mysqli_close($conexao);

?>