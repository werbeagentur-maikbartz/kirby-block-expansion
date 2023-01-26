<?php if ($block->video()->isNotEmpty()): ?>
    <video src="<?= $block->video()->toUrl() ?>" width="1800" height="1200" controls playsinline data-uk-video></video>
<?php endif; ?>