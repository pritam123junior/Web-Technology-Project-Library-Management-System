<?php
if (!isset($_REQUEST['data'])) {
    $response = ['error' => 'no data recieved'];
    echo json_encode($response);
} else {
    include_once('../models/function.php');
    $data = json_decode($_REQUEST['data']);
    echo json_encode(sndmsg($data));
}
