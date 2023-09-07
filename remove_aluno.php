<?php
$cod = $_GET['cod'];
$conexao = mysqli_connect('localhost', 'root', '', 'biblioteca');
$sql = "delete from alunos where id_aluno=$cod";
$executar = mysqli_query($conexao, $sql);
if($executar == 1){
	echo "registro excluido";
}
else{
	echo "erro";
}
mysqli_close($conexao);
?>