
<script>
    // Trigger a success toast notification
    showToast("Success! The operation was completed.", "success");
</script>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title" ">
             <a href="<?=base_url('')?>" class="text-dark">  <?=$title?> </a>
        
            </h3>
          </div>

            <?php if($this->session->flashdata('msg_create')){ ?>
                <center>  <?=$this->session->flashdata('msg_create')?> </center>
                 <?=$this->session->unset_userdata('msg_create')?>
             <?php } ?> 
        <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">

         <div class="table-responsive">
     
             <div class="row">
                  <div class="col-md-6" style="margin:auto;margin-top:50px;margin-bottom:50px;">
       
                  <?php echo form_open_multipart('home/post_videos'); ?>
                     <!-- <form action="<?php// echo base_url('home/post_videos'); ?>" method="post" enctype="multipart/form-data"> -->
                                <div class="mb-3">
                                    <label for="" class="form-label"> Title </label>
                                    <input type="text" name="title" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label"> Brows Video</label>
                                    <input type="file" name="userfile" required  class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label"> Type of skill</label>
                                    
                                      <select name="category_id" class="form-control">
                                      <option disabled> Select  </option>
                                          <?php foreach($category as $cat){  ?>
                                              <option value="<?=$cat->id?>">  <?=$cat->category?>    </option>
                                          <?php }?>
                                      </select>
                                     
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label"> Date </label>
                                    <input type="date" name="date" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                  
                          <button type="submit" class="btn btn-info w-100"> Post </button>
                      </form>
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


  <script>
    function showToast(message, type) {
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
        };
        toastr[type](message);
    }
</script>
