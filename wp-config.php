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
define('DB_NAME', 'Boutique');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'mattuser');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '4QirEdPZtxJQzg4');

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
define('AUTH_KEY',         '(X~5v5uCyK|`0i3MaDOq&*3x($GL-TmP[?_>sVEM~%2ol)@15=$=J#16tLR=PP<i');
define('SECURE_AUTH_KEY',  'c!l2&[`+&22~ $>Q6@Eq3#;@z00FV&a~-g?Z!IwF$MZ-K(EWM#2n@JP=Kxu8iy}m');
define('LOGGED_IN_KEY',    '@fZ%Dau$Y%SVjSc8LNLfHM-. v$G.NR&_4`b&N[f[V<LbqFbcl`N$w&_s[f7sDn(');
define('NONCE_KEY',        '2lCO|.O.w^[vZB unqHB-=s2,X?kmT[r#w420[P6k@4F-Z)L@79~Qo6o8Gv`u,#g');
define('AUTH_SALT',        'n<5+,CtM?|p>1bt* Joi|*`TtAI@G&cAa)%QR(~0;=)_Q4!XZL_d^D/^uB71OKfX');
define('SECURE_AUTH_SALT', 'eKgMUZxVA%YQA$K:<Ht[(zQ}2Mu3pO,JDm=O]w%.z*Y_#k/-C+PU5O]}4MA|(|~<');
define('LOGGED_IN_SALT',   '$u^G/1fD63$s;@v3*JPl`RFN (=2w%lmk?z*yUq3)?d|$}bfO[zr)Ai%`Rn=(d@;');
define('NONCE_SALT',       'hn[gDA^-R5l[Fm@<y:$I2{WRSZ$9<0Y!+Y%90rwv03_9cw+2OIZX~2[*@)!`%`vF');
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