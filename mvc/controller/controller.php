<?php

//database connection
require "../model/model.php";
$DB = new DB();

//search for users
$results = $DB->select(
  "SELECT * FROM `users` WHERE `name` LIKE ? 
  order by `id`",
  ["%{$_POST['search']}%"]
);

//output results
echo json_encode(count($results)==0 ? null : $results);

