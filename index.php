
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="main.js"></script>
    <link type="text/css" rel="stylesheet" href="main.css" media="all" >
    <!-- Bootstrap 4 down here-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- End bootstrap -->

    <title>Valiente empresa</title>

    <script>

        $(document).ready(function(){
            $('.parallax,.azulito,.blancuzco').height($(window).height());
            $('.box5').height($(window).height()*0.9);
        });

    </script>

</head>
<body>
     <div class='d-none d-sm-block'>
     <nav id='navB' class=" navbar fixed-top navbar-expand-sm navbar-light bg-light ">
                <a class="navbar-brand ">
                        <img class='fakeImg'>
                        <img src="img/fundacion GAEM.png" width="90" height="60" alt="">
                        <img src="img/Soymispasos.png" width="70" height="60" alt="">

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                      <a href='#parallax1' class="nav-link letLink" href="#">INICIO <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a href='#section1' class="nav-link letLink" href="#">SELLO</a>
                    </li>
                    <li class="nav-item">
                        <a href='#section2' class="nav-link letLink" href="#">CÓMO CONSEGUIRLO</a>
                    </li>
                    <li class="nav-item">
                      <a href='#section3' class="nav-link letLink" href="#">BENEFICIOS</a>
                    </li>
                    <li class="nav-item">
                        <a href='#section4' class="nav-link letLink" href="#">CERTIFICACIÓN GAEM</a>
                    </li>
                    <li class="nav-item">
                        <a href='#section5' class="nav-link letLink" href="#">EMPRESAS ASOCIADAS</a>
                    </li>


                  </ul>

                </div>
    </nav>
     </div>


    <!-- Parallax 1-->
    <div class="parallax" id='parallax1'>

        <aside class='azulito'>





            <!--Little form número 3 (mobile viewport)-->
            <div class="cinta">

                <img src="img/logo.png" width=140 height=140 class="logoCel d-block d-sm-none mx-auto" alt="Responsive image">

            </div>


            <div class='container d-block d-sm-none formCel'>
                    <form id='disForm3' action='' method="POST">
                        <div class='former3' class='row'>
                            <ul style='list-style: none; '>
                                <div class='col'>
                                    <li><input autocomplete='off' id='impit1' class='impit' name='email' placeholder="Correo &nbsp;&nbsp;*"></li>
                                    <li><input autocomplete='off' class='impit' name='firstname' placeholder="Nombre *"></li>
                                    <li><input autocomplete='off' class='impit' placeholder="Teléfono&nbsp;*"></li>
                                    <li><textarea class='texti2' placeholder="&nbsp;&nbsp;&nbsp;&nbsp;Deje su mensaje."></textarea></li>
                                    <li>

                                    <div>

                                        <input class='imSend' type="submit" value="Enviar">
                                        <input type="hidden" name="source" value="<?=isset($_GET['source'])?$_GET['source']:'JHPPAPI'?>" />
                                        <input type="hidden" name="id_country" value="1" />
                                        <input type="hidden" name="format" value="json" />
                                    </div>

                                    </li>
                                </div>

                            </ul>



                        </div>


                    </form>
            </div>


            <!-- Image -->
            <img src="img/logo.png" class="img-fluid logo d-none d-sm-block" alt="Responsive image">



        </aside>

        <aside class='blancuzco d-none d-sm-block'>
            <!-- Another form-->
     <!-- FORM -->
             <div class='container'>

                        <!-- Empresa de valor-->
                <div class='newText'>
                        <span class='span1'>&nbsp;&nbsp;&nbsp;EMPRESA</span><br>
                        <span class='span2'>&nbsp;&nbsp;DE VALOR</span>
                        <div style='height: 25px;'></div> <!-- fake spacing>-->
                        <p class='p1 text-center'>
                        Certificación de Fundación GAEM
                            para empresas que apuestan por la innovación y el bienestar social
                        </p>
                </div>



                    <form id='disForm2' action='' method="POST">
                        <div class='former2'>
                            <ul style='list-style: none; '>
                                <div class='col'>
                                    <li><input autocomplete='off' id='impit1' class='impit' name='email' placeholder="Correo &nbsp;&nbsp;*"></li>
                                    <li><input autocomplete='off' class='impit' name='firstname' placeholder="Nombre *"></li>
                                    <li><input autocomplete='off' class='impit' placeholder="Teléfono&nbsp;*"></li>
                                    <li><textarea class='texti2' placeholder="&nbsp;&nbsp;&nbsp;&nbsp;Deje su mensaje."></textarea></li>
                                    <li>

                                    <div>

                                        <input class='imSend' type="submit" value="Enviar">
                                        <input type="hidden" name="source" value="<?=isset($_GET['source'])?$_GET['source']:'JHPPAPI'?>" />
                                        <input type="hidden" name="id_country" value="1" />
                                        <input type="hidden" name="format" value="json" />
                                    </div>

                                    </li>
                                </div>

                            </ul>



                        </div>


                    </form>
            </div>

        </aside>
        <div id='section1' class='move'></div>
    </div>
    <!-- end Parallax 1-->
    <!-- Start box 1-->
    <div class="box1" id='box1'>

