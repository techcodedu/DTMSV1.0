<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <img src="{{asset('images/dmmsu.png')}}" alt="" class="logo-admin">
        <div class="sidebar-brand-text mx-3">DTMV V1.0</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if(request()->routeIs('home')) active @endif">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{ __('Dashboard') }}</span></a>
    </li>
    <hr class="sidebar-divider">
     <!-- Document Management -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseD"
           aria-expanded="true" aria-controls="collapseD" style="padding-top: inherit;">
            <i class="fas fa-folder"></i>
            <span>Document Management</span>
        </a>
        <div id="collapseD" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <a class="nav-link" href="{{ route('users.index') }}">
                <i class="fas fa-fw fa-folder-open"></i>
                <span>{{ __('Documents on Hand') }}</span></a>
        </div>
        <div id="collapseD" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <a class="nav-link" href="{{ route('users.index') }}">
                <i class="fas fa-fw fa-chart-line"></i>
                <span>{{ __('Documents in Progress') }}</span></a>
        </div>
         <div id="collapseD" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <a class="nav-link" href="{{ route('users.index') }}">
                <i class="fas fa-fw fa-briefcase"></i>
                <span>{{ __('Track and Monitor') }}</span></a>
        </div>
    </li>
    <!-- End of Document Management -->
    
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Users -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
           aria-expanded="true" aria-controls="collapseTwo" style="padding-top: inherit;">
            <i class="fas fa-fw fa-cog"></i>
            <span>User Management</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <a class="nav-link" href="{{ route('users.index') }}">
                <i class="fas fa-fw fa-users"></i>
                <span>{{ __('Users') }}</span></a>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <a class="nav-link" href="{{ route('users.index') }}">
                 <i class="fas fa-fw fa-user-tie"></i>
                <span>{{ __('Manage Users') }}</span></a>
        </div>
    </li>
    {{-- end of Users Nav --}}

     <!-- Reports Nav -->
    <li class="nav-item @if(request()->routeIs('backend.reports')) active @endif">
        <a class="nav-link" href="{{ route('backend.reports') }}">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>{{ __('Reports') }}</span></a>
    </li>
     <!-- Settings Nav-->
    <li class="nav-item @if(request()->routeIs('backend.settings')) active @endif">
        <a class="nav-link" href="{{ route('backend.settings') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>{{ __('Settings') }}</span></a>
    </li>
      <!-- Helpand Support Nav-->
    <li class="nav-item @if(request()->routeIs('backend.help')) active @endif">
        <a class="nav-link" href="{{ route('backend.help') }}">
            <i class="fas fa-fw fa-comment-alt"></i>
            <span>{{ __('Help & Support') }}</span></a>
    </li>


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline pt-4">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
