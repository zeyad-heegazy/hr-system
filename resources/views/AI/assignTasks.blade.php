@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-dark text-white">
                <h5 class="mb-0">Auto Assign Task</h5>
            </div>

            <div class="card-body">
                <form id="assignForm">
                    @csrf
                    <div class="mb-3">
                        <label for="task_id" class="form-label">Select a Predefined Task</label>
                        <select id="task_id" class="form-select w-100" required>
                            <option disabled selected>Select a task</option>
                            @foreach ($tasks as $task)
                                <option value="{{ $task->id }}"
                                        data-complexity="{{ $task->complexity }}"
                                        data-skills="{{ implode(',', json_decode($task->skill_indices)) }}">
                                    {{ $task->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Task Complexity</label>
                        <input type="text" id="complexity" class="form-control w-auto" readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Skills Involved</label>
                        <ul id="skillList" class="list-group w-100"></ul>
                    </div>

                    <button type="submit" class="btn btn-primary">Assign Task</button>
                </form>
            </div>
        </div>

        <div id="resultSection" class="mt-4" style="display: none">
            <div class="card border-success">
                <div class="card-body">
                    <h5 class="mb-3 text-success">Assigned Task Result</h5>
                    <p><strong>Task Complexity:</strong> <span id="taskComplexity"></span></p>
                    <p><strong>Skills:</strong> <span id="taskSkills"></span></p>

                    <h6 class="mt-4">Assigned Employees:</h6>
                    <table class="table table-bordered text-center align-middle">
                        <thead class="table-light">
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

    <script>
        console.log("Sending POST to:", "{{ route('admin.assign.task.post') }}");

        const skills = @json($skills);

        document.getElementById('task_id').addEventListener('change', function () {
            const selectedOption = this.options[this.selectedIndex];
            const complexity = selectedOption.getAttribute('data-complexity');
            const skillIndices = selectedOption.getAttribute('data-skills').split(',').map(Number);

            document.getElementById('complexity').value = complexity;

            const skillList = document.getElementById('skillList');
            skillList.innerHTML = '';
            skillIndices.forEach(i => {
                if (skills[i]) {
                    const li = document.createElement('li');
                    li.className = 'list-group-item';
                    li.textContent = `${skills[i]} (Index: ${i})`;
                    skillList.appendChild(li);
                }
            });
        });

        document.getElementById('assignForm').addEventListener('submit', function (e) {
            e.preventDefault();

            const taskSelect = document.getElementById('task_id');
            const selectedOption = taskSelect.options[taskSelect.selectedIndex];
            const complexity = selectedOption.getAttribute('data-complexity');
            const skillIndices = selectedOption.getAttribute('data-skills').split(',').map(Number);

            fetch("{{route('admin.assign.task.post')}}", {
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
                    console.log(data)
                    document.getElementById('taskComplexity').innerText = data.task_complexity;
                    document.getElementById('taskSkills').innerText = Array.isArray(data.skills)
                        ? data.skills.join(', ')
                        : 'N/A';

                    const tableBody = document.getElementById('employeeTableBody');
                    tableBody.innerHTML = '';
                    Array.isArray(data.employees) ? data.employees.forEach(emp => {
                        tableBody.innerHTML += `<tr><td>${emp.employee_id}</td><td>${(emp.confidence * 100).toFixed(2)}%</td></tr>`;
                    }) : "N/A";

                    document.getElementById('resultSection').style.display = 'block';
                })
                .catch(err => {
                    alert('Something went wrong');
                    console.error(err);
                });
        });
    </script>
@endsection
