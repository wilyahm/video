<?php

header("Access-Control-Allow-Orgin: *");
header("Access-Control-Allow-Methods: *");

include_once("config/autoloader.php");

if (!isset($_GET["action"]))
{
    Api::error(400,"action is not defined");
}


switch(strtolower($_GET["action"])) 
{
    case 'stream':
        Watch::getVideo();
    break;
    case 'details':
        Watch::videoDetails();
    break;
    default:
        Api::error(422, "hmm something is missing");
    break;
}