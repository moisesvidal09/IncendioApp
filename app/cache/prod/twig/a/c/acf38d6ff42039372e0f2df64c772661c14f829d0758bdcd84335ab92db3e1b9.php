<?php

/* AppBundle::standard_layout.html.twig */
class __TwigTemplate_acf38d6ff42039372e0f2df64c772661c14f829d0758bdcd84335ab92db3e1b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
            'bootlint' => array($this, 'block_bootlint'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_tab_menu"] = $this->renderBlock("tab_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        $context["_navbar_title"] = $this->renderBlock("navbar_title", $context, $blocks);
        // line 22
        $context["_list_filters_actions"] = $this->renderBlock("list_filters_actions", $context, $blocks);
        // line 23
//<html ";
//<html style=\"background-color:#0b3e6f; color:#01ff70;\" ";
        echo "
<!DOCTYPE html>
<html style=\"background-color:#0b3e6f\" ";
        // line 25
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
<head>
    ";
        // line 27
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 32
        echo "
    ";
        // line 33
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 43
        echo "
    ";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 98
        echo "
    <title>
        ";
        // line 100
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 120
        echo "    </title>
</head>
<body ";
        // line 122
        $this->displayBlock('body_attributes', $context, $blocks);
//<div class="wrapper"" >
//<div class="wrapper" style="background-color:#0b3e6f; color:#01ff70;" >
        echo ">
<div class=\"wrapper\" style=\"background-color:#0b3e6f;\" >

";
        // line 126 Habilita o icone no menu lateral e Habilita o cabeçalho
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 211
        echo "
";
        // line 212 Habilita o  menu lateral e Habilita o  detalhe
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 469
        echo "</div>

";
        // line 471
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "use_bootlint"), "method"))) {
            // line 472
            echo "    ";
            $this->displayBlock('bootlint', $context, $blocks);
        }
        // line 479
        echo "
