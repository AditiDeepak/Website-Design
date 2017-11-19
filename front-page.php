<?php
get_header();
if (have_posts()):
while (have_posts()) : the_post();?>
<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
<?php the_content(); ?>
<?php endwhile;
else:
echo '<p>Nothing</p>';
endif;
get_footer();
?>
<marquee behavior="alternate">Check out my video! :)</marquee>
<div class="my_video">
<div class="wrapper">
<center>
<iframe width="650" height="315" src="https://www.youtube.com/embed/mQO2PcEW9BY" frameborder="0" allowfullscreen></iframe>
</center>
</div>
</div>
<title>LEGAL</title>
<h3>&copy 2017-2027 </h3>