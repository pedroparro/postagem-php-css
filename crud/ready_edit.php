<?php 
require_once("../includes/config.php");

    //get;
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        //sql
        $sql = $pdo->prepare("SELECT * FROM blog WHERE id = '$id'");
        $sql->execute();
        $rows = $sql->fetch(PDO::FETCH_ASSOC);
        $row = $rows['id'];
        $row = $rows['titulo'];
        $row = $rows['conteudo'];
    }
?>
