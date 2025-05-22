@extends('layouts.app')

@php
    use Carbon\Carbon;

    function getDurationReadable($start, $end): string {
        if (!$start || !$end) {
            return 'N/A';
        }

        $startDate = Carbon::parse($start);
        $endDate = Carbon::parse($end);

        $diff = $startDate->diff($endDate);

        $years = $diff->y;
        $months = $diff->m;
        $days = $diff->d;

        $parts = [];

        if ($years > 0) {
            $parts[] = $years . ' year' . ($years > 1 ? 's' : '');
        }
        if ($months > 0) {
            $parts[] = $months . ' month' . ($months > 1 ? 's' : '');
        }
        if ($days > 0 || empty($parts)) {
            $parts[] = $days . ' day' . ($days > 1 ? 's' : '');
        }

        return implode(' ', $parts);
    }

    function getTimeLeftUntil($endDate): string {
        if (!$endDate) {
            return 'N/A';
        }

        $end = Carbon::parse($endDate);
        $now = Carbon::now();

        if ($end->isPast()) {
            return 'Expired';
        }

        $diff = $now->diff($end);

        $years = $diff->y;
        $months = $diff->m;
        $days = $diff->d;

        $parts = [];

        if ($years > 0) {
            $parts[] = $years . ' year' . ($years > 1 ? 's' : '');
        }
        if ($months > 0) {
            $parts[] = $months . ' month' . ($months > 1 ? 's' : '');
        }
        if ($years === 0 && $months === 0 && $days > 0) {
            $parts[] = $days . ' day' . ($days > 1 ? 's' : '');
        }

        return implode(' ', $parts) . ' left';
    }
@endphp

@section('content')
    <!-- Body: Body -->
    <div class="body d-flex py-lg-3 py-md-2">
        <div class="container-xxl">
            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div class="card-header p-0 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold py-3 mb-0">Projects</h3>
                        <div class="d-flex py-2 project-tab flex-wrap w-sm-100">
                            <button type="button" class="btn btn-dark w-sm-100" data-bs-toggle="modal" data-bs-target="#createproject"><i class="icofont-plus-circle me-2 fs-6"></i>Create Project</button>
                            <ul class="nav nav-tabs tab-body-header rounded ms-3 prtab-set w-sm-100" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#All-list" role="tab">All</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Started-list" role="tab">Started</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Approval-list" role="tab">Approval</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Completed-list" role="tab">Completed</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- Row end  -->
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 flex-column">
                    <div class="tab-content mt-4">
                        <div class="tab-pane fade show active" id="All-list">
                                <div class="row g-3 gy-5 py-3 row-deck">
                                    @foreach($projects as $project)
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between mt-5">
                                                <div class="lesson_name">
                                                    <div class="project-block light-info-bg">
                                                        <i class="icofont-paint"></i>
                                                    </div>
                                                    <span class="small text-muted project_name fw-bold"> {{$project->name}} </span>
                                                    <h6 class="mb-0 fw-bold  fs-6  mb-2">{{$project->category}}</h6>
                                                </div>
                                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editproject"><i class="icofont-edit text-success"></i></button>
                                                    <form method='POST' action="{{route("admin.project.destroy", $project->id)}}">
                                                        @csrf
                                                        @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#deleteproject"><i class="icofont-ui-delete text-danger"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar-list avatar-list-stacked pt-2">
{{--                                                    <img class="avatar rounded-circle sm" src="{{  url('/').'/images/xs/avatar2.jpg' }}" alt="">--}}
{{--                                                    <img class="avatar rounded-circle sm" src="{{  url('/').'/images/xs/avatar1.jpg' }}" alt="">--}}
{{--                                                    <img class="avatar rounded-circle sm" src="{{  url('/').'/images/xs/avatar3.jpg' }}" alt="">--}}
{{--                                                    <img class="avatar rounded-circle sm" src="{{  url('/').'/images/xs/avatar4.jpg' }}" alt="">--}}
{{--                                                    <img class="avatar rounded-circle sm" src="{{  url('/').'/images/xs/avatar8.jpg' }}" alt="">--}}
{{--                                                    <span class="avatar rounded-circle text-center pointer sm" data-bs-toggle="modal" data-bs-target="#addUser"><i class="icofont-ui-add"></i></span>--}}
                                                </div>
                                            </div>
                                            <div class="row g-2 pt-4">
                                                <div class="col-6">
                                                    <div class="d-flex align-items-center">
                                                        <i class="icofont-paper-clip"></i>
                                                        <span class="ms-2">{{count(json_decode($project->files))}} Attach</span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="d-flex align-items-center">
                                                        <i class="icofont-sand-clock"></i>
                                                        <span class="ms-2">{{getDurationReadable($project->start_date, $project->end_date)}}</span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="d-flex align-items-center">
                                                        <i class="icofont-group-students "></i>
                                                        <span class="ms-2">5 Members</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dividers-block"></div>
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="small light-danger-bg  p-1 rounded"><i class="icofont-ui-clock"></i> {{getTimeLeftUntil($project->end_date)}} </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>
@endsection
