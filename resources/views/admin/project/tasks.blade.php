@extends('layouts.app')

@section('content')
    <div class="body d-flex py-lg-3 py-md-2">
        <div class="container-xxl">
            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">Task Management</h3>
                        <div class="col-auto d-flex w-sm-100">
                            <button type="button" class="btn btn-dark btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#createtask"><i class="icofont-plus-circle me-2 fs-6"></i>Create Task</button>
                        </div>
                    </div>
                </div>
            </div> <!-- Row end  -->
            <div class="row clearfix  g-3">
                <div class="col-lg-12 col-md-12 flex-column">
                    <div class="row g-3 row-deck">
                        <div class="col-xxl-6 col-xl-4 col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-header py-3">
                                    <h6 class="mb-0 fw-bold ">Task Progress</h6>
                                </div>
                                <div class="card-body mem-list">
                                    <div class="progress-count mb-4">
                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                            <h6 class="mb-0 fw-bold d-flex align-items-center">UI/UX Design</h6>
                                            <span class="small text-muted">02/07</span>
                                        </div>
                                        <div class="progress" style="height: 10px;">
                                            <div class="progress-bar light-info-bg" role="progressbar" style="width: 92%" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="progress-count mb-4">
                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                            <h6 class="mb-0 fw-bold d-flex align-items-center">Website Design</h6>
                                            <span class="small text-muted">01/03</span>
                                        </div>
                                        <div class="progress" style="height: 10px;">
                                            <div class="progress-bar bg-lightgreen" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="progress-count mb-4">
                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                            <h6 class="mb-0 fw-bold d-flex align-items-center">Quality Assurance</h6>
                                            <span class="small text-muted">02/07</span>
                                        </div>
                                        <div class="progress" style="height: 10px;">
                                            <div class="progress-bar light-success-bg" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="progress-count mb-3">
                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                            <h6 class="mb-0 fw-bold d-flex align-items-center">Development</h6>
                                            <span class="small text-muted">01/05</span>
                                        </div>
                                        <div class="progress" style="height: 10px;">
                                            <div class="progress-bar light-orange-bg" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="progress-count mb-4">
                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                            <h6 class="mb-0 fw-bold d-flex align-items-center">Testing</h6>
                                            <span class="small text-muted">01/08</span>
                                        </div>
                                        <div class="progress" style="height: 10px;">
                                            <div class="progress-bar bg-lightyellow" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
{{--                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-header py-3">--}}
{{--                                    <h6 class="mb-0 fw-bold ">Recent Activity</h6>--}}
{{--                                </div>--}}
{{--                                <div class="card-body mem-list">--}}
{{--                                    <div class="timeline-item ti-danger border-bottom ms-2">--}}
{{--                                        <div class="d-flex">--}}
{{--                                            <span class="avatar d-flex justify-content-center align-items-center rounded-circle light-success-bg">RH</span>--}}
{{--                                            <div class="flex-fill ms-3">--}}
{{--                                                <div class="mb-1"><strong>Rechard Add New Task</strong></div>--}}
{{--                                                <span class="d-flex text-muted">20Min ago</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div> <!-- timeline item end  -->--}}
{{--                                    <div class="timeline-item ti-info border-bottom ms-2">--}}
{{--                                        <div class="d-flex">--}}
{{--                                            <span class="avatar d-flex justify-content-center align-items-center rounded-circle bg-careys-pink">SP</span>--}}
{{--                                            <div class="flex-fill ms-3">--}}
{{--                                                <div class="mb-1"><strong>Shipa Review Completed</strong></div>--}}
{{--                                                <span class="d-flex text-muted">40Min ago</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div> <!-- timeline item end  -->--}}
{{--                                    <div class="timeline-item ti-info border-bottom ms-2">--}}
{{--                                        <div class="d-flex">--}}
{{--                                            <span class="avatar d-flex justify-content-center align-items-center rounded-circle bg-careys-pink">MR</span>--}}
{{--                                            <div class="flex-fill ms-3">--}}
{{--                                                <div class="mb-1"><strong>Mora Task To Completed</strong></div>--}}
{{--                                                <span class="d-flex text-muted">1Hr ago</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="timeline-item ti-success  ms-2">--}}
{{--                                        <div class="d-flex">--}}
{{--                                            <span class="avatar d-flex justify-content-center align-items-center rounded-circle bg-lavender-purple">FL</span>--}}
{{--                                            <div class="flex-fill ms-3">--}}
{{--                                                <div class="mb-1"><strong>Fila Add New Task</strong></div>--}}
{{--                                                <span class="d-flex text-muted">1Day ago</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div> <!-- .card: My Timeline -->--}}
{{--                        </div>--}}
                        <div class="col-xxl-6 col-xl-4 col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-header py-3">
                                    <h6 class="mb-0 fw-bold ">Allocated Task Members</h6>
                                </div>
                                <div class="card-body">
                                    <div class="flex-grow-1 mem-list">
                                        @foreach($tasks as $task)
                                        <div class="py-2 d-flex align-items-center border-bottom">
                                            <div class="d-flex ms-2 align-items-center flex-fill">
                                                <img src="{{ asset('storage/') . '/' .$task->employee->image }}" class="avatar lg rounded-circle img-thumbnail" alt="avatar">
                                                <div class="d-flex flex-column ps-2">
                                                    <h6 class="fw-bold mb-0">{{$task->employee->name}}</h6>
                                                    <span class="small text-muted">{{$task->employee->designation}}</span>
                                                </div>
                                            </div>
                                            <button type="button" class="btn light-danger-bg text-end" data-bs-toggle="modal" data-bs-target="#dremovetask">Remove</button>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div> <!-- .card: My Timeline -->
                        </div>
                    </div>
                    <div class="row taskboard g-3 py-xxl-4">
                            <ol class="dd-list col-xxl-4 col-xl-4 col-lg-4 col-md-12 mt-xxl-4 mt-xl-4 mt-lg-4 mt-md-4 mt-sm-4 mt-4"  id="in-progress">
                                <h6 class="fw-bold py-3 mb-0">In Progress</h6>
                                @foreach($inProgressTasks as $task)
                                     <li class="dd-item" data-id="{{$task->id}}">
                                    <div class="dd-handle">
                                        <div class="task-info d-flex align-items-center justify-content-between">
                                            @php
                                                $bgClasses = [
                                                    'light-success-bg',
                                                    'light-danger-bg',
                                                    'light-info-bg',
                                                    'light-warning-bg',
                                                    'light-primary-bg',
                                                    'light-secondary-bg',
                                                ];
                                                $randomBg = $bgClasses[array_rand($bgClasses)];
                                            @endphp
                                            <h6 class="{{ $randomBg }} py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">{{$task->category}}
                                            </h6>
                                            <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                <div class="avatar-list avatar-list-stacked m-0">
                                                    <img class="avatar rounded-circle small-avt" src="{{ asset("storage/". $task->employee->image) }}" alt="">
                                                </div>
                                                    @php
                                                        $priorityClass = match(strtolower($task->priority)) {
                                                            'low' => 'bg-success',
                                                            'medium' => 'bg-warning',
                                                            'high', 'highest' => 'bg-danger',
                                                            default => 'bg-secondary',
                                                        };
                                                    @endphp
                                                <span class="badge {{ $priorityClass }} text-end mt-2">{{$task->priority}}</span>
                                            </div>
                                        </div>
                                        <p class="py-2 mb-0 overflow-hidden">{{$task->description}}</p>
                                        <div class="tikit-info row g-3 align-items-center">
                                            <div class="col-sm">
                                                <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                    <li class="me-2">
                                                        <div class="d-flex align-items-center">
                                                            <i class="icofont-flag"></i>
                                                            <span class="ms-1">28 Mar</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <i class="icofont-paper-clip"></i>
                                                            <span class="ms-1">5</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm text-end">

                                                <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> {{$task->project->name}} </div>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                                @endforeach
                            </ol>
                            <ol class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 mt-xxl-4 mt-xl-4 mt-lg-4 mt-md-0 mt-sm-0 mt-0 dd-list" id="needs-review">
                                 <h6 class="fw-bold py-3 mb-0">Needs Review</h6>
                                @foreach($needsReviewTasks as $task)
                                    <li class="dd-item" data-id="{{$task->id}}">
                                        <div class="dd-handle">
                                            <div class="task-info d-flex align-items-center justify-content-between">
                                                @php
                                                    $bgClasses = [
                                                        'light-success-bg',
                                                        'light-danger-bg',
                                                        'light-info-bg',
                                                        'light-warning-bg',
                                                        'light-primary-bg',
                                                        'light-secondary-bg',
                                                    ];
                                                    $randomBg = $bgClasses[array_rand($bgClasses)];
                                                @endphp
                                                <h6 class="{{ $randomBg }} py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">{{$task->category}}
                                                </h6>
                                                <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                    <div class="avatar-list avatar-list-stacked m-0">
                                                        <img class="avatar rounded-circle small-avt" src="{{ asset("storage/". $task->employee->image) }}" alt="">
                                                    </div>
                                                    @php
                                                        $priorityClass = match(strtolower($task->priority)) {
                                                            'low' => 'bg-success',
                                                            'medium' => 'bg-warning',
                                                            'high', 'highest' => 'bg-danger',
                                                            default => 'bg-secondary',
                                                        };
                                                    @endphp
                                                    <span class="badge {{ $priorityClass }} text-end mt-2">{{$task->priority}}</span>
                                                </div>
                                            </div>
                                            <p class="py-2 mb-0 overflow-hidden">{{$task->description}}</p>
                                            <div class="tikit-info row g-3 align-items-center">
                                                <div class="col-sm">
                                                    <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                        <li class="me-2">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-flag"></i>
                                                                <span class="ms-1">28 Mar</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-paper-clip"></i>
                                                                <span class="ms-1">5</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm text-end">

                                                    <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> {{$task->project->name}} </div>
                                                </div>
                                            </div>
                                        </div>

                                    </li>
                                @endforeach
                            </ol>
                            <ol class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 mt-xxl-4 mt-xl-4 mt-lg-4 mt-md-0 mt-sm-0 mt-0 dd-list" id="completed">
                                <h6 class="fw-bold py-3 mb-0">Completed</h6>
                                @foreach($completedTasks as $task)
                                    <li class="dd-item" data-id="{{$task->id}}">
                                        <div class="dd-handle">
                                            <div class="task-info d-flex align-items-center justify-content-between">
                                                @php
                                                    $bgClasses = [
                                                        'light-success-bg',
                                                        'light-danger-bg',
                                                        'light-info-bg',
                                                        'light-warning-bg',
                                                        'light-primary-bg',
                                                        'light-secondary-bg',
                                                    ];
                                                    $randomBg = $bgClasses[array_rand($bgClasses)];
                                                @endphp
                                                <h6 class="{{ $randomBg }} py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0">{{$task->category}}
                                                </h6>
                                                <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                    <div class="avatar-list avatar-list-stacked m-0">
                                                        <img class="avatar rounded-circle small-avt" src="{{ asset("storage/". $task->employee->image) }}" alt="">
                                                    </div>
                                                    @php
                                                        $priorityClass = match(strtolower($task->priority)) {
                                                            'low' => 'bg-success',
                                                            'medium' => 'bg-warning',
                                                            'high', 'highest' => 'bg-danger',
                                                            default => 'bg-secondary',
                                                        };
                                                    @endphp
                                                    <span class="badge {{ $priorityClass }} text-end mt-2">{{$task->priority}}</span>
                                                </div>
                                            </div>
                                            <p class="py-2 mb-0 overflow-hidden">{{$task->description}}</p>
                                            <div class="tikit-info row g-3 align-items-center">
                                                <div class="col-sm">
                                                    <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                        <li class="me-2">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-flag"></i>
                                                                <span class="ms-1">28 Mar</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-paper-clip"></i>
                                                                <span class="ms-1">5</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm text-end">

                                                    <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> {{$task->project->name}} </div>
                                                </div>
                                            </div>
                                        </div>

                                    </li>
                                @endforeach
                            </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
    <script>
        const columns = ['in-progress', 'needs-review', 'completed'];

        columns.forEach((id) => {
            const element = document.getElementById(id);
            if(!element) return;
            new Sortable(element, {
                group: 'shared',
                animation: 150,
                sort:false,
                ghostClass: 'bg-red-900',
                onEnd: function (evt) {
                    const itemId = evt.item.dataset.id;
                    const newColumn = evt.to.id;

                    fetch("{{ route('admin.project.task.update-status') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        },
                        body: JSON.stringify({
                            id: itemId,
                            status: newColumn
                        })
                    })
                        .then(res => res.json())
                        .then(data => {
                            if (data.success) {
                                console.log(`Task ${itemId} moved to ${newColumn}`);
                            } else {
                                alert('Failed to update task status');
                            }
                        })
                        .catch(err => {
                            console.error(err);
                            alert('Error while updating status');
                        });
                }
            });
        });
    </script>

@endsection
