<main class=" container-fluid" style="overflow-y:scroll;">

  <div class="">

    <div class="container-fluid">
      <div class="">
        <!-- widget temperatura-->
        <div id="m-booked-prime-days-99676">
          <div class="weather-customize widget-type-prime-days">
            <div class="booked-prime-days-in">
              <div class="booked-prime-days-data">
                <div class="booked-pd-today">
                  <div class="booked-pd-today-img wrz-03 "></div>
                  <div class="booked-pd-today-temperature">
                    <div class="booked-wzs-pd-val">
                      <div class="booked-wzs-pd-number"><span class="plus">+</span>25</div>
                      <div class="booked-wzs-pd-dergee">
                        <div class="booked-wzs-pd-dergee-val">&deg;</div>
                        <div class="booked-wzs-pd-dergee-name">C</div>
                      </div>
                    </div>
                  </div>
                  <div class="booked-pd-today-extreme">
                    <div class="booked-pd booked-pd-h"><span>Alta:</span><span class="plus">+</span>32</div>
                    <div class="booked-pd booked-pd-l"><span>Baja:</span><span class="plus">+</span>16</div>
                  </div>
                </div>
                <div class="booked-pd-ndays">
                  <div class="booked-pd-nitem">
                    <div class="booked-pd-nidi wrz-sml wrzs-03"></div>
                    <div class="booked-pd-nidw">Dom</div>
                  </div>
                  <div class="booked-pd-nitem">
                    <div class="booked-pd-nidi wrz-sml wrzs-18"></div>
                    <div class="booked-pd-nidw">Lun</div>
                  </div>
                  <div class="booked-pd-nitem">
                    <div class="booked-pd-nidi wrz-sml wrzs-18"></div>
                    <div class="booked-pd-nidw">Mar</div>
                  </div>
                  <div class="booked-pd-nitem">
                    <div class="booked-pd-nidi wrz-sml wrzs-18"></div>
                    <div class="booked-pd-nidw">Mié</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row ">
        <!-- TEMP -->
        <div class="col-12 col-md-6 col-xl-4">
          <div class="mdl-card  weather">
            <div class="mdl-card__supporting-text mdl-card--expand hc-color-naranja">
              <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">Temperatura</h2>
                <i class="material-icons">thermostat</i>
              </div>
              <div class="mdl-card__supporting-text mdl-card--expand">
                <p id="display_tempamb" class="weather-temperature">--<sup>&deg;</sup></p>

                <script type="text/javascript">
                  var css_file = document.createElement("link");
                  var widgetUrl = location.href;
                  css_file.setAttribute("rel", "stylesheet");
                  css_file.setAttribute("type", "text/css");
                  css_file.setAttribute("href", 'https://s.bookcdn.com/css/w/booked-wzs-widget-prime-days.css?v=0.0.1');
                  document.getElementsByTagName("head")[0].appendChild(css_file);

                  function setWidgetData_99676(data) {
                    if (typeof(data) != 'undefined' && data.results.length > 0) {
                      for (var i = 0; i < data.results.length; ++i) {
                        var objMainBlock = document.getElementById('m-booked-prime-days-99676');
                        if (objMainBlock !== null) {
                          var copyBlock = document.getElementById('m-bookew-weather-copy-' + data.results[i].widget_type);
                          objMainBlock.innerHTML = data.results[i].html_code;
                          if (copyBlock !== null) objMainBlock.appendChild(copyBlock);
                        }
                      }
                    } else {
                      alert('data=undefined||data.results is empty');
                    }
                  }
                  var widgetSrc = "https://widgets.booked.net/weather/info?action=get_weather_info;ver=7;cityID=37228;type=6;scode=124;ltid=3457;domid=582;anc_id=60187;countday=4;cmetric=1;wlangID=4;color=ffffff;wwidth=250;header_color=ffffff;text_color=ffffff;link_color=ffffff;border_form=1;footer_color=ffffff;footer_text_color=ffffff;transparent=1;v=0.0.1";
                  widgetSrc += ';ref=' + widgetUrl;
                  widgetSrc += ';rand_id=99676';
                  var weatherBookedScript = document.createElement("script");
                  weatherBookedScript.setAttribute("type", "text/javascript");
                  weatherBookedScript.src = widgetSrc;
                  document.body.appendChild(weatherBookedScript)
                </script><!-- weather widget end -->
              </div>
            </div>
          </div>
        </div>
        <!-- HUM-->
        <div class="col-12 col-md-6 col-xl-4">
          <div class="mdl-card  weather">
            <div class="mdl-card__supporting-text mdl-card--expand hc-color-celeste">
              <div class="mdl-card__title">
                <h2 class="mdl-card__title-text ">Humedad %</h2>


              </div>
              <div class="mdl-card__supporting-text mdl-card--expand">
                <p id="display_hum" class="weather-temperature">--</p>


              </div>
            </div>
          </div>
        </div>
        <!-- Nivel CO2 -->
        <div class="col-12 col-md-6 col-xl-4">
          <div class="mdl-card  weather">
            <div class="mdl-card__supporting-text mdl-card--expand hc-color-gris ">
              <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">CO2</h2>
                <i class="material-icons">local_fire_department</i>
                <div class="mdl-layout-spacer"></div>
              </div>
              <div class="mdl-card__supporting-text mdl-card--expand">
                <p id="display_co2" class="weather-temperature">--<sup>&deg;</sup></p>


                <script type="text/javascript">
                  var css_file = document.createElement("link");
                  var widgetUrl = location.href;
                  css_file.setAttribute("rel", "stylesheet");
                  css_file.setAttribute("type", "text/css");
                  css_file.setAttribute("href", 'https://s.bookcdn.com/css/w/booked-wzs-widget-prime-days.css?v=0.0.1');
                  document.getElementsByTagName("head")[0].appendChild(css_file);

                  function setWidgetData_99676(data) {
                    if (typeof(data) != 'undefined' && data.results.length > 0) {
                      for (var i = 0; i < data.results.length; ++i) {
                        var objMainBlock = document.getElementById('m-booked-prime-days-99676');
                        if (objMainBlock !== null) {
                          var copyBlock = document.getElementById('m-bookew-weather-copy-' + data.results[i].widget_type);
                          objMainBlock.innerHTML = data.results[i].html_code;
                          if (copyBlock !== null) objMainBlock.appendChild(copyBlock);
                        }
                      }
                    } else {
                      alert('data=undefined||data.results is empty');
                    }
                  }
                  var widgetSrc = "https://widgets.booked.net/weather/info?action=get_weather_info;ver=7;cityID=37228;type=6;scode=124;ltid=3457;domid=582;anc_id=60187;countday=4;cmetric=1;wlangID=4;color=ffffff;wwidth=250;header_color=ffffff;text_color=ffffff;link_color=ffffff;border_form=1;footer_color=ffffff;footer_text_color=ffffff;transparent=1;v=0.0.1";
                  widgetSrc += ';ref=' + widgetUrl;
                  widgetSrc += ';rand_id=99676';
                  var weatherBookedScript = document.createElement("script");
                  weatherBookedScript.setAttribute("type", "text/javascript");
                  weatherBookedScript.src = widgetSrc;
                  document.body.appendChild(weatherBookedScript)
                </script><!-- weather widget end -->

                <!-- <p class="weather-description"> -->

                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- pH -->
        <div class="col-12 col-md-6 col-xl-4">
          <div class="mdl-card  weather">
            <div class="mdl-card__supporting-text mdl-card--expand hc-color-verde">
              <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">pH</h2>
                <i class="material-icons">colorize</i>


              </div>
              <p id="display_ph" class="weather-temperature">--</p>

            </div>
          </div>
        </div>
        <!-- Conductividad -->
        <div class="col-12 col-md-6 col-xl-4">
          <div class="mdl-card  weather">
            <div class="mdl-card__supporting-text mdl-card--expand hc-color-azul">
              <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">Conductividad</h2>
                <i class="material-icons">bolt</i>
              </div>
              <p id="display_conduc" class="weather-temperature">--</p>
            </div>
          </div>
        </div>
        <!-- H2O -->
        <div class="col-12 col-md-6 col-xl-4">
          <div class="mdl-card  weather">
            <div class="mdl-card__supporting-text mdl-card--expand hc-color-azul-2">
              <div class="mdl-card__title">
                <h2 class="mdl-card__title-text ">Nivel H2O</h2>
                <i class="material-icons">water</i>

              </div>
              <p id="display_niv" class="weather-temperature">--</p>

            </div>
          </div>
        </div>


      </div>


      <!-- Actuadores-->
      <div class="row">
        <div class="col-12 col-md-4 hc-box-a">
          <div class="mdl-card  trending">
            <div class="mdl-card__supporting-text hc-color-rojo">
              <div class="mdl-card__title ">
                <h2 class="mdl-card__title-text">Actuadores</h2>
              </div>
              <ul class="mdl-list">
                <li class="mdl-list__item">
                  <span class="mdl-list__item-primary-content list__item-text">BOMBA DE AGUA</span>
                  <span class="mdl-list__item-secondary-content">
                    <!-- SWITCH-->
                    <label class="switch">
                      <input onchange="sw1_change()" type="checkbox" id="display_sw1">
                      <span class="slider round"></span>
                    </label>
                  </span>
                  <span class="material-icons hc-icono">check_circle</span>
                </li>
                <li class="mdl-list__item list__item--border-top">
                  <span class="mdl-list__item-primary-content list__item-text">EXTRACTORES</span>
                  <span class="mdl-list__item-secondary-content">
                    <!-- SWITCH-->
                    <label class="switch">
                      <input onchange="sw2_change()" type="checkbox" id="display_sw2">
                      <span class="slider round"></span>
                    </label>                    
                  </span>
                  <span class="material-icons hc-icono">check_circle</span>
                </li>

                <li class="mdl-list__item list__item--border-top">
                  <span class="mdl-list__item-primary-content list__item-text">DIFUSOR C02</span>
                  <span class="mdl-list__item-secondary-content">
                    <!-- SWITCH-->
                    <label class="switch">
                      <input onchange="sw3_change()" type="checkbox" id="display_sw3">
                      <span class="slider round"></span>
                    </label>
                  </span>
                  <span class="material-icons hc-icono">check_circle</span>
                </li>

                <li class="mdl-list__item list__item--border-top">
                  <span class="mdl-list__item-primary-content list__item-text">LUCES UV</span>
                  <span class="mdl-list__item-secondary-content">
                    <input onchange="slider_change()" id="display_slider" class="mdl-slider mdl-js-slider slider--colored-light-blue" type="range" min="0" max="254" value="12" tabindex="0">
                  </span>
                  
                </li>

                <div class="mdl-card__title ">
                  <h2 class="mdl-card__title-text">Parametros </h2>
                </div>

                <form id="formulario">
                  <li class="mdl-list__item list__item--border-top">
                    <div style="width: 50%; ">
                      <span class="mdl-list__item-primary-content list__item-text hc-ancho">TEMPERATURA</span>
                    </div>
                    <div style="width: 50%; padding-left: 10px;">
                      <span class="mdl-list__item-secondary-content">
                        <input name="formtemp" class="form-control" placeholder="Temp. Max en °C" type="text">
                      </span>
                    </div>
                  </li>

                  <li class="mdl-list__item list__item--border-top">
                    <div style="width: 50%; ">
                      <span class="mdl-list__item-primary-content list__item-text">HUMEDAD</span>
                    </div>
                    <div style="width: 50%; padding-left: 10px;">
                      <span class="mdl-list__item-secondary-content">
                        <input name="formhum" class="form-control" placeholder="Hum. Max en %" type="text">
                      </span>
                    </div>
                  </li>

                  <li class="mdl-list__item list__item--border-top">
                    <div style="width: 50%; ">
                      <span class="mdl-list__item-primary-content list__item-text">CO2</span>
                    </div>
                    <div style="width: 50%; padding-left: 10px;">
                      <span class="mdl-list__item-secondary-content">
                        <input name="formco2" class="form-control" placeholder="CO2 Max en PPM" type="text">
                      </span>
                    </div>
                  </li>

                  <li class="mdl-list__item list__item--border-top">
                    <div style="width: 50%; text-align: initial; ">
                      <span class="mdl-list__item-primary-content list__item-text ">TIEMPO DE MUESTREO</span>
                    </div>
                    <div style="width: 50%; padding-left: 10px;">
                      <span class="mdl-list__item-secondary-content ">
                        <input name="formtime" id="" class="form-control " placeholder="Tiempo en min." type="text">
                      </span>
                    </div>
                  </li>

                  <button type="submit" class="btn btn-primary">Enviar</button>

                </form>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-8 hc-box-b">
          <!-- Table-->
          <!-- Line chart-->
          <div class="">
            <div class="mdl-card mdl-shadow--2dp line-chart">
              <div class="mdl-card__title">
                <h2 class="mdl-card__title-text hc-color-text-naranja">Nivel CO2</h2>
              </div>
              <div class="mdl-card__supporting-text">
                <canvas id="my_chart" width="300" height="300"></canvas>
              </div>
            </div>
          </div>
          <!-- Table-->

          <!-- Table-->
          <!-- Line chart 2-->
          <div class="">
            <div class="mdl-card mdl-shadow--2dp line-chart">
              <div class="mdl-card__title">
                <h2 class="mdl-card__title-text hc-color-text-naranja">Tem. Hambiente</h2>
              </div>
              <div class="mdl-card__supporting-text">
                <canvas id="my_chart2" width="300" height="300"></canvas>
              </div>
            </div>
          </div>
          <!-- Table--> 


        </div>
      </div>
    </div>
  </div>
