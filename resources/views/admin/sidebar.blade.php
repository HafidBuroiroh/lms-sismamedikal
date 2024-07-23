<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/"><img src="{{asset('image/logo-sismamedikal.png')}}" class="mb-2 mt-2" width="200"></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">UL</a>
        </div>
        @if(Auth::user()->level == 1)
        <ul class="sidebar-menu">
                
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
            <li class="{{ Request::is('materi-umum') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ url('/materi-umum') }}"><i class="fas fa-list"></i> <span>List Materi Umum</span></a>
            </li>
            <li class="{{ Request::is('sub-materi') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ url('/sub-materi') }}"><i class="fas fa-list"></i> <span>List Sub Materi</span></a>
            </li>
            <li class="{{ Request::is('pertanyaan') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ url('/pertanyaan') }}"><i class="fas fa-list"></i> <span>List Pertanyaan</span></a>
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
                <li class="{{ Request::is('list-pelatihan') ? 'active' : '' }}">
                    <a class="nav-link"
                        href="{{url('list-pelatihan')}}"><i class="fas fa-graduation-cap"></i> <span>List Of Training Categories</span></a>
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
        @else
        <ul class="sidebar-menu">
            <li class="dropdown {{ Route::is('rs.*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i><span>User Manajemen</span></a>
                <ul class="dropdown-menu" style="">
                  <li class="{{ Route::is('rs.*') ? 'active' : '' }}"><a href="{{ route('superadmin.rs.index') }}" class="nav-link">Rumah Sakit</a></li>
                </ul>
            </li>
            <li class="{{ Route::is('kebijakan.*') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ route('superadmin.kebijakan.index') }}"><i class="fas fa-bullhorn"></i> <span>Kebijakan</span></a>
            </li>
        </ul>
        @endif
    </aside>    
</div>
