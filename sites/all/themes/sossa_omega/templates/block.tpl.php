<?php $tag = $block->subject ? 'section' : 'div'; ?>
<<?php print $tag; ?><?php print $attributes; ?>>
  <div class="block-inner clearfix">
    <div class="block-title-wrapper">
    <?php print render($title_prefix); ?>
    <?php if ($block->subject): ?>
      <h2<?php print $title_attributes; ?>><span><?php print $block->subject; ?></span></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    </div><!-- /.block-title-wrapper -->
    
    <div<?php print $content_attributes; ?>>
      <?php print $content ?>
    </div>
  </div>
</<?php print $tag; ?>>