<script>

    \$(document).ready(function () {
        
        
    $(\".foto\").change(function (){
     validate();
     });
   
   function validate() {
	var file_size = $('.foto')[0].files[0].size;
	if(file_size>2097152) {
		alert(\"O Arquivo contém mais que 2MB\");
		$('.foto').val('');
		return false;
	} 
	var ext = $('.foto').val().split('.').pop().toLowerCase();
 if($.inArray(ext, ['png','jpg','jpeg']) == -1) {
    alert('Tipo de arquivo inválido!');
    $('.foto').val('');
}
	return true;
  }
        

        // Mostra só no dashboard
 $(\".mask_responsavel\").focusout(function(){
    var phone, element;
    element = $(this);
    element.unmask();
    phone = element.val().replace(/\D/g, '');
    if(phone.length > 10) {
        element.mask(\"(99) 9 9999-999?9\");
    } else {
        element.mask(\"(99) 9999-9999?9\");
    }
}).trigger('focusout');

        $(\".mascara_data\").mask(\"99/99/9999\");
        
        ";
        // line 485
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method") == "sonata_admin_dashboard")) {
            // line 486
            echo "
        //setTimeout(function(){document.location.reload()},30000)

        var marker;

        var tecnicos = Array()

        ";
            // line 493
            $context["posicoesTecnicos"] = $this->getAttribute((isset($context["os_model"]) ? $context["os_model"] : null), "getPosicaoTecnicos", array(), "method");
            // line 494
            echo "
        ";
            // line 495
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posicoesTecnicos"]) ? $context["posicoesTecnicos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["posicao"]) {
                // line 496
                echo "            tecnicos.push(['";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["posicao"], "tecnico", array()), "id", array()), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["posicao"], "tecnico", array()), "nome", array()), "html", null, true);
                echo "', ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["posicao"], "latitude", array()), "html", null, true);
                echo ",  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["posicao"], "longitude", array()), "html", null, true);
                echo ", '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["posicao"], "batteryLevel", array()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["posicao"], "createdAt", array()), "d/m/YY H:i:s"), "html", null, true);
                echo "', 4])
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['posicao'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 498
            echo "
        // var tecnicos = [
        //     ['Bondi Beach', -16.251969, -50.194335, 4],
        //     ['Coogee Beach', -16.201969, -50.264335, 5],
        //     ['Cronulla Beach', -16.181969, -50.564335, 3],
        //     ['Manly Beach', -16.151969, -50.344335, 2],
        //     ['Maroubra Beach', -16.101969, -50.304335, 1]
        // ];

        \$(document).ready(function(){
            initMap();
        });

        function initMap() {

            var myLatlng = new google.maps.LatLng(-16.251969, -50.364335);

            // Create a map object and specify the DOM element for display.
            var map = new google.maps.Map(document.getElementById('map'), {
                center: myLatlng,
                scrollwheel: false,
                zoom: 8
            });

            map.addListener('zoom_changed', function() {
                google.maps.event.trigger(map, \"resize\");
                \$('#zoom_map').val(map.getZoom());
            });

            setMarkers(map);

            // marker = new google.maps.Marker({
            //     map: map,
            //     draggable: true,
            //     animation: google.maps.Animation.DROP,
            //     position: myLatlng
            // });
            // marker.addListener('dragend', handleEvent);
        }

        function setMarkers(map) {

            // var mIcon = {
            //   path: google.maps.SymbolPath.CIRCLE,
            //   fillOpacity: 1,
            //   fillColor: '#ff0000',
            //   strokeOpacity: 1,
            //   strokeWeight: 1,
            //   strokeColor: '#333',
            //   scale: 20
            // };

            for (var i = 0; i < tecnicos.length; i++) {
                var beach = tecnicos[i];

                var marker = new google.maps.Marker({
                    position: {lat: beach[2], lng: beach[3]},
                    map: map,
                    animation: google.maps.Animation.DROP,
                    //icon: mIcon,
                    title: beach[1],
                    label: {color: '#000', fontSize: '14px', fontWeight: '600', text:  beach[0]}
                });

                var infowindow = new google.maps.InfoWindow({
                    content: '<b>'+beach[1]+'</b><br/>Nível Bateria: <b>'+beach[4]+'%</b><br/>Atualizado em: <b>'+beach[5]+'</b>'
                });
                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open(map, marker);
                });
            }
        }

        ";
        }
        // line 572
        echo "
    });


    //
    //
    // // Gráficos
    //
    // var randomScalingFactor = function() {
    //     return Math.round(Math.random() * 100);
    // };
    //
    // var config = {
    //     type: 'pie',
    //     data: {
    //         datasets: [{
    //             data: [
    //                 randomScalingFactor(),
    //                 randomScalingFactor(),
    //                 randomScalingFactor(),
    //                 randomScalingFactor(),
    //                 randomScalingFactor(),
    //             ],
    //             backgroundColor: [
    //                 window.chartColors.red,
    //                 window.chartColors.orange,
    //                 window.chartColors.yellow,
    //                 window.chartColors.green,
    //                 window.chartColors.blue,
    //             ],
    //             label: 'Dataset 1'
    //         }],
    //         labels: [
    //             'Red',
    //             'Orange',
    //             'Yellow',
    //             'Green',
    //             'Blue'
    //         ]
    //     },
    //     options: {
    //         responsive: true
    //     }
    // };
    //
    // window.onload = function() {
    //     var ctx = document.getElementById('chart-area').getContext('2d');
    //     window.myPie = new Chart(ctx, config);
    // };
    //
    // document.getElementById('randomizeData').addEventListener('click', function() {
    //     config.data.datasets.forEach(function(dataset) {
    //         dataset.data = dataset.data.map(function() {
    //             return randomScalingFactor();
    //         });
    //     });
    //
    //     window.myPie.update();
    // });
    //
    // var colorNames = Object.keys(window.chartColors);
    // document.getElementById('addDataset').addEventListener('click', function() {
    //     var newDataset = {
    //         backgroundColor: [],
    //         data: [],
    //         label: 'New dataset ' + config.data.datasets.length,
    //     };
    //
    //     for (var index = 0; index < config.data.labels.length; ++index) {
    //         newDataset.data.push(randomScalingFactor());
    //
    //         var colorName = colorNames[index % colorNames.length];
    //         var newColor = window.chartColors[colorName];
    //         newDataset.backgroundColor.push(newColor);
    //     }
    //
    //     config.data.datasets.push(newDataset);
    //     window.myPie.update();
    // });
    //
    // document.getElementById('removeDataset').addEventListener('click', function() {
    //     config.data.datasets.splice(0, 1);
    //     window.myPie.update();
    // });

</script>

<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBakjXapuMHSBkLOrbAowlksYZ_ydPfTi4\"></script>

