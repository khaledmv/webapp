<aside class="left-sidebar bg-sidebar">
  <div id="sidebar" class="sidebar sidebar-with-footer">
    <!-- Aplication Brand -->
    <div class="app-brand">
      <a href="{{ route('home-page')}}">
        <svg
          class="brand-icon"
          xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="xMidYMid"
          width="30"
          height="33"
          viewBox="0 0 30 33"
        >
          <g fill="none" fill-rule="evenodd">
            <path
              class="logo-fill-blue"
              fill="#7DBCFF"
              d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
            />
            <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
          </g>
        </svg>
        <span class="brand-name">WebAiid</span>
      </a>
    </div>
    <!-- begin sidebar scrollbar -->
    <div class="sidebar-scrollbar">

      <!-- sidebar menu -->
      <ul class="nav sidebar-inner" id="sidebar-menu">
        

        
          <li  class="has-sub active expand" >
            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
              aria-expanded="false" aria-controls="dashboard">
              <i class="mdi mdi-view-dashboard-outline"></i>
              <span class="nav-text">Dashboard</span> <b class="caret"></b>
            </a>
            <ul  class="collapse show"  id="dashboard"
              data-parent="#sidebar-menu">
              <div class="sub-menu">
                
                
                  
                    <li  class="active" >
                      <a class="sidenav-item-link" href="{{route('dashboard')}}">
                        <span class="nav-text">Dashboard</span>
                        
                      </a>
                    </li>
                  
                

                
                
                  
                    <li >
                      <a class="sidenav-item-link">
                        <span class="nav-text">Analytics</span>
                        
                        <span class="badge badge-success">new</span>
                        
                      </a>
                    </li>
                  
                

                
              </div>
            </ul>
          </li>
    
          <li  class="has-sub" >
            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
              aria-expanded="false" aria-controls="pages">
              <i class="mdi mdi-image-filter-none"></i>
              <span class="nav-text">Pages</span> <b class="caret"></b>
            </a>
            <ul  class="collapse"  id="pages"
              data-parent="#sidebar-menu">
              <div class="sub-menu">
                
                <li  class="has-sub" >
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#authentication"
                    aria-expanded="false" aria-controls="authentication">
                    <span class="nav-text">NewsLetter</span> <b class="caret"></b>
                  </a>
                  <ul  class="collapse"  id="authentication">
                    <div class="sub-menu">
                      
                      <li >
                        <a href="{{route('newsletter')}}">Mail</a>
                      </li>
                      
                    </div>
                  </ul>
                </li>
                


                <li  class="has-sub" >
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#contact"
                    aria-expanded="false" aria-controls="contact">
                    <span class="nav-text">Contact</span> <b class="caret"></b>
                  </a>
                  <ul  class="collapse"  id="contact">
                    <div class="sub-menu">
                      
                      <li >
                        <a href="{{route('admin-contact')}}">Message</a>
                      </li>
                                            
                    </div>
                  </ul>
                </li>
                

                
              </div>
            </ul>
          </li>


          <li  class="has-sub" >
            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#blogs"
              aria-expanded="false" aria-controls="blogs">
              <i class="mdi mdi-image-filter-none"></i>
              <span class="nav-text">Blogs</span> <b class="caret"></b>
            </a>
            <ul  class="collapse"  id="blogs"
              data-parent="#sidebar-menu">
              <div class="sub-menu">
                
                
                  

                <li  class="has-sub" >
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#blog"
                    aria-expanded="false" aria-controls="blog">
                    <span class="nav-text">Blog</span> <b class="caret"></b>
                  </a>
                  <ul  class="collapse"  id="blog">
                    <div class="sub-menu">
                      
                      <li >
                        <a href="invoice.html">Category</a>
                      </li>
                      
                      <li >
                        <a href="{{ route('posts.index') }}">Post List</a>
                      </li>

                      <li >
                        <a href="{{route('posts.create')}}">Add Post</a>
                      </li>
                      
                    </div>
                  </ul>
                </li>
                <li  class="has-sub" >
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#category"
                    aria-expanded="false" aria-controls="category">
                    <span class="nav-text">Category</span> <b class="caret"></b>
                  </a>
                  <ul  class="collapse"  id="category">
                    <div class="sub-menu">
                      
                      
                      <li >
                        <a href="{{ route('category.index') }}">Category List</a>
                      </li>

                      <li >
                        <a href="{{route('category.create')}}">Add Category</a>
                      </li>
                      
                    </div>
                  </ul>
                </li>

              </div>
            </ul>
          </li>
        
        
        
      </ul>

    </div>

    <hr class="separator" />

    <div class="sidebar-footer">
      <div class="sidebar-footer-content">
        <h6 class="text-uppercase">
          Cpu Uses <span class="float-right">40%</span>
        </h6>
        <div class="progress progress-xs">
          <div
            class="progress-bar active"
            style="width: 40%;"
            role="progressbar"
          ></div>
        </div>
        <h6 class="text-uppercase">
          Memory Uses <span class="float-right">65%</span>
        </h6>
        <div class="progress progress-xs">
          <div
            class="progress-bar progress-bar-warning"
            style="width: 65%;"
            role="progressbar"
          ></div>
        </div>
      </div>
    </div>
  </div>
</aside>