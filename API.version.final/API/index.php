<?php
 $conn = new mysqli("localhost", "root", "", "ntp");
  
include 'create.php';
include 'update.php';
include 'delete.php';
include 'read.php';

//mapping des différentes fonctions avec les verbes HTTP correspondants
switch($_SERVER["REQUEST_METHOD"]){
    case 'GET':
        if(array_key_exists("id", $_GET)){
            echo json_encode(read(htmlspecialchars($_GET["id"])));
            header("HTTP/1.1 200 OK");
            break;
        }
        echo json_encode(read());
        header("HTTP/1.1 200 OK");
        break;
    case 'POST':
        
        var_dump(array_keys($_POST));
       
        if(array_key_exists("score", $_POST) && array_key_exists("name", $_POST)){
        
            create(htmlspecialchars($_POST["name"]), htmlspecialchars($_POST["score"]));
            header("HTTP/1.1 201 Resource created");
            
            break;
        }
        header("HTTP/1.1 404 Not Found");
        break;
    case 'PUT':
     
        $putdata = json_decode(file_get_contents("php://input"), true);
        var_dump(($putdata));
       
        if(array_key_exists("score", $putdata) && array_key_exists("name", $putdata)){
            update(htmlspecialchars($putdata["id"]), htmlspecialchars($putdata["name"]), htmlspecialchars($putdata["score"]));
            header("HTTP/1.1 204 No content");
         
            break;
    }
        header("HTTP/1.1 404 No content");
        break;
    case 'DELETE':
        $params=[];
        $url_components = parse_url($_SERVER['REQUEST_URI']);
        parse_str($url_components['query'], $params);
        if(array_key_exists("id", $params)){
            delete(htmlspecialchars($params["id"]));
            header("HTTP/1.1 204 No content");
            break;
        }
        header("HTTP/1.1 404 Not found");
        break;            
}

?>