<?php

ini_set('display_errors', 1); 
error_reporting(E_ALL);

$galeria=$_POST['galeria'];

switch($galeria){
    case 'banner':
        $dir = '../img/banner';
        $dir2= 'img/banner';
        break;
    case 'lanzamiento':
        $dir = '../img/galeria/lanzamiento';
        $dir2= 'img/galeria/lanzamiento';
        break;
    case 'baru':
        $dir = '../img/galeria/baru';
        $dir2= 'img/galeria/baru';
        break;
    case 'cancun':
        $dir = '../img/galeria/cancun';
        $dir2 = 'img/galeria/cancun';
        break;
    case 'lasvegas':
        $dir = '../img/galeria/lasvegas';
        $dir2 = 'img/galeria/lasvegas';
        break;
    case 'panama':
        $dir = '../img/galeria/panama';
        $dir2 = 'img/galeria/panama';
        break;
    case 'puntacana':
        $dir = '../img/galeria/puntacana';
        $dir2 = 'img/galeria/puntacana';
        break;
    case 'santamarta':
        $dir = '../img/galeria/santamarta';
        $dir2 = 'img/galeria/santamarta';
        break;
    case 'pac':
        $dir = '../img/PAC';
        $dir2 = 'img/PAC';
        break;
    default :
        $dir = '../img/galeria/cancun';
        $dir2 = 'img/galeria/cancun';
        break;
}

$content="";
$content.='<div><ul class="bxslider" style="padding-left:0px">';



$files = scandir($dir);
sort($files,SORT_ASC);
foreach ($files as $file) {
    if ($file != '.' && $file != '..') {
        $content.='<li><img src="'.$dir2.'/'.$file.'" width="100%" height="460px" /></li>';
    }
}


/*while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
{
    if (!is_dir($archivo))//verificamos si es o no un directorio
    {
        $content.='<li><img src="'.$dir2.'/'.$archivo.'" width="100%" height="100%" /></li>';
    }
}*/
    
$content.='</ul></div>';


echo $content;