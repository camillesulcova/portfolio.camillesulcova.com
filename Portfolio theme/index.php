<?php get_header() ?>
<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>

<?php
$camille = get_field('camille');
$sulcova = get_field('sulcova');
$HeroImage = get_field('hero_image');
$HeadlineHero = get_field('headline_hero');
$DescriptionHero = get_field('description_hero');
$AboutImage = get_field('about_image');
$AboutHeading = get_field('about_heading');
$AboutMe = get_field('about_me');
$MyWorkHeading = get_field('my_work_heading');


?>

    
<div class="main">
        <section class="home section" id="home">
            <div class="home__container"> 
                <div class="home__name">
                    <div class="home__top">
                        <h1 id="camille"><?php echo $camille ;?></h1>

                    </div>
                    <div class="sulcova">
                        <h1 id="sulcova"><?php echo $sulcova ;?></h1>
                    </div>
                </div>
                <div class="home__image">
                    <img src="<?php echo $HeroImage["url"] ; ?>" id="pic4" alt="pic4">
                </div>
                <div class="home__info">
                    <h2 id="h2__home"><?php echo $HeadlineHero;?></h2>
                    <h2><?php echo $DescriptionHero ;?></h2>
               
                </div>
            </div>
        </section>
    </div>

    <div class="about__main">
        <div class="col-1"></div>
            <div class="col-5">
                <img src="<?php echo $AboutImage ["url"] ;?>" alt="about__img">
            </div>
            <div class="col-6">
                <h2 id="h2__home"><?php echo $AboutHeading ;?></h2>
                <p><?php echo $AboutMe ;?></p>
                    <a href="<?php echo get_permalink(get_page_by_path("about")) ?>" class="primary__button">continue reading</a>
            </div>
            
        </div>
 
        <?php
        $carousels = new WP_Query(array(
            'post_type' => 'carousel',
            'posts_per_page' => -1,
        ));
        ?>
    <div class="carousel">
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


        <div class="carousel-slide">
            <p id="p_custom"><?php echo $text1; ?></p>
            <p id="p_custom"><?php echo $text2; ?></p>
            <p id="p_custom"><?php echo $text3; ?></p>
            <p id="p_custom"><?php echo $text4; ?></p>
            <p id="p_custom"><?php echo $text5; ?></p>
            <p id="p_custom"><?php echo $text6; ?></p>
            <p id="p_custom"><?php echo $text7; ?></p>
            <p id="p_custom"><?php echo $text8; ?></p>
        </div>
        <div class="carousel-slide">
            <p id="p_custom" id="One_carousel"><?php echo $text1; ?></p>
            <p id="p_custom"><?php echo $text2; ?></p>
            <p id="p_custom"><?php echo $text3; ?></p>
            <p id="p_custom"><?php echo $text4; ?></p>
            <p id="p_custom"><?php echo $text5; ?></p>
            <p id="p_custom"><?php echo $text6; ?></p>
            <p id="p_custom"><?php echo $text7; ?></p>
            <p id="p_custom"><?php echo $text8; ?></p>
        </div>
   
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php endif; ?>
</div>

<div class="cards__index">
    <div class="mywork__heading">
    <h1 id="my-work"> <?php echo $MyWorkHeading ;?></h1>
    </div>

        <?php
        $cards = new WP_Query(array(
            'post_type' => 'card',
            'posts_per_page' => 4,
        ));
        ?>

        <div class="my__work2">
            <div class="container__cards2">
                <?php if($cards->have_posts()): ?>
                <?php while($cards->have_posts()): $cards->the_post(); ?>

                    <?php
                    $cardImage = get_field('card_image');
                    $cardDescription = get_field('card_description');
                    $cardTitle = get_field('card_title');
                    $cardLink = get_permalink();
                    ?>


                            <article class="card__article2">
                                <img src="<?php echo $cardImage ["url"]; ?>" alt="image" class="card__img2">
                                <div class="card__data2">
                                    <span id="p__cards" class="card__description2"><?php echo $cardDescription ; ?></span>
                                    <h2 id="h2__cards" class="card__title2"><?php echo $cardTitle ; ?></h2>
                                    <a href="<?php echo $cardLink; ?>" class="tertiary__button">read more</a>
                                </div>
                            </article>


                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php
$Email = get_field('email');
?>

<div class="container__footer" class="container" id="contact">
        <div class="get_in_touch">
            <div class="col-1"></div>
            <div class="col-4">
                <h1 id="h1_custom">GET IN TOUCH</h1>
            </div>
            <div class="col-1"></div>
            <div class="contactForm">
                <form id="contactForm">
                    <div class="form-group">
                        <label for="fullName">Full Name:</label>
                        <input type="text" id="fullName" name="fullName" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" required><?php echo $Email; ?>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="secondary__button" id="submit">Submit</button>
                </form>
            </div>

        </div>

<?php endwhile;?>

    <?php endif; ?>

<?php get_footer() ?>