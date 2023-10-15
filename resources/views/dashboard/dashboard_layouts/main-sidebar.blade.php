<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link" style="margin-top: 8px" height="200px" width="">
        <img src="{{ asset('assets/img/logo.png') }}" href="{{ url('/') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity:.8">
        <span class="brand-text font-weight-bolder font-size-300px">CoderZ</span>
        <div class="info">
            <h5 style=" color:#53A798; display: inline-block; margin-right: 10px;margin-top:20px;margin-left:10px">
                @if (auth()->guard('Admin')->check())
                    Welcome {{ auth()->guard('Admin')->user()->First_name }}
                @elseif(auth()->guard('User')->check())
                    Welcome {{ auth()->guard('User')->user()->First_name }}
                @endif


            </h5>
        </div>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin-dashboard') }}" class="nav-link">
                        <i class="fas fa-home nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @if (Auth::guard('Admin'))
                    <li class="nav-item">
                        <a href="{{ route('students.index') }}" class="nav-link">
                            <i class="fas fa-users nav-icon"></i>
                            <p>Student</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('cohorts.index') }}" class="nav-link">
                            <i class="fas fa-users nav-icon"></i>
                            <p>Cohorts</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admins.index') }}" class="nav-link">
                            <i class="fas fa-user-shield nav-icon"></i>
                            <p>Admins</p>
                        </a>
                    </li>
                @endif

                <li class="nav-item has-sub">
                    <a href="{{ route('sources.index') }}" class="nav-link">
                        <i class="fas fa-th nav-icon"></i>
                        <p>Sources</p>
                        <i class="right fas fa-angle-left"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        @foreach ($Task as $item)                 
                            <li class="nav-item">
                                <a href="{{ route('tasks.sidebar', ['type_id' => $item->id, 'admin_id' => Auth::guard('Admin')->id()]) }}"
                                    class="nav-link">
                                    <i class="far fa-envelope nav-icon"></i>
                                    <p>{{ $item->technology->Technology }}</p>
                                </a>
                            </li>
                        @endforeach
                    </ul>


                </li>

                <li class="nav-item has-sub">
                    <a href="{{ route('tasks.index') }}" class="nav-link">
                        <i class="fas fa-hand-holding-heart nav-icon"></i>
                        <p>Task</p>
                        <i class="right fas fa-angle-left"></i>
                    </a>
                    <ul class="nav nav-treeview">

                        @foreach ($Task as $item)
                            <li class="nav-item">
                                <a href="{{ route('tasks.sidebar', ['type_id' => $item->id, 'admin_id' => Auth::guard('Admin')->id()]) }}"
                                    class="nav-link">
                                    <i class="far fa-envelope nav-icon"></i>
                                    <p>{{ $item->technology->Technology }}</p>
                                </a>
                            </li>
                        @endforeach


                        {{-- <li class="nav-item">
                            <a href="{{ route('tasks.index') }}"class="nav-link">
                                <i class="far fa-envelope nav-icon"></i>
                                <p>HTML</p>
                            </a>
                        </li> --}}

                    </ul>
                </li>

                <li class="nav-item has-sub">
                    <a href="{{ route('tasks.index') }}" class="nav-link">
                        <i class="fas fa-hand-holding-usd nav-icon"></i>
                        <p>Project</p>
                        <i class="right fas fa-angle-left"></i>
                    </a>
                    <ul class="nav nav-treeview">

                        @php
                            $i = 1;
                        @endphp


                        @foreach ($Task as $item)
                            <li class="nav-item">
                                <a href="{{ route('tasks.sidebar', ['type_id' => $item->id, 'admin_id' => Auth::guard('Admin')->id()]) }}"
                                    class="nav-link">
                                    <i class="far fa-envelope nav-icon"></i>
                                    <p>Project {{ $i }}</p>
                                </a>
                            </li>
                            @php
                                $i++;
                            @endphp
                        @endforeach

                        {{-- <li class="nav-item">
                            <a href="{{ route('tasks.index') }}" class="nav-link">
                                <i class="far fa-envelope nav-icon"></i>
                                <p>Project 1</p>
                            </a>
                        </li> --}}

                    </ul>
                </li>

                <li class="nav-item has-sub">
                    <a href="{{ route('tasks.index') }}" class="nav-link">
                        <i class="fas fa-handshake nav-icon"></i>
                        <p>Master</p>
                        <i class="right fas fa-angle-left"></i>
                    </a>
                    <ul class="nav nav-treeview">


                        @foreach ($Task as $item)
                            <li class="nav-item">
                                <a href="{{ route('tasks.sidebar', ['type_id' => $item->id, 'admin_id' => Auth::guard('Admin')->id()]) }}"
                                    class="nav-link">
                                    <i class="far fa-envelope nav-icon"></i>
                                    <p>{{ $item->Titel }}</p>
                                </a>
                            </li>
                        @endforeach


                        {{-- <li class="nav-item">
                            <a href="{{ route('tasks.index') }}" class="nav-link">
                                <i class="far fa-envelope nav-icon"></i>
                                <p> Front end</p>
                            </a>
                        </li> --}}
                    </ul>
                </li>


                <li class="nav-item has-sub">
                    <a href="{{ route('Report.index') }}" class="nav-link">
                        <i class="fas fa-briefcase nav-icon"></i>
                        <p>Report</p>
                        <i class="right fas fa-angle-left"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        @php
                            $i = 1;
                        @endphp

                        <ul class="nav nav-treeview">
                            @foreach ($Report as $item)
                                <li class="nav-item">
                                    <a href="{{ route('Report.sidebar', ['type_id' => $item->id, 'admin_id' => Auth::guard('Admin')->id()]) }}"
                                        class="nav-link">
                                        <i class="far fa-envelope nav-icon"></i>
                                        <p>Report {{ $i }}</p>
                                    </a>
                                </li>
                                @php
                                    $i++;
                                @endphp
                            @endforeach
                        </ul>



                        {{-- <li class="nav-item">
                            <a href="{{ route('Report.index') }}"class="nav-link">
                                <i class="far fa-envelope nav-icon"></i>
                                <p>Report 1</p>
                            </a>
                        </li> --}}
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-briefcase nav-icon"></i>
                        <p>Portfolio</p>
                    </a>
                </li>

                @if (Auth::guard('Admin'))
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-envelope nav-icon"></i>
                            <p>
                                Mailbox
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('send-email') }}" class="nav-link">
                                    <i class="far fa-envelope nav-icon"></i>
                                    <p>Send</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
            <div class="container">
                <a href="{{ route('admin-logout') }}" class="btn btn-danger"
                    style="margin-top: 15px;margin-left: 10px">Logout</a>
            </div>
        </nav>
        <!-- /.sidebar-menu -->

    </div>
    <!-- /.sidebar -->
</aside>
