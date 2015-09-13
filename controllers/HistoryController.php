<?php

ini_set('display_errors', 1); 
error_reporting(E_ALL);
session_start();
require_once '../classes/Database.php';
require_once '../classes/html2pdf/html2pdf.class.php';
$user=$_SESSION['usuario'];

$db = new Database();
$db->query("SELECT * FROM h0xce_csv WHERE username=:username");
$db->bind(':username', $user);
$result=$db->single();

$total=$db->rowCount();

if($total>0){
    $content = "
        <style>
            
            hr{
                position:absolute;
                bottom: 10px;
                color:#4a0a01;
            }
            .cuerpo td{
                text-align:right;
                border-bottom: solid black 1px;
                border-left: solid black 1px;
                border-right: solid black 1px;
                padding-right:3px;
                padding-left:3px;
            }
            
            .first{text-align:left;}

            .titulo td{
                width:150px;
                background-color:yellow;
                text-align:center;
                font-weight:bold;
                border-bottom: solid black 1px;
                border-top: solid black 1px;
            }
            
            .resumen{
                margin-left:30px;
            }
            
            .resumen td{
                width: 345px;
                height: 25px;
            }

            
            .resumen span{
                text-align:left;
                font-weight:bold;
                font-size: 18px;
            }
            
            .resumen div{
                text-align:right;
                font-weight:bold;
                font-size: 18px;
            }


        </style>
<page>
    <div style='margin-left:30px;'><img src='../img/logo.png'/>
    <h2>CLIENTE: ".strtoupper($_SESSION['nombre'])."</h2></div>
    <br>
    <br>
    <table cellspacing='0' class='resumen'>
        <tr><td><span>Meta millas Experiencia:</span></td><td><div style='color:red;'>".number_format($result['goal'],0,",",".")."</div></td></tr>
        <tr><td><span>Total millas acumuladas:</span></td><td><div>".number_format($result['total_miles'],0,",",".")."</div></td></tr>
        <tr><td><span>Millas adicionales Viniltex:</span></td><td><div>".number_format($result['miles_additional'],0,",",".")."</div></td></tr>
    </table>
    <br>
    <br>
    <table cellspacing='0' style='margin-left:30px;'>
        <thead class='titulo'><tr><td><span>ACTIVIDAD</span></td><td><span>PRESUPUESTO</span></td><td><span>% CUMPLIMIENTO</span></td><td><span>MILLAS ALCANZADAS</span></td></tr></thead>
        <tbody class='cuerpo'>
        <tr><td class='first'><span>Millas mes de ".MesAnt($result['month'])." Experiencia</span></td><td><span>$ ".number_format($result['ant_sales_goal'],0,",",".")."</span></td><td><span>".number_format((($result['current_sales']/$result['month_sales_goal'])*100),2,",",".")." %</span></td><td><span>".number_format($result['ant_miles'],0,",",".")."</span></td></tr>
        <tr><td class='first'><span>Millas mes de ".$result['month']." Experiencia</span></td><td><span>$ ".number_format($result['month_sales_goal'],0,",",".")."</span></td><td><span>".number_format((($result['ant_sales']/$result['ant_sales_goal'])*100),2,",",".")." %</span></td><td><span>".number_format($result['accumulated'],0,",",".")."</span></td></tr>
        </tbody>
    </table>
    <hr>
</page>";

    $html2pdf = new HTML2PDF('L','A5','fr');
    $html2pdf->WriteHTML($content);
    $html2pdf->Output('extracto.pdf');
}else{   
    echo 'error';
}

function MesAnt($mes){
    $antmes="";
    switch($mes){
        case 'Enero':
            $antmes='Diciembre';
            break;
        case 'Febrero':
            $antmes='Enero';
            break;
        case 'Marzo':
            $antmes='Febrero';
            break;
        case 'Abril':
            $antmes='Marzo';
            break;
        case 'Mayo':
            $antmes='Abril';
            break;
        case 'Junio':
            $antmes='Mayo';
            break;
        case 'Julio':
            $antmes='Junio';
            break;
        case 'Agosto':
            $antmes='Julio';
            break;
        case 'Septiembre':
            $antmes='Agosto';
            break;
        case 'Octubre':
            $antmes='Septiembre';
            break;
        case 'Noviembre':
            $antmes='Octubre';
            break;
        case 'Diciembre':
            $antmes='Noviembre';
            break;
    }
    return $antmes;
}