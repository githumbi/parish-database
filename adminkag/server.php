<?php

session_start();
//connect to database
$db = mysqli_connect('localhost', 'root', '', 'parish');



//retrieve records
$results = mysqli_query($db, "SELECT * FROM congregation ORDER BY name");





