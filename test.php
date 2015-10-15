<?php
        $connect=mysql_connect("dbserver","dbuser","dbpassword") or die("Unable to Connect");
        mysql_select_db("dbname") or die("Could not open the db");
        $showtablequery="SHOW TABLES FROM dbname";
        $query_result=mysql_query($showtablequery);
        while($showtablerow = mysql_fetch_array($query_result))
        {
        echo $showtablerow[0]." ";
        }
        ?>
