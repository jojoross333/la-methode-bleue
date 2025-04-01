<?php
// inclut le header (en tête de page)
get_header();
?>

<!-- Section pour l'en-tête de la page -->
<main> 
    <section class="hero" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
        <?php get_template_part('templates/hero'); ?>
    </section>

    <section id="about" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="200">
        <?php get_template_part('/templates/about'); ?>    <!-- l'entête hero image -->
    </section>

    <section data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400">
        <div class="baleine">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/baleinebleu.png" alt="Logo">
        </div>
    </section>   
</main>

<?php
//inclut le footer
get_footer();
?>
