<?
header("Content-Type: application/json");

$array = array('first'=>$_GET['first'], 'second'=>$_GET['second']);

http_response_code(200);
echo json_encode($array);
?>
