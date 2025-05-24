@extends('layouts.app')

@section('content')
    <div class="body d-flex py-lg-3 py-md-2">
        <div class="container-xxl">
            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">Team Leaders</h3>
                    </div>
                </div>
            </div> <!-- Row end  -->
            <div class="row clearfix g-3">
                <div class="col-sm-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Leader Name</th>
                                    <th>Project</th>
                                    <th>Total Task</th>
                                    <th>Email</th>
                                    <th>Project Assigned</th>
                                    <th>Assigned Staff</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($projects as $project)
                                    <tr>
                                        <td>
                                            <img class="avatar rounded-circle" src="{{ asset('storage/') . '/' . $project->lead->image }}" alt="">
                                            <span class="fw-bold ms-1">Joan Dyer</span>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.project.index') }}">{{$project->name}}</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.project.task.index') }}">
                                                {{ $project->tasks_count }} Task{{ $project->tasks_count !== 1 ? 's' : '' }}
                                            </a>
                                        </td>
                                        <td>
                                            <a href="mailto:">{{$project->lead->user->email}}</a>
                                        </td>
                                        <td>
                                            {{$project->created_at}}
                                        </td>
                                        <td>
                                            <div class="avatar-list avatar-list-stacked px-3">
                                                @foreach($project->tasks as $task)
                                                    <img class="avatar rounded-circle sm" src="{{ asset('/storage') . '/' . $task->employee->image }}" alt="">
                                                @endforeach
{{--                                                <span class="avatar rounded-circle text-center pointer sm" data-bs-toggle="modal" data-bs-target="#addUser"><i class="icofont-ui-add"></i></span>--}}
                                            </div>
                                        </td>
                                        <td>
                                            @php
                                                $statusClass = match(strtolower($project->status)) {
                                                    'pending' => 'bg-warning',
                                                    'working' => 'bg-success',
                                                    'canceled' => 'bg-danger',
                                                    default => 'bg-secondary',
                                                };
                                            @endphp
                                            <span class="badge {{$statusClass}}">{{$project->status}}</span>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                <button type="button" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></button>
                                                <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- Row End -->
        </div>
    </div>

@endsection
