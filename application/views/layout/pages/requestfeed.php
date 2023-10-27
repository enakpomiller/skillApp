


      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title" ">
             <a href="<?=base_url('')?>" class="text-dark">  Request Feedback  </a>
            </h3>
          </div>


          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
           
         <div class="table-responsive">
                 
           <div class="col-md-10 grid-margin stretch-card" style="margin:auto;height:400px">
           <?php if(($reqfeed)){ ?>
           <table class="table table-striped">
                  <thead class="bg-light">
                    <tr>
                      <th scope="col">S/n</th>
                      <th scope="col"> Status </th>
                      <th scope="col">Response </th>
                      <th scope="col"> Date </th>
                      <th scope="col" class="text-center"> Action </th>
                    </tr>
                </thead>
                <tbody>
                  <?php $counter =1; foreach($reqfeed as $req) {  ?>
                  <tr>
                    <th scope="row"><?=$counter++?></th>
                         <?php 
                           $status = $this->db->get_where('tbl_replyreq',array('timer'=>$req->timer))->row()->status;
                           $getstatus = $status=='1'?'<div style="background:green;padding:10px;color:white;" class="text-center">  Received & Replied </div>':'<div style="background:red;padding:10px;color:white;" class="text-center">Request Pending </div>';
                         ?>
                    <td>
                      <?=$getstatus?>   
                    </td>
                    <td><?=$req->requesttitle?></td>
                    <td><?=$req->date?></td>
                    <td class="text-center">  
                      <?php if($status=='1') {?>
                          <a href="<?=base_url('home/getreply/'.$req->timer)?>" class="btn btn-dark pt-2 pb-2 pl-2 pr-2"><i class="fa fa-eye"></i> View Reply </a>
                     <?php }else{?>
                      <a href="" class="btn btn-dark pt-2 pb-2 pl-2 pr-2" onclick="alert('Sorry! this request cannot be accessed,please wait depending when it will be approved')"><i class="fa fa-eye"></i> View Reply </a>
                       <?php } ?>
                     <!-- <a href="<?=base_url('home/deletefeed/'.$req->id)?>" class="btn btn-danger pt-2 pb-2 pl-2 pr-2" onclick="return confirm('Are Your Sure To Delete?')"><i class="fa fa-eye"></i> Delete </a> -->
                  </td>
                    </tr>
                <?php } ?>
                </tbody>
                </table>
                <?php }else {?>
                    <h3 class="text-light" style="margin-right:50px;"> No Reply Yet   </h3>
                     <img src="<?=base_url()?>assets/images/404.png">
             <?php } ?>
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