<?php
require_once '../config/smarty.php';
require_once '../config/db.php';

$query = "SELECT id, name, description, size, local_url FROM datasets_resource ORDER BY position ASC";
$result = $db->GetAll($query);
$resources = array();
foreach ($result as $value) {
    $resource = new stdClass();
    $resource->id = $value["id"];
    $resource->name = $value["name"];
    $resource->description = $value["description"];
    $resource->localUrl = $value["local_url"];
    $resource->size = $value["size"];
    $resource->isNew = false;
    switch ($value["id"]) {
        case 1:        
            $resource->iconUrl = SMARTY_IMG_URI."/resources/icon_cmd.png";
            break;
        case 2:        
            $resource->iconUrl = SMARTY_IMG_URI."/resources/icon_cluster.png";
            break;
        case 3:        
            $resource->iconUrl = SMARTY_IMG_URI."/resources/icon_entry_data.png";
            break;
        case 4:        
            $resource->iconUrl = SMARTY_IMG_URI."/resources/icon_cli.png";
            break;
        case 5:
            $resource->iconUrl = SMARTY_IMG_URI."/resources/icon_grid.png";
            break;
        case 6:
            $resource->iconUrl = SMARTY_IMG_URI."/resources/icon_grid.png";            
            break;
        case 7:
            $resource->iconUrl = SMARTY_IMG_URI."/resources/icon_cmd.png";
            $resource->isNew = true;
            break;
        case 8:
            $resource->iconUrl = SMARTY_IMG_URI."/resources/icon_cluster.png";
            $resource->isNew = true;
            break;
        case 9:
            $resource->iconUrl = SMARTY_IMG_URI."/resources/icon_entry_data.png";
            $resource->isNew = true;
            break;
        default:
            $resource->iconUrl = SMARTY_IMG_URI."/resources/icon_grid.png";
            break;
    }
    array_push($resources, $resource);
}
$smarty->assign("resources", $resources);



$smarty->display("pattern_scaling.tpl");
?>