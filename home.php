<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header('Location: .');
}else{

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <meta author="creado por www.ingeniocontenido.co">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Experiencia 5</title>

    <!-- Bootstrap -->
    <link href="ext/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="sty/style.css" rel="stylesheet" type="text/css">
    <link href="sty/responsive.css" rel="stylesheet" type="text/css">
    <link href="ext/jquery.bxslider/jquery.bxslider.css" rel="stylesheet" type="text/css" />
    <link href="ext/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="scr/jquery-latest.js"></script>
    <script type="text/javascript" src="ext/jquery.bxslider/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="ext/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="ext/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="ext/jquery.number/jquery.number.min.js"></script>
    <script type="text/javascript" src="ext/jquery.animatenumber/jquery.animateNumber.min.js"></script>
    <script type="text/javascript" src="ext/jquery-ui/jquery-ui.min.js"></script>
  </head>
  <body class="fondo">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 header">
            <div class="center"><img id="logo-h" src="img/logo-2.png" alt=""/></div>
        </div>
    </div>
    <div class="row separador"></div>
          <div class="row">  
            <div class="left carrete altura left-inf"></div>
            <div class="center2 altura">
                  <?php
                      include ('menu.php');
                  ?>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="center contenido intro" id="espacio"></div>
                        <div class="center auditorio"></div>
                    </div>
                </div>
            </div>
            <div class="right carrete altura right-inf"></div>
          </div>
          <div class="row separador"></div>
          <div class="row cuerpo">
              <!-- Inicio -->
              <div class="mona"></div>
              <div class="bienvenida">
                  <div class="row">
                      <div>
                          <h3 class="vamos titulo">AS&Iacute; INICIAMOS</h3>
                          <h5 class="viaje titulo">Lleg&oacute; Mundial</h5>
                      </div>
                      <div class="texto">
                          <div><b>Lleg&oacute; Mundial</b> gritaban los agentes de ventas anunciando su llegada a la plaza del pueblo... Los agentes eran todos amigos de los comerciantes, serviciales, bien educados, simp&aacute;ticos y sin pereza.
                              <br><br>
                              La Mundial se propuso desde el comienzo atender bien a sus clientes, pensando siempre en serles de utilidad y pagar cumplidamente a los proveedores.
                              <br><br>
                              Tambi&eacute;n se propuso vender al por mayor, a cr&eacute;dito y a gente en la que <b>confiaba</b> bajo el sistema antioque&ntilde;o de la &eacute;poca: Sin hacer firmar ning&uacute;n documento o letra. "Si creo en su palabra, le f&iacute;o; y si no, prefiero no venderle".
                              <br><br>
                              <b style="color:#e0a93d;">En 1921, se empieza a escribir la historia de Pintuco. En este a&ntilde;o se fund&oacute; Cacharrer&iacute;a Mundial como distribuidor mayorista.</b>
                          <br><br>
                          Si las anteriores experiencias fueron  inolvidables, esta ser&aacute;...<b>&#xa1;MEMORABLE!</b>
                          <br><br>
                          </div>
                          <div>
                          <i>En el segundo semestre del 2015, enfoca todos tus esfuerzos y estrategias de negocio en acumular las millas que m&aacute;s puedas.</i>
                          <br>
                          <i>Pintuco te invita a vivir la mejor de las <b>EXPERIENCIAS. Porque tu historia es nuestra historia queremos celebrar contigo los 70 a&ntilde;os que llevamos pintando a Colombia con el color de la calidad.</b></i>
                          </div>
                      </div>
                      <br>
                      <!--<div class="btn-group" role="group" aria-label="...">
                          <button type="button" class="btn btn-default milas" ><b>VER MILLAS</b></button>
                      </div>-->
                  </div>
              </div>
              <!-- Fin Inicio -->
              <!-- Inicio PAC-->
              <div class="bienvenida2">
                  <div class="row">
                        <div class="vamos">Quieres ir a Experiencia Pintuco y no sabes como?</div>
                        <div class="vamos2">Es muy f&Aacute;cil</div>
                        <div class="condiciones">
                            <ol>
                                <li>Cumple con tus metas mes a mes, as&iacute; cumplir&aacute;s con las millas requeridas, estas millas no son acumulables, cada mes juega de manera independiente al resultado que obtuviste.</li>
                                <li>Al final del a&ntilde;o debes tener 60.000 millas acumuladas para viajar y disfrutar de esta Gran Experiencia Pintuco&REG;.</li>
                                <li>Adicional a las millas mensuales tambi&eacute;n puedes tomar unas <b>EXTRAMILLAS</b> que te ayudar&aacute;n a cumplir con el Gran Total, solo tienes que estar atento o preguntar a tu asesor comercial, &iexcl;No las puedes dejar pasar!.</li>
                                <li>La meta la compone todo el portafolio Pintuco</li>
                            </ol>
                        </div>
                  </div>
              </div>
              <!-- Fin PAC-->
              
              <!-- Inicio PAC-->
              <div class="galeria">
                  <div class="row">
                        <h3 class="vamos">Albumes</h3>
                        <h4 class="vamos2">recordemos algunas experiencias</span>
                        <div class="center fondo-galeria">
                            <div class="center contenedor-galeria"><ul class="list-inline selector-galeria sl-slider">
                                    <li id="puntacana" class="cual-galeria"><div><img src="img/galeria/puntacana.jpg" width="100%" height="100%" /></div><p class="titulo-galeria">punta cana</p></li>
                                    <li id="cancun" class="cual-galeria"><div><img src="img/galeria/cancun.jpg" width="100%" height="100%" /></div><p class="titulo-galeria">cancun</p></li>
                                    <li id="lasvegas" class="cual-galeria"><div><img src="img/galeria/lasvegas.jpg" width="100%" height="100%" /></div><p class="titulo-galeria">las vegas</p></li>
                                    <li id="panama" class="cual-galeria"><div><img src="img/galeria/panama.jpg" width="100%" height="100%" /></div><p class="titulo-galeria">panam&aacute;</p></li>
                                    <li id="lanzamiento" class="cual-galeria"><div><img src="img/galeria/lanzamiento.jpg" width="100%" height="100%" /></div><p class="titulo-galeria">lanzamiento</p></li>
                                    <li id="baru" class="cual-galeria"><div><img src="img/galeria/baru.jpg" width="100%" height="100%" /></div><p class="titulo-galeria">baru</p></li>
                                    <li id="santamarta" class="cual-galeria"><div><img src="img/galeria/santamarta.jpg" width="100%" height="100%" /></div><p class="titulo-galeria">santa marta</p></li>
                                </ul></div>
                        </div>
                  </div>
              </div>
              <!-- Fin PAC-->
              
          </div>
          <input type="hidden" id="estado-enc" value="<?php echo $_SESSION['encuesta']; ?>" />
          <div class="encuesta">
              <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <div class="form-group">
                    <label for="ciudad">Ciudad:</label>
                    <input type="text" class="form-control" id="ciudad" name="ciudad">
                </div>
                <div class="form-group">
                    <div class="row"><div class="col-md-12"><label class="control-label" for="p1">&iquest; Donde le gustar&iacute;a vivir la Experiencia Pintuco # 5?</label></div></div>
                    <div class="col-md-12">
                        <div class="radio"><label><input type="radio" name="p1" value="1">Crucero Miami - Bahamas</label></div>
                        <div class="radio"><label><input type="radio" name="p1" value="2">Argentina (Bariloche)</label></div>
                        <div class="radio"><label><input type="radio" name="p1" value="3">Madrid</label></div>
                        <div class="radio"><label><input type="radio" name="p1" value="4">Cabo San Lucas</label></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row"><div class="col-md-12"><label class="control-label" for="p2">&iquest; Qu&eacute; tipo de actividades le gustar&iacute;a vivir en la pr&oacute;xima Experiencia?</label></div></div>
                    <div class="col-md-12">
                        <div class="radio"><label><input type="radio" name="p2" value="5">Actividades al aire libre</label></div>
                        <div class="radio"><label><input type="radio" name="p2" value="6">Actividades de negocios</label></div>
                        <div class="radio"><label><input type="radio" name="p2" value="7">Actividades de integraci&oacute;n</label></div>
                        <div class="radio"><label><input type="radio" name="p2" value="8">Actividades tipo concurso</label></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row"><div class="col-md-12"><label class="control-label" for="p3">&iquest; De qu&eacute; g&eacute;nero musical le gustar&iacute;a disfrutar en la pr&oacute;xima Experiencia?</label></div></div>
                    <div class="col-md-12">
                        <div class="radio"><label><input type="radio" name="p3" value="9">Boleros</label></div>
                        <div class="radio"><label><input type="radio" name="p3" value="10">Tango</label></div>
                        <div class="radio"><label><input type="radio" name="p3" value="11">Romantica a&ntilde;os 60's - 70's</label></div>
                        <div class="radio"><label><input type="radio" name="p3" value="12">Bachata</label></div>
                        <div class="radio"><label><input type="radio" name="p3" value="13">Vallenato</label></div>
                        <div class="radio"><label><input type="radio" name="p3" value="14">Salsa</label></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                    <div class="row"><div class="col-md-12"><label class="control-label" for="p4">&iquest; cu&aacute;ntos d&iacute;as estar&iacute;a dispuesto a vivir la Experiencia Pintuco # 5?</label></div></div>
                        <div class="radio"><label><input type="radio" name="p4" value="15">4 D&iacute;as - 3 Noches</label></div>
                        <div class="radio"><label><input type="radio" name="p4" value="16">5 D&iacute;as - 4 Noches</label></div>
                        <div class="radio"><label><input type="radio" name="p4" value="16">6 D&iacute;as - 5 Noches</label></div>
                        <div class="radio"><label><input type="radio" name="p4" value="18">7 D&iacute;as - 6 Noches</label></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="comment">&iquest;Porqu&eacute; le gustar&iacute;a viajar a la Experiencia Pintuco # 5?</label>
                    <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
                </div>
                <div class="form-group"> 
                  <div class="col-md-12">
                      <div class="center"><button type="submit" class="btn btn-default">Enviar Encuesta</button></div>
                  </div>
                </div>
              </form>
          </div>
          <?php
            include('footer.php');
          ?>
      <!--</div>-->
      <script>
          
          $(document).ready(function(){
              $('.encuesta').hide();
              $('#espacio').html('<img src="img/intro.gif" alt="" />');
              $('.bienvenida2').hide();
              $('.galeria').hide();
              $('.cuerpo').animate({height:'750px'},3000);
              $('.mona').animate({opacity:1},1500);
              
                            
              var delay = 4000;
              setTimeout(function() {
                Contenido('banner');
                
                var enc = $('#estado-enc').val();
                if(enc==0){
                    $('.encuesta').dialog({
                        width:600,
                        modal: true
                    });
                }
              }, delay);
              
          });
          
          
          $('.form-horizontal').on('submit',function(){
             $.ajax({
                type:'post',
                url:'controllers/SurveyController.php',
                data:$('.form-horizontal').serialize(),
                success:function(response){
                    if(response=='success'){
                        $('#estado-enc').val("1");
                        alert('Encuesta Registrada');
                    }else{
                        $('#estado-enc').val("0");
                        alert('Error en el resigtro. Intente más tarde');
                    }
                }});
          });
          
          $('#PAC').click(function(){
              var galeria="";
              $('.cuerpo').css('height','470px');
              $('.cuerpo').show();
              $('.mona').hide();
              $('.bienvenida').hide();
              $('.galeria').hide();
              $('#espacio').removeClass('intro');
              galeria=Contenido('pac');
              $('#espacio').html(galeria);
              $('.bxslider').bxSlider({
                     mode: 'vertical',
                     pager: false
              });
              $('.bienvenida2').show();
          });
          
          $('#videos').click(function(){
              $('#espacio').removeClass('intro');
              $('.cuerpo').hide();
              $('.bn-slider').hide();
              //$('#espacio').html('<iframe width="100%" height="460px" src="https://www.youtube.com/embed/9Mde1prbSIk?autoplay=1" frameborder="0" allowfullscreen ></iframe>');
              var ancho = $(window).width();
              var video = 180
              if ((ancho>=320) && (ancho<480)){video=180;}
              if ((ancho>=480) && (ancho<768)){video=320;}
              if ((ancho>=768) && (ancho<1024)){video=480;}
              if ((ancho>=1024) && (ancho<1280)){video=480;}
              if ((ancho>=1280) && (ancho<1920)){video=480;}
              if (ancho>=1920){video=720;}
              
              $('#espacio').html('<video id="video" width="100%" height="'+video+'px" controls autoplay onended="prueba(2);"><source id="video-src" src="media/bienvenida.mp4" type="video/mp4">Su Navegador no soporta Video</video>'); 
          });
          
          $('.milas').click(function(){
              $('.cuerpo').hide();
              
              var usrnm = '<?php echo $_SESSION['usuario']; ?>';
              var macum=0;
              var mmm=0;
              var acm=0;
              var cum=0;
              var ext=0;
              var tot=0;
              
              $.ajax({
                  type:'post',
                  url:'controllers/MilesController.php',
                  dataType: 'json',
                  data:{user:usrnm},
                  success:function(response){
                      macum=$.number(response.accumulated,0,',','.');
                      mmm=$.number(response.month_sales_goal,0,',','.');
                      acm=$.number(response.current_sales,0,',','.');
                      ext=$.number(response.miles_additional,0,',','.');
                      tot=$.number(response.total_miles,0,',','.');
                      cum=$.number((response.current_sales/response.month_sales_goal)*100,2 ,',','.')+' %';
                      updt=response.up_date.substring(8, 10)+'/'+response.up_date.substring(5, 7)+'/'+response.up_date.substring(0, 4);
                      var contenido='<div class="degradado">'+
                        '<div class="center millas">'+      
                        '<div class="contenedor"><div class="col-md-12">'+
                            '<div class="row" style="height:34px;">'+
                                '<div class="col-xs-4" style="text-align:center;">'+
                                    '<div class="row" style="height:12px"><span class="m-update">Actualizado</span></div>'+
                                    '<div class="row"><span class="m-update">'+updt+'</span></div>'+
                                '</div>'+
                                '<div class="col-xs-4" style="text-align:center;"><span class="m-titulo">'+response.month+'</span></div>'+
                                '<div class="col-xs-4" style="text-align:center;"><div class="center" id="historia"><span>Extracto </span><a href="controllers/HistoryController.php"><img style="width:20px; height:20px;" src="img/extracto.png"/></a></div></div>'+
                            '</div>'+
                            '<div class="row" style="height:70px; padding-top:9px;">'+
                                '<div class="col-xs-12"><div class="millas-total"></div></div>'+
                            '</div>'+
                            '<div class="row" style="height:90px;">'+
                                '<div class="col-xs-4" style="text-align:center;padding-top:52px;"><span class="tabla-millas">$ '+mmm+'</span></div>'+
                                '<div class="col-xs-4" style="text-align:center;padding-top:52px;"><span class="tabla-millas">$ '+acm+'</span></div>'+
                                '<div class="col-xs-4" style="text-align:center;padding-top:52px;"><span class="tabla-millas">'+cum+'</span></div>'+
                            '</div>'+
                        '</div>'+
                        '</div></div>';
                        $('#espacio').html(contenido);
                        $('.millas-total').animateNumber({ number: response.total_miles });
                      
                  }
              });
          });
          
          function prueba(vd){
            switch (vd){
                case 1:
                    $('#espacio').html('<video id="video" width="100%" height="460px" controls autoplay onended="prueba(2);"><source id="video-src" src="media/bienvenida.mp4" type="video/mp4">Su Navegador no soporta Video</video>'); 
                    break;
                case 2:
                    $('#espacio').html('<video id="video" width="100%" height="460px" controls autoplay onended="prueba(1);"><source id="video-src" src="media/invitacion.mp4" type="video/mp4">Su Navegador no soporta Video</video>'); 
                    break;
            } 
              document.getElementById('video').play();
          }
          
          
          $('#fotos').click(function(){
              $('#espacio').css('background-image','none');
              $('.cuerpo').css('height','450px');
              $('.cuerpo').show();
              $('.mona').hide();
              $('.bienvenida').hide();
              $('.bienvenida2').hide();
              $('#espacio').removeClass('intro');
              Contenido('lanzamiento');
              $('.galeria').show();
              
              var ancho = $(window).width();
              var galery = 1
              if ((ancho>=320) && (ancho<480)){galery=1;}
              if ((ancho>=480) && (ancho<768)){galery=1;}
              if ((ancho>=768) && (ancho<1024)){galery=2;}
              if ((ancho>=1024) && (ancho<1280)){galery=3;}
              if ((ancho>=1280) && (ancho<1920)){galery=4;}
              if (ancho>=1920){galery=6;}
              $('.sl-slider').bxSlider({
                  mode: 'horizontal',
                  pager: false,
                  minSlides: galery,
                  maxSlides: galery,
                  slideWidth: 174,
                  slideMargin: 12
              });
          });
        
           $('.cual-galeria').click(function(){
               var nombre=$(this).attr('id');
               Contenido(nombre);
             });
           
           function Contenido(nombre){
               $.ajax({
                type:'post',
                url:'controllers/GalleryController.php',
                data:{'galeria':nombre},
                success:function(response){
                    $('#espacio').html(response);
                    $('.bxslider').bxSlider({
                     mode: 'vertical',
                     pager: false
                   });
                }});
           };
           
           $(window).resize(function(){location.reload();});
      </script>
      
      <!-- begin olark code -->
<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
f[z]=function(){
(a.s=a.s||[]).push(arguments)};var a=f[z]._={
},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
0:+new Date};a.P=function(u){
a.p[u]=new Date-a.p[0]};function s(){
a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
b.contentWindow[g].open()}catch(w){
c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('1735-240-10-9603');/*]]>*/</script><noscript><a href="https://www.olark.com/site/1735-240-10-9603/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
<!-- end olark code -->
  </body>
</html>
<?php
}
?>