<?php

$dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   if(! $conn )
   {
     die('Could not connect: ' . mysql_error());
   }
   $selected = mysql_select_db("dbsaledatatracker",$conn);
   if(!$selected)
   {
     die("Could not select examples");
   }

  SELECT p.ProductCode ,sum(p.SalesCount) as Total
            FROM tproductsalesdataprocessed p , tproductsalesdatasubmitted s , tUserReportingHierarchy t
            WHERE p.submitionID = s.ID
            and s.ID = t.MembersUserID
            and t.LeadsUserID = '$UID'
            GROUP BY p.ProductCode