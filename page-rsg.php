<?php
/*
Template Name: Ready? Set Go! テンプレート
*/
?>
<h1>固定ページの新規テンプレートです。</h1>
<?php
if(have_posts()): while(have_posts()): the_post();?>
<h2><?php the_title(); ?></h2>

<?php the_content(); ?>

<?php endwhile; endif; ?>