<?php

require 'app.php';

function incluirTemplate( $template, $inicio = false ){
    include TEMPLATE_URL . "/${template}.php";
}