<?php
include("../includes/config.php");
//isset
extract($_POST);
if($_SERVER["REQUEST_METHOD"] == "POST"){
  //validate sql
  function validate($data){
    $data = preg_replace(preg_quote("/(from|update|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/"), "" ,$data); // remove palavras que contenham sintaxe sql
    $data = trim($data); // limpa espaços vazios inicio string
    $data = addslashes($data); //  adiciona barras invertidas a um string
    $data = stripslashes($data); // Remove barras invertidas de uma string.
    $data = strip_tags($data); // tira tags html e php
    $data = htmlspecialchars($data); // Converte caracteres especiais em entidades HTML
    return $data;
  }
    //validate sql
    $titulo = validate($_POST['titulo']);
    $conteudo = validate($_POST['conteudo']);

    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];
    //query
    $sql = $pdo->prepare("INSERT INTO blog (id,titulo, conteudo) VALUES (null,?,?)");
    $sql->bindValue(":titulo",$titulo);
    $sql->bindValue(":conteudo",$conteudo);
    $sql->execute(array($_POST['titulo'], $_POST['conteudo']));

    header("Location: ../register.php?msg=Post cadastrado com sucesso");
    die();
}else{
    header("Location: ../index.php");
    die();
}

?>