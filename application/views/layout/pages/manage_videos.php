


      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title" ">
             <a href="<?=base_url('')?>" class="text-dark">  <?=$title?> </a>
        
            </h3>
          </div>
        <div class="row">

            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                    <?php if($this->session->flashdata('del_videos')){ ?>
                        <center>  <?=$this->session->flashdata('del_videos')?> </center>
                        <?=$this->session->unset_userdata('del_videos')?>
                    <?php } ?> 
                  <div class="table-responsive">
                        <table class="table table-striped">
                        <?php if($allvideos) {?>
                                    <thead>
                                        <tr>
                                        <th scope="col"> Video </th>
                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                  <?php foreach($allvideos as $video){?>
                                        <tr>
                                            <td>
                                               <video width="50%" height="240" class="pt-4 pb-4 bg-dark" controls>
                                                <source src="<?='http://localhost/skillapp/assets/uploads/'.$video->userfile ?>" type="video/mp4">
                                               </video>
                                            <td>
                                             <td align="center"> 
                                                 <a href="<?=base_url('home/deletevideos/'.$video->vid_id)?>" class="btn btn-danger" onclick="return confirm(' This video will be deleted');"> Delete Videos </a>
                                             </td>
                                        </tr> 
                                    <?php }?>
                                    </tbody>
                                    </table>
                            <?php }else{?>
                              <h4 class="text-center mt-4"> No Videos </h4>
                             <?php  }?>
                                

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



<!-- modal script --> 
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>