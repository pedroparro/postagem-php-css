<!--section-->
<section id="edit">
    <h2 id="h2-edit">Atualizar | Excluir Postagens</h2>
        <!--php msg-->
        <?php if(isset($_GET['msg'])){?>
            <div class="msg">
        <?php echo $_GET['msg']; ?>
            </div>
        <?php } ?>
        <!--container edit-->
        <div class="container-edit">
            <div id="form-edit">
                <form action="./update.php?id=<?php echo $rows['id'];?>" method="POST"> 
                    <div id="input"><input type="text" name="titulo" placeholder="Título" value="<?php echo $rows['titulo'];?>" maxlength="20" required></div>
                        <div id="textarea"><textarea name="conteudo" id="conteudo" cols="30" rows="10" placeholder="Conteúdo" maxlength="400" required><?php echo $rows['conteudo'];?></textarea></div>
                            <div id="btn-edit"><button type="submit" id="btn">Atualizar</button><button><a href="./delete.php?id=<?php echo $rows['id']?>">Deletar</a></button></div>
                </form>
            </div>
        </div>    

</section>
