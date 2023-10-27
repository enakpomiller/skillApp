<body>

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            
            <div class="auth-form-transparent text-left p-3">
            <?=$this->session->flashdata('msg_create')?>  
           <?=$this->session->unset_userdata('msg_create')?>
              <h4 class="text-center"> <?=$title?> </h4>
              <div class="text-danger text-center">
                <h5>  <?=$this->session->flashdata('msg_error')?> </h5>
                 <?=$this->session->unset_userdata('msg_error')?>
                </div>

              <h6 class="font-weight-light text-center mt-4"> Login To Your Dashboard</h6>
              <form class="pt-3" action="<?=base_url('login')?>" method="POST">

                <div class="form-group">
                  <label>Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="far fa-envelope-open text-primary"></i>
                      </span>
                    </div>
                    <input type="email" name="email" class="form-control form-control-lg border-left-0" placeholder="Email">
                  </div>
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-lock text-primary"></i>
                      </span>
                    </div>
                    <input type="password" name="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password">
                  </div>
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-info btn-lg font-weight-medium auth-form-btn"> Login </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="<?=base_url('register')?>" class="text-primary">Signup</a>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 register-half-bg d-flex flex-row">
          <p class="text-white font-weight-medium text-center flex-grow align-self-end"> Create Account </p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->