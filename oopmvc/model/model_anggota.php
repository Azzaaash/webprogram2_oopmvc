<?php
function openDbConnection(){
    $link = new PDO("mysql:host=localhost;dbname=webprogram2_oopmvc", "root", "");
    return $link;
}

function closeDbconnection(&$link){
    $link = null;
}
function getAnggota(){
    $link = openDbconnection();
    $result = $link->query("SELECT *from anggota");
    $anggota = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)){
        $anggota[]= $row;
    }
    closeDbConnection($link);
    return $anggota;
}