<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    // Dashboard main
    Route::get('/dashboard', fn() => view('admin.dashboard'))->middleware(['verified'])->name('admin.dashboard');

    // Help Page
    Route::get('/help', fn() => view('admin.help'))->name('admin.help');

    // Project routes
    Route::get('/project/index', fn() => view('admin.project.index'))->name('admin.project.index');
    Route::get('/project/tasks', fn() => view('admin.project.tasks'))->name('admin.project.tasks');
    Route::get('/project/timesheet', fn() => view('admin.project.timesheet'))->name('admin.project.timesheet');
    Route::get('/project/leaders', fn() => view('admin.project.leaders'))->name('admin.project.leaders');
    Route::get('/project-dashboard', fn() => view('admin.project.dashboard'))->name('admin.project');

    // HR Dashboard route
    Route::get('/hr-dashboard', fn() => view('admin.hr.dashboard'))->name('admin.hr');

    // Access Control
    Route::get('/auth/user', fn() => view('admin.auth.user.index'))->name('admin.auth.user.index');
    Route::get('/auth/role', fn() => view('admin.auth.role.index'))->name('admin.auth.role.index');
    Route::get('/auth/role/create', fn() => view('admin.auth.role.create'))->name('admin.auth.role.create');

    // Tickets
    Route::get('/ticket/ticket-view', fn() => view('admin.ticket.ticket-view'))->name('admin.ticket.ticket-view');
    Route::get('/ticket/ticket-detail', fn() => view('admin.ticket.ticket-detail'))->name('admin.ticket.ticket-detail');

    // Clients
    Route::get('/out-client/clients', fn() => view('admin.out-client.clients'))->name('admin.out-client.clients');
    Route::get('/out-client/clients-profile', fn() => view('admin.out-client.clients-profile'))->name('admin.out-client.clients-profile');

    // Employees
    Route::get('/our-employee/members', [EmployeeController::class ,'index'])->name('admin.our-employee.members');
    Route::post('/our-employee/members', [EmployeeController::class ,'store'])->name('admin.our-employee.store');
    Route::get('/our-employee/{id}/profile', [EmployeeController::class, "show"])->name('admin.our-employee.members-profile');
    Route::get('/our-employee/holidays', fn() => view('admin.our-employee.holidays'))->name('admin.our-employee.holidays');
    Route::get('/our-employee/attendance-employee', fn() => view('admin.our-employee.attendance-employee'))->name('admin.our-employee.attendance-employee');
    Route::get('/our-employee/attendance', fn() => view('admin.our-employee.attendance'))->name('admin.our-employee.attendance');
    Route::get('/our-employee/leave-request', fn() => view('admin.our-employee.leave-request'))->name('admin.our-employee.leave-request');
    Route::get('/our-employee/department', [DepartmentController::class, 'index'])->name('admin.our-employee.department');
    Route::post('/our-employee/department', [DepartmentController::class, 'store'])->name('admin.our-employee.department.store');
    Route::patch('/our-employee/department', [DepartmentController::class, 'update'])->name('admin.our-employee.department.update');
    Route::delete('/our-employee/department/{id}', [DepartmentController::class, 'destroy'])->name('admin.our-employee.department.destroy');

    // Accounts
    Route::get('/accounts/invocies', fn() => view('admin.accounts.invocies'))->name('admin.accounts.invocies');
    Route::get('/accounts/payments', fn() => view('admin.accounts.payments'))->name('admin.accounts.payments');
    Route::get('/accounts/expenses', fn() => view('admin.accounts.expenses'))->name('admin.accounts.expenses');

    // Payroll
    Route::get('/payroll/employee-salary', fn() => view('admin.payroll.employee-salary'))->name('admin.employee-salary');

    // App Pages
    Route::get('/app/calender', fn() => view('admin.app.calender'))->name('admin.app.calender');
    Route::get('/app/messages', fn() => view('admin.app.messages'))->name('admin.app.messages');

    // Other Pages
    Route::get('/other-pages/apex-charts', fn() => view('admin.other-pages.apex-charts'))->name('admin.other-pages.apex-charts');
    Route::get('/other-pages/form-example', fn() => view('admin.other-pages.form-example'))->name('admin.other-pages.form-example');
    Route::get('/other-pages/table-example', fn() => view('admin.other-pages.table-example'))->name('admin.other-pages.table-example');
    Route::get('/other-pages/review-page', fn() => view('admin.other-pages.review-page'))->name('admin.other-pages.review-page');
    Route::get('/other-pages/icons', fn() => view('admin.other-pages.icons'))->name('admin.other-pages.icons');
    Route::get('/other-pages/contact', fn() => view('admin.other-pages.contact'))->name('admin.other-pages.contact');

    // UI Components
    Route::get('/ui-components/alerts', fn() => view('admin.ui-components.alerts'))->name('admin.ui-components.alerts');

    // Admin Sign Up Page (Add Personal Account)
    Route::get('/authentication/signup', fn() => view('admin.authentication.signup'))->name('admin.authentication.signup');
});

Route::middleware(['auth', 'role:hr,admin'])->group(function () {
});

Route::middleware(['auth', 'role:employee,admin'])->group(function () {
});

require __DIR__.'/auth.php';
