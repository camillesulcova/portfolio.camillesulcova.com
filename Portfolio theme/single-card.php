<?php get_header() ?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>
Hello
    <?php
    $Title = get_field('title');
    $Category = get_field('category');
    $Info = get_field('info');
    $Description = get_field('description');
    $Image = get_field('image');
    $Video = get_field('video');
    ?>

<div class="about" class="container">
        <h1 class="h1__project"><?php echo $Title ; ?></h1>
        <h2>
            <?php echo $Category ;?>
            <br>
            <?php echo $Info ;?> 
        </h2>
        <br>
        <h2 id="h2__dark">project overview</h2>
        <p id="p__dark">
        <?php echo $Description ;?>
        </p>
        <br>

        <?php if($Image): ?>
            <div class="container__img">
                <img src="<?php echo $Image ["url"];?>  " id="project__img" alt="">
            </div>

        <?php endif; ?>    
        
        <?php if($Video): ?>
            <div class="container__video">
                <iframe width="760" height="415" src="<?php echo $Video; ?>" frameborder="0" allowfullscreen></iframe>

            </div>
        <?php endif; ?>
            

    </div>

<?php endwhile;?>
    <?php endif; ?>

<?php get_footer() ?>