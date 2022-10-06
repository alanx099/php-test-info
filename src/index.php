<?php

function pingAddress($ip) {
    $drejk = exec("/bin/ping $ip", $outcome, $status);
    echo $drejk;
    echo json_encode($outcome);
    echo $status;
}

pingAddress("193.198.163.108");

?>
