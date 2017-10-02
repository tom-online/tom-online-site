

<div id="work" class="page work">
    <div class="text-box small" >
    <span class="title">
       <h1>Work</h1>
    </span>
    </div>

    <?php if (have_rows('projects')): ?>
    <?php while (have_rows('projects')): the_row(); ?>

        <div class="text-box large project">
            <a href="<?php the_sub_field('link');?>">
                <div class="image" style="background-image: url('<?php the_sub_field('image')?>')"></div>
                <div class="text">
                <h1><?php the_sub_field('title') ?> </h1>
                    <p><?php the_sub_field('description')?> </p>
                </div>
            </a>
            <?php if (get_sub_field('alt_tag')){ ?>
                <a class="alt-tag" href="https://www.alt-design.net/" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/alt-logo.png  ');"></a>
             <?php }?>
        </div>

    <?php endwhile; ?>
    <?php endif; ?>

</div>

