<?php

$nome_aluno = $_POST ['nome_aluno'];
$cgm = $_POST['cgm'];
$email_aluno = $_POST['email_aluno'];
$numero_aluno = $_POST['numero_aluno'];

$conexão = mysqli_connect('localhost', 'root', '', 'biblioteca');
$sql = "insert into alunos(nome_aluno, cgm, email_aluno, numero_aluno) values ('$nome_aluno', '$cgm', '$email_aluno', '$numero_aluno')";
$inserir = mysqli_query($conexão, $sql);

if($inserir){
   echo"Cadastrado com sucesso!";
}
else{
   echo"erro";
}

mysqli_close($conexão);

?>
