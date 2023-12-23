<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'flowpurple_website' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6:;3uad18F~g:D?7#Ep`TS?t@KS~QRIrXFAe/<*U.3|=HQZIrqFTe&0$o`>W Q%j' );
define( 'SECURE_AUTH_KEY',  ']5$qarsNH6HuWpEKd!{4njb0rN5v@:L6({oU(qGz|hY1/o2XO?ln)}g$dFq$t9Mf' );
define( 'LOGGED_IN_KEY',    'k|2V)52sI-Le1K{x)5=Dq+!D/YF=R1-{nc[1^!*R+!IH[^#i6fCv(k^Yll5P3pI.' );
define( 'NONCE_KEY',        '<)[nIGf9fcN(Lb*B*!ek:>C{:~.eaAwMf%w0z .5a4b6N&ZX{u6g!o:JA;I%$B}g' );
define( 'AUTH_SALT',        'EeN^m97D:*z./fbnYd|e<Z.k(^;j#u9pv,o6ZQwW^p#ESBN!%^8oz*-rhX))-rP|' );
define( 'SECURE_AUTH_SALT', '|I?sxhiUQ6FFiiY!}42&dT!RIH7/n|Yu,[u5 [$r`tPpNz<6N(@=&O8A9<o[(l+V' );
define( 'LOGGED_IN_SALT',   '&#uJ&D];d~br._DIj=TT+sk6#+1PU,L5dV&=Gm7ruam0(0}#iW&, 6,iN d7_/dF' );
define( 'NONCE_SALT',       '<.?Dw/6[/RT +~Wdl_6ZLx5MKC|bmJwSl*|S#LRSVeS N;:0?0<(H6G;N+yo!^o$' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
