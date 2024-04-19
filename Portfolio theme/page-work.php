
<?php get_header() ?>
<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>

<?php
$WorkHeading = get_field('work_heading');
$PortfolioNav1 = get_field('portfolio_nav_1');
$PortfolioNav2 = get_field('portfolio_nav_2');
$PortfolioNav3 = get_field('portfolio_nav_3');
$PortfolioNav4 = get_field('portfolio_nav_4');
$EthicsHeadline = get_field('ethics_headline');
$EthicsText1 = get_field('ethics_text_1');
$EthicsText2 = get_field('ethics_text_2');
$EthicsText3 = get_field('ethics_text_3');


?>
 <section class="portfolio section" class="bd-container" class="container" id="portfolio">
        <h1>
            <?php echo $WorkHeading ; ?>
        </h1>
        <div class="portfolio__nav">
            <span class="portfolio__item" data-filter="all"><?php echo $PortfolioNav1 ;?> </span>
            <span class="portfolio__item" data-filter=".ux"><?php echo $PortfolioNav2 ;?></span>
            <span class="portfolio__item" data-filter=".graphic"><?php echo $PortfolioNav3 ;?></span>
            <span class="portfolio__item" data-filter=".web"><?php echo $PortfolioNav4 ;?></span>
        </div>

        <?php
        $cards = new WP_Query(array(
            'post_type' => 'card',
            'posts_per_page' => 5,
            "offset" => 0,
        ));
        ?>
 <div class="portfolio__container" class="bg-grid">
        <?php if($cards->have_posts()): ?>
        <?php while($cards->have_posts()): $cards->the_post(); ?>

            <?php
            $cardImage = get_field('card_image');
            $cardDescription = get_field('card_description');
            $cardTitle = get_field('card_title');
            $link = get_permalink();
            $class = get_field("class")
            ?>

       
            <div class="portfolio__content mix <?php echo $class; ?>">
                <a href="#"><img src="<?php echo $cardImage["url"];?>" alt="" class="portfolio__img"></a>
                <div class="portfolio__data">
                    <span class="portfolio__subtitle"><?php echo $cardDescription; ?></span>
                    <a href="#"> <h2 class="portfolio__title"><?php echo $cardTitle; ?></h2></a>
                    <a href="<?php echo $link; ?>" class="tertiary__button__light">view details</a>
                </div>
            </div>
       
        
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        </div>      
    </section> 
  </div>

<section class="work__ethics" class="container">
    <h2 id="h2__light"><?php echo $EthicsHeadline ;?></h2>
    <div class="ethics__content">
       
            <p id="p__light"><?php echo $EthicsText1 ;?>
            </p>
            <p id="p__light"> 
            <?php echo $EthicsText2 ;?>
            </p>
       
            <p id="p__light"><?php echo $EthicsText3 ;?></p>
        
    </div>
</section>

  </div>



    



<?php endwhile;?>
    <?php endif; ?>

<?php get_footer() ?>