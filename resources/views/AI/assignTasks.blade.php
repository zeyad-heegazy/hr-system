@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-dark text-white">
                <h5 class="mb-0">Auto Assign Task</h5>
            </div>
            <div class="card-body">
                <form id="assignForm">
                    @csrf
                    <div class="mb-3">
                        <label for="skill" class="form-label">Choose Skills</label>
                        <select name="skill_indices[]" id="skill" class="form-select w-100" multiple required>
                            @foreach ($skills as $index => $skill)
                                <option value="{{ $index }}">{{ $skill }} (Index: {{ $index }})</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="complexity" class="form-label">Select Task Complexity</label>
                        <select name="complexity" id="complexity" class="form-select w-auto" required>
                            <option disabled selected>Select complexity</option>
                            @foreach (['Low', 'Medium', 'High'] as $level)
                                <option value="{{ $level }}">{{ $level }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Assign Task</button>
                </form>

                <div id="resultSection" class="mt-4" style="display: none">
                    <div class="alert alert-success">
                        <h5>Assigned Task</h5>
                        <p><strong>Task Complexity:</strong> <span id="taskComplexity"></span></p>
                        <p><strong>Skills:</strong> <span id="taskSkills"></span></p>
                        <h6>Assigned Employees</h6>
                        <table class="table table-bordered mt-2">
                            <thead>
                            <tr>
                                <th>Employee ID</th>
                                <th>Confidence</th>
                            </tr>
                            </thead>
                            <tbody id="employeeTableBody"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('assignForm').addEventListener('submit', function (e) {
            e.preventDefault();

            const skillIndices = Array.from(document.getElementById('skill').selectedOptions).map(o => +o.value);
            const complexity = document.getElementById('complexity').value;

            fetch("{{ url('admin/assign/task/api') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ skill_indices: skillIndices, complexity }),
            })
                .then(res => res.json())
                .then(data => {
                    document.getElementById('taskComplexity').innerText = data.task_complexity;
                    document.getElementById('taskSkills').innerText = data.skills.join(', ');

                    const tableBody = document.getElementById('employeeTableBody');
                    tableBody.innerHTML = '';
                    data.employees.forEach(emp => {
                        tableBody.innerHTML += `<tr><td>${emp.employee_id}</td><td>${(emp.confidence * 100).toFixed(2)}%</td></tr>`;
                    });

                    document.getElementById('resultSection').style.display = 'block';
                })
                .catch(err => {
                    alert('Something went wrong');
                    console.error(err);
                });
        });
    </script>
@endsection
