<?php

function pingAddress($ip) {
    exec("/bin/ping $ip", $outcome, $status);
    echo json_encode($outcome);
}

pingAddress("193.198.163.108");

?>
