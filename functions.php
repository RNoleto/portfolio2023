<?php 

function get_field2($key, $page_id = 0){
    $id = $page_id !== 0 ? $page_id : get_the_ID();
    return get_post_meta($id, $key, true);
};

function the_field2($key, $page_id = 0){
    echo get_field2($key, $page_id);
}

// add_action('cmb2_admin_init','cmb2_fields_home');

// function cmb2_fields_home() {
//     $cmb = new_cmb2_box([
//         'id' => 'home_box',
//         'title' => 'Home',
//         'object_types' => ['page'],
//         'show_on' => [
//             'key' => 'page-template',
//             'value' => 'page-home.php'
//         ],
//     ]);
// }

// Campos para a página Sobre
add_action('cmb2_admin_init', 'cmb2_fields_sobre');
function cmb2_fields_sobre(){
    $cmb = new_cmb2_box([
        'id' => 'sobre_box',
        'title' => 'Sobre',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => ['page-home.php','page-sobre.php']
        ],
    ]);

    $cmb->add_field([
        'name' => 'Foto Perfil',
        'id' => 'foto',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],
    ]);

    $cmb->add_field([
        'name' => 'Titulo',
        'id' => 'titulo',
        'type' => 'text',

    ]);

    $cmb->add_field([
        'name' => 'Descrição',
        'id' => 'descricao',
        'type' => 'textarea',

    ]);
}

//Campos para a página Conhecimentos
add_action('cmb2_admin_init', 'cmb2_fields_conhecimentos');
function cmb2_fields_conhecimentos(){
    $cmb = new_cmb2_box([
        'id' => 'conhecimentos_box',
        'title' => 'Conhecimentos',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-conhecimentos.php',
        ],
    ]);

    $conhecimentos = $cmb->add_field([
        'name' => 'Tecnologias',
        'id' => 'tecnologias',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
            'group_title' => 'Tecnologia {#}',
            'add_button' => 'Adicionar Tecnologia',
            'sortable' => true,
        ],
    ]);
    
    $cmb->add_group_field($conhecimentos, [
        'name' => 'Nome',
        'id' => 'nome',
        'type' => 'text',
    ]);

    $cmb->add_group_field($conhecimentos, [
        'name' => 'Icone',
        'id' => 'icone',
        'type' => 'text',
        
    ]);
}

// Campos para página de Projetos
add_action('cmb2_admin_init', 'cmb2_fields_projetos');
function cmb2_fields_projetos(){
    $cmb = new_cmb2_box([
        'id' => 'projetos_box',
        'title' => 'Projetos',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-projetos.php',
        ],
    ]);

    $projetos = $cmb->add_field([
        'name' => 'Projetos',
        'id' => 'projetos',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
            'group_title' => 'Projeto {#}',
            'add_button' => 'Adicionar Projeto',
            'sortable' => true,
        ],
    ]);

    $cmb->add_group_field($projetos, [
        'name' => 'Nome',
        'id' => 'nome',
        'type' => 'text',
    ]);

    $cmb->add_group_field($projetos, [
        'name' => 'Imagem',
        'id' => 'imagem',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],
    ]);

    $cmb->add_group_field($projetos, [
        'name' => 'URL do Projeto',
        'id' => 'url',
        'type' => 'text',
    ]);
}

?>