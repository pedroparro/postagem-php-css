<?php 
include("../includes/config.php");
    extract($_POST);
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        //sql
        $sql = $pdo->prepare("UPDATE blog SET titulo = '$titulo', conteudo = '$conteudo' WHERE id = '$id'");
        $sql->execute();
        //msg
        echo header("Location: ./edit.php?msg=Post atualizado com sucesso");
        die();
    }else{
        header("Location: ../index.php");
        die();
    }
?>

