<?php
get_header();

$queried_object = get_queried_object();
$slug= $queried_object->slug; 
?>
	
	<div class="container">
		

	   <?php   
        $terms = get_terms( array( 
                'taxonomy' => 'category',
                 'hide_empty' => false,
            ));
        $current='';
        $tabProgram = '<ul class="secondary-nav">';
                foreach ($terms as $term) {

                  if($term->slug == $slug)
                    $current_menu=' <<-this is active-->>';
                  else
                    $current_menu='';

                   $tabProgram .= '<li class=""><a href="'.get_term_link($term).'">'.$term->name.$current_menu.'</a></li>';
                }
         $tabProgram .='</ul>';

       echo  $tabProgram;
       ?>

       <!--- if you have different design template for each category then use different post-content tempale /otherwise use default-->
		<?php
 		if( $slug == 'news')
		{
		get_template_part( 'template-parts/post/content', 'news' );
     	}
     	else if($slug == 'events')
     	{
     		get_template_part( 'template-parts/post/content', 'event' );
     	}
		else if($slug == 'press-releases')
     	{
     		get_template_part( 'template-parts/post/content', 'press_releases' );
     	}

	   ?>
		

<?php
 get_footer();