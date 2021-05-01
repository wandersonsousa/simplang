<?php
require_once 'src/CPU.php';
require_once 'src/SVM.php';
$CPU = new CPU();
$SVM = new SVM();

function setResponse(bool $success, string $msg, ?array $data)
{
    return [
        'success' => $success,
        'msg' => $msg,
        'data' => $data
    ];
}
function respond(bool $success, string $msg, ?array $data)
{
    header('Content-type: application/json');
    $data = setResponse($success, $msg, $data);
    echo json_encode($data);
}

if (!isset($_POST['code'])) {
    return respond(false, 'Missing code', null);
}

$SVM->run($_POST['code']);

$data = $SVM->getExecHistory();

return respond(true, 'ok', $data);
