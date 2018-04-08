<?php

$_VWA = array();
$_VWA[ 'db_server' ]   = 'localhost';
$_VWA[ 'db_database' ] = 'vwa';
$_VWA[ 'db_user' ]     = 'root';
$_VWA[ 'db_password' ] = '';

$_VWA[ 'db_port '] = '5432';
$_VWA[ 'default_security_level' ] = 'impossible';

// Create connection
$conn = mysqli_connect( $_VWA[ 'db_server' ], $_VWA[ 'db_user' ], $_VWA[ 'db_password' ], $_VWA[ 'db_database' ]);
mysqli_select_db( $conn, $_VWA[ 'db_database' ]);

?>