</body>
</html>
";
    }

    // line 25
    public function block_html_attributes($context, array $blocks = array())
    {
        echo "class=\"no-js\"";
    }

    // line 27
    public function block_meta_tags($context, array $blocks = array())
    {
        // line 28
        echo "        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta charset=\"UTF-8\">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    ";
    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 34
        echo "        ";
        if (array_key_exists("admin_pool", $context)) {
            // line 35
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
                // line 36
                echo "                <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($context["stylesheet"]), "html", null, true);
                echo "\">
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "        ";
        }
        // line 39
        echo "                <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/full_calendar/fullcalendar.min.css"), "html", null, true);
        echo "\">
                <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/full_calendar/fullcalendar.print.min.css"), "html", null, true);
        echo "\" media='print'>

    ";
    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        // line 45
        echo "        <script>
            window.SONATA_CONFIG = {
                CONFIRM_EXIT: ";
        // line 47
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                USE_SELECT2: ";
        // line 48
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "use_select2"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                USE_ICHECK: ";
        // line 49
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "use_icheck"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        // line 50
        echo "            };
            window.SONATA_TRANSLATIONS = {
                CONFIRM_EXIT:  '";
        // line 52
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
            };

            // http://getbootstrap.com/getting-started/#support-ie10-width
            if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                var msViewportStyle = document.createElement('style');
                msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                document.querySelector('head').appendChild(msViewportStyle);
            }

            var __global_path_save_homologacao_os = '";
        // line 62
        echo $this->env->getExtension('routing')->getPath("create_homologacao_os");
        echo "';

        </script>

        ";
        // line 66
        if (array_key_exists("admin_pool", $context)) {
            // line 67
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "javascripts", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
                // line 68
                echo "        <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($context["javascript"]), "html", null, true);
                echo "\"></script>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "        ";
        }
        // line 71
        echo "
        ";
        // line 72
        $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array());
        // line 73
        echo "        ";
        // line 74
        echo "        ";
        if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : null), 0, 2) != "en")) {
            // line 75
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . strtr((isset($context["locale"]) ? $context["locale"] : null), array("_" => "-"))) . ".js")), "html", null, true);
            echo "\"></script>
        ";
        }
        // line 77
        echo "
        ";
        // line 79
        echo "        ";
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "use_select2"), "method"))) {
            // line 80
            echo "        ";
            if (((isset($context["locale"]) ? $context["locale"] : null) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 81
            echo "
        ";
            // line 83
            echo "        ";
            if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : null), 0, 2) != "en")) {
                // line 84
                echo "        <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . strtr((isset($context["locale"]) ? $context["locale"] : null), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
        ";
            }
            // line 86
            echo "        ";
        }
        // line 87
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/maskinput.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/accounting.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/full_calendar/lib/moment.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/full_calendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/full_calendar/locale/pt-br.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/jquery.maskMoney.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/chart-util.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js\"></script>
        
        <style>
        
        .main-sidebar, .left-side{
            top: 30px;
        }
        
        </style>
        
        
                   <div id=\"modalCnpj\" class=\"modal fade\"  tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Atenção!</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <p>Já existe um cadastro com este CPF/CNPJ</p>
        <p>Deseja edita-lo ?</p>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fechar</button>
        <a href=\"\" class=\"btn btn-primary stretched-link\" id=\"linkRegistro\">Editar</a>
      </div>
    </div>
  </div>
