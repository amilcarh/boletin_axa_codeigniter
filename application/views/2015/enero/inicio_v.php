<header class="frame">
    <div class="bit-2">
        <?=img('images/assets/header.png');?>
    </div>
    <div class="bit-5 header-details">
        <h2>BOLET&Iacute;N AXA</h2>
        <h3>{mes} {anio} <strong>N. {numero}</strong></h3>
        <p>Consulta los n&uacute;meros anteriores <?=anchor('http://www.boletinaxa.com.mx/anterior/historico.html', img('images/assets/btn_landing.png'));?></p>
    </div>
</header>
<nav class="frame">
    <ul>
        <li><?=anchor('/', 'INICIO');?></li>
        <li><?=anchor('2015/enero/salud', 'TU SALUD');?></li>
        <li><?=anchor('2015/enero/futuro', 'TU FUTURO');?></li>
        <li><?=anchor('2015/enero/auto', 'TU AUTO');?></li>
        <li><?=anchor('2015/enero/hogar', 'TU HOGAR');?></li>
        <li><?=anchor('opinion?email='.$this->session->userdata('email'), 'TU OPINI&Oacute;N');?></li>
    </ul>
</nav>

<div class="container">
    <?=($this->session->flashdata('msg') ? '<p style="color:red;font-size:.8em;">'.$this->session->flashdata('msg').'</p>' : '');?>
    <div class="frame">
        <div class="bit-60 rounded shadow" id="two-row-span">
            <h1>Manejar bien:</h1>
            <h2>Un propósito de año nuevo</h2>
            <p>Una nueva forma de conducir nuestros cochesm es un<br />gran propósito para iniciar el año.</p>
            <p class="bit-40 centered">
                <ul>
                    <li>
                        <?=img('images/assets/2015/inicio/familia.png');?>
                    </li>
                    <li>
                        <?=img('images/assets/2015/inicio/ciclista.png');?>
                    </li>
                    <li>
                        <?=img('images/assets/2015/inicio/edificio.png');?>
                    </li>
                    <li>
                        <?=img('images/assets/2015/inicio/coche.png');?>
                    </li>
                </ul>
                <?=img('images/assets/iconos_banner.png');?>
                <?=anchor('futuro', img('images/assets/2015/inicio/leer_mas_1.png'));?>
            </p>
        </div>

        <div class="bit-40" id="two-rows">
            <div class="bit-1 centered blue-square rounded shadow" style="margin:-7px 0 10px 0;">
                <h4 style="font-size:1.6em;">Compartir: <?=nbs(4);?>
                    <?=anchor('http://www.facebook.com/sharer.php?u='.current_url(), img('images/assets/face.jpg'), array('target'=>'_blank'));?>
                    <?=anchor('http://twitter.com/?status='.urlencode('Boletín Septiembre 2014 ').current_url(), img('images/assets/twitter.jpg'), array('target'=>'_blank'));?>
                </h4>
            </div>

            <div class="opinion bit-1 centered blue-square rounded shadow" style="height:205px;">
                <h1>Queremos<br /><span class="red-text">conocer</span><br />m&aacute;s de ti.</h1>
                <p>Ay&uacute;danos con esta peque&ntilde;a encuesta.</p>
                <div>
                    <?=anchor('opinion?email='.$this->session->userdata('email'), 'Da clic aqu&iacute;');?>
                </div>
            </div>
        </div>
    </div>

    <div class="frame">
        <div class="bit-3 navy-border">
            <div class="square dark-text shadow gray-border">
                <div class="bit-1 dark-text inner-square">
                    <h3>Conoce los accidentes más frecuentes en el hogar y toma tus precauciones.</h3>
                    <p class="bit-20">
                        <?=img('images/assets/2015/inicio/casa_art1.png');?>
                    </p>
                    <p class="bit-80">
                        ¿Sabías que el 90% de los accidentes que ocurren en el hogar se pueden evitar?
                        <?=anchor('hogar', img('images/assets/btn_leerMas.png'));?>
                    </p>
                </div>
            </div>
        </div>

        <div class="bit-3 navy-border">
            <div class="square dark-text shadow gray-border">
                <div class="bit-1 dark-text inner-square">
                    <h3>Lumbalgia,</h3>
                    <h3 class="small-title">un mal que afecta a los mexicanos</h3>
                    <p class="bit-20">
                        <?=img('images/assets/2015/inicio/mono_art2.png');?>
                    </p>
                    <p class="bit-80">
                        El 80% de los mexicanos ha padecido de dolores agudos en la espalda.
                        <?=anchor('salud', img('images/assets/btn_leerMas.png'));?>
                    </p>
                </div>
            </div>
        </div>

        <div class="bit-3">
            <div class="square dark-text shadow gray-border">
                <div class="bit-1 inner-square">
                    <h3>¿Cómo recuperarte de los gastos de diciembre?</h3>
                    <p class="bit-20">
                        <?=img('images/assets/2015/inicio/cerdo_art3.png');?>
                    </p>
                    <p class="bit-80">
                        Que la cuesta de enero, no cueste tanto.
                        <?=anchor('auto', img('images/assets/btn_leerMas.png'));?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="frame">
        <div class="bit-3">
            <div class="small-square">
                <div class="bit-1 lightblue inner-square" style="background-color:#e8e7e5;">
                    <h3>¡Ya puedes pagar tu póliza desde dispositivos móviles!</h3>
                    <h4>Fácil y en todo momento</h4>
                    <p class="bit-40"><?=img('images/assets/2015/inicio/dispositivos.png');?></p>
                    <p class="bit-60"><?=anchor('apps', img('images/assets/btn_conocelas.png'));?></p>
                </div>
            </div>
        </div>

        <div class="bit-3">
            <div class="small-square">
                <div class="bit-1 lightblue inner-square" style="background-color:#dcd9d6;">
                    <h3>¿Insatisfecho con nuestro servicio?</h3>
                    <p class="bit-40" style="font-size:1.6em;text-align:center;">
                        <?=img('images/assets/2015/inicio/call_center.png');?><br />
                    </p>
                    <p class="bit-60"><?=anchor('http://axa.mx/Personas/perfiladores/Salud911/Paginas/default.aspx', img('images/assets/btn_descubremas.png'), array('anchor'=>'_blank'));?></p>
                </div>
            </div>
        </div>

        <div class="bit-3">
            <div class="small-square" style="background-color:#e8e7e5;">
                <div class="bit-1 inner-square">
                    <h3>Blog Mirada X.</h3>
                    <p class="bit-40" style="font-size:1.6em;text-align:center;">
                        Tecnología, prevención y la industria de seguros en una sola plataforma.
                        <?=img('images/assets/2015/inicio/mirada_x.png');?><br />
                    </p>
                    <p class="bit-60"><?=anchor('http://promociones-axa.com.mx/?utm_medium=email+AXA/Touch&utm_campaign=AXA/Touch+Boletin+septiembre+2014+Escoge+y+estrena&utm_source=Boletin+septiembre+2014', img('images/assets/btn_descubremas.png'), array('target'=>'_blank'));?></p>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            if($(window).width() > 480){
                var h = $('#two-rows').height();
                $('#two-row-span').css('height', (h+7)+'px');
            }else{
                $('#two-row-span').css('margin-bottom', '10px');
            }
        });
    </script>