<?php
/**
 * 404.php
 * Ce fichier est appelé lorsque l'url demandée ne correspond à aucun contenu de votre wordpress.
 */

 // chargement du fichier "header.php"
get_header();
?>

<h2>Erreur 404</h2>
<p>La page n'a pas été trouvée</p>
<img class="picture" src="/wordpress/wp-content/themes/Bigstar/attention.png" alt="photo erreur">

<?php
// Chargement du fichier "footer.php"
get_footer();