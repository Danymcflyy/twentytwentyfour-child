<?php
/*
Template Name: Landing Page
*/

get_header();
?>

<div class="landing-page-container" style="text-align:center; padding: 50px;">
  <h1>Bienvenue sur ma Landing Page</h1>
  <p>Voici un exemple de page d’atterrissage créée avec un template personnalisé.</p>
  <a href="<?php echo home_url('/contact'); ?>" style="padding: 10px 20px; background-color: #0073aa; color: white; text-decoration: none; border-radius: 5px;">Contactez-nous</a>
</div>

<?php
get_footer();