</div>
    ";
    }

    // line 100
    public function block_sonata_head_title($context, array $blocks = array())
    {
        // line 101
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 103
        if ( !twig_test_empty((isset($context["_title"]) ? $context["_title"] : null))) {
            // line 104
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : null);
            echo "
            ";
        } else {
            // line 106
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 107
                echo "                    -
                    ";
                // line 108
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 109
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 110
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 111
                            echo "                                &gt;
                            ";
                        }
                        // line 113
                        echo "
                            ";
                        // line 114
                        echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 116
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 117
                echo "                ";
            }
            // line 118
            echo "            ";
        }
        // line 119
        echo "        ";
    }

    // line 122 Habilita a cor do menu lateral e Habilita a cor do cabeçalho
    public function block_body_attributes($context, array $blocks = array())
    {
//        echo "class=\"sonata-bc skin-blue fixed\"";
        echo "";
    }

    // line 126
    public function block_sonata_header($context, array $blocks = array())
    {
        // line 127
        echo "    <header class=\"main-header\">
        ";
        // line 128
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 135 Habilita a logo acima do menu no cabeçalho
        echo "        ";
        $this->displayBlock('logo', $context, $blocks);
        // line 149 Habilita o quadro do endereço, mapa menus e user que fica no cabeçalho
        echo "        ";
        $this->displayBlock('sonata_nav', $context, $blocks);//sonata_nav
        // line 209
        echo "    </header>
";
    }

    // line 128
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        // line 129
        echo "            <noscript>
                <div class=\"noscript-warning\">
                    ";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                </div>
            </noscript>
        ";
    }

    // line 135
    public function block_logo($context, array $blocks = array())
    {
        // line 136
        echo "            ";
        if (array_key_exists("admin_pool", $context)) {
            // line 137
            echo "                ";
            ob_start();
            // line 138
            echo "                    <a class=\"logo\" href=\"";
            echo $this->env->getExtension('routing')->getPath("sonata_admin_dashboard");
            echo "\">
                        ";
            // line 139
            if ((("single_image" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "title_mode"), "method")))) {
                // line 140
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "titlelogo", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "title", array()), "html", null, true);
                echo "\">
                        ";
            }
            // line 142
            echo "                        ";
            if ((("single_text" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "title_mode"), "method")))) {
                // line 143
                echo "                            <span>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "title", array()), "html", null, true);
                echo "</span>
                        ";
            }
            // line 145
            echo "                    </a>
                ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 147
            echo "            ";
        }
        // line 148
        echo "        ";
    }

    // line 149
    public function block_sonata_nav($context, array $blocks = array())
    {
        // line 150
        echo "            ";
        if (array_key_exists("admin_pool", $context)) {
            // line 151
            echo "                <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                    </a>

                    <div class=\"navbar-left\">
                        ";
            // line 157 Habilita o quadro do endereço no cabeçalho
            $this->displayBlock('sonata_breadcrumb', $context, $blocks);
            // line 184
            echo "                    </div>

                    ";
            // line 186 Habilita o mapa menus e user que fica no cabeçalho
            $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
            // line 206
            echo "                </nav>
            ";
        }
        // line 208
        echo "        ";
    }

    // line 157
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        // line 158
        echo "                            <div class=\"hidden-xs\">
                                ";
        // line 159
        if (( !twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null)) || array_key_exists("action", $context))) {
            // line 160
            echo "                                    <ol class=\"nav navbar-top-links breadcrumb\" style=\"background-color:#0b3e6f\">
                                        ";
            // line 161
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null))) {
                // line 162
                echo "                                            ";
                if (array_key_exists("action", $context)) {
                    // line 163
                    echo "                                                ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 164
                        echo "                                                    ";
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 165
                            echo "                                                        <li>
                                                            ";
                            // line 166
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 167
                                echo "                                                                <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">";
                                echo $this->getAttribute($context["menu"], "label", array());
                                echo "</a>
                                                            ";
                            } else {
                                // line 169
                                echo "                                                                ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                                echo "
                                                            ";
                            }
                            // line 171
                            echo "                                                        </li>
                                                    ";
                        } else {
                            // line 173
                            echo "                                                        <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                            echo "</span></li>
                                                    ";
                        }
                        // line 175
                        echo "                                                ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 176
                    echo "                                            ";
                }
                // line 177
                echo "                                        ";
            } else {
                // line 178
                echo "                                            ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null);
                echo "
                                        ";
            }
            // line 180
            echo "                                    </ol>
                                ";
        }
        // line 182
        echo "                            </div>
                        ";
    }

    // line 186
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        // line 187
        echo "                        <div class=\"navbar-custom-menu\">
                            <ul class=\"nav navbar-nav\">
                                <li class=\"dropdown\">
                                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                        <i class=\"fa fa-plus-square fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                    </a>
                                    ";
        // line 193
        $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getTemplate", array(0 => "add_block"), "method"), "AppBundle::standard_layout.html.twig", 193)->display($context);
        // line 194
        echo "                                </li>
                                <li class=\"dropdown user-menu\">
                                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                        <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-user\">
                                        ";
        // line 200
        $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getTemplate", array(0 => "user_block"), "method"), "AppBundle::standard_layout.html.twig", 200)->display($context);
        // line 201
        echo "                                    </ul>
                                </li>
                            </ul>
                        </div>
                    ";
    }

    // line 212
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        // line 213
        echo "    ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 247
        echo "
    <div class=\"content-wrapper\">
        ";
        // line 249
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 467
        echo "    </div>
";
    }

    // line 213 Habilita os menus no menu
    public function block_sonata_left_side($context, array $blocks = array())
    {
        // line 214
        echo "        <aside class=\"main-sidebar\">
            <section class=\"sidebar\">
                ";
        // line 216
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 244
        echo "            </section>
        </aside>
    ";
    }

    // line 216 Habilita os menus no menu
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        // line 217 Habilita a busca no menu
        echo "                    ";
