<?php
session_start();

// string containg connection parameters
$hoststring = "host=dollartreedb.cudctiymrxgt.us-east-2.rds.amazonaws.com port=5432 dbname=dollarTreedb user=root password=DollarTree2020CSUB";

// connect or not connect
$db_connection = pg_connect($hoststring) or die("COULD NOT CONNECT\n");

$status = pg_connection_status($db_connection);

// check connection status 
if($status === PGSQL_CONNECTION_OK) {
    echo "CONNECTION_STATUS: OK\n";
} else {
    echo "CONNECTION_STATUS: BAD\n";
}
?>