<aside class='azulPalido'>

    <div style='height: 45px;'></div> <!-- fake spacing-->
    <div class='text2'>

        <span class='span3 d-none d-sm-block'>¿QUÉ ES EL SELLO</span><br>
        <span class='span4 d-none d-sm-block'>EMPRESA DE VALOR?</span>

        <span class='span3Replace'>¿Qué es el sello EMPRESA DE <span class='valorR'>VALOR?</span></span>
        <div class="container d-block d-sm-none">
                <div class='d-none d-md-block fakeH''></div>
                <div class='d-block d-md-none' style='height: 40px;'></div> <!-- fake spacing-->
                <div class="row">
                        <div class="col ml-4">
                            <span class='span5'>Es una distinción para empresas....</span>
                        </div>

                </div>

                <div class='d-none d-md-block' style='height: 65px;'></div> <!-- fake spacing-->
                <div class='d-block d-md-none' style='height: 25px;'></div> <!-- fake spacing-->

                <div class="row">
                        <div class="col-5">

                            <svg width='10' fill='orange' preserveAspectRatio="xMidYMid meet" data-bbox="15.305 10.052 123 123" xmlns="http://www.w3.org/2000/svg" viewBox="15.3046875 10.05078125 123 123" role="img" style="stroke-width: 0px;">
                                <g>
                                    <path d="M138.305 10.052v123h-123v-123h123z"></path>
                                </g>
                            </svg>
                            <span class='spans6'>&nbsp;&nbsp;&nbsp;&nbsp;VALIENTES</span><br>
                            <div class='aBitPad'><span class='spans7'>Tienen en su ADN la innovación y la visión de un futuro mejor.</span></div>

                        </div>
                        <div class="col-5">

                            <svg width='10' fill='orange' preserveAspectRatio="xMidYMid meet" data-bbox="15.305 10.052 123 123" xmlns="http://www.w3.org/2000/svg" viewBox="15.3046875 10.05078125 123 123" role="img" style="stroke-width: 0px;">
                                <g>
                                    <path d="M138.305 10.052v123h-123v-123h123z"></path>
                                </g>
                            </svg>
                            <span class='spans6'>&nbsp;&nbsp;&nbsp;&nbsp;RESPONSABLES</span><br>
                            <div class='aBitPad'><span class='spans7'>Se implican con causas sociales para generar un impacto positivo en la sociedad.</span></div>

                        </div>

                </div>

                <div class="row">
                        <div class="col-5">

                            <svg width='10' fill='orange' preserveAspectRatio="xMidYMid meet" data-bbox="15.305 10.052 123 123" xmlns="http://www.w3.org/2000/svg" viewBox="15.3046875 10.05078125 123 123" role="img" style="stroke-width: 0px;">
                                <g>
                                    <path d="M138.305 10.052v123h-123v-123h123z"></path>
                                </g>
                            </svg>
                            <span class='spans6'>&nbsp;&nbsp;&nbsp;&nbsp;INNOVADORAS</span><br>
                            <div class='aBitPad'><span class='spans7'>Innovan en su día a día y exploran nuevas vías de hacer las cosas.</span></div>

                        </div>
                        <div class="col-5">

                            <svg width='10' fill='orange' preserveAspectRatio="xMidYMid meet" data-bbox="15.305 10.052 123 123" xmlns="http://www.w3.org/2000/svg" viewBox="15.3046875 10.05078125 123 123" role="img" style="stroke-width: 0px;">
                                <g>
                                    <path d="M138.305 10.052v123h-123v-123h123z"></path>
                                </g>
                            </svg>
                            <span class='spans6'>&nbsp;&nbsp;&nbsp;&nbsp;COMPROMETIDAS CON EL BIENESTAR</span><br>
                            <div class='aBitPad'><span class='spans7'>Promueven hábitos de vida saludables y la mejora de la calidad de vida.</span></div>

                        </div>


                </div>

                 <div class="row">
                        <div class="col-5">

                            <svg width='10' fill='orange' preserveAspectRatio="xMidYMid meet" data-bbox="15.305 10.052 123 123" xmlns="http://www.w3.org/2000/svg" viewBox="15.3046875 10.05078125 123 123" role="img" style="stroke-width: 0px;">
                                <g>
                                    <path d="M138.305 10.052v123h-123v-123h123z"></path>
                                </g>
                            </svg>
                            <span class='spans6'>&nbsp;&nbsp;&nbsp;&nbsp;VANGUARDISTAS</span><br>
                            <div class='aBitPad'><span class='spans7'>Van un paso por delante y trabajan por un futuro mejor.  </span></div>

                        </div>
                        <div class="col-5">

                            <svg width='10' fill='orange' preserveAspectRatio="xMidYMid meet" data-bbox="15.305 10.052 123 123" xmlns="http://www.w3.org/2000/svg" viewBox="15.3046875 10.05078125 123 123" role="img" style="stroke-width: 0px;">
                                <g>
                                    <path d="M138.305 10.052v123h-123v-123h123z"></path>
                                </g>
                            </svg>
                            <span class='spans6'>&nbsp;&nbsp;&nbsp;&nbsp;CONCIENCIADAS</span><br>
                            <div class='aBitPad'><span class='spans7'>
                                    Difunden estos principios  y están abiertas a la mejora constante.</span></div>

                        </div>

                </div>
        </div>

    </div>

    <div style='height: 145px;'></div> <!-- fake spacing-->
    <div class='d-none d-sm-block'>
        <svg class='weirdSvg' fill='white' preserveAspectRatio="none" data-bbox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" width="160" height="160" viewBox="0 0 200 200" role="img" style="stroke-width: 0px;">
            <g>
                <path d="M200 100c0 55.228-44.772 100-100 100S0 155.228 0 100 44.772 0 100 0s100 44.772 100 100z"></path>
            </g>
        </svg>
    </div>

