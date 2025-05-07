<?php 

function form_nao_enviado() {
    return $_SERVER['REQUEST_METHOD'] != 'POST';
}
?>