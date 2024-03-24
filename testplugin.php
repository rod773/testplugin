<?php

/*
Plugin Name: Test Plugin

Author: Rodrigo

*/


function Activar(){}



function Desactivar(){
    flush_rewrite_rules();
}



 register_activation_hook(__FILE__,'Activar');


 register_activation_hook(__FILE__,'Desactivar');