    <div class="sidebar px-4 py-4 py-md-5 me-0">
    <div class="d-flex flex-column h-100">
        <a href="{{ route('admin.dashboard') }}" class="mb-0 brand-icon">
            <span class="logo-icon">
                <svg  width="35" height="35" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                    <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                </svg>
            </span>
            <span class="logo-text">my-Task</span>
        </a>

        <ul class="menu-list flex-grow-1 mt-3">
            <li class="collapsed">
                <a class="m-link {{ Request::segment(2) == 'hr-dashboard' || Request::segment(2) == 'project-dashboard' ? 'active' : '' }}" data-bs-toggle="collapse" data-bs-target="#dashboard-Components" href="#">
                    <i class="icofont-home fs-5"></i> <span>Dashboard</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse {{ Request::segment(2) == 'hr-dashboard' || Request::segment(2) == 'project-dashboard' ? 'show' : '' }}" id="dashboard-Components">
                    <li><a class="ms-link {{ Request::segment(2) == 'hr-dashboard' ? 'active' : '' }}" href="{{ route('admin.dashboard') }}"> <span>Hr Dashboard</span></a></li>
                    <li><a class="ms-link {{ Request::segment(2) == 'project-dashboard' ? 'active' : '' }}" href="{{ route('admin.project') }}"> <span>Project Dashboard</span></a></li>
                </ul>
            </li>
            <li class=" {{ Request::is('admin/auth/user') || Request::is('admin/auth/role')  || Request::is('admin/auth/role/create') ? '' : ' collapsed' }}">
                <a class="m-link {{ Request::is('admin/auth/user') || Request::is('admin/auth/role') || Request::is('admin/auth/role/create') ? 'collapse show active' : '' }}{{ Request::is('admin/auth/role') ? 'collapse show active' : '' }}" data-bs-toggle="collapse" data-bs-target="#access" href="#"><i class="fa fa-lock"></i> <span>Access</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>

                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu collapse {{ Request::is('admin/auth/user') || Request::is('admin/auth/role')  || Request::is('admin/auth/role/create') ? 'show' : '' }}" id="access">

                    <li><a class="ms-link {{ Request::is('admin/auth/user') ? 'active' : '' }}" href="{{ route('admin.auth.user.index') }}">User Management</a></li>
                    <li><a class="ms-link {{ Request::is('admin/auth/role') || Request::is('admin/auth/role/create') ? 'active' : '' }}" href="{{ route('admin.auth.role.index') }}">Role Management</a></li>
                </ul>
            </li>
            <li  class="collapsed">
                <a class="m-link {{ Request::segment(2)=='project' ? 'active' : '' }}"  data-bs-toggle="collapse" data-bs-target="#project-Components" href="#">
                    <i class="icofont-briefcase"></i><span>Projects</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu {{ Request::segment(2)=='project' ? 'collapsed show' : 'collapse' }}" id="project-Components">
                    <li><a class="ms-link {{ Request::segment(3)=='index' ? 'active' : '' }}" href="{{ route('admin.project.index') }}"><span>Projects</span></a></li>
                    <li><a class="ms-link {{ Request::segment(3)=='tasks' ? 'active' : '' }}" href="{{ route('admin.project.task.index') }}"><span>Tasks</span></a></li>
                    <li><a class="ms-link {{ Request::segment(3)=='timesheet' ? 'active' : '' }}" href="{{ route('admin.project.timesheet') }}"><span>Timesheet</span></a></li>
                    <li><a class="ms-link {{ Request::segment(3)=='leaders' ? 'active' : '' }}" href="{{ route('admin.project.leaders') }}"><span>Leaders</span></a></li>
                </ul>
            </li>

            <li class="collapsed">
                <a class="m-link {{ Request::segment(2)=='ticket' ? 'active' : '' }} " data-bs-toggle="collapse" data-bs-target="#tikit-Components" href="#"><i
                        class="icofont-ticket"></i> <span>Tickets</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu {{ Request::segment(2)=='ticket' ? 'collapsed show' : 'collapse' }}" id="tikit-Components">
                    <li><a class="ms-link {{  Request::segment(3) == 'ticket-view' ? 'active' : '' }}" href="{{ route('admin.ticket.ticket-view') }}"> <span>Tickets View</span></a></li>
                    <li><a class="ms-link {{  Request::segment(3) == 'ticket-detail' ? 'active' : '' }}" href="{{ route('admin.ticket.ticket-detail') }}"> <span>Ticket Detail</span></a></li>
                </ul>
            </li>
            <li class="collapsed">
                <a class="m-link {{ Request::segment(2)=='out-client' ? 'active' : '' }} " data-bs-toggle="collapse" data-bs-target="#client-Components" href="#"><i
                        class="icofont-user-male"></i> <span>Our Clients</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu {{ Request::segment(2)=='out-client' ? 'collapsed show' : 'collapse' }}" id="client-Components">
                    <li><a class="ms-link {{ Request::segment(3) == 'clients' ? 'active' : '' }}" href="{{ route('admin.out-client.clients') }}"> <span>Clients</span></a></li>
                    <li><a class="ms-link {{ Request::segment(3) == 'clients-profile' ? 'active' : '' }}" href="{{ route('admin.out-client.clients-profile') }}"> <span>Client Profile</span></a></li>
                </ul>
            </li>
            <li class="collapsed">
                <a class="m-link {{ Request::segment(2)=='our-employee' ? 'active' : '' }} " data-bs-toggle="collapse" data-bs-target="#emp-Components" href="#"><i
                        class="icofont-users-alt-5"></i> <span>Employees</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu  {{ Request::segment(2)=='our-employee' ? 'collapsed show' : 'collapse' }}" id="emp-Components">
                    <li><a class="ms-link {{ Request::segment(3) == 'members' ? 'active' : '' }}" href="{{ route('admin.our-employee.members') }}"> <span>Employees</span></a></li>
                    <li><a class="ms-link {{ Request::segment(3) == 'holidays' ? 'active' : '' }}" href="{{ route('admin.our-employee.holidays') }}"> <span>Holidays</span></a></li>
                    <li><a class="ms-link {{ Request::segment(3) == 'attendance-employee' ? 'active' : '' }}" href="{{ route('admin.our-employee.attendance-employee') }}"> <span>Attendance Employees </span></a></li>
                    <li><a class="ms-link {{ Request::segment(3) == 'attendance' ? 'active' : '' }}" href="{{ route('admin.our-employee.attendance') }}"> <span>Attendance</span></a></li>
                    <li><a class="ms-link {{ Request::segment(3) == 'leave-request' ? 'active' : '' }}" href="{{ route('admin.our-employee.leave-request') }}"> <span>Leave Request</span></a></li>
                    <li><a class="ms-link {{ Request::segment(3) == 'department' ? 'active' : '' }}" href="{{ route('admin.our-employee.department') }}"> <span>Department</span></a></li>
                </ul>
            </li>

            <li class="collapsed">
                <a class="m-link {{ Request::segment(2)=='accounts' ? 'active' : '' }} " data-bs-toggle="collapse" data-bs-target="#menu-Componentsone" href="#"><i
                        class="icofont-ui-calculator"></i> <span>Accounts</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu {{ Request::segment(2)=='accounts' ? 'collapsed show' : 'collapse' }}" id="menu-Componentsone">
                    <li><a class="ms-link {{ Request::segment(3) == 'invocies' ? 'active' : '' }}" href="{{ route('admin.accounts.invocies') }}"><span>Invoices</span> </a></li>
                    <li><a class="ms-link {{ Request::segment(3) == 'payments' ? 'active' : '' }}" href="{{ route('admin.accounts.payments') }}"><span>Payments</span> </a></li>
                    <li><a class="ms-link {{ Request::segment(3) == 'expenses' ? 'active' : '' }}" href="{{ route('admin.accounts.expenses') }}"><span>Expenses</span> </a></li>
                </ul>
            </li>
            <li class="collapsed">
                <a class="m-link {{ Request::segment(2)=='payroll' ? 'active' : '' }} " data-bs-toggle="collapse" data-bs-target="#payroll-Components" href="#"><i
                        class="icofont-users-alt-5"></i> <span>Payroll</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                <ul class="sub-menu {{ Request::segment(2)=='payroll' ? 'collapsed show' : 'collapse' }}" id="payroll-Components">
                    <li><a class="ms-link {{ Request::segment(3) == 'employee-salary' ? 'active' : '' }}" href="{{ route('admin.employee-salary') }}"><span>Employee Salary</span> </a></li>

                </ul>
            </li>
        </ul>

        <!-- Menu: menu collepce btn -->
        <button type="button" class="btn btn-link sidebar-mini-btn text-light">
            <span class="ms-2"><i class="icofont-bubble-right"></i></span>
        </button>
    </div>
</div>

