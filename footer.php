<footer class="menu-footer">
    <?php wp_nav_menu(array('theme_location' => 'footer')); ?>
    <p class="droit-footer">Tous droits réservés</p>
</footer>

<?php wp_footer(); ?>

<!-- Ajouter le fichier JavaScript de AOS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();  // Initialisation de AOS pour activer les animations au défilement
</script>
</body>
