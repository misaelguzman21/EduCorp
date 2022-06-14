
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<section class="vh-100" style="background-color: #152733;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form
                    action= " {{ route("login") }} "
                    method="post"
                    id="loginForm"
                    novalidate
                >
                    @csrf

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-1">EventCorp</span>
                  </div>

                  <h4 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Incio de sesión</h4>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="email">Correo electrónico</label>
                    <input 
                        type="text" 
                        name="email" 
                        id="email" 
                        class="form-control form-control-lg"
                        value=" {{ old("email") }} "
                        required 
                    />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="password">Contraseña</label>
                    <input 
                        type="password" 
                        id="password"
                        name="password" 
                        class="form-control form-control-lg"
                        required 
                    />

                    <input type="hidden" value="0" name="remember"/>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Iniciar sesión</button>
                  </div>

                  <p class="mb-5 pb-lg-2" style="color: #393f81;">¿Aún no tienes cuenta? <a href="#!"
                      style="color: #393f81;">Registrate aquí</a></p>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>