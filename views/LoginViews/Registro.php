<section class="vh-100 bg-image rg-container" style="background-image: url('');">
  <div class="mask d-flex align-items-center gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                <form id="registration-form">
                  <div class="form-outline mb-4">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control form-control-lg" />
                    <div id="name-error" style="color: red;" hidden></div>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="first_name">First Name</label>
                    <input type="text" id="first_name"  name="first_name" class="form-control form-control-lg" />
                    <div id="fn-error" style="color: red;" hidden></div>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" class="form-control form-control-lg" />
                    <div id="ln-error" style="color: red;" hidden></div>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="email">Your Email</label>
                    <input type="email" id="email" name="email" class="form-control form-control-lg" />
                    <div id="email-error" style="color: red;" hidden></div>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control form-control-lg" />
                    <div id="password-error" style="color: red;" hidden></div>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="password-confirm">Repeat your password</label>
                    <input type="password" id="password-confirm" name="password_confirm" class="form-control form-control-lg" />
                    <div id="passconfirm-error" style="color: red;" hidden></div>
                  </div>

                    
                  <button type="button" id="registrar" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                    

                  <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php?ac=lg" class="fw-bold text-body"><u>Login here</u></a></p>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>