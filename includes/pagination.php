<!-- pagination-->
<div class="pagination">
    <?php if ($page > 1): ?>
        <a href="./index.php?page=<?=$page-1?>"><i class="fa fa-chevron-left" title="Voltar"></i></a>
    <?php endif; ?>
        <?php if ($page*$register_page < $num_contacts): ?>
            <a href="./index.php?page=<?=$page+1?>"><i class="fa fa-chevron-right" title="Próximo"></i></a>
        <?php endif; ?>
</div>
