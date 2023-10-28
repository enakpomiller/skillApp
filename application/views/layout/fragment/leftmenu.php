      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
            <?php if($this->session->category=='student') {?>
            <?php if ($this->session->userdata('logged_in')): ?>
       
                <div class="profile-image">
                  <!-- <img src="<?//=base_url()?>assets/images/faces/face5.jpg" alt="image"/> -->
                    <img class="" alt="image"  src="<?='http://localhost/requestapp/assets/uploads/'.$this->session->userfile ?>">
                </div>
                <div class="profile-name">
                  <p class="name">
                  <p>Welcome, <?= $this->session->userdata('names') ?> </p>
                  </p>
                  <?php else: ?>
                  <p class="designation">
                    Super Admin
                  </p>
              </div>
              <p>You are not logged in</p>
            <?php endif; ?>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('/')?>">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
     
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('home/create_request')?>">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title"> View Tutorials   </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('home/requestfeed')?>">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title"> View Videos  </span>
            </a>
          </li>
          <?php }else{ ?>

            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('/')?>">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
              <i class="fab fa-trello menu-icon"></i>
              <span class="menu-title"> Management </span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?=base_url('home/post_videos')?>"> Upload Videos</a></li>
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="<?=base_url('home/viewusers')?>"> View Users   </a></li>

                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="pages/layout/horizontal-menu.html">Horizontal Menu</a></li>
              </ul>
            </div>
          </li>




              <!-- <li class="nav-item d-none d-lg-block">
                <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
                  <i class="fas fa-columns menu-icon"></i>
                  <span class="menu-title">Sidebar Layouts</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="sidebar-layouts">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/compact-menu.html">Compact menu</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-collapsed.html">Icon menu</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-hidden.html">Sidebar Hidden</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-hidden-overlay.html">Sidebar Overlay</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-fixed.html">Sidebar Fixed</a></li>
                  </ul>
                </div>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                  <i class="far fa-compass menu-icon"></i>
                  <span class="menu-title">Basic UI Elements</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-basic">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/accordions.html">Accordions</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/badges.html">Badges</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/modals.html">Modals</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/progress.html">Progress bar</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/pagination.html">Pagination</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tabs.html">Tabs</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tooltips.html">Tooltips</a></li>
                  </ul>
                  </div>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
                  <i class="fas fa-clipboard-list menu-icon"></i>
                  <span class="menu-title">Advanced Elements</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-advanced">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dragula.html">Dragula</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/clipboard.html">Clipboard</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/context-menu.html">Context menu</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/slider.html">Sliders</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/carousel.html">Carousel</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/colcade.html">Colcade</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/loaders.html">Loaders</a></li>
                  </ul>
                </div>
              </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="fab fa-wpforms menu-icon"></i>
                <span class="menu-title">Form elements</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/advanced_elements.html">Advanced Elements</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/validation.html">Validation</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/wizard.html">Wizard</a></li>
                </ul>
              </div>
            </li> -->



        </ul>
        <?php }?>
      </nav>