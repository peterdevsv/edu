<!DOCTYPE html>
<html lang="es">
<head>
  <title>Login | EDU</title>
  <meta charset='UTF-8'>
  <link  rel="icon" type="image/png" href="user/img/ucad-title.png"/>
  <meta name="robots" content="noindex">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
  <!-- LOGIN -->
  <div class="login">
    <div class="wrap">
      <!-- TOGGLE -->
      <div id="toggle-wrap">
        <div id="toggle-terms">
          <div id="cross">
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
      <!-- TERMS -->
      <div class="terms">
        <h3>¿Cómo activar su Usuario en EDU?</h3>
        <p class="small">A continuación los pasos para poder registrarse en la plataforma EDU:</p>

        <h3>Docentes y Administrativos</h3>
        <p>Our Services are very diverse, so sometimes additional terms or product requirements (including age requirements) may apply. Additional terms will be available with the relevant Services, and those additional terms become part of your agreement with us if you use those Services.</p>

        <h3>Estudiantes</h3>
        <p>You may need a dp Account in order to use some of our Services. You may create your own dp Account, or your dp Account may be assigned to you by an administrator, such as your employer or educational institution. If you are using a dp Account assigned to you by an administrator, different or additional terms may apply and your administrator may be able to access or disable your account.</p>
      </div>
      <!-- RECOVERY -->
      <div class="recovery">
        <h2>¿Olvidaste tu Contraseña?</h2>
        <p>Por favor, digite su <strong>correo electrónico</strong> para enviar los pasos a seguir para recuperar su usuario.</p>
        <p>Verifica que los datos de tu correo electrónico sean correctos.</p>
        <form class="recovery-form" action="" method="post">
          <input type="text" class="input" id="user_recover" placeholder="Ingresa tu correo electrónico aquí">
          <input type="submit" class="button" value="RECUPERAR CONTRASEÑA">
        </form>
        <p class="mssg">An email has been sent to you with further instructions.</p>
      </div>
      <!-- SLIDER -->
      <div class="content" >
        <!-- LOGO -->
        <div class="logo"  style="background:#2a3f54">
          <a href="#"><img src="user/img/ucad.png"   alt=""></a>
        </div>
        <!-- SLIDESHOW -->
        <div id="slideshow">
          <div class="one">
            <h2><span>EDU</span></h2>
            <p>PLATAFORMA DE EVALUACIÓN DOCENTE UCAD</p> 
          </div>
          <div class="two">
            <h2><span>UCAD</span></h2>
            <p>UNA UNIVERSIDAD DIFERENTE</p>
          </div>
        </div>
      </div>
      <!-- LOGIN FORM -->
      <div class="user">
                <!-- ACTIONS
                <div class="actions">
                    <a class="help" href="#signup-tab-content">Sign Up</a><a class="faq" href="#login-tab-content">Login</a>
                </div>
              -->
              <div class="form-wrap">
                <!-- TABS -->
                <div class="tabs">
                  <h4 class="login-tab"><a class="log-in active" href="#login-tab-content"><span >Iniciar Sesión<span></a></h4>
                    <h4 class="signup-tab" ><a class="sign-up" href="#signup-tab-content"><span>Activar Usuario</span></a></h4>
                  </div>
                  
                  <!-- TABS CONTENT -->
                  <div class="tabs-content">
                    <!-- TABS CONTENT LOGIN -->
                    <?= view('user/control/_session') ?>
                    <div id="login-tab-content" class="active">
                     <form class="login-form" action="<?= route_to("user_login_post")?>" method="POST">
                      <input type="text" class="input" id="usuario" name="usuario" autocomplete="off" placeholder="Usuario">
                      <input type="password" class="input" id="clave" name="clave" autocomplete="off" placeholder="Contraseña">
                      <div class="form-group" style="width: 30px">
                        <div class="g-recaptcha"  data-sitekey="6Ld5oeIUAAAAAM9Rql8w-d1HSap5oWJtAQREMGRE" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                        <input class="form-control hidden" id="captcha" name="captcha" value=""  data-recaptcha="true" required data-error="Please complete the Captcha" hidden="">
                        <div class="help-block with-errors"></div>
                      </div>
                      <button type="submit" class="btn btn-secondary source" onclick="getCaptcha()"  style="width:100%;background:#2a3f54 ">INGRESAR</button>
                    </form>
                    <div class="help-action">
                      <p><i class="fa fa-arrow-left" aria-hidden="true"></i><a class="forgot" href="#">¿Olvidó su Contraseña?</a></p>
                    </div>
                  </div>
                  <!-- TABS CONTENT SIGNUP -->
                  <div id="signup-tab-content">
                   <form class="signup-form" action="" method="post">
                    <input type="email" class="input" id="user_email" autocomplete="off" placeholder="Correo Electrónico">
                    <input type="text" class="input" id="user_name" autocomplete="off" placeholder="Usuario / Carnet">

                    <div class="form-group">
                      <div class="g-recaptcha"  style="transform:scale(0.50);-webkit-transform:scale(0.50);transform-origin:0 0;-webkit-transform-origin:0 0;"  data-sitekey="6Ld5oeIUAAAAAM9Rql8w-d1HSap5oWJtAQREMGRE" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                      <input class="form-control hidden" id="captcha2" name="captcha2" value=""  data-recaptcha="true" required data-error="Please complete the Captcha" hidden="">
                      <div class="help-block with-errors"></div>
                    </div>
                    <button type="submit" class="btn btn-secondary source" onclick="getCaptcha()" style="width:100%;background:#2a3f54 ">ENVIAR SOLICITUD</button>
                  </form>
                  <div class="help-action">
                    <p><i class="fa fa-arrow-left" aria-hidden="true"></i><a class="agree" href="#">¿Necesita Ayuda?</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>
    </html>
    <script src="/js/jquery-3.4.1.slim.min.js"></script>
    <script>
      var verifyCallback = function(response) {
        alert(response);
      };

      var widgetId1;
      var onloadCallback = function() {
        widgetId1 = grecaptcha.render('example1', {
          'sitekey' : '6Ld5oeIUAAAAAM9Rql8w-d1HSap5oWJtAQREMGRE',
          'theme' : 'dark'
        });
      };

      function getCaptcha(){
        let usuario = document.getElementById("usuario").value;
        let pass = document.getElementById("clave").value;
        let valueCaptcha = grecaptcha.getResponse(widgetId1);

        if(usuario == ""){
          new PNotify({
           title: '¡ALERTA!',
           text: 'Por favor, ingresa tu Usuario.',
           styling: 'bootstrap3'
          })
        }else if(pass == ""){
          new PNotify({
           title: '¡ALERTA!',
           text: 'Por favor, ingresa tu Contraseña.',
           styling: 'bootstrap3'
          })
        }else if (valueCaptcha == "") {
          new PNotify({
           title: '¡ALERTA!',
           text: 'Por favor, confirma que no eres un Robot.',
           styling: 'bootstrap3'
          })
        }else{
          document.getElementById("captcha").value= valueCaptcha;
        }
      }
    </script>