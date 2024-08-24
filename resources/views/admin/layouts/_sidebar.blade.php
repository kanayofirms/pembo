<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        @if (Auth::user()->is_role == '1')
            <li class="nav-item">
                <a class="nav-link @if (Request::segment(2) == 'dashboard') @else collapsed @endif"
                    href="{{ url('admin/dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link @if (Request::segment(2) == 'staff') @else collapsed @endif"
                    href="{{ url('admin/staff/list') }}">
                    <i class="bi bi-person"></i>
                    <span>Staff</span>
                </a>
            </li><!-- End Staff Page Nav -->

            <li class="nav-item">
                <a class="nav-link @if (Request::segment(2) == 'loan_types') @else collapsed @endif"
                    href="{{ url('admin/loan_types/list') }}">
                    <i class="bi bi-journal-text"></i>
                    <span>Loan Types</span>
                </a>
            </li><!-- End Staff Page Nav -->

            <li class="nav-item">
                <a class="nav-link @if (Request::segment(2) == 'loan_plan') @else collapsed @endif"
                    href="{{ url('admin/loan_plan/list') }}">
                    <i class="bi bi-layout-text-window-reverse"></i>
                    <span>Loan Plan</span>
                </a>
            </li><!-- End Staff Page Nav -->

            <li class="nav-item">
                <a class="nav-link @if (Request::segment(2) == 'loan') @else collapsed @endif"
                    href="{{ url('admin/loan/list') }}">
                    <i class="bi bi-bar-chart"></i>
                    <span>Loan</span>
                </a>
            </li><!-- End Staff Page Nav -->

            <li class="nav-item">
                <a class="nav-link @if (Request::segment(2) == 'loan_user') @else collapsed @endif"
                    href="{{ url('admin/loan_user/list') }}">
                    <i class="bi bi-gem"></i>
                    <span>Loan User</span>
                </a>
            </li><!-- End Staff Page Nav -->

            <li class="nav-item">
                <a class="nav-link @if (Request::segment(2) == 'profile') @else collapsed @endif"
                    href="{{ url('admin/profile') }}">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li><!-- End Profile Page Nav -->
        @endif

        @if (Auth::user()->is_role == '0')
            <li class="nav-item">
                <a class="nav-link @if (Request::segment(2) == 'dashboard') @else collapsed @endif"
                    href="{{ url('staff/dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link @if (Request::segment(2) == 'loan_user') @else collapsed @endif"
                    href="{{ url('staff/loan_user/list') }}">
                    <i class="bi bi-person"></i>
                    <span>Loan User</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link @if (Request::segment(2) == 'profile') @else collapsed @endif"
                    href="{{ url('staff/profile') }}">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li>
        @endif

    </ul>

</aside><!-- End Sidebar-->
