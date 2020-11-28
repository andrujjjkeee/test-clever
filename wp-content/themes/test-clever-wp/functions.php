<?php

define( 'TEMPLATEINC', TEMPLATEPATH . '/inc' );
define( 'TEMPLATEURI', get_template_directory_uri() );
define( 'DIRECT', TEMPLATEURI.'/assets/' );

require_once( TEMPLATEINC . '/actions.php' );
require_once( TEMPLATEINC . '/useful.php' );
require_once( TEMPLATEINC . '/ajax.php' );
