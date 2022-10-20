<?php if($block->text()->isNotEmpty()): ?>
    <div class="uk-alert-<?= $block->alertType() ?>" data-uk-alert>
        <a class="uk-alert-close" data-uk-close></a>
        <h3><?= $block->heading() ?></h3>
        <p><?= $block->text() ?></p>
    </div>
<?php endif; ?>