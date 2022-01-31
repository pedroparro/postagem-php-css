<?php
    include("./includes/config.php");
    //pagination
    // GET
    $page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
    // number pages
    $register_page = 3;

    // sql
    $sql = $pdo->prepare("SELECT * FROM blog ORDER BY id LIMIT :current_page, :register_page");
    $sql->bindValue(':current_page', ($page-1)*$register_page, PDO::PARAM_INT);
    $sql->bindValue(':register_page', $register_page, PDO::PARAM_INT);
    $sql->execute();
    
    $row = $sql->fetchAll(PDO::FETCH_ASSOC);
    $num_contacts = $pdo->query("SELECT COUNT(*) FROM blog")->fetchColumn();

    foreach ($row as $rows){
?>
   <!--container 1-->
   <div class="container-index">
        <div class="cols-index">
            <h3 id="cols-index-h3"><?php echo $rows['titulo']; ?></h3>
                <p id="cols-index-p"><?php echo $rows['conteudo']; ?></p>
                    <button type="submit" id="btn-index"><a href="./crud/edit.php?id=<?php echo $rows['id']?>">Acessar</a></button>
        </div>
    </div>    
                
<?php } ?>