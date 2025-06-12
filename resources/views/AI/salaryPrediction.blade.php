@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card shadow">
            @php
                $selectedJob = $selectedJob ?? null;
                $selectedEmployeeId = $selectedEmployeeId ?? null;
            @endphp

            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Salary Prediction</h5>

                <form method="GET" class="d-flex gap-2 align-items-center">
                    <select name="job" class="form-select w-auto" onchange="this.form.submit()">
                        <option disabled {{ !$selectedJob ? 'selected' : '' }}>Select Job</option>
                        @foreach (array_keys($employeesByJob) as $jobTitle)
                            <option value="{{ $jobTitle }}" {{ $selectedJob === $jobTitle ? 'selected' : '' }}>
                                {{ $jobTitle }}
                            </option>
                        @endforeach
                    </select>

                    <select name="employee_id" class="form-select w-auto" onchange="this.form.submit()">
                        <option disabled {{ !$selectedEmployeeId ? 'selected' : '' }}>Select Employee</option>
                        @if ($selectedJob && isset($employeesByJob[$selectedJob]))
                            @foreach ($employeesByJob[$selectedJob] as $employee)
                                <option value="{{ $employee['id'] }}"
                                    {{ $selectedEmployeeId === $employee['id'] ? 'selected' : '' }}>
                                    {{ $employee['name'] }} ({{ $employee['id'] }})
                                </option>
                            @endforeach
                        @endif
                    </select>
                </form>
            </div>

            @if ($prediction)
                <div class="card-body">
                    <table class="table table-bordered text-center align-middle mb-0">
                        <thead class="table-light">
                        <tr>
                            <th>Employee ID</th>
                            <th>Predicted Workload</th>
                            <th>Actual Workload</th>
                            <th>Predicted Salary</th>
                            <th>Actual Salary</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{ $prediction['employee_id'] }}</td>
                            <td>{{ number_format($prediction['predicted_workload_balance'], 2) }}</td>
                            <td>{{ number_format($prediction['actual_workload_balance'], 2) }}</td>
                            <td>${{ number_format($prediction['predicted_salary'], 2) }}</td>
                            <td>${{ number_format($prediction['actual_salary'], 2) }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>

    @if(!$selectedEmployeeId)
        <div class="container">
            <div style="display: flex; margin-top: 3rem; flex-direction: column; justify-content: center; border: 2px solid #006994; border-radius: 10px; height: 50vh; align-items: center;">
                <p style="font-size: 3rem; color: #006994">No Predictions yet</p>
                <p style="margin-top: 1rem;">please choose department then choose specific employee</p>
            </div>
        </div>
    @endif
@endsection
