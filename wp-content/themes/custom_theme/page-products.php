<?php
get_header();
?>



<?php
if (have_posts()):
    while (have_posts()): the_post();
        ?>
        <div class="container" id="home-page-posts">
            <article class="post article">
                <h1><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>
            </article>

            <?php
        endwhile;

    else:
        echo "<p>No content found</p>";

    endif;
    ?>
    <ul class="nav">  
        <?php 
       $child_of= get_top_ancestor_id();
       echo $child_of;
       die;
               
       
        $args=array(
            
            'depth'=> 1,
            'sort_column'=>'menuorder,post_title',
            'child_of'=> $child_of,
             'title_li'=>''
        );?>
        
       <?php wp_list_pages($args);?>
    </ul>

    <br/>

    <?php
    get_footer();
    ?>

