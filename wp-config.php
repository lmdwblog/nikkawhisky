<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
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
define('DB_NAME', 'lmdwblog_nikkawhisky_wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'lmdwblog');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '56a1m7ls');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '=/>0d!s!CN3aMeS<a[Hu@17Rk1}a#0f&GbJCU(%*[y!5i<3<yf![IxZ=Ob:Otn^Y');
define('SECURE_AUTH_KEY',  '#tRcW(T)=bLq$=|]p+E?&JaLcC$P8FdT-tuAP?0hlv2dWY6| I -/fP7LW}O|Crj');
define('LOGGED_IN_KEY',    'kb6[l%Q;9jZD*iJ:,{o<Z;L.QN+vsv.e78L+-{v]J2d+a|C [{l|Kyk=yHQsw*RR');
define('NONCE_KEY',        's&S;)Y8py6fe$><PxPj7*r+;xJNF,Zhd^AIiUu%h+H+jNRrT4-rx*[DWV4<@[$|m');
define('AUTH_SALT',        'j+i1|C.^NT$s^Wjv&^oh,Y`ydue=:#|2kB=+bi5AP9{e0EfA> %$9$g0e[SI&,M%');
define('SECURE_AUTH_SALT', '^ywSN.[HRS&ex?$7J>q%7hdx}0`}>zEx_?ESQ*sU+r~{&i7OqQ_xJ8po]4@wd*V$');
define('LOGGED_IN_SALT',   '*K-DW W%+O9:W5+w_]|~8l&F|`!U96dE^Ec=Q[Rw?KuU{)^YTHs?34?WP3+gU!|W');
define('NONCE_SALT',       '?p:*y+&SmJ_66Pw<++^t3O43[;/7m@0Zcw!8R[DnKHF-!St+.-ncT-_}2mJ*0[J2');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

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

