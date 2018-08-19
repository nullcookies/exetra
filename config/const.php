<?php 



//set default time

date_default_timezone_set("Africa/Lagos");



session::init();



//Session life time 1 month

ini_set("session.gc_maxlifetime", 60 * 60 * 24 * 31);



//define("URL", "http://localhost/new");
define("URL", "http://localhost/eric");
define("APP_NAME", "SwissFunding");



// database

define("DBTYPE", "mysql");

define("DBHOST", "bhbgtb4vd-mysql.services.clever-cloud.com");

define('DBNAME', 'bhbgtb4vd');
//define("DBNAME", "cash");

define("DBUSERNAME", "ue68ztgl6elvy2oc");
//define("DBUSERNAME", "root");

define("DBPASS", "KXpISLsEO79oRlOJPic");
//define("DBPASS", "nkem");







?>