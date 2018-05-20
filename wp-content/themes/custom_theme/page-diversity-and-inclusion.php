<?php
get_header();

if (have_posts()):
    while (have_posts()): the_post();
        ?>
        <div class="container" id="home-page-posts">
            <article class="post">
                <h1><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>
            </article>



            <?php
        endwhile;

    else:
        echo "<p>No content found</p>";

    endif;
    ?>
    <br/>
    <?php
    get_footer();
    ?>
<?php