</aside>

<aside class='asideBlanco d-none d-sm-block'>

        <div class="container d-none d-sm-block">
                <div class='d-none d-md-block fakeH''></div> <!-- fake spacing-->
                <div class='d-block d-md-none' style='height: 40px;'></div> <!-- fake spacing-->
                <div class="row">
                        <div class="col ml-4">
                            <span class='span5'>Es una distinción para empresas....</span>
                        </div>

                </div>


                <div class='d-block d-md-none' style='height: 25px;'></div> <!-- fake spacing-->

                <div class="row">
                        <div class="col-5">

                            <svg width='10' fill='orange' preserveAspectRatio="xMidYMid meet" data-bbox="15.305 10.052 123 123" xmlns="http://www.w3.org/2000/svg" viewBox="15.3046875 10.05078125 123 123" role="img" style="stroke-width: 0px;">
                                <g>
                                    <path d="M138.305 10.052v123h-123v-123h123z"></path>
                                </g>
                            </svg>
                            <span class='spans6'>&nbsp;&nbsp;&nbsp;&nbsp;VALIENTES</span><br>
                            <div class='aBitPad'><span class='spans7'>Tienen en su ADN la innovación y la visión de un futuro mejor.</span></div>

                        </div>
                        <div class="col-5">

                            <svg width='10' fill='orange' preserveAspectRatio="xMidYMid meet" data-bbox="15.305 10.052 123 123" xmlns="http://www.w3.org/2000/svg" viewBox="15.3046875 10.05078125 123 123" role="img" style="stroke-width: 0px;">
                                <g>
                                    <path d="M138.305 10.052v123h-123v-123h123z"></path>
                                </g>
                            </svg>
                            <span class='spans6'>&nbsp;&nbsp;&nbsp;&nbsp;RESPONSABLES</span><br>
                            <div class='aBitPad'><span class='spans7'>Se implican con causas sociales para generar un impacto positivo en la sociedad.</span></div>

                        </div>

                </div>

                <div class="row">
                        <div class="col-5">

                            <svg width='10' fill='orange' preserveAspectRatio="xMidYMid meet" data-bbox="15.305 10.052 123 123" xmlns="http://www.w3.org/2000/svg" viewBox="15.3046875 10.05078125 123 123" role="img" style="stroke-width: 0px;">
                                <g>
                                    <path d="M138.305 10.052v123h-123v-123h123z"></path>
                                </g>
                            </svg>
                            <span class='spans6'>&nbsp;&nbsp;&nbsp;&nbsp;INNOVADORAS</span><br>
                            <div class='aBitPad'><span class='spans7'>Innovan en su día a día y exploran nuevas vías de hacer las cosas.</span></div>

                        </div>
                        <div class="col-5">

                            <svg width='10' fill='orange' preserveAspectRatio="xMidYMid meet" data-bbox="15.305 10.052 123 123" xmlns="http://www.w3.org/2000/svg" viewBox="15.3046875 10.05078125 123 123" role="img" style="stroke-width: 0px;">
                                <g>
                                    <path d="M138.305 10.052v123h-123v-123h123z"></path>
                                </g>
                            </svg>
                            <span class='spans6'>&nbsp;&nbsp;&nbsp;&nbsp;COMPROMETIDAS CON EL BIENESTAR</span><br>
                            <div class='aBitPad'><span class='spans7'>Promueven hábitos de vida saludables y la mejora de la calidad de vida.</span></div>

                        </div>


                </div>

                 <div class="row">
                        <div class="col-5">

                            <svg width='10' fill='orange' preserveAspectRatio="xMidYMid meet" data-bbox="15.305 10.052 123 123" xmlns="http://www.w3.org/2000/svg" viewBox="15.3046875 10.05078125 123 123" role="img" style="stroke-width: 0px;">
                                <g>
                                    <path d="M138.305 10.052v123h-123v-123h123z"></path>
                                </g>
                            </svg>
                            <span class='spans6'>&nbsp;&nbsp;&nbsp;&nbsp;VANGUARDISTAS</span><br>
                            <div class='aBitPad'><span class='spans7'>Van un paso por delante y trabajan por un futuro mejor.  </span></div>

                        </div>
                        <div class="col-5">

                            <svg width='10' fill='orange' preserveAspectRatio="xMidYMid meet" data-bbox="15.305 10.052 123 123" xmlns="http://www.w3.org/2000/svg" viewBox="15.3046875 10.05078125 123 123" role="img" style="stroke-width: 0px;">
                                <g>
                                    <path d="M138.305 10.052v123h-123v-123h123z"></path>
                                </g>
                            </svg>
                            <span class='spans6'>&nbsp;&nbsp;&nbsp;&nbsp;CONCIENCIADAS</span><br>
                            <div class='aBitPad'><span class='spans7'>
                                    Difunden estos principios  y están abiertas a la mejora constante.</span></div>

                        </div>

                </div>
        </div>

