<?php $descriptionListItems = $block->descriptionList()->toStructure(); ?>
<?php if($descriptionListItems->isNotEmpty()): ?>
<dl class="uk-description-list uk-description-list-divider">
        <?php foreach($descriptionListItems as $item): ?>
            <dt><?= $item->summary() ?></dt>
            <dd><?= $item->details() ?></dd>
        <?php endforeach; ?>
</dl>
<?php endif; ?>