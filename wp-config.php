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
define('DB_NAME', 'anjoumusique');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'RD&F%V=1YUlo.W&~`~|~gZFc#*ZUyCR)q>B{!w|YPl4{+%r61i$X/6,_}h2v7Tt7');
define('SECURE_AUTH_KEY',  'hk9{=VS;$lMb}UW$w3+xv%j_YR/k^vCuZIG~LVm~=GSl)&s6!~P*gm1+0m|%{<#!');
define('LOGGED_IN_KEY',    ';=J<Z2Nc7=O,ph.pX%o=tD[]f-*fAgjjj0gVaFcxgy{?YHWPZB?[7ZJJ%4aoco)Z');
define('NONCE_KEY',        'WCUH=U6@W$9&,b s(jZ?FLE.RPaAUHem+l+D*=e]Y-V* nKSuR{qFVo%3!6*H4pV');
define('AUTH_SALT',        'RV|4O3P,h~oHed{s4G6;@&1&;32=M7htDlHI7eD$D+>jtFZX<DigZ27^oQLX/,kj');
define('SECURE_AUTH_SALT', '_MTk|69CqhMfhXRqQj*ksF*<ZP:|}$x!-iXuF&4T?gP7qC3A/l^/)6*@0WChF#$N');
define('LOGGED_IN_SALT',   'c>9>^tc) EiD.G^Sm+x&&J HF$<!X}Or8@:7C{1qW:2KG}oQ7a)ChMrS<%0_OT:~');
define('NONCE_SALT',       '_zCc;JZ^Z|zmv;&t6<dV-]$/0z$c.B?Xk_OX)_Q[p=B<Y>(<8!vw+thzzQ/yahEF');
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

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');