</aside>

<div class="row">
                    <div>

                     <a href='#parallax1'><button id='meInt1' class='meInteresa'>Registrarme</button></a>

                    </div>
</div>

<div id='section2' class='move'></div>


</div>


</div>
    <!-- end box 1-->

    <!-- Start box 2-->
    <div class='box2' id='box2'>
        <!-- Remember; sections are to move -->
        <div id='section3' class='move'></div>

        <div class='container-fluid'>
            <div class='row'>

                <div class='col-2'></div>
                <div class='col-8' style='margin-top:-40px;'>

                    <p class='span8 text-center'>COMO SER UNA <span class='span9'>EMPRESA DE VALOR</span></p>
                    <div style='height: 15px;'></div> <!-- fake spacing-->
                    <h4 class='span10 text-center'> Para obtener el reconocimiento <span class='span10'>"Empresa de Valor"</span>, solo es necesario: </h4>
                </div>
                <div class='col-2'></div>

            </div>

            <div class='row'>

                <div class='col-2'></div>
                <div class='col-4'>

                    <div class='anotherPad'>
                            <p class='text-center'><img title="invert" class="invert" src="img/apreton.png" width="60"></p>
                            <p class='text-center theseP'><span class='otherSpan'>Comprometer</span> a empleados y proveedores en la campaña "Yo Doy mis Pasos"</p>
                    </div>

                </div>
                <div class='col-4'>

                    <div class='anotherPad'>
                            <p class='text-center'><img itle="invert" class="invert" src="img/hablando.png" width="60"></p>
                            <p class='text-center theseP'><span class='otherSpan'>Difundir</span> la iniciativa en los canales de comunicación y redes sociales de la empres</p>
                    </div>

                </div>
                <div class='col-2'></div>

            </div>

            <div class='row'>

                    <div class='col-2'></div>
                    <div class='col-4'>

                        <div class='anotherPad'>
                                <p class='text-center'><img title="invert" class="invert" src="img/gente.png" width="60"></p>
                                <p class='text-center theseP'><span class='otherSpan'>Participar</span> de forma activa en alguno de los eventos de la Fundación</p>
                        </div>

                    </div>
                    <div class='col-4'>

                        <div class='anotherPad'>
                                <p class='text-center'><img itle="invert" class="invert" src="img/takeAHeart.png" width="60"></p>
                                <p class='text-center theseP'><span class='otherSpan'>Contribuir</span> económicamente en función del tamaño de la empresa</p>
                        </div>

                    </div>
                    <div class='col-2'></div>

            </div>

            <div class="row">
                    <div>

                     <a href='#parallax1'><button id='meInt2' class='meInteresa'>Registrarme</button></a>

                    </div>
            </div>

        </div>

    </div>
    <!-- end box 2-->

    <!-- Start box 3-->
    <div class='box3' id='box3'>

        <div id='section4' class='move'></div> <!-- Sections are for moving-->

        <div class='container-fluid'>
            <div class='row ben' >

                <div class='col-3'></div>
                <div class='col-6'>
                    <p class='text-center thisP'><span class='spanXY' style='font-weight: 700;'>BENEFICIOS</span> <span class='spanYX'>PARA LA EMPRESA</span></p>

                    <div class='rightHere'>

                        <ul style='text-align: center;'>
                            <li>
                                <p class='anotherP' style='padding-top:10px;'>Utilización del sello "Empresa de Valor" en sus soportes</p>
                            </li>
                            <li>
                                <p class='anotherP' style='padding-top:10px;'>Diploma personalizado y enmarcado </p>
                            </li>
                            <li>
                                <p class='anotherP' style='padding-top:10px;'>Mención en la Memoria Anual de Fundación GAEM</p>
                            </li>
                            <li>
                                <p class='anotherP' style='padding-top:10px;'>Mención en la web www.empresadevalor.com</p>
                            </li>
                            <li>
                                <p class='anotherP' style='padding-top:10px;'>Pack de bienvenida de 20 camisetas Yo Doy mis Pasos a precio especial</p>
                            </li>
                            <li>
                                <p class='anotherP' style='padding-top:10px;'>Certificado de desgravación fiscal</p>
                            </li>
                        </ul>

                    </div>


                </div>
                <div class='col-3'></div>

            </div>
        </div>

        <div class="row">
                    <div>

                     <a href='#parallax1'><button id='meInt3' class='meInteresa'>Registrarme</button></a>

                    </div>
        </div>

    </div>
    <!-- End box 3-->

    <!-- Start box 4 -->
    <div class='box4' id='box4'>

        <div id='section5' class='move'></div> <!-- Sections are for moving-->

        <div class='container-fluid'>
            <div class='row'>
                <div class='col-3'></div>
                <div class='col-6 certifGaem'>

                    <p class='thisP text-center'><span class='certi' style='font-weight:700;'>CERTIFICACIÓN GAEM</span><br><span><span class='spanEmpresa'>EMPRESA DE VALOR</span></p>

                    <p class='span12 text-center'>Promovemos el reconocimiento "Empresa de Valor" porque:</p>

                </div>
                <div class='col-3'></div>
            </div>

            <div style='padding-top: 60px;' class='row'>

                <div class='col'></div>
                <div class='col-3 d-none d-sm-block'>

                    <p class='text-center'><img src="img/microscopio.png" width="75"></p>

                    <div>

                        <p class='text-center'><span class='otherSpan'>Somos la primera<br>
                        fundación de pacientes<br></span>
                        que ha creado una aceleradora de proyectos para impulsar la innovación.</p>

                    </div>

                </div>
                <div class='col-3 separate'>

                    <p class='text-center'><img src='img/gentenodo.png' width="75"></p>

                    <div>
                        <p class='text-center'>
                            <span class='otherSpan'>Llevamos la innovación<br>

                            en nuestro ADN<br></span>

                            con más de 12 años de experiencia en investigación biomédica y financiación.
                        </p>
                    </div>

                </div>
                <div class='col-3 separate'>

                    <p class='text-center'><img src="img/holdAHeart.png" width="75"></p>

                    <div>
                        <p class='text-center'>
                            <span class='otherSpan'>Creemos y creamos<br>

                            un futuro mejor,<br></span>

                            lleno de oportunidades y bienestar para las personas con esclerosis múltiple.
                        </p>
                    </div>

                </div>
                <div class='col'></div>

            </div>
        </div>

        <div class="row">
                    <div>

                     <a href='#parallax1'><button id='meInt4' class='meInteresa'>Registrarme</button></a>

                    </div>
        </div>

    </div>
    <!-- end box 4 -->

     <!-- Start box 5 -->
     <div class='box5' id='box5'>

        <div class='container-fluid'>
            <div class='row asociates'>
                <div class='col-2'></div>
                <div class='col-8'>
                    <p class='thisP text-center'>
                        <span style='font-weight: 700;'>EMPRESAS Y ENTIDADES ASOCIADAS</span>

                    </p>
                </div>
                <div class='col-2'></div>
            </div>

            <div class="empresa d-none d-sm-block">


                <div class="row empresass">

                    <div class="col-2"></div>

                    <div class="col-2">
                        <img class='acer' src='img/Empresa1acer.png' >
                    </div>

                    <div class="col-2">
                        <img class='ankar' src='img/empresa3ankarfarma.jpg' >
                    </div>

                    <div class="col-2 bio">
                        <img class='bionure' src='img/empresa6bionure.jpg' >
                    </div>

                    <div class="col-2">
                        <img class='cadenaMovilnet' src='img/empresa7cadenamovil.jpg'>
                    </div>

                    <div class="col-2"></div>

                </div>

                <div class="row empresass">

                        <div class="col-2"></div>

                        <div class="col-2">
                            <img class='lead' src='img/leadtowin.png'>
                        </div>

                        <div class="col-2">
                            <img class='labalear' src='img/empresa5labalear.jpg'>
                        </div>

                        <div class="col-2">
                            <img class='laNansa' src='img/empresalanansa.jpg'>
                        </div>


                        <div class="col-2">
                            <img class='save' src='img/save.png' >
                        </div>

                        <div class="col-2"></div>

                </div>


                <p class= 'text-center'>
                        <span  class='anetherP' style='font-weight: 700;margin-left:-40px;'>En proceso:</span>

                </p>

                <div class="row enProceso container">

                        <div class="col-3"></div>

                        <div class="col-1">
                            <img class='agrupa' src='img/empresaAgrupacio.png'>
                        </div>

                        <div class="col-2">
                            <img class='idi' src='img/empresa4adibaps.png'>
                        </div>

                        <div class="col-2">
                            <img class='uic' src='img/uicBarca.png'>
                        </div>


                        <div class="col-1">
                            <img class='qmenta' src='img/empresa8Qmenta.png' >
                        </div>

                        <div class="col-3"></div>

                </div>

            </div>

            <div class="empresaCel d-block d-sm-none">
                <div class="row"><img src="img/leadtowin.png" class='d-block mx-auto' height="60px" width='50%' alt=""></div>
                <div class="row"><img src='img/empresa5labalear.jpg' class='d-block mx-auto' height="140px" width='50%' alt=""></div>
                <div class="row sanss"><img src='img/empresalanansa.jpg' class='d-block mx-auto sans' height="60px" width='50%' alt=""></div>
                <div class="row"><img src='img/save.png' class='d-block mx-auto' height="120px" width='50%' alt=""></div>
                <div class="row"><img src='img/Empresa1acer.png' class='d-block mx-auto' height="40px" width='50%' alt=""></div>
                <div class="row"><img src='img/empresa3ankarfarma.jpg' class='d-block mx-auto' height="60px" width='50%' alt=""></div>
                <div class="row"><img src='img/empresa6bionure.jpg' class='d-block mx-auto' height="60px" width='50%' alt=""></div>
                <div class="row"><img src='img/empresa7cadenamovil.jpg' class='d-block mx-auto' height="60px" width='50%' alt=""></div>
            </div>

    </div>


<div class="row">
            <div>

             <a href='#parallax1'><button id='meInt5' class='meInteresa'>Registrarme</button></a>

            </div>
</div>

</div>
<!-- end box 5 -->

    <!-- Start parallax 2
    <div class='parallax2' id='parallax2'>

        <aside class='blueWest'>
            <div style='height: 50px;'></div> <!-- Artificial spacing
            <div class='contact'>
                <span class='span22'>CONTÁCTANOS</span>
                <span class='span11'>Fundanción<br>GAEM</span>
            </div>
        </aside>

        <aside class='blueEast'>
            <div class='aboutUs'>
                <p class='pShort' style='color:#fff;'>
                    Tel. +34 935 190 300<br>
                    Whatsapp: +34 608 692 827<br>
                    <a id='sht' href="mailto:info@fundaciongaem.org" target="_self" data-content="info@fundaciongaem.org" data-type="mail">info@fundaciongaem.org</a>
                </p>


                <p class='pShort' style='color:#fff;'> <span style='font-weight: 700;'>NUESTRA</span> DIRECCIÓN </p>

                <p class='pShort' style='color:white'>

                        Parc Científic Barcelona<br>
                        Baldiri Reixac, 4<br>
                        Torre R 2ª planta<br>
                        08028 Barcelona<br>

                </p>
                <br>
                <span><a id='googleLocator' HREF='https://www.google.com/maps/place/Fundaci%C3%B3n+Esclerosis+M%C3%BAltiple+(GAEM)/@41.381771,2.113972,17z/data=!3m1!4b1!4m5!3m4!1s0x12a498f7fe4ac6b3:0xb09a768db9345aa0!8m2!3d41.381767!4d2.116166'>HAZ CLICK AQUÍ PARA ENCONTRARNOS</a></span>
                <br><br>

                <p style='color:white;'>Completa el siguiente sello si estás interesado en el sello EMPRESA VALIENTE.</p>

                <!-- FORM
                <div class='container '>
                    <div class='formCont'>
                        <form id='disForm' action='' method="POST">
                            <div class='row'>
                                <ul style='list-style: none; padding:0px;'>
                                    <div style='padding:0px;' class='col'>
                                        <li><input id='impit2' autocomplete='off' class='downInputs' name='email' placeholder="&nbsp;&nbsp;&nbsp;&nbsp;Correo &nbsp;&nbsp;&nbsp;&nbsp;*"></li>
                                        <li><input autocomplete='off' class='downInputs' name='firstname' placeholder="&nbsp;&nbsp;&nbsp;&nbsp;Nombre &nbsp;&nbsp;*"></li>
                                        <li><input autocomplete='off' class='downInputs' placeholder="&nbsp;&nbsp;&nbsp;&nbsp;Teléfono &nbsp;&nbsp;*"></li>
                                    </div>

                                </ul>

                                <div style='padding-left:0px ' class='d-none d-md-block col '>
                                    <textarea class='texti ' placeholder="Deje su mensaje."></textarea>
                                </div>

                            </div>
                            <div style='margin-top:-16px;' class='row'>
                                <div>

                                    <input class='sendi'style='background-color: white; border:none;' type="submit" value="Enviar">
                                    <input type="hidden" name="source" value="<?=isset($_GET['source'])?$_GET['source']:'JHPPAPI'?>" />
                                    <input type="hidden" name="id_country" value="1" />
                                    <input type="hidden" name="format" value="json" />
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </aside>

    </div>
    <!-- end parallax 2 -->

    <!-- Footer -->
    <footer class='footer1'>
        <p style='padding:0px; margin:0px;' class='text-center'>
            <a  href="#parallax1" id='myBtn' class='myBtn'>
                <button class='btn btnx'><img class='flechita' id="idski2fyimgimage" style="object-position: 50% 50%; width: 33px; height: 24px; object-fit: contain;" alt="" data-type="image" src="https://static.wixstatic.com/media/dbbdc91820535cbbeb0664011cb93255.png/v1/fill/w_33,h_17,al_c,q_80/dbbdc91820535cbbeb0664011cb93255.webp"></button>
            </a>
        </p>
        <p  style='padding:0px; margin:0px; color:#fff;' class='text-center'>VOLVER ARRIBA </p>
    </footer>

</body>
</html>
