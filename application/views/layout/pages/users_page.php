


      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title" ">
             <a href="<?=base_url('')?>" class="text-dark">  <?=$title?> </a>
        
            </h3>
          </div>

            <?php if($this->session->flashdata('msg_del')){ ?>
                <center>  <?=$this->session->flashdata('msg_del')?> </center>
                 <?=$this->session->unset_userdata('msg_del')?>
             <?php } ?> 
        <div class="row">

            <div class="col-12 grid-margin">
              <div class="card">

                <div class="card-body">
                <?php if($this->session->flashdata('msg_update')){ ?>
                      <center>  <?=$this->session->flashdata('msg_update')?> </center>
                       <?=$this->session->unset_userdata('msg_update')?>
                 <?php } ?> 
                  <div class="table-responsive">

                        <table class="table">
                        <?php if($allusers) {?>
                                    <thead>
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Names</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Photo</th>
                                        <th scope="col">Skill Aquired</th>
                                        <th scope="col"> Country</th>
                                        <th scope="col" class="text-center"> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $counter =1; foreach($allusers as $user){?>
                                        <tr>
                                        <th scope="row"><?=$counter++?></th>
                                          <td> <?=$user->names?>  </td>
                                          <td> <?=$user->email?>  </td>
                                          <td><img class="" alt="image" style="width:50%"  src="<?='http://localhost/skillapp/assets/uploads/'.$user->userfile ?>"></td>
                                           <td>
                                             <?php 
                                              echo  (ucfirst($this->db->get_where('tbl_category',array('id'=>$user->category_id))->row()->category) );
                                            //   echo $skill;
                                             ?>
                                             </td>
                                             <td> <?=$user->country?>  </td>
                                             <td align="center"> 
                                                 <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?=$user->id?>"> Edit </a>
                                                 <a href="<?=base_url('home/deleteuser/'.$user->id)?>" class="btn btn-danger" onclick="return confirm(' This user will be deleted');"> Delete</a>
                                        </td>
                                        </tr> 
                                    <!-- Modal -->
                                        <div class="modal fade" id="staticBackdrop<?=$user->id?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">
                                                <img class="" alt="image" style="width:10%"  src="<?='http://localhost/requestapp/assets/uploads/'.$user->userfile ?>">
                                                <?=$user->names?> 
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="<?=base_url('home/updateuser')?>" method="POST">
                                            <div class="modal-body">
                                                <input type="hidden" name="id" value="<?=$user->id?>" class="form-control">
                                               <div class="form-group">
                                                   <label> Names </label>
                                                    <input type="text" name="names" value="<?=$user->names?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                  <label> Email </label>
                                                   <input type="text" name="email" value="<?=$user->email?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                  <label> Skill Aquired </label>
                                                    <select name="category_id" class="form-control">
                                                        <?php foreach($category as $cat){?>
                                                            <option value="<?=$cat->id?>"> <?=$cat->category?>  </option>
                                                        <?php }?>
                                                     </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                            </div>
                                            </div>
                                         </form>
                                        </div>
                                        </div>
                                <!-- close modal --> 
                                        <?php }?>
                                    </tbody>
                                    </table>
                            <?php }else{?>
                              <p> No user </p>
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