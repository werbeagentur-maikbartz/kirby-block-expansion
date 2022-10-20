<?php $accordionItems = $block->accordion()->toStructure(); ?>
<?php if($accordionItems->isNotEmpty()): ?>
<ul data-uk-accordion>
    <?php foreach($accordionItems as $item): ?>
        <li>
            <a class="uk-accordion-title" href="#"><?= $item->summary() ?></a>
            <div class="uk-accordion-content"><?= $item->details() ?></div>
        </li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>
