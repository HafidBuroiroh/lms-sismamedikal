<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/"><img src="{{asset('image/logo-sismamedikal.png')}}" class="mb-2 mt-2" width="200"></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">UL</a>
        </div>
        <ul class="sidebar-menu">
                <li class="menu-header">Dashboard</li>
                <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                    <a class="nav-link {{ '' }}" href="{{ url('home') }}"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                </li>
                <li class="menu-header">SOP/SPM/Course</li>
            <li class="{{ Request::is('sop') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ url('/sop') }}"><i class="fas fa-list"></i> <span>List SOP</span></a>
            </li>
            <li class="{{ Request::is('spm') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ url('/spm') }}"><i class="fas fa-list"></i> <span>List SPM</span></a>
            </li>
            <li class="{{ Request::is('course') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ url('/course') }}"><i class="fas fa-list"></i> <span>List Course</span></a>
            </li>
            <li class="{{ Request::is('sub-materi') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ url('/sub-materi') }}"><i class="fas fa-list"></i> <span>List Sub Materi</span></a>
            </li>
            <li class="{{ Request::is('list-unverif') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ url('list-unverif') }}"><i class="fas fa-user-xmark"></i> <span>List - Unverified</span></a>
            </li>
            <li class="{{ Request::is('list-verif') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ url('list-verif') }}"><i class="fas fa-user-check"></i> <span>List - Verified</span></a>
            </li>
            <li class="menu-header">Jabatan</li>
                <li class="{{ Request::is('jabatan') ? 'active' : '' }}">
                    <a class="nav-link"
                        href="{{url('jabatan')}}"><i class="fas fa-user"></i> <span>Jabatan</span></a>
                </li>
            <li class="menu-header">Training System</li>
                <li class="{{ Request::is('LOTC') ? 'active' : '' }}">
                    <a class="nav-link"
                        href="{{url('LOTC')}}"><i class="fas fa-graduation-cap"></i> <span>List Of Training Categories</span></a>
                </li>

                <li class="{{ Request::is('LPT') ? 'active' : '' }}">
                    <a class="nav-link"
                        href="{{url('LPT')}}"><i class="fas fa-users"></i> <span>List Progress Training</span></a>
                </li>
            <li class="{{ Request::is('certificate') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ url('certificate') }}"><i class="fas fa-file"></i> <span>Certificate</span></a>
            </li>

                <li class="{{ Request::is('list-pengumuman') ? 'active' : '' }}">
                    <a class="nav-link"
                        href="{{url('list-pengumuman')}}"><i class="fas fa-bullhorn"></i> <span>Policy</span></a>
                </li>
                <li class="{{ Request::is('materi-chatting') ? 'active' : '' }}">
                    <a class="nav-link"
                        href="{{url('materi-chatting')}}"><i class="fas fa-comments"></i> <span>Comments</span></a>
                </li>


                
        </ul>
    </aside>    
</div>
