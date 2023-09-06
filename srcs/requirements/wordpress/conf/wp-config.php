<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', getenv('SQL_USR') );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', getenv('SQL_PSW') );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'mariadb:3306' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

define('WP_REDIS_HOST', 'redis');
define('WP_REDIS_CLIENT', 'phpredis');
define('WP_REDIS_PORT', 6379);
define('WP_REDIS_PASSWORD', getenv('REDIS_PSW'));
define('WP_REDIS_TIMEOUT', 5);
define('WP_REDIS_READ_TIMEOUT', 5);
/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'IxMB9e/UgM>f.YPL4hS!c@(PMP=Brn~_Y$gF)/NP,5[VeFj%r_dvYY~R&.;f4S`s' );
define( 'SECURE_AUTH_KEY',  'cM[P)n.4~nspgcG[^$eb6+#Ist)f;:FagyTGjD&<Qi4o3#<bgDnvzyWw^+>{I}zk' );
define( 'LOGGED_IN_KEY',    'N*?dd}J5 sqbUb#EI:->=@JaXJN] }G=a?0E3eo8pRhx;^ev/8gGMQ-N!9J&GaLC' );
define( 'NONCE_KEY',        'R}jIfqi~Elzha)0n)t>K2-S1K0^q@DzogA}>~zF>_xl`s~xoBE|C%)C3?H<:Ku7j' );
define( 'AUTH_SALT',        '8*|c,_)t#JW{lPPOVV+T_vHFUEZ, VuFel)DbDPX,-L`UW4{ FU!{&A=K1u]Uw2b' );
define( 'SECURE_AUTH_SALT', '$`]WYo,ki`r)vsTZUGfs+&2Ex-,]o!YG3?3<(B>,*<IQUWQp9P)o[,htg%`TULk+' );
define( 'LOGGED_IN_SALT',   '[&3@&^%2rZAMWOUEnJ9M/:!ks3yw0(9|}dw`#^B_LiJM(kbtSk~w4Mq(:$o%Q]VX' );
define( 'NONCE_SALT',       'GP7t><$a,I-tsK:h1?UE2e$XLSN>K3d7NX0JwlyHii1Q_tlk3Uu>v]f;,FRaG=]/' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
