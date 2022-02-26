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
define( 'DB_NAME', 'portfolio_wp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'hvU0.n^q;oVDSdq=|]-Qv#K8Oue$*+ {G19is7ENF8I%)M!$VgCEx4C(7;;i-b:8' );
define( 'SECURE_AUTH_KEY',  'Q e5 z@ubB`iw,rUgL,_,M2WxS2A/MGUKjz?J~1kbq,Y1TL[^k^Z*lg`7iliZn[v' );
define( 'LOGGED_IN_KEY',    'Xzq@}d.=y3l&`;%%xkG 8HZ1(:/>Ev|p5%OvJx(?.*_e0~/z*l%zaiX#$075hmQZ' );
define( 'NONCE_KEY',        'VHfG,1vF2YboF42_-G+t-Jm8Nt7KC&;0]q#MSbN}GLR(b%B|dLg}sl6l&6ElJY]/' );
define( 'AUTH_SALT',        '4Z<w|K1oD&,dM$|;z.r gR_hr-`sUahUs|nk2Wr[+5}M$_a9:B{5$]kw/U7U% #@' );
define( 'SECURE_AUTH_SALT', 'zYX-1QT@=5GtatEI`K`k3n2QAMQc.@ ;BqoR9]c0nTfq?QH-s*][M$+c-<m*g?:n' );
define( 'LOGGED_IN_SALT',   '$V@c{ec^N4g.%1=/57ySS-pG-L<(yMKN#*G41Z-KY9Cgi l+q!oUw>: 64wVAF-!' );
define( 'NONCE_SALT',       'L{/%<U2g{8zWp):Dp/OMw(]4WOd+?B&>`)vD/-V40Q~:P6m7j8Xyk^!m0DRdI8Po' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_portfolio';

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
