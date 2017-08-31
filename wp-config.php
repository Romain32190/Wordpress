<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$d+G.(9$2^TP{WrV4~wp]hd0+IZL5QUKqgVgEAcj$!as23bCCfS7b4$ON;%4)vQ1');
define('SECURE_AUTH_KEY',  '_PM4Ka^4u~w0t3C$@2+=HNYGTfxD~p`T6#z%wR-scqH$|}4cU 4=7l O;>XTshm:');
define('LOGGED_IN_KEY',    'tt=dOw:QHoF1Jdhm<ntV]dF?FF769i}pZUv+6D<Qjlpw]kwScgWzcX[sQFXEi?PM');
define('NONCE_KEY',        '/Q<tUVcOHgtoJZ5*V9~fewZ&j0u98[aA<1:WUI f?Dn9c^k9ZgeZn&j9h5gfqiyC');
define('AUTH_SALT',        'lz0k{IRIFvKx+8I6FU,/0]WB[Aop=bkyL78XXGg*rv<}]4):!m0`.LjHk}@!_jkE');
define('SECURE_AUTH_SALT', 'jjYM]+QKpe_eIOn;hEC,Ljb#IFxoV#X*C5aPlKaR%;YAI`_Q3,`?`#$m~*fy}On+');
define('LOGGED_IN_SALT',   '=Bf*)Qh-4&ew4!!lUy(]v#WeHeFh]n(aRdZJN:_p(7rP^YyTQn=!V/6/IZ^Ru/>X');
define('NONCE_SALT',       'BKj]`XN&rzl,!^*Toq9K4$c1]dAB2Zk.X|)?asxQ=3dq|73$=&jr>]nzXvt.f=gY');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

define('FS_METHOD', 'direct');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
