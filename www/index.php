<?php

#phpinfo();

if(true){

   $host        = "host = postgres";
   $port        = "port = 5432";
   $dbname      = "dbname = docker_test";
   $credentials = "user = postgres password=dbpass";

   $db = pg_connect( "$host $port $dbname $credentials"  );

   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
   
   $sql =<<<EOF
      CREATE TABLE COMPANY
      (ID INT PRIMARY KEY     NOT NULL,
      NAME           TEXT    NOT NULL,
      AGE            INT     NOT NULL,
      ADDRESS        CHAR(50),
      SALARY         REAL);
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Table created successfully\n";
   }
   pg_close($db);
}

?>