<?php include("./includes/header_index.php"); ?>
    <!--section-->
    <section id="index">
        <h2 id="h2-index">Últimas Postagens</h2>

            <!--php msg-->
            <?php if(isset($_GET['msg'])){?>
                <div class="msg">
            <?php echo $_GET['msg']; ?>
                </div>
            <?php } ?>
        
        <?php include("./crud/ready.php"); ?>
         
        <?php include("./includes/pagination.php"); ?>
    
    </section>

<?php include("./includes/footer.php"); ?>
