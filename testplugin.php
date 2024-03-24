<?php

/*
Plugin Name: Test Plugin
Author: Rodrigo
Description: Este es un plugin de prueba
Version: 0.0.1

*/


function Activar(){}



function Desactivar(){
    flush_rewrite_rules();
}



 register_activation_hook(__FILE__,'Activar');


 register_activation_hook(__FILE__,'Desactivar'); 

 add_action( 'admin_nenu', 'CrearMenu' );


function CrearMenu(){
    add_menu_page(
        'Super Encuestas', // Titulo de la página
        'Super Encuestas Menu', // Titulo del menu
        'manage_options', // Capability
        'sp_menu', // Slug
        'MostrarContenido', // función del contenido
        plugin_dir_url( __FILE__ ).'admin/img/icon.png',
        1
    );
   
}


function MostrarContenido(){
    echo "<h1>Contenido de la Página</h1>";
}