
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
 
                  <div class="input-group">
      
                    <!-- image frame --> 
                    <div id="image-holder" class="image-responsive" style="height: 200px; width: 170px; border: 2px solid grey; border-radius:8px;  padding:2px;margin:auto;">
                        <img id="imagePreview" style="width:100%;" src="<?=base_url()?>assets/uploads/404.png" alt="Selected Image" style="max-width: 170px; display: none;">
                     </div>
                        <label class="btn btn-info btn-file btn-md" style="width: 170px;margin-left:95px;margin-top:5px;">
                           <input id="imageInput"  type="file"  name="userfile" onchange="displayImage()" accept="image/*">
                      </label>
              
                    <!-- close image frame --> 
                  </div>
                </div>
                <div class="form-group">
                  <label> Select Skill</label>
                  <select required name="category_id" class="form-control form-control-lg" id="exampleFormControlSelect2">
                    <option disabled> Select Skill</option>
                     <?php foreach($category as $cat){  ?>
                      <option value="<?=$cat->id?>"> <?=$cat->category?>    </option>
                     <?php }?>
                  </select>
                </div>
                <!-- image frame --> 
                    <!-- <input type="file" id="imageInput" name="userfile" onchange="displayImage()" accept="image/*">
                     <img id="imagePreview" src="" alt="Selected Image" style="max-width: 300px; display: none;"> -->
                <!-- close image frane --> 
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



<script type="text/javascript">
  
      function displayImage() {
        const fileInput = document.getElementById('imageInput');
        const imagePreview = document.getElementById('imagePreview');

        if (fileInput.files && fileInput.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }


    $("#imageUploadForm").submit(function(e) {
        e.preventDefault();
        const formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: 'your_controller/upload_image', // Replace with your CodeIgniter controller URL
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                // Handle the server response here
            },
        });
    });

</script>