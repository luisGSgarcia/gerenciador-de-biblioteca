<?php

$nome_aluno = $_POST ['nome_aluno'];
$cgm = $_POST['cgm'];
$email_aluno = $_POST['email_aluno'];
$numero_aluno = $_POST['numero_aluno'];

$conexão = mysqli_connect('http://ec2-3-231-215-130.compute-1.amazonaws.com', 'av_luisgarcia', 'luisgarcia', 'bd_av4i_luisgarcia');
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
