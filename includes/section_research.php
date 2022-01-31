<!--section-->
<section id="research">
    <h2 id="h2-research">Pesquisar Postagens</h2>
    

    <?php include("./crud/ready_research.php"); ?>

    
    <!--container 1-->
    <div class="container-research">
        <div class="cols-research">
            <input type="hidden" name="titulo" value="<?php echo $rows['titulo'];?>">
                <h3 id="cols-research-h3"><?php echo $rows['titulo']; ?></h3>
                    <p id="cols-research-p"><?php echo $rows['conteudo']; ?></p>
                        <button type="submit" id="btn-index"><a href="./crud/edit.php?id=<?php echo $rows['id']?>">Acessar</a></button>
        </div>
    </div>    

        
</section>