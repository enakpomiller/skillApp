
<style> 
.skill_img {
     /* background: url("../images/auth/register-bg.jpg"); */

  background: url("../images/auth/skil_img.png"); 
  background-size: cover;
}

</style> 
<body>

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
                <!-- <div class="brand-logo">
                  <img src="../../images/logo.svg" alt="logo">
                </div> -->
                <h4 class=""> <?=$title?>  </h4>
              <!-- <h6 class="font-weight-light text-center mt-4"> Create your  account here </h6> -->
              <div class="text-danger text-center"> <?=$this->session->flashdata('msg_error')?> </div>
              <?=$this->session->unset_userdata('msg_error')?>
              <?php echo form_open_multipart('register/process_registration'); ?>
                <div class="form-group">
                  <label>Full Names </label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-user text-primary"></i>
                      </span>
                    </div>
                    <input type="text" name="names" required class="form-control form-control-lg border-left-0" placeholder="full names ">
                  </div>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="far fa-envelope-open text-primary"></i>
                      </span>
                    </div>
                    <input type="email" required name="email" class="form-control form-control-lg border-left-0" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label> Upload Passport</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="far fa-file text-primary"></i>
                      </span>
                    </div>
                    <input type="file" required name="userfile" class="form-control form-control-lg border-left-0" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label>Country</label>
                  <select required name="country" class="form-control form-control-lg" id="exampleFormControlSelect2">
                    <option>Country</option>
                    <option>United States of America</option>
                    <option>United Kingdom</option>
                    <option>India</option>
                    <option>Germany</option>
                    <option>Argentina</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-lock text-primary"></i>
                      </span>
                    </div>
                    <input type="password" required name="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password">
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
                  <button type="submit" class="btn btn-block btn-info btn-lg font-weight-medium auth-form-btn">Sign Up</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="<?=base_url('login')?>" class="text-primary">Login</a>
                </div>
            
          </form>
            </div>
          </div>
              <div class="col-lg-6 register-half-bg d-flex flex-row">
                <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2018  All rights reserved.</p>
              </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

