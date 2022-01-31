<div id="h2"><h2>Cadastrar Postagens</h2></div>
 <!--php msg-->
 <?php if(isset($_GET['msg'])){?>
            <div class="msg">
        <?php echo $_GET['msg']; ?>
            </div>
        <?php } ?>
    <!--section-->
    <section id="register">
        <div class="container">
            <div id="form">
                <form action="./crud/sendPost.php" method="post">
                        <div id="input"><input type="text" name="titulo" placeholder="Título" maxlength="20" required></div>
                            <div id="textarea"><textarea name="conteudo" id="conteudo" cols="30" rows="10" placeholder="Conteúdo" maxlength="400" required></textarea></div>
                                <div id="btn"><button type="submit" id="btn">Cadastrar</button></div>
                </form>
            </div>
        </div>
    </section>