<?
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$array = array('first'=>'1', 'second'=>2);

http_response_code(200);
echo json_encode($array);
?>
