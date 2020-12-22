<?php
function db(){
    global $link;
    $link = new mysqli("127.0.0.1", "codechef", "ccdevs", "TODO");
    return $link;
}

?>