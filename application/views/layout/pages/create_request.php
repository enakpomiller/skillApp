


      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title" ">
             <a href="<?=base_url('')?>" class="text-dark">  Create Request  </a>
            </h3>
          </div>


          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
           
                  <div class="table-responsive">
                 
           <div class="col-md-6 grid-margin stretch-card" style="margin:auto;">
           
              <div class="card">
                <div class="card-body">
               <?php if($this->session->flashdata('msg_create')){ ?>
                <div class="alert alert-success text-center"> <?=$this->session->flashdata('msg_create')?> </div>
               <?php }else{?>
                <div class="text-danger"> <?=$this->session->flashdata('msg_error')?> </div>
                <?php } ?>
                  <h4 class="card-title"> Request  form</h4>
                  
                <form action="<?=base_url('home/create_request')?>" method="POST" class="forms-sample">
                <div class="form-group">
                      <p for="exampleInputPassword1"> Title </p>
                       <input type="text" name="title">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1"> State Your Request </label>
                      <textarea cols="55" rows="10" name="requesttitle"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1"> State Your Reasons</label>
                      <textarea cols="55" rows="5" name="reasons"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1"> Choose date  </label>
                      <input type="date" name="date" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
       
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
                </div>
              </div>
            </div>

                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="d-md-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center mb-3 mb-md-0">
                      <button class="btn btn-social-icon btn-facebook btn-rounded">
                        <i class="fab fa-facebook-f"></i>
                      </button>
                      <div class="ml-4">
                        <h5 class="mb-0">Facebook</h5>
                        <p class="mb-0">813 friends</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center mb-3 mb-md-0">
                      <button class="btn btn-social-icon btn-twitter btn-rounded">
                        <i class="fab fa-twitter"></i>
                      </button>
                      <div class="ml-4">
                        <h5 class="mb-0">Twitter</h5>
                        <p class="mb-0">9000 followers</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center mb-3 mb-md-0">
                      <button class="btn btn-social-icon btn-google btn-rounded">
                        <i class="fab fa-google-plus-g"></i>
                      </button>
                      <div class="ml-4">
                        <h5 class="mb-0">Google plus</h5>
                        <p class="mb-0">780 friends</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center">
                      <button class="btn btn-social-icon btn-linkedin btn-rounded">
                        <i class="fab fa-linkedin-in"></i>
                      </button>
                      <div class="ml-4">
                        <h5 class="mb-0">Linkedin</h5>
                        <p class="mb-0">1090 connections</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="far fa-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->