<?php
include("../includes/config.php");
//isset
if(isset($_GET['id'])){
    $id = $_GET['id'];
    //sql
    $sql = $pdo->prepare("DELETE FROM blog WHERE id = '$id'");
    $sql->execute();

    header("Location: ./edit.php?msg=Post deletado com sucesso");
    die();

}else{
    header("Location: ../index.php");
    die();
}
?>