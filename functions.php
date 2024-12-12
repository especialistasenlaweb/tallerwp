<?php 
    function cargarrecursos(){
        wp_register_style("bootstrapcss","https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css","","5.3.3","all");
        wp_enqueue_style("estilo",get_template_directory_uri()."/assets/css/estilos.css",array("bootstrapcss"),"","all");

        wp_register_script("bootstrapjs","https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js","","5.3.3",true);
        wp_enqueue_script("funcionesjs",get_template_directory_uri()."/assets/js/funciones.js",array("bootstrapjs"),"",true);
    }

    add_action("wp_enqueue_scripts","cargarrecursos")

?>