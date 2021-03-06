<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'cnconsultants');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'uHBT7E|GkS.LMH{8Ti_1?^8C}{z bJ(pQ~T%EQuLm/oL_m-jIjr~dGjR}+!(m?|b');
define('SECURE_AUTH_KEY',  '9P<P8$@1-Rus6Oy^/aUp!U@FvDKAuP$iM(A2X^2he2(cNPf(.iq6*e/ycR!{PvyQ');
define('LOGGED_IN_KEY',    'e$1AA/e,1DaH%^{U5;*.-LyGX5T~|aco7$/}Q=VpX$UU=%2Gg}gls>A:UXi+ZfDV');
define('NONCE_KEY',        'j!~Cw[ad}+}!I[MrNi-[}:|ALZd+okDzjQ#L||7HIktZo@lF}3)I&}G@HO;k?y:#');
define('AUTH_SALT',        'c/|4.MUHsxlb#}WM)]$&(3,=zR_O[;9CV@o;3gMGXVM_q(!Xq|(O9gH-w{H;]scW');
define('SECURE_AUTH_SALT', '$beV-32CFF5/W@p23F!]Q2|e&:b_poA*=jzj@=@:va4ayE%leE9Vl*-rOCXPElb.');
define('LOGGED_IN_SALT',   'i+TT9xiZ`@_[,pciL`q*|03| #:*f-.xG4_r`g?(l+@*+ k-5_.E>g05+2<O5/Vl');
define('NONCE_SALT',       'bn,uj^CaH&Kun!+<$_V2.#ps7e[iV#`M#[&A *PPsD.m;4xMs`-|NjX6+-2H+ !<');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'cn_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');