<?php

$nome_professor = $_POST ['nome_professor'];
$rg = $_POST['rg'];
$email_professor = $_POST['email_professor'];
$numero_professor = $_POST['numero_professor'];

$conexão = mysqli_connect('localhost', 'root', '', 'biblioteca');
$sql = "insert into professores(nome_professor, rg, email_professor, numero_professor) values ('$nome_professor', '$rg', '$email_professor', '$numero_professor')";
$inserir = mysqli_query($conexão, $sql);

if($inserir){
   echo"Cadastrado com sucesso!";
}
else{
   echo"erro";
}

mysqli_close($conexão);

?>
