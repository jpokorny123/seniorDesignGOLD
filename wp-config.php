<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';



// ** MySQL settings ** //
/** The name of the database for WordPress */
define('REVISR_GIT_PATH', ''); // Added by Revisr
define('REVISR_WORK_TREE', '/home4/lincomg5/public_html/'); // Added by Revisr
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'J+pX,>As01f 4Mrxv4$NU2d`L*Z{/<H{s)mJa:]V|+5-I0t(VSM@aBz,U>1|MB#V');
define('SECURE_AUTH_KEY',  'N]A5@mWj|kzTtz5Q(OPe/`!qR,7(C)v+-yd!2B|gA<8sF8-fQLv|PfJ6=PGC<Jhu');
define('LOGGED_IN_KEY',    'T}/ffhL4ec}km?F*-ViB0neQ@2+dc(jd-u>1xQW[5-DTK4fSm_D+<w|6Hp#A?Y?U');
define('NONCE_KEY',        'k(,@[sFWMr@K-8$SxUpo93;WE^cKZK1El:L8c6y-|Y`;7Qrl/+pP_^jP||z7exb2');
define('AUTH_SALT',        'LiI7LPq|}O-eA98-Kr|DCoaj}y9`6|$-lQvZn,D+pq SfkbFBbM+J[K}Or##@V[u');
define('SECURE_AUTH_SALT', 'v+yXt!;Y|{S9O/)DhcoP@Q:%0}7B:,fwnD#S#`mcu^:bd&6@y^]@LWK +Y;-|aza');
define('LOGGED_IN_SALT',   'Tx&6=m+&b&E;q3vm9=K/ s|!6@;+;=tzr?;lUlVmsm-`U1eh<Bs4K|,];q<v)kYO');
define('NONCE_SALT',       '8|A>)7R(RIUg&O@$+9R+0c-edH-=EbWJrzC9wcQ4t`K|!GNBsy-4^bjjyw:G~-dh');


$table_prefix = '681_';





/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