</main>

<script>
  var ctx = document.getElementById('my_chart').getContext('2d');
  var ctx2 = document.getElementById('my_chart2').getContext('2d');
  //var ctx3 = document.getElementById('my_chart3').getContext('2d');
  //var ctx4 = document.getElementById('my_chart4').getContext('2d');

  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [<?php echo $dates ?>],
      datasets: [{
        label: '° C',
        data: [<?php echo $co2s ?>],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
        ],
        borderWidth: 1
      }]
    },
    options: {
      maintainAspectRatio: false,
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });


  var myChart2 = new Chart(ctx2, {
    type: 'line',
    data: {
      labels: [<?php echo $dates ?>],
      datasets: [{
        label: '%',
        data: [<?php echo $hums ?>],
        backgroundColor: [
          'rgba(30, 170, 132, 0.2)',
        ],
        borderColor: [
          'rgba(30, 170, 132, 1)',
        ],
        borderWidth: 1
      }]
    },
    options: {
      maintainAspectRatio: false,
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
 /*
  var myChart3 = new Chart(ctx3, {
    type: 'line',
    data: {
      labels: [<?php echo $dates ?>],
      datasets: [{
        label: 'pH',
        data: [<?php echo $phs ?>],
        backgroundColor: [
          'rgba(30, 170, 132, 0.2)',
        ],
        borderColor: [
          'rgba(30, 170, 132, 1)',
        ],
        borderWidth: 1
      }]
    },
    options: {
      maintainAspectRatio: false,
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
 */
 /*
      var myChart4 = new Chart(ctx4, {
        type: 'line',
        data: {
          labels: [<?php echo $dates ?>],
          datasets: [{
            label: '%',
            data: [<?php echo $co2s ?>],
            backgroundColor: [
              'rgba(30, 170, 132, 0.2)',
            ],
            borderColor: [
              'rgba(30, 170, 132, 1)',
            ],
            borderWidth: 1
          }]
        },
        options: {
          maintainAspectRatio: false,
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          }
        }
      });
    */

  var formulario =  document.getElementById('formulario');
  formulario.addEventListener('submit', function(e){
    e.preventDefault();
    console.log('capture el click');
    var datos = new FormData(formulario);
    
    console.log(datos.get('formtemp'))
    console.log(datos.get('formhum'))
    console.log(datos.get('formco2'))
    console.log(datos.get('formtime'))

    client.publish(device_topic + 'actions/ftemp', datos.get('formtemp'));
    client.publish(device_topic + 'actions/fhum', datos.get('formhum'));
    client.publish(device_topic + 'actions/fco2', datos.get('formco2'));
    client.publish(device_topic + 'actions/ftime', datos.get('formtime'));
    
  })

  const options = {
    connectTimeout: 1000,
    // Authentication
    clientId: 'client_id_' + Math.floor((Math.random() * 1000000) + 1),
    username: '<?php echo MQTT_USER; ?>',
    password: '<?php echo MQTT_PASSWORD; ?>',
    keepalive: 60,
    clean: true,
  }

  // WebSocket connect url
  const WebSocket_URL = 'wss://ioticos.org:8094/mqtt';
  const client = mqtt.connect(WebSocket_URL, options)

  var device_topic = '<?php echo ROOT_TOPIC . "/" . $_SESSION['selected_topic'] . "/" ?>';
  client.on('connect', () => {
    console.log('Conexión Exitosa ^_^');

    client.subscribe(device_topic + "data", {
      qos: 0
    }, (error) => {
      if (error) {
        console.log("Error al Suscribir");
      } else {
        console.log("Suscrito al Broker con Exito!");
        console.log("Proyecto Final de Carrera");
        console.log("San Miguel de Tucumán - Tucumán - Argentina");
        console.log("UTN - FRT");
        console.log("2021");
      }

    })
  })

  client.on('message', (topic, message) => {
    console.log('Msg desde el topico: ', topic, ' ----> ', message.toString());

    if (topic == device_topic + "data") {
      var splitted = message.toString().split(",");

      var co2 = splitted[0];
      var tempamb = splitted[1];
      var hum = splitted[2];
      var ph = splitted[3];
      var niv = splitted[4];


      var switch1 = splitted[5];
      var switch2 = splitted[6];
      var switch3 = splitted[7];

      console.log(splitted);




      $("#display_co2").html(co2);
      $("#display_tempamb").html(tempamb);
      $("#display_hum").html(hum);
      $("#display_ph").html(ph);


      if (niv == 1) {
        $("#display_niv").html("ALTO");
      } else {
        $("#display_niv").html("OPTIMO");
      }

      if (switch1 == "1") {
        $("#display_sw1").prop('checked', true);
      } else {
        $("#display_sw1").prop('checked', "");
      }

      if (switch2 == "1") {
        $("#display_sw2").prop('checked', true);
      } else {
        $("#display_sw2").prop('checked', "");
      }

      if (switch3 == "1") {
        $("#display_sw3").prop('checked', true);
      } else {
        $("#display_sw3").prop('checked', "");
      }


    }


  })

  client.on('reconnect', (error) => {
    console.log('reconnecting:', error);
  })

  client.on('error', (error) => {
    console.log('Connect Error:', error);
  })

  function sw1_change() {
    if ($('#display_sw1').is(":checked")) {
      client.publish(device_topic + 'actions/sw1', "1"); //Valor que envio al broker
    } else {
      client.publish(device_topic + 'actions/sw1', "0");
    }
  }

  function sw2_change() {
    if ($('#display_sw2').is(":checked")) {
      client.publish(device_topic + 'actions/sw2', "1");
    } else {
      client.publish(device_topic + 'actions/sw2', "0");
    }
  }

  function sw3_change() {
    if ($('#display_sw3').is(":checked")) {
      //client.publish(device_topic + 'actions/sw3',"1");
      client.publish(device_topic + 'actions/ptemp', "20");
    } else {
      client.publish(device_topic + 'actions/sw3', "0");
    }
  }

  function slider_change() {
    value = $('#display_slider').val();
    client.publish(device_topic + 'actions/slider', value);
  }


</script>