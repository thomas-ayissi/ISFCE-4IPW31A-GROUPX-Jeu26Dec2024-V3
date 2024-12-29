<?php

const MACHINE = "home"; // "classe38" ou  "home" ou ... ce qu'on veut

const DATABASE_TYPE = "MySql";  // "csv"
const DATABASE_NAME = "press_2024_v03";

switch(MACHINE) {
	// MySQL - PHP MyAdmin Mac Thomas - Des Dim 29 Dec 2024
	case "classe38":
		define( "DATABASE_PORT", 8890 ); 	// MySQL - PHP MyAdmin Mac Thomas
		define( "DATABASE_USERNAME", "4ipw31a2425x" );
		define( "DATABASE_PASSWORD", "lw0T92Rs9UT87w912ws39" );
		break;
	case "home":
		define( "DATABASE_PORT", 3306 );  	// MysSQL    https://phpmyadmin-gra.hosting.ovh.net
		define( "DATABASE_USERNAME", "root" );
		define( "DATABASE_PASSWORD", "root" );
		break;
}

const DSN =  "mysql:host=localhost;dbname=4ipdw_2023;port=".DATABASE_PORT.";";

// var_dump(DSN);
