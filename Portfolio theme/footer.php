<?php get_header() ?>
<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>

<?php
$footers = new WP_Query(array(
            'post_type' => 'footer',
            'posts_per_page' => 1,

        ));
?>

<?php if ($footers->have_posts()): ?>
            <?php while ($footers->have_posts()): $footers->the_post(); ?>
<?php

$LinkedIn = get_field('linkedin');
$Email = get_field('email');


?>





        <footer class="footer_custom">
            <div class="footer-content_custom">
                <p class="footer-text">2024 © camille sulcova</p>
                <p class="footer-text"><a href="<?php echo $LinkedIn ;?>"
                        target="_blank">LinkedIn</a></p>
                <p class="footer-text"><?php echo $Email; ?></p>
            </div>

        </footer>


    </div>

    <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
    <!-- <script src="js/scrollreveal.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/app.js"></script> -->
  
    
   
</body>
<?php wp_footer(); ?>
</html>
