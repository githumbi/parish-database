<?php

session_start();
include 'db.php';

//retrieve records
$results = mysqli_query($db, "SELECT *, (tithe1+tithe2+tithe3+tithe4+tithe5) AS 'total', (feb1+feb2+feb3+feb4+feb5) AS 'total2', (march1+march2+march3+march4+march5) AS 'total3', (apr1+apr2+apr3+apr4+apr5) AS 'total4', (may1+may2+may3+may4+may5) AS 'total5' from congregation order by name;");

//Full sum of tithe per month
$results2 = mysqli_query($db, "SELECT *, sum(tithe1+tithe2+tithe3+tithe4+tithe5) AS 'jan', sum(feb1+feb2+feb3+feb4+feb5) AS 'feb', sum(march1+march2+march3+march4+march5) AS 'march', sum(apr1+apr2+apr3+apr4+apr5) AS 'apr' , sum(may1+may2+may3+may4+may5) AS 'may' from congregation;");

?>