  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" class="bg-theme bg-theme2" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <img src="{{asset('images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Bulona Admin</h5>
     </a>
   </div>
   <div class="user-details">
    <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
      <div class="avatar"><img class="mr-3 side-user-img" src="{{asset('images/avatars/avatar-13.png') }}" alt="user avatar"></div>
       <div class="media-body">
       <h6 class="side-user-name">Mark Jhonsan</h6>
      </div>
       </div>
     <div id="user-dropdown" class="collapse">
      <ul class="user-setting-menu">
            <li><a href="javaScript:void();"><i class="icon-user"></i>  My Profile</a></li>
            <li><a href="javaScript:void();"><i class="icon-settings"></i> Setting</a></li>
      <li>

        


         <a title="LogOut" href="{{ route('leaser.auth.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="icon-power"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('leaser.auth.logout') }}" method="POST">
                                        @csrf
                                    </form>


      </li>
      </ul>
     </div>
      </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span><i class="fa fa-angle-left pull-right"></i>
        </a>
		<ul class="sidebar-submenu">
		  <li><a href="index.html"><i class="zmdi zmdi-long-arrow-right"></i> Ecommerce</a></li>
          <li><a href="index2.html"><i class="zmdi zmdi-long-arrow-right"></i> Property Listings</a></li>
          <li><a href="dashboard-service-support.html"><i class="zmdi zmdi-long-arrow-right"></i> Services & Support</a></li>
		  <li><a href="dashboard-logistics.html"><i class="zmdi zmdi-long-arrow-right"></i> Logistics</a></li>
		</ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>UI Elements</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
    <li><a href="ui-typography.html"><i class="zmdi zmdi-long-arrow-right"></i> Typography</a></li>
        <li><a href="ui-cards.html"><i class="zmdi zmdi-long-arrow-right"></i> Cards</a></li>
    <li><a href="ui-buttons.html"><i class="zmdi zmdi-long-arrow-right"></i> Buttons</a></li>
        <li><a href="ui-nav-tabs.html"><i class="zmdi zmdi-long-arrow-right"></i> Nav Tabs</a></li>
        <li><a href="ui-accordions.html"><i class="zmdi zmdi-long-arrow-right"></i> Accordions</a></li>
        <li><a href="ui-modals.html"><i class="zmdi zmdi-long-arrow-right"></i> Modals</a></li>
        <li><a href="ui-list-groups.html"><i class="zmdi zmdi-long-arrow-right"></i> List Groups</a></li>
        <li><a href="ui-bootstrap-elements.html"><i class="zmdi zmdi-long-arrow-right"></i> BS Elements</a></li>
        <li><a href="ui-pagination.html"><i class="zmdi zmdi-long-arrow-right"></i> Pagination</a></li>
        <li><a href="ui-alerts.html"><i class="zmdi zmdi-long-arrow-right"></i> Alerts</a></li>
        <li><a href="ui-progressbars.html"><i class="zmdi zmdi-long-arrow-right"></i> Progress Bars</a></li>
    <li><a href="ui-checkbox-radio.html"><i class="zmdi zmdi-long-arrow-right"></i> Checkboxes & Radios</a></li>
        <li><a href="ui-notification.html"><i class="zmdi zmdi-long-arrow-right"></i> Notifications</a></li>
        <li><a href="ui-sweet-alert.html"><i class="zmdi zmdi-long-arrow-right"></i> Sweet Alerts</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-card-travel"></i>
          <span>Components</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="components-range-slider.html"><i class="zmdi zmdi-long-arrow-right"></i> Range Sliders</a></li>
          <li><a href="components-image-carousel.html"><i class="zmdi zmdi-long-arrow-right"></i> Image Carousels</a></li>
          <li><a href="components-grid-layouts.html"><i class="zmdi zmdi-long-arrow-right"></i> Grid Layouts</a></li>
          <li><a href="components-switcher-buttons.html"><i class="zmdi zmdi-long-arrow-right"></i> Switcher Buttons</a></li>
          <li><a href="components-pricing-table.html"><i class="zmdi zmdi-long-arrow-right"></i> Pricing Tables</a></li>
          <li><a href="components-vertical-timeline.html"><i class="zmdi zmdi-long-arrow-right"></i> Vertical Timeline</a></li>
          <li><a href="components-horizontal-timeline.html"><i class="zmdi zmdi-long-arrow-right"></i> Horizontal Timeline</a></li>
          <li><a href="components-fancy-lightbox.html"><i class="zmdi zmdi-long-arrow-right"></i> Fancy Lightbox</a></li>
          <li><a href="components-color-palette.html"><i class="zmdi zmdi-long-arrow-right"></i> Color Palette</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-chart"></i> <span>Charts</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="charts-chartjs.html"><i class="zmdi zmdi-long-arrow-right"></i> Chart JS</a></li>
          <li><a href="charts-morris.html"><i class="zmdi zmdi-long-arrow-right"></i> Morris Charts</a></li>
          <li><a href="charts-sparkline.html"><i class="zmdi zmdi-long-arrow-right"></i> Sparkline Charts</a></li>
          <li><a href="charts-peity.html"><i class="zmdi zmdi-long-arrow-right"></i> Peity Charts</a></li>
          <li><a href="charts-other.html"><i class="zmdi zmdi-long-arrow-right"></i> Other Charts</a></li>
        </ul>
       </li>
     <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-invert-colors"></i> <span>UI Icons</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="icons-font-awesome.html"><i class="zmdi zmdi-long-arrow-right"></i> Font Awesome</a></li>
          <li><a href="icons-material-designs.html"><i class="zmdi zmdi-long-arrow-right"></i> Material Design</a></li>
          <li><a href="icons-themify.html"><i class="zmdi zmdi-long-arrow-right"></i> Themify Icons</a></li>
          <li><a href="icons-simple-line-icons.html"><i class="zmdi zmdi-long-arrow-right"></i> Line Icons</a></li>
          <li><a href="icons-flags.html"><i class="zmdi zmdi-long-arrow-right"></i> Flag Icons</a></li>
        </ul>
      </li>
      <li>
        <a href="calendar.html" class="waves-effect">
          <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
          <small class="badge float-right badge-light">New</small>
        </a>
      </li>
    
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-email"></i>
          <span>Mailbox</span>
           <small class="badge float-right badge-warning">12</small>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="mail-inbox.html"><i class="zmdi zmdi-long-arrow-right"></i> Inbox</a></li>
          <li><a href="mail-compose.html"><i class="zmdi zmdi-long-arrow-right"></i> Compose</a></li>
          <li><a href="mail-read.html"><i class="zmdi zmdi-long-arrow-right"></i> Read Mail</a></li>
        </ul>
      </li>
      
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Forms</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="form-inputs.html"><i class="zmdi zmdi-long-arrow-right"></i> Basic Inputs</a></li>
          <li><a href="form-input-group.html"><i class="zmdi zmdi-long-arrow-right"></i> Input Groups</a></li>
          <li><a href="form-layouts.html"><i class="zmdi zmdi-long-arrow-right"></i> Form Layouts</a></li>
          <li><a href="form-advanced.html"><i class="zmdi zmdi-long-arrow-right"></i> Form Advanced</a></li>
          <li><a href="form-uploads.html"><i class="zmdi zmdi-long-arrow-right"></i> Form Uploads</a></li>
          <li><a href="form-validation.html"><i class="zmdi zmdi-long-arrow-right"></i> Form Validation</a></li>
          <li><a href="form-step-wizard.html"><i class="zmdi zmdi-long-arrow-right"></i> Form Wizard</a></li>
          <li><a href="form-text-editor.html"><i class="zmdi zmdi-long-arrow-right"></i> Form Editor</a></li>
        </ul>
      </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-lock"></i> <span>Authentication</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="authentication-signin.html"><i class="zmdi zmdi-long-arrow-right"></i> SignIn 1</a></li>
          <li><a href="authentication-signup.html"><i class="zmdi zmdi-long-arrow-right"></i> SignUp 1</a></li>
      <li><a href="authentication-signin2.html"><i class="zmdi zmdi-long-arrow-right"></i> SignIn 2</a></li>
          <li><a href="authentication-signup2.html"><i class="zmdi zmdi-long-arrow-right"></i> SignUp 2</a></li>
          <li><a href="authentication-lock-screen.html"><i class="zmdi zmdi-long-arrow-right"></i> Lock Screen</a></li>
          <li><a href="authentication-reset-password.html"><i class="zmdi zmdi-long-arrow-right"></i> Reset Password 1</a></li>
          <li><a href="authentication-reset-password2.html"><i class="zmdi zmdi-long-arrow-right"></i> Reset Password 2</a></li>
        </ul>
       </li>

       <li>
        <a href="widgets.html" class="waves-effect">
          <i class="zmdi zmdi-widgets"></i> <span>Widgets</span>
          <small class="badge float-right badge-danger">10</small>
        </a>
      </li>
     
     <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-grid"></i> <span>Tables</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="table-simple-tables.html"><i class="zmdi zmdi-long-arrow-right"></i> Simple Tables</a></li>
          <li><a href="table-data-tables.html"><i class="zmdi zmdi-long-arrow-right"></i> Data Tables</a></li>
        </ul>
       </li>
     
     <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-map"></i> <span>Maps</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="maps-google.html"><i class="zmdi zmdi-long-arrow-right"></i> Google Maps</a></li>
          <li><a href="maps-vector.html"><i class="zmdi zmdi-long-arrow-right"></i> Vector Maps</a></li>
        </ul>
       </li>
     
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-collection-folder-image"></i> <span>Sample Pages</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
              <li><a href="pages-invoice.html"><i class="zmdi zmdi-long-arrow-right"></i> Invoice</a></li>
          <li><a href="pages-user-profile.html"><i class="zmdi zmdi-long-arrow-right"></i> User Profile</a></li>
          <li><a href="pages-blank-page.html"><i class="zmdi zmdi-long-arrow-right"></i> Blank Page</a></li>
              <li><a href="pages-coming-soon.html"><i class="zmdi zmdi-long-arrow-right"></i> Coming Soon</a></li>
          <li><a href="pages-403.html"><i class="zmdi zmdi-long-arrow-right"></i> 403 Error</a></li>
          <li><a href="pages-404.html"><i class="zmdi zmdi-long-arrow-right"></i> 404 Error</a></li>
          <li><a href="pages-500.html"><i class="zmdi zmdi-long-arrow-right"></i> 500 Error</a></li>
        </ul>
       </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-share"></i> <span>Multilevel</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="javaScript:void();"><i class="zmdi zmdi-long-arrow-right"></i> Level One</a></li>
          <li>
            <a href="javaScript:void();"><i class="zmdi zmdi-long-arrow-right"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a href="javaScript:void();"><i class="zmdi zmdi-long-arrow-right"></i> Level Two</a></li>
              <li>
                <a href="javaScript:void();"><i class="zmdi zmdi-long-arrow-right"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="javaScript:void();"><i class="zmdi zmdi-long-arrow-right"></i> Level Three</a></li>
                  <li><a href="javaScript:void();"><i class="zmdi zmdi-long-arrow-right"></i> Level Three</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-long-arrow-right"></i> Level One</a></li>
        </ul>
      </li>
      <li class="sidebar-header">LABELS</li>
      <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
      <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
      <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li>
    </ul>
   
   </div>
   <!--End sidebar-wrapper-->