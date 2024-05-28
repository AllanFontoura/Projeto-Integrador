<?php
//Conexão com banco de dados
include 'conexao.php'; //var_dump($_POST);
$nome = $_POST['nome'];
//echo $nome;
$email = $_POST['email'];
//echo $email;
$telefone = $_POST['telefone'];
//echo $assunto;
$mensagem = $_POST['mensagem'];
//echo $conteudo;
$sql ="INSERT INTO `contato`(`nome`, `email`, `telefone`, `mensagem`) VALUES ('$nome','$email','$telefone','$mensagem')";

if ($mysqli->query($sql) === TRUE) {
    // Inserção bem-sucedida, exibe mensagem de sucesso
    echo "<script>alert('Obrigado a Digotur agradece pelo contato! Sua mensagem foi enviada com sucesso.');</script>";
} else {
    // Erro na inserção, exibe mensagem de erro
    echo "<script>alert('Erro ao enviar mensagem. Por favor, tente novamente mais tarde.');</script>";
}

$mysqli->close();

echo "<meta http-equiv='refresh' content='0.5;url=faleconosco.php' />";

?>