//        $this->displayBlock('sonata_sidebar_search', $context, $blocks);//busca no menu
//        $this->displayBlock('html_attributes', $context, $blocks);
//        $this->displayBlock('meta_tags', $context, $blocks);
//        $this->displayBlock('stylesheets', $context, $blocks);
//        $this->displayBlock('javascripts', $context, $blocks);
//        $this->displayBlock('sonata_head_title', $context, $blocks);              //endereço sem bloco abaixo do logo no cabeçalho
//        $this->displayBlock('body_attributes', $context, $blocks);
//        $this->displayBlock('sonata_header', $context, $blocks);                  //cabeçalho da página com o log
//        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
//        $this->displayBlock('logo', $context, $blocks);                           //logo que fica no cabeçalho
//        $this->displayBlock('sonata_nav', $context, $blocks);                     //quadro do endereço, mapa menus e user que fica no cabeçalho
//        $this->displayBlock('sonata_breadcrumb', $context, $blocks);              //quadro do endereço que fica no cabeçalho
//        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);            //mapa menus e user que fica no cabeçalho
//        $this->displayBlock('sonata_wrapper', $context, $blocks);                 //Detalhe da página
//        $this->displayBlock('sonata_left_side', $context, $blocks);
//        $this->displayBlock('sonata_side_nav', $context, $blocks);
//        $this->displayBlock('side_bar_before_nav', $context, $blocks);
//        $this->displayBlock('side_bar_nav', $context, $blocks);
//        $this->displayBlock('sonata_page_content', $context, $blocks);            //filtro, ações, forma visualização e botão novo da páginana no detalhe
//        $this->displayBlock('sonata_page_content_header', $context, $blocks);     //filtro, ações, forma visualização
//        $this->displayBlock('sonata_page_content_nav', $context, $blocks);        //filtro, ações, forma visualização
//        $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
//        $this->displayBlock('sonata_admin_content', $context, $blocks);         //botão novo da páginana no detalhe
//        $this->displayBlock('notice', $context, $blocks);
//        $this->displayBlock('bootlint', $context, $blocks);

        // line 231
        echo "
                    ";

        // line 232
        $this->displayBlock('side_bar_before_nav', $context, $blocks);

        // line 233 Habilita os menus no menu
        echo "                    ";
        $this->displayBlock('side_bar_nav', $context, $blocks);

        // line 238
        echo "                    ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);

        // line 243
        echo "                ";
    }

    // line 217
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        // line 218 Habilita o campo Busca no menu
        echo "                        ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 219
            echo "                            <form action=\"";
            echo $this->env->getExtension('routing')->getPath("sonata_admin_search");
            echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                <div class=\"input-group custom-search-form\">
                                    <input type=\"text\" name=\"q\" value=\"";
            // line 221
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                                                <span class=\"input-group-btn\">
                                                    <button class=\"btn btn-flat\" type=\"submit\">
                                                        <i class=\"fa fa-search\"></i>
                                                    </button>
                                                </span>
                                </div>
                            </form>
                        ";
        }
        // line 230
        echo "                    ";
    }

    // line 232
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 233
    public function block_side_bar_nav($context, array $blocks = array())
    {
        // line 234 Habilita os menus
        echo "                        ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 235
            echo "                            ";
            echo $this->env->getExtension('knp_menu')->render("sonata_admin_sidebar", array("template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getTemplate", array(0 => "knp_menu_template"), "method")));
            echo "
                        ";
        }
        // line 237
        echo "                    ";
    }

    // line 249
    public function block_sonata_page_content($context, array $blocks = array())
    {
        // line 250
        echo "            <section class=\"content-header\">

                ";
        // line 252
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 300
        echo "            </section>

            <section class=\"content\">
                ";
        // line 303
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 465
        echo "            </section>
        ";
    }

    // line 252
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        // line 253
        echo "                    ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 299
        echo "                ";
    }

    // line 253
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        // line 254
        echo "                        ";
        if ((( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : null)) ||  !twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : null))) ||  !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : null)))) {
            // line 255
            echo "                            <nav class=\"navbar navbar-default\" role=\"navigation\">
                                <div class=\"container-fluid\">
                                    ";
            // line 257
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 264
            echo "
                                    <div class=\"navbar-collapse\">
                                        <div class=\"navbar-left\">
                                            ";
            // line 267
            if ( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : null))) {
                // line 268
                echo "                                                ";
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : null);
                echo "
                                            ";
            }
            // line 270
            echo "                                        </div>

                                        ";
            // line 272
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) ? $context["action"] : null) == "list")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "listModes", array())) > 1))) {
                // line 273
                echo "                                            <div class=\"nav navbar-right\">
                                                ";
                // line 274
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 275
                    echo "                                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 277
                echo "                                            </div>
                                        ";
            }
            // line 279
            echo "
                                        ";
            // line 280
            if ( !twig_test_empty(trim(strtr((isset($context["_actions"]) ? $context["_actions"] : null), array("<li>" => "", "</li>" => ""))))) {
                // line 281
                echo "                                            <ul class=\"nav navbar-nav navbar-right\">
                                                <li class=\"dropdown sonata-actions\">
                                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 283
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                    <ul class=\"dropdown-menu\" role=\"menu\">
                                                        ";
                // line 285
                echo (isset($context["_actions"]) ? $context["_actions"] : null);
                echo "
                                                    </ul>
                                                </li>
                                            </ul>
                                        ";
            }
            // line 290
            echo "
                                        ";
            // line 291
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : null))) {
                // line 292
                echo "                                            ";
                echo (isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : null);
                echo "
                                        ";
            }
            // line 294
            echo "                                    </div>
                                </div>
                            </nav>
                        ";
        }
        // line 298
        echo "                    ";
    }

    // line 257
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        // line 258
        echo "                                        ";
        if ( !twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : null))) {
            // line 259
            echo "                                            <div class=\"navbar-header\">
                                                <a class=\"navbar-brand\" href=\"#\">";
            // line 260
            echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : null);
            echo "</a>
                                            </div>
                                        ";
        }
        // line 263
        echo "                                    ";
    }

    // line 303
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 304
        echo "
                    ";
        // line 305
        $this->displayBlock('notice', $context, $blocks);
        // line 308
        echo "
                    ";
        // line 309
        if ( !twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : null))) {
            // line 310
            echo "                        <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : null);
            echo "</div>
                    ";
        }
        // line 312
        echo "
                    ";
        // line 313
        if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : null))) {
            // line 314
            echo "
                        <div class=\"sonata-ba-content\">

                            ";
            // line 317
            if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : null))) {
                // line 318
                echo "
                                ";
                // line 320
                echo "                                ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_route"), "method") != "sonata_admin_dashboard")) {
                    // line 321
                    echo "
                                    <div class=\"sonata-ba-content\">";
                    // line 322
                    echo (isset($context["_content"]) ? $context["_content"] : null);
                    echo "</div>

                                ";
                } else {
                    // line 325
                    echo "
                                    ";
                    // line 327
                    echo "                                    ";
                    if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_CLIENTE"))) {
                        // line 328
                        echo "
                                        <h4><i>Olá <strong style=\"color: rgb(255, 140, 52) ;\">";
                        // line 329
                        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "perfil", array(), "any", false, true), "nome", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "perfil", array(), "any", false, true), "nome", array()), $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) : ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))), "html", null, true);
                        echo "</strong>, seja bem-vindo!</i></h4>
                                        <p>
                                            Neste ambiente você pode acompanhar a execução das ordens de serviços realizadas pela FLAVIS.
                                            Caso encontre alguma difculdade ou queria reportar algum problema entre em contato no
                                            <a href=\"#\" style=\"color: rgb(255, 140, 52) ;text-decoration: underline;\">(62) 3954-6527 / (62) 98242-8568</a>
                                            ou envie um e-mail para <a href=\"mailto:manutencao@flavis.com.br\" style=\"color: rgb(255, 140, 52) ;text-decoration: underline;\">
                                                manutencao@flavis.com.br</a>
                                        </p>

                                        <div class=\"content list-dashboard\">

                                            <div class=\"row\">
                                                <div class=\"col-md-12\">
                                                    <div class=\"col-md-6\">
                                                     <!--  <h1>Os's Homologadas</h1>
                                                        <h2>";
                        // line 344
                       // echo twig_escape_filter($this->env, $this->getAttribute((isset($context["os_model"]) ? $context["os_model"] : null), "totalOsAbertas", array(), "method"), "html", null, true);
                        echo " <a href=\"";
                        echo $this->env->getExtension('routing')->getPath("admin_app_ordemservico_list");
                        echo "\"><i class=\"fa fa-arrow-circle-o-right\" aria-hidden=\"true\" style=\"color: rgb(255, 140, 52)  ;\"></i></a></h2>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    ";
                        // line 352
                        echo "                                    ";
                    } elseif (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->env->getExtension('security')->isGranted($this->getAttribute((isset($context["mapeamento_string_model"]) ? $context["mapeamento_string_model"] : null), "getRoleGerenteOperacional", array(), "method")))) {
                        // line 353
                        echo "
                                        <div class=\"sonata-ba-content\" style=\"position:relative\">

                                            ";
                        // line 357 Localização dos Técnicos
                        echo "                                            <div class=\"box box-primary\" style=\"margin-bottom: 100px;\">

                                                <div class=\"box-header with-border\">
                                                    <h4 class=\"box-title\">
                                                        Localização dos Técnicos<br/>

                                                ";//OrdemServicoAdmin os_model
                        // line 363
                        $context["posicoesTecnicos"] = $this->getAttribute((isset($context["os_model"]) ? $context["os_model"] : null), "getPosicaoTecnicos", array(), "method");
                        // line 364
                        echo "
                                                        ";
                        // line 365 Localização dos Técnicos em Lista
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["posicoesTecnicos"]) ? $context["posicoesTecnicos"] : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["posicao"]) {
                            // line 366
                            echo "                                                            <small>";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["posicao"], "tecnico", array()), "nome", array()), "html", null, true);
                            echo ": <b>";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["posicao"], "tecnico", array()), "id", array()), "html", null, true);
                            echo "</b></small> &nbsp;&nbsp;

                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['posicao'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 369 Localização dos Técnicos no Mapa
                        echo "                                                       
                                                    </h4>

                                                </div>

                                                <div class=\"box-body table-responsive no-padding\">
                                                    <div id=\"map\" style=\"width: 100%;height: 450px;\"></div>
                                                </div>
                                            </div>
                                            ";
                        // line 379
                        echo "
                                            ";
                        // line 381 Informações de OS com gráficos
//                        echo "                                            <div class=\"box box-primary\" style=\"margin-bottom: 100px;\">
//
//                                                <div class=\"box-header with-border\">
//                                                    <h4 class=\"box-title\">
//                                                        Informações de OS
//                                                    </h4>
//                                                </div>
//
//                                                <div class=\"box-body table-responsive\">
//                                                    <div id=\"canvas-holder\" style=\"width:40%\">
//                                                        <canvas id=\"chart-area\"></canvas>
//                                                    </div>
//                                                    <button id=\"randomizeData\">Randomize Data</button>
//                                                    <button id=\"addDataset\">Add Dataset</button>
//                                                    <button id=\"removeDataset\">Remove Dataset</button>
//                                                </div>
//                                            </div>
//                                            ";
                        // line 399
                        echo "
                                            ";
                        // line 401 Informações de Clientes
//                        echo "                                            <div class=\"box box-primary\" style=\"margin-bottom: 100px;\">
//
//                                                <div class=\"box-header with-border\">
//                                                    <h4 class=\"box-title\">
//                                                        Informações de Clientes
//                                                    </h4>
//                                                </div>
//
//                                                <div class=\"box-body table-responsive no-padding\">
//
//                                                </div>
//                                            </div>
//                                            ";
                        // line 414
                        echo "
                                            ";
                        // line 416 Informações de Desempenho
//                        echo "                                            <div class=\"box box-primary\" style=\"margin-bottom: 100px;\">
//
//                                                <div class=\"box-header with-border\">
//                                                    <h4 class=\"box-title\">
//                                                        Informações de Desempenho
//                                                    </h4>
//                                                </div>
//
//                                                <div class=\"box-body table-responsive no-padding\">
//
//                                                </div>
//                                            </div>
//                                            ";
                        // line 429
                        echo "
                                        </div>

                                    ";
                    }
                    // line 433
                    echo "
                                ";
                }
                // line 435
                echo "
                            ";
            } else {
                // line 437
                echo "                                ";
                echo (isset($context["_content"]) ? $context["_content"] : null);
                echo "
                            ";
            }
            // line 439
            echo "
                        </div>

                    ";
        }
        // line 443
        echo "
                    ";
        // line 444
        if ( !twig_test_empty((isset($context["_show"]) ? $context["_show"] : null))) {
            // line 445
            echo "                        <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : null);
            echo "</div>
                    ";
        }
        // line 447
        echo "
                    ";
        // line 448
        if ( !twig_test_empty((isset($context["_form"]) ? $context["_form"] : null))) {
            // line 449
            echo "                        <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : null);
            echo "</div>
                    ";
        }
        // line 451
        echo "
                    ";
        // line 452
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : null)) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : null)))) {
            // line 453
            echo "                        ";
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : null))) {
                // line 454
                echo "                            <div class=\"row\">
                                ";
                // line 455
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : null);
                echo "
                            </div>
                        ";
            }
            // line 458
            echo "
                        <div class=\"row\">
                            ";
            // line 460
            echo (isset($context["_list_table"]) ? $context["_list_table"] : null);
            echo "
                        </div>

                    ";
        }
        // line 464
        echo "                ";
    }

    // line 305
    public function block_notice($context, array $blocks = array())
    {
        // line 306
        echo "                        ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "AppBundle::standard_layout.html.twig", 306)->display($context);
        // line 307
        echo "                    ";
    }

    // line 472
    public function block_bootlint($context, array $blocks = array())
    {
        // line 473
        echo "        ";
        // line 474
        echo "        <script type=\"text/javascript\">
            javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "AppBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1421 => 474,  1419 => 473,  1416 => 472,  1412 => 307,  1409 => 306,  1406 => 305,  1402 => 464,  1395 => 460,  1391 => 458,  1385 => 455,  1382 => 454,  1379 => 453,  1377 => 452,  1374 => 451,  1368 => 449,  1366 => 448,  1363 => 447,  1357 => 445,  1355 => 444,  1352 => 443,  1346 => 439,  1340 => 437,  1336 => 435,  1332 => 433,  1326 => 429,  1312 => 416,  1309 => 414,  1295 => 401,  1292 => 399,  1273 => 381,  1270 => 379,  1259 => 369,  1247 => 366,  1243 => 365,  1240 => 364,  1238 => 363,  1230 => 357,  1225 => 353,  1222 => 352,  1210 => 344,  1192 => 329,  1189 => 328,  1186 => 327,  1183 => 325,  1177 => 322,  1174 => 321,  1171 => 320,  1168 => 318,  1166 => 317,  1161 => 314,  1159 => 313,  1156 => 312,  1150 => 310,  1148 => 309,  1145 => 308,  1143 => 305,  1140 => 304,  1137 => 303,  1133 => 263,  1127 => 260,  1124 => 259,  1121 => 258,  1118 => 257,  1114 => 298,  1108 => 294,  1102 => 292,  1100 => 291,  1097 => 290,  1089 => 285,  1084 => 283,  1080 => 281,  1078 => 280,  1075 => 279,  1071 => 277,  1056 => 275,  1052 => 274,  1049 => 273,  1047 => 272,  1043 => 270,  1037 => 268,  1035 => 267,  1030 => 264,  1028 => 257,  1024 => 255,  1021 => 254,  1018 => 253,  1014 => 299,  1011 => 253,  1008 => 252,  1003 => 465,  1001 => 303,  996 => 300,  994 => 252,  990 => 250,  987 => 249,  980 => 239,  977 => 238,  973 => 237,  967 => 235,  964 => 234,  961 => 233,  955 => 232,  951 => 230,  937 => 221,  931 => 219,  928 => 218,  925 => 217,  921 => 243,  918 => 238,  915 => 233,  913 => 232,  910 => 231,  907 => 217,  904 => 216,  898 => 244,  896 => 216,  892 => 214,  889 => 213,  884 => 467,  882 => 249,  878 => 247,  875 => 213,  872 => 212,  864 => 201,  862 => 200,  854 => 194,  852 => 193,  844 => 187,  841 => 186,  836 => 182,  832 => 180,  826 => 178,  823 => 177,  820 => 176,  806 => 175,  800 => 173,  796 => 171,  790 => 169,  782 => 167,  780 => 166,  777 => 165,  774 => 164,  756 => 163,  753 => 162,  751 => 161,  748 => 160,  746 => 159,  743 => 158,  740 => 157,  736 => 208,  732 => 206,  730 => 186,  726 => 184,  724 => 157,  716 => 151,  713 => 150,  710 => 149,  706 => 148,  703 => 147,  699 => 145,  693 => 143,  690 => 142,  682 => 140,  680 => 139,  675 => 138,  672 => 137,  669 => 136,  666 => 135,  658 => 131,  654 => 129,  651 => 128,  646 => 209,  643 => 149,  640 => 135,  638 => 128,  635 => 127,  632 => 126,  626 => 122,  622 => 119,  619 => 118,  616 => 117,  602 => 116,  597 => 114,  594 => 113,  590 => 111,  587 => 110,  584 => 109,  567 => 108,  564 => 107,  561 => 106,  555 => 104,  553 => 103,  547 => 101,  544 => 100,  536 => 94,  532 => 93,  528 => 92,  524 => 91,  520 => 90,  516 => 89,  512 => 88,  507 => 87,  504 => 86,  498 => 84,  495 => 83,  492 => 81,  487 => 80,  484 => 79,  481 => 77,  475 => 75,  472 => 74,  470 => 73,  468 => 72,  465 => 71,  462 => 70,  453 => 68,  448 => 67,  446 => 66,  439 => 62,  426 => 52,  422 => 50,  416 => 49,  408 => 48,  400 => 47,  396 => 45,  393 => 44,  386 => 40,  381 => 39,  378 => 38,  369 => 36,  364 => 35,  361 => 34,  358 => 33,  351 => 28,  348 => 27,  342 => 25,  247 => 572,  171 => 498,  152 => 496,  148 => 495,  145 => 494,  143 => 493,  134 => 486,  132 => 485,  124 => 479,  120 => 472,  118 => 471,  114 => 469,  112 => 212,  109 => 211,  107 => 126,  100 => 122,  96 => 120,  94 => 100,  90 => 98,  88 => 44,  85 => 43,  83 => 33,  80 => 32,  78 => 27,  73 => 25,  69 => 23,  67 => 22,  65 => 21,  63 => 20,  61 => 19,  59 => 18,  57 => 17,  55 => 16,  53 => 15,  51 => 14,  49 => 13,  47 => 12,  45 => 11,);
    }
}
