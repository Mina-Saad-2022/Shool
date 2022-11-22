<!------------------- start side nav ------------------->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
        <img src="{{asset('dist/img/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light"> International School </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown p-2">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false" v-pre>

                    <img class='image' src=" {{asset('update/users/'.auth()->user()->image)}} ">


                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('auth.logout') }}
                    </a>




                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <form action="{{ route('user.profile') }}" method="get">
                        <a class="dropdown-item" href="{{ route('user.profile') }}" >
                            {{ __('auth.profile') }}
                        </a>
                    </form>
                </div>
            </li>
        </ul>

        <!-- SidebarSearch Form -->
        <div class="form-inline">

            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>


        <!-------------------start Sidebar Menu ------------------->
        <div class="nav-time">

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">


                        <ul class="nav nav-treeview menu">

                            {{----------------------- teacher part -----------------------}}

                            <li class="nav-item">
                                <a href="#" class="nav-link title_button active  toggle"   id="teachers">
                                    <p>
                                        {{ __('auth.teachers') }}
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview" style="...">
                                    <li class="nav-item">
                                        <a href="{{route('teacher.index')}}" class="nav-link navLink
                                    {{ Route::is('teacher.index') ? 'new_active' : '' }}">
                                            <i class="uil uil-book-reader"></i>
                                            <p>{{ __('auth.all_teachers') }}</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('teacher.create')}}" class="nav-link navLink
                                    {{ Route::is('teacher.create') ? 'new_active' : '' }}">
                                            <i class="uil uil-focus-add"></i>
                                            <p>{{ __('auth.new_teacher') }}</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>




                            {{----------------------- Books part -----------------------}}

                            <li class="nav-item">
                                <a href="#" class="nav-link title_button active toggle" >
                                    <p>
                                        {{ __('auth.books') }}
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview" style="...">
                                    <li class="nav-item">
                                        <a href="{{route('book.index')}}" class="nav-link navLink
                                   {{ Route::is('book.index') ? 'new_active' : '' }}
                                    ">
                                            <i class="uil uil-books"></i>
                                            <p>    {{ __('auth.all_books') }}</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('book.create')}}" class="nav-link navLink

                            {{ Route::is('book.create') ? 'new_active' : '' }}

                                    ">
                                            <i class="uil uil-focus-add"></i>
                                            <p> {{ __('auth.new_book') }}</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            {{----------------------- section part -----------------------}}

                            <li class="nav-item">
                                <a href="#" class="nav-link title_button active">
                                    <p>
                                        {{ __('auth.sections') }}
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview" style="...">
                                    <li class="nav-item">
                                        <a href="{{route('section.index')}}" class="nav-link

                                    {{ Route::is('section.index') ? 'new_active' : '' }}

                                    ">
                                            <i class="uil uil-book-reader"></i>
                                            <p>{{ __('auth.all_sections') }}</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('section.create')}}" class="nav-link
                               {{ Route::is('section.create') ? 'new_active' : '' }}">
                                            <i class="uil uil-focus-add"></i>
                                            <p>{{ __('auth.new_section') }}</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            {{----------------------- student part -----------------------}}

                            <li class="nav-item">
                                <a href="#" class="nav-link title_button">
                                    <p>
                                        {{ __('auth.students') }}
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview" style="...">
                                    <li class="nav-item">
                                        <a href="{{route('student.index')}}" class="nav-link
                                   {{ Route::is('student.index') ? 'new_active' : '' }}
                                    ">
                                            <i class="uil uil-books"></i>
                                            <p>    {{ __('auth.all_students') }}</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('student.create')}}" class="nav-link
                            {{ Route::is('student.create') ? 'new_active' : '' }}">
                                            <i class="uil uil-focus-add"></i>
                                            <p> {{ __('auth.new_student') }}</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            {{----------------------- users part -----------------------}}

                            <li class="nav-item">
                                <a href="#" class="nav-link title_button active">
                                    <p>
                                        {{ __('auth.user') }}
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview" style="...">
                                    <li class="nav-item">
                                        <a href="{{route('user.index')}}" class="nav-link
                                    {{ Route::is('user.index') ? 'new_active' : '' }}">
                                            <i class="uil uil-book-reader"></i>
                                            <p>{{ __('auth.all_users') }}</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('user.create')}}" class="nav-link
                                    {{ Route::is('user.create') ? 'new_active' : '' }}">
                                            <i class="uil uil-focus-add"></i>
                                            <p>{{ __('auth.new_user') }}</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            {{----------------------- import & export part -----------------------}}

                            <li class="nav-item">
                                <a href="#" class="nav-link title_button active" id="myBtn">
                                    <p>
                                        {{ __('auth.import_export') }}
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview" style="...">
                                    <li class="nav-item">
                                        <a href="{{route('import.index')}}" class="nav-link
                                    {{ Route::is('import.index') ? 'new_active' : '' }}">
                                            <i class="uil uil-book-reader"></i>
                                            <p>{{ __('auth.import') }}</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('export.index')}}" class="nav-link
                                    {{ Route::is('export.index') ? 'new_active' : '' }}">
                                            <i class="uil uil-focus-add"></i>
                                            <p>{{ __('auth.export') }}</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>



                        </ul>

                    </li>

                </ul>
            </nav>
        </div>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
{{--<script>--}}
{{--    document.getElementById("myBtn").addEventListener("click", function() {--}}
{{--        console.log("Hello World!");--}}
{{--    });--}}
{{--</script>--}}


<script src="{{asset('js/jqure.js')}}"></script>


<!-------------------end Sidebar Menu ------------------->
