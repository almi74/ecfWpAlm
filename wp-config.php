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
define( 'DB_NAME', 'wordpressecf' );

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
define( 'AUTH_KEY',         'u_5:-oR4h-XidK]1fiYd}<.GOyyEv0KG|*owEvie=tk68zDm.8+zv$eF.LZXd9;F' );
define( 'SECURE_AUTH_KEY',  'z8~zt%08PNxPx,%%{7D?5uQ/Sp9A(Zi?8eemRH4JfRFa<H#{&}/6%|e]XKi>1nB<' );
define( 'LOGGED_IN_KEY',    'IUm3hk]&]trM(9U}XOqK`Xi%|,!Rfkdg0wk%QU)9Wq1V?@:ofbg7OL%D479#[8T ' );
define( 'NONCE_KEY',        '>@=nOjIuN=^C~iyV8dV4bKhI!*?W1u2^([E>w0lSbkB+vB)~lzpze)?L6I8!R^K;' );
define( 'AUTH_SALT',        'NKyY 9e,1%HB.=C5_SvX$~_K-:zlyQZ|4m-/efpUQ*hTS|6oI5^UG .(jgm!G@]J' );
define( 'SECURE_AUTH_SALT', '$ydTfi#8GbhW_OAf9d*xr$iSE4P7=Q3dmPYuh@ 9gFr`N~<Y/w$}.q^ijy3A5:<-' );
define( 'LOGGED_IN_SALT',   't6-3RfVStO)AL8 ZtGvh4XP+UG~igI3Ri]HVP(lcNOXtUjlFhpgmVE?G4+rHSZ0J' );
define( 'NONCE_SALT',       'lJY,/4oBTI`=io$A@Oiak4I{YPkJPwez:K%e*La}+LQILfM7>v0RIVZKtx-|qf&v' );
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
