<?php /* Template Name: Layers */ ?>
<?php get_header(); ?>
<main id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="entry-content">
<style>
.layer{width:100%;color:#fff;padding:5%;background:#ff0000;box-sizing:border-box}
.layer:after{display:table;content:"";clear:both}
.layer-inner{padding:5% 10%}
.left{text-align:left}
.center{text-align:center}
.right{text-align:right}
.force-white-text, .force-white-text *{color:#fff !important}
.force-black-text, .force-black-text *{color:#000 !important}
body{width:100% !important;max-width:none !important;padding-left:0 !important;padding-right:0 !important;border-left:0 !important;border-right:0 !important;margin-left:0 !important;margin-right:0 !important}
#wrapper, #container, #main, #content, main, article{width:100% !important;max-width:none !important;padding:0 !important;border:0 !important;margin:0 !important}
#header, #masthead, header{margin-bottom:0 !important}
#footer, .site-footer, footer{margin-top:0 !important}
#sidebar, #side{display:none !important}
</style>
<?php the_content(); ?>
</div>
</article>
<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>