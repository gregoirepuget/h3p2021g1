<?php
$prefix = 'content_';

$title1 = get_sub_field($prefix."title_column_1");
$content1 = get_sub_field($prefix."content_column_1");
$image1 = get_sub_field($prefix."image_column_1");

$title2 = get_sub_field($prefix."title_column_2");
$content2 = get_sub_field($prefix."content_column_2");
$image2 = get_sub_field($prefix."image_column_2");
?>

<!-- bloc 2 colonnes -->
<div class="bloc_2_colonnes">
  <div class="columns medium-8 small-12">
    <h2><?= $title1; ?></h2>
    <img src="<?= $image1; ?>" alt="<?= $title1; ?>">
    <div>
      <?= $content1; ?>
    </div>
  </div>
  <div class="columns medium-8 small-12">
    <h2><?= $title2; ?></h2>
    <img src="<?= $image2; ?>" alt="<?= $title2; ?>">
    <div>
      <?= $content2; ?>
    </div>
  </div>
</div>
