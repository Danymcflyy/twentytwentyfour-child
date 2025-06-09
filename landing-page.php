<?php
/*
Template Name: Landing Page
Description: Modèle personnalisé pour une landing page simple et épurée.
*/

get_header();
?>

<style>
.landing-page-container {
  text-align: center;
  padding: 100px 20px;
  background-color: #f5f5f5;
  min-height: 80vh;
}
.landing-page-container h1 {
  font-size: 3em;
  margin-bottom: 20px;
  color: #222;
}
.landing-page-container p {
  font-size: 1.2em;
  margin-bottom: 40px;
  color: #555;
}
.landing-page-container a.cta-button {
  padding: 15px 30px;
  background-color: #0073aa;
  color: white !important;
  text-decoration: none;
  font-weight: bold;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}
.landing-page-container a.cta-button:hover {
  background-color: #005177;
}
</style>

<div class="landing-page-container">
  <h1>Bienvenue sur ma Landing Page</h1>
  <p>Découvrez notre offre exclusive et contactez-nous dès maintenant !</p>
  <a href="<?php echo esc_url(home_url('/contact')); ?>" class="cta-button">Contactez-nous</a>
</div>

<?php
get_footer();
