<?php

/**
 * @pachage TestPlugin
**/
/*
 Plugin Name: Test Plugin
 Descriptio: A test plugin
 Version: 0.0.1
 Plugin URI: http://testplugin.com/plugin
 Author: Rodrigo
 Author URI: http://testplugin.com
 License: GLPv2 or later
 Text Domain: test-plugin
*/


function Activar(){}



function Desactivar(){
    flush_rewrite_rules();
}



 register_activation_hook(__FILE__,'Activar');


 register_activation_hook(__FILE__,'Desactivar'); 

 add_action( 'admin_nenu', 'crear_menu' );


function crear_menu(){
    add_menu_page(
        'Super Encuestas', // Titulo de la página
        'Super Encuestas Menu', // Titulo del menu
        'manage_options', // Capability
        'test_menu_slug', // Slug
        'mostrar_contenido', // función del contenido
        plugin_dir_url( __FILE__ ).'/admin/img/icon.png',
        '1'
    );
   
}


function mostrar_contenido(){
    echo "<h1>Contenido de la Página</h1>";
}