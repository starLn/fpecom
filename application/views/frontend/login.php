
        <section class="section">

<div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
<?php if(!empty ($this->session->flashdata('pesan'))) { ;?>
<div class="alert alert-danger alert-dismissible show fade">
  <div class="alert-body">
    <button class="close" data-dismiss="alert">
      <span>&times;</span>
    </button>
          <?php echo $this->session->flashdata('pesan') ; ?>
  </div>
</div>
<?php } ?>
                <form method="POST" action="<?php echo site_url('member1/act_login'); ?>" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="teks" class="form-control" name="username" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>

                  <!--<div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div> -->

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>

                
               

              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="<?php echo site_url('home/register');?>">Create Account</a>
            </div>
            <div class="simple-footer">
              Copyright &copy; Tokokita 2021
            </div>
          </div>
        </div>
        </section>
   
