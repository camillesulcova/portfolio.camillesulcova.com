
<?php get_header() ?>
<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>

<?php
$AboutHeadline = get_field('about_headline');
$AboutText1 = get_field('about_text_1');
$AboutText2 = get_field('about_text_2');
$AboutVideo = get_field('about_video');
$Resume = get_field('resume');
$ValuesHeading = get_field('values_heading');
$ValuesText1 = get_field('values_text_1');
$ValuesText2 = get_field('values_text_2');
$PrinciplesHeading = get_field('principles_heading');
$PrinciplesText1 = get_field('principles_text_1');
$PrinciplesText2 = get_field('principles_text_2');
$PrinciplesText3 = get_field('principles_text_3');
$PrinciplesText4 = get_field('principles_text_4');





?>


<div class="about">
        <h1><?php echo $AboutHeadline ; ?></h1>
        <div class="col-7">
          
            <p class="about__me"><?php echo $AboutText1 ; ?>
            </p>
            <br>
            <p class="about__me">
            <?php echo $AboutText2 ; ?>
            </p>
            <br>
          
            <br>
        </div>
        <div class="col-5">
             <div class="container-video-about" >
            <iframe class="about__video" width="460" height="315" src="<?php echo $AboutVideo ; ?>" frameborder="0"
                allowfullscreen></iframe>
            </div>

        </div>
            <div class="cv__button">
            <a download="" href="<?php echo $Resume["url"] ; ?>" class="primary__button" id="cv__button">download CV</a>

            </div>
        
    </div>

    <div class="values" class="container">
        <div class="col-5">
            <h1 id="h1_custom_values"><?php echo $ValuesHeading ; ?></h1>

        </div>
        <div class="col-7"></div>


        <div class="values_text" >
         <div class="col-7">
            <p id="p__light">
            <?php echo $ValuesText1 ; ?>
            </p>
            <p id="p__light"><?php echo $ValuesText2 ; ?></p>
                <br>  
                <br>  
            </div>  
             
        </div>
        <br>
        <br>

        <?php
        $carousels = new WP_Query(array(
            'post_type' => 'carousel',
            'posts_per_page' => 1,
            'offset' => 1,
        ));
        ?>
        
        <?php if($carousels->have_posts()): ?>
        <?php while($carousels->have_posts()): $carousels->the_post(); ?>


                    <?php
                    $text1 = get_field('text1');
                    $text2 = get_field('text2');
                    $text3 = get_field('text3');
                    $text4 = get_field('text4');
                    $text5 = get_field('text5');
                    $text6 = get_field('text6');
                    $text7 = get_field('text7');
                    $text8 = get_field('text8');
                    ?>
                    
                    <div class="carousel_2">
                        <div class="carousel-slide_2">
                            <p id="p_custom_2"><?php echo $text1;?></p>
                            <p id="p_custom_2"><?php echo $text2;?></p>
                            <p id="p_custom_2"><?php echo $text3;?></p>
                            <p id="p_custom_2"><?php echo $text4;?></p>
                            <p id="p_custom_2"><?php echo $text5;?></p>
                            <p id="p_custom_2"><?php echo $text6;?></p>
                            <p id="p_custom_2"><?php echo $text7;?></p>
                            <p id="p_custom_2"><?php echo $text8;?></p>
                        </div>
                        <div class="carousel-slide_2">
                            <p id="p_custom_2" id="One_carousel_2"><?php echo $text1;?></p>
                            <p id="p_custom_2"><?php echo $text2;?></p>
                            <p id="p_custom_2"><?php echo $text3;?></p>
                            <p id="p_custom_2"><?php echo $text4;?></p>
                            <p id="p_custom_2"><?php echo $text5;?></p>
                            <p id="p_custom_2"><?php echo $text6;?></p>
                            <p id="p_custom_2"><?php echo $text7;?></p>
                            <p id="p_custom_2"><?php echo $text8;?></p>
                        </div>
                    </div>
                    <br>
                    <br>
                <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
    </div>


 

    <div class="principles" class="container">
        <div class="principles_heading">
            <h1 id="h1_custom"><?php echo $PrinciplesHeading ; ?></h1>
        </div>

        <div class="principles__content">
            <p id="about_custom"><?php echo $PrinciplesText1 ; ?>

                <br>
                <br>

            </p>
                <p id="about_custom">
                <?php echo $PrinciplesText2 ; ?>

                <br>
                <br>

            </p>
            <p id="about_custom">
            <?php echo $PrinciplesText3 ; ?>

                <br>
                <br>
            </p>
            <p id="about_custom">
            <?php echo $PrinciplesText4 ; ?>
            </p>

        </div>
    </div>
    </div>


<?php endwhile;?>
    <?php endif; ?>

<?php get_footer() ?>