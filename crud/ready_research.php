<?php
include("./includes/config.php"); 

// isset  
extract($_GET);                 
if(isset($_GET['titulo'])){

    $titulo = $_GET['titulo'];
    //sql
    $sql = $pdo->prepare("SELECT * FROM blog WHERE titulo LIKE '%$titulo%'");
    $sql->execute();
    $rows = $sql->fetch(PDO::FETCH_ASSOC);
    //msg
    if($rows <= 0){
        header("Location: ./index.php?msg=Post não encontrado");  
    }
    return $rows;
    
}else{
    header("Location: ./index.php");
}
?>
