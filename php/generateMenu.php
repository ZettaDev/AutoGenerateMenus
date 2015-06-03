<?php

$mysqli = new mysqli('localhost','root','1234','menu');
$query = $mysqli->query('SELECT * FROM menu where id_menu=1 ORDER BY parent');
$menuItens = array();
 if ($query) {
    while($row = $query->fetch_object())
    {
        $menuItens[$row->parent][$row->id_menuitem] = array('link' => $row->link,'text' => $row->text);
    }
 }
create_menu($menuItens);//Llamada a la función


function create_menu(array $arrayItem, $id_parent = 0, $level = 0){
    if($id_parent==0){
        echo '<ul class="nav navbar-nav">';
    }else{
        echo '<ul class="dropdown-menu">';
    }
    foreach( $arrayItem[$id_parent] as $id_item => $item)
    {
        if($id_parent==0){
            echo '<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button">',$item['text'],' <span class="caret"></span></a>';
        }else{
            if($item['link']=='#'){
                echo '<li  class="dropdown-submenu"><a class="dropdown-toggle"
                data-toggle="dropdown" role="button">',$item['text'],'</a>';
            }else{
                echo '<li><a href="',$item['link'],'">',$item['text'],'</a>';
            }
        }
        if(isset( $arrayItem[$id_item] ) ){// Llamada recursiva
            create_menu($arrayItem , $id_item , $level + 2);
        }
        echo '</li>';// Cerramos el item de la lista
    }
    echo '</ul>';// Cerramos la lista
}

?>

