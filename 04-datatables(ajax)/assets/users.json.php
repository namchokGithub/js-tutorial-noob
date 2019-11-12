<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

$user = array();
$user[0] = new stdClass;
$user[0]->name = "Tiger Nixon";
$user[0]->position = "System Architect";
$user[0]->salary = "$3,120";
$user[0]->start_date = "2011/04/25";
$user[0]->office = "Edinburgh";
$user[0]->extn = "5421";

$user[1] = new stdClass;
$user[1]->name = "Garrett Winters";
$user[1]->position = "Director";
$user[1]->salary = "$3,$5,300";
$user[1]->start_date = "22011/07/25";
$user[1]->office = "Edinburgh";
$user[1]->extn = "8422";

$user[2] = new stdClass;
$user[2]->name = "Garrett123 Winters";
$user[2]->position = "Director";
$user[2]->salary = "$3,$5,300";
$user[2]->start_date = "22011/07/25";
$user[2]->office = "Edinburgh";
$user[2]->extn = "8422";

$user[3] = new stdClass;
$user[3]->name = "Garrett123456 Winters";
$user[3]->position = "Director";
$user[3]->salary = "$3,$5,300";
$user[3]->start_date = "22011/07/25";
$user[3]->office = "Edinburgh";
$user[3]->extn = "8422";

$user[4] = new stdClass;
$user[4]->name = "Garrett12345623132 Winters";
$user[4]->position = "Director";
$user[4]->salary = "$3,$5,300";
$user[4]->start_date = "22011/07/25";
$user[4]->office = "Edinburgh";
$user[4]->extn = "8422";

echo json_encode($user);
