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
define('DB_NAME', 'wp_workshop');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'user');

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
define('AUTH_KEY',         't)qFZex>@+>v)~_KO}[bZo6[a2M@9BPas-j4G~yh}kK$~8V5yw6)u~..#NqyiPnt');
define('SECURE_AUTH_KEY',  'x^lR_47V,05<Lz6n3K}H4@ag(6*y}ahkobo)LVTk.t>{@2W&bLA;VqHcv&CKV|EV');
define('LOGGED_IN_KEY',    ':vfgk^ z6<lP_bt-Si3pTXw&wpJJ3sY@Vzl4Ge7)y1!ANv{qeY/f4(r,cS!@:%Cg');
define('NONCE_KEY',        ']wo?+.(=Ju=Ov qZhPd26iV:43/NJ/l>vf}v -m%aQUOOtP#|exQ}W=ZZj=bPCEG');
define('AUTH_SALT',        'r8Qq_^vbPM(dx g^Dn-P2HVjhZvug(^ltBTc(jA3F:&v_beSh#*()QxH;//j`*l1');
define('SECURE_AUTH_SALT', '_&mAqn9R9qZsUI#,(*)%)!`Wn;X.J8U3_WWjtQ]N*]M{4cg&5wJx%9L?/ffip6Rk');
define('LOGGED_IN_SALT',   'N%;y +Mo oYv5r#FbZCtQn/j*,pUg){?RJ=CIA+.,9 4D3mLkGfAIo[Z[LN[u$*j');
define('NONCE_SALT',       'SK<QGu)0Rf2N~;Ti(snnlcvtO5dh,MQ[xrqYkINqFxamCkrzQ>aY3}_A}51Klab]');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'work_';

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
