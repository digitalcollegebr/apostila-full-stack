<?php
include_once('conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT id, enunciado, item_a, item_b, item_c, item_d, item_certo FROM questoes WHERE modulo = 1";
    $result = $conn->query($sql);}
