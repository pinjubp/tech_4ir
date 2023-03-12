<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="{{ asset('adminbackend../images/logo-dark.png') }}" alt="">
						  <h3><b>Sunny</b> Admin</h3>
					 </div>
				</a>
			</div>
    </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		    <li>
          <a href="{{ route('admin.dashboard') }}">
            <i data-feather="pie-chart"></i>
		      	<span>Dashboard</span>
          </a>
        </li>  
		
        <li class="treeview">
          <a href="#">
            <i class="fas fa-user-shield" style="font-size: 17px"></i>
            <span>Admin Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">
            <li><a href="{{ route('admin.profile.view') }}"><i class="ti-more"></i>admin Profile</a></li>
            <li><a href="{{ route('view.adminuser') }}"><i class="ti-more"></i>View User List</a></li>
            @if ( Auth::guard('admin')->user()->usertype == 'admin')
              <li><a href="{{ route('create.adminuser') }}"><i class="ti-more"></i>Create New User</a></li>
            @endif

          </ul> 
        </li> 
        <li class="treeview">
          <a href="#">
            <i class="fas fa-users" style="font-size: 17px"></i>
            <span>User Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">            
            <li><a href="{{ route('view.userlist') }}"><i class="ti-more"></i>View User List</a></li>          
          </ul> 
        </li> 
		  
        <li class="treeview">
          <a href="#">
            <i class="fas fa-th-large" style="font-size: 17px"></i>
            <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('category.add')  }}"><i class="ti-more"></i>Add Category</a></li>
            <li><a href="{{ route('category.list')  }}"><i class="ti-more"></i>Category List</a></li>            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fas fa-th" style="font-size: 17px"></i>
            <span>Sub Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('subcategory.add')  }}"><i class="ti-more"></i>Add Sub Category</a></li>
            <li><a href="{{ route('subcategory.list')  }}"><i class="ti-more"></i>Sub Category List</a></li>            
          </ul>
        </li>

        
		
        <li class="treeview">
          <a href="#">
            <i class="fas fa-tag" style="font-size: 17px"></i>
            <span>Brand</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('brand.add') }}"><i class="ti-more"></i>Add Brand</a></li>
            <li><a href="{{ route('brand.list') }}"><i class="ti-more"></i>Brand List</a></li>
           
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fas fa-box-open" style="font-size: 17px"></i>
            
            <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('product.add') }}"><i class="ti-more"></i>Add Product</a></li>
            <li><a href="{{ route('product.list') }}"><i class="ti-more"></i>Product List</a></li>
           
          </ul>
        </li> 
        <li class="treeview">
          <a href="#">
            <i class="fas fa-list" style="font-size: 17px"></i>
            
            <span>Spacifications</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="ti-more"></i>Add Spacifications</a></li>
            <li><a href="#"><i class="ti-more"></i>Spacifications List</a></li>
           
          </ul>
        </li> 
        <li class="treeview">
          <a href="#">
            <i class="fas fa-list-ol" style="font-size: 17px"></i>
            
            <span>Spacifications Value</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="ti-more"></i>Add Product Spacifications Value</a></li>
            <li><a href="#"><i class="ti-more"></i>Product Spacifications Value</a></li>
           
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i data-feather="grid"></i>
            <span>Service</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="ti-more"></i>Create Service</a></li>
            <li><a href="#"><i class="ti-more"></i>Service List</a></li>
            <li><a href="#"><i class="ti-more"></i>Create Service Into</a></li>
            <li><a href="#"><i class="ti-more"></i>Service Into List</a></li>
           
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i data-feather="briefcase"></i>
            <span>Portfolio</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="ti-more"></i>Create Portfolio</a></li> 
            <li><a href="#"><i class="ti-more"></i>List Portfolio</a></li>                               
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i data-feather="message-square"></i>
            <span>Testimonial</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="ti-more"></i>Create Testimonial</a></li>
            <li><a href="#"><i class="ti-more"></i>Testimonial  List</a></li>                        
          </ul>
        </li>	
        <li class="treeview">
          <a href="#">
            <i data-feather="help-circle"></i>
            <span>FAQ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="ti-more"></i>Create FAQ</a></li>
            <li><a href="#"><i class="ti-more"></i>FAQ  List</a></li>                        
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i data-feather="inbox"></i>
            <span>Contact Message</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="ti-more"></i>Message List</a></li>
            <li><a href="#"><i class="ti-more"></i>Create Contact Address</a></li> 
            <li><a href="#"><i class="ti-more"></i>Address List</a></li>   
            <li><a href="#"><i class="ti-more"></i>Contact Intro List</a></li>
            <li><a href="#"><i class="ti-more"></i>Create Contact Intro</a></li>                    
          </ul>
        </li>	
        
        <li class="treeview">
          <a href="#">
            <i data-feather="mail"></i>
            <span>Newsletter</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="ti-more"></i>Newsletter List</a></li>                                  
          </ul>
        </li> 
        <li class="treeview">
          <a href="#">
            <i data-feather="settings"></i>
            <span>Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="ti-more"></i>Site Settings</a></li>                                  
          </ul>
        </li> 
		 
        
		  
        <li>
          <a href="#">
            <i data-feather="lock"></i>
            <span>Log Out</span>
          </a>
        </li> 
        
      </ul>
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>