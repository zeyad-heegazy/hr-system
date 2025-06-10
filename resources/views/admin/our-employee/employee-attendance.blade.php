@extends('layouts.app')

@section('content')
    <!-- Body: Body -->
    <div class="body d-flex py-lg-3 py-md-2">
        <div class="container-xxl">
            <div class="row align-items-center g-3 mb-3">
                <div class="border-0 mb-4">
                    <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">Employees Attendance <span>({{$employee->name}})</span> </h3>
                    </div>
                </div>
            </div> <!-- Row end  -->
            <div class="row align-item-center row-deck g-3 mb-3">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-header py-3">
                            <h6 class="mb-0 fw-bold ">Today Time Utilisation</h6>
                        </div>
                        <div class="card-body">
                            <div class="timesheet-info d-flex align-items-center justify-content-between flex-wrap">
                                <div class="intime d-flex align-items-center mt-1">
                                    <i class="icofont-finger-print fs-4 color-light-success"></i>
                                    <span class="fw-bold ms-1">Punching: {{now()->format('h:i')}}</span>
                                </div>

                                <div class="outtime mt-1">
                                    @if ($employee->isPunchedIn())
                                        {{-- Punch Out --}}
                                        <form method="POST" action="{{ route('admin.our-employee.attendance-employee.punch-out') }}">
                                            @csrf
                                            <input name="employee_id" type="hidden" value="{{ $employee->id }}" />
                                            <button type="submit" class="btn btn-danger w-sm-100">
                                                <i class="icofont-foot-print me-2"></i>Punch Out
                                            </button>
                                        </form>
                                    @else
                                        {{-- Punch In --}}
                                        <form method="POST" action="{{ route('admin.our-employee.attendance-employee.store.user') }}">
                                            @csrf
                                            <input name="employee_id" type="hidden" value="{{ $employee->id }}" />
                                            <button type="submit" class="btn btn-dark w-sm-100">
                                                <i class="icofont-foot-print me-2"></i>Punch In
                                            </button>
                                        </form>
                                    @endif
                                </div>

                            </div>
                            <div id="apex-circle-chart"></div>
                        </div>
                    </div> <!-- .card: My Timeline -->
                </div>
            </div> <!-- Row end  -->
            <div class="row clearfix g-3">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="myProjectTable" class="table table-hover align-middle mb-0 text-center" style="width:100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Puchin Time</th>
                                    <th>Puchout Time</th>
                                    <th>Status</th>
                                    <th>Overtime</th>
                                    <th>Total Production</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($employee->attendances as $att)
                                    <tr>
                                        <td>{{ $att->id }}</td>
                                        <td>{{ $att->date }}</td>
                                        <td class="text-success">{{ $att->punch_in }}</td>
                                        <td class="text-danger">{{ $att->punch_out }}</td>

                                        @php
                                            $icon = match(optional($att)->status) {
                                                'full-day' => 'icofont-check-circled text-success',
                                                'half-day' => 'icofont-wall-clock text-warning',
                                                'absence'  => 'icofont-close-circled text-danger',
                                                default    => 'icofont-close-circled text-danger',
                                            };
                                        @endphp
                                        <td><i class="{{ $icon }}"></i></td>

                                        @php
                                            try {
                                                if ($att->punch_in && $att->punch_out) {
                                                    $in = \Carbon\Carbon::createFromFormat('H:i', $att->punch_in);
                                                    $out = \Carbon\Carbon::createFromFormat('H:i', $att->punch_out);
                                                    $diff = $in->diff($out);
                                                    $totalMinutes = $in->diffInMinutes($out);
                                                    $display = $diff->h . 'h ' . $diff->i . 'm';
                                                    $overtimeMinutes = max(0, $totalMinutes - 480);
                                                    $overtime = $overtimeMinutes > 0
                                                        ? floor($overtimeMinutes / 60) . 'h ' . ($overtimeMinutes % 60) . 'm'
                                                        : 'No Over Time';
                                                } else {
                                                    $display = '—';
                                                    $overtime = 'No Over Time';
                                                }
                                            } catch (\Exception $e) {
                                                $display = 'Invalid time';
                                                $overtime = '—';
                                            }
                                        @endphp

                                        <td>{{ $overtime }}</td>
                                        <td class="text-success fw-bold">{{ $display }}</td>
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

    <!-- Jquery Page Js -->
    <script>
        // project data table
        $(document).ready(function() {
            $('#myProjectTable')
                .addClass( 'nowrap' )
                .dataTable( {
                    responsive: true,
                    columnDefs: [
                        { targets: [-1, -3], className: 'dt-body-right' }
                    ]
                });
        });
        // employees Line Column
        $(document).ready(function() {
            var options = {
                chart: {
                    height: 350,
                    type: 'line',
                    toolbar: {
                        show: false,
                    },
                },
                colors: ['var(--chart-color1)', 'var(--chart-color2)'],
                series: [{
                    name: 'Working Hours',
                    type: 'column',
                    data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160]
                }, {
                    name: 'Employees Progress',
                    type: 'line',
                    data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16]
                }],
                stroke: {
                    width: [0, 4]
                },
                //labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                labels: ['2001', '2002', '2003', '2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', '2012'],
                xaxis: {
                    type: 'datetime'
                },
                yaxis: [{
                    title: {
                        text: 'Working Hours',
                    },

                }, {
                    opposite: true,
                    title: {
                        text: 'Employees Progress'
                    }
                }]
            }
            var chart = new ApexCharts(
                document.querySelector("#apex-chart-line-column"),
                options
            );

            chart.render();
        });

        // employees circle
        $(document).ready(function() {
            var options = {
                chart: {
                    height: 250,
                    type: 'radialBar',
                },
                colors: ['var(--chart-color1)'],
                plotOptions: {
                    radialBar: {
                        hollow: {
                            size: '70%',
                        }
                    },
                },
                series: [70],
                labels: ['Working'],
            }
            var chart = new ApexCharts(
                document.querySelector("#apex-circle-chart"),
                options
            );

            chart.render();
        });

    </script>


@endsection
