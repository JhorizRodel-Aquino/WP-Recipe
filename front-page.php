<?php get_header()?>



<section class="banner mb-20">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

        <?php $banner = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            'meta_key' => 'Groupings',
            'meta_value' => 'Banner'
        ))?>

        <?php if($banner->have_posts()) : while($banner->have_posts()) : ($banner->the_post())?>
        <div
            class="banner__content flex flex-col justify-center items-center md:items-start px-1"
        >
            <small>Must Try</small>
            <h1><?php the_title()?></h1>
            <p><?php echo wp_trim_words(get_the_excerpt(), 20)?></p>
            <a href="<?php echo the_permalink()?>" class="btn btn--accent">Read More</a>
        </div>

        <div class="banner__img">
            <?php if(has_post_thumbnail()) {the_post_thumbnail();}?>
        </div>

        <?php endwhile;
            else : 
                echo "No more posts :(";
            endif;
            wp_reset_postdata();
        ?>

    </div>
</section>


<section class="week mb-20">
    <div class="container mx-auto">
    <h2 class="text-center mb-20">Recipe of the Week</h2>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">

        <?php $week = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            'meta_key' => 'Groupings',
            'meta_value' => 'Week'
        ))?>

        <?php if($week->have_posts()) : while($week->have_posts()) : ($week->the_post())?>
            
            <div class="grid__item text-center">
                <a href="<?php the_permalink()?>">
                    <?php if(has_post_thumbnail()) {the_post_thumbnail();}?>
                    <small><?php echo get_the_category()[0]->name?></small>
                    <h3><?php the_title()?></h3>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 20)?></p>
                </a>
            </div>

        <?php endwhile;
            else : ?>
                <h3><?php echo "No more posts :("; ?></h3>
            <?php 
            endif;
            wp_reset_postdata();
        ?>

    </div>
    </div>
</section>


<section class="collection">
    <div class="container mx-auto">
    <h2 class="mb-20">Recipe Collection</h2>
    <div class="collection__item">

        <?php $collection = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            'category' => 'Pasta'
        ))?>

        <?php if($collection->have_posts()) : while($collection->have_posts()) : ($collection->the_post())?>

            <div class="flex justify-between flex-col md:flex-row gap-10 mb-10">
                <div class="collection__item__img basis-1/2">
                    <?php if(has_post_thumbnail()) {the_post_thumbnail();}?>
                </div>
                <div class="collection__item__content basis-1/2">
                    <div
                    class="flex flex-col justify-center items-start w-[80%] h-[80%] mx-auto"
                    >
                    <small><?php echo get_the_category()[0]->name?></small>
                    <h3><?php the_title()?></h3>
                    <p><?php echo get_the_content()?></p>
                    <a href="<?php the_permalink()?>" class="btn btn--accent">Read More</a>
                    </div>
                </div>
            </div>

        <?php endwhile;
            else : 
                echo "No more posts :(";
            endif;
            wp_reset_postdata();
        ?>
    </div>
    </div>
</section>

<?php get_footer()?>