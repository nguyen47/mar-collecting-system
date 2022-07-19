@extends('layout.masterLayout')
@section('js')
<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
@endsection
@section('custom_js')
<script>
    $("#kt_datatable_example_1").DataTable();
</script>
@endsection

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Projects</h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Secondary button-->
                <!--end::Secondary button-->
                <!--begin::Primary button-->
                <a href="{{route('register.export')}}" class="btn btn-sm btn-primary">Export</a>
                <a href="{{route('admin.projects.create')}}" class="btn btn-sm btn-info">Create</a>
                <!--end::Primary button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Category-->
            <div class="card card-flush">
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table id="kt_datatable_example_1" class="table table-row-bordered gy-5">
                        <thead>
                            <tr class="fw-bold fs-6 text-muted">
                                <th>Program</th>
                                <th>Project</th>
                                @role('admin')
                                <th>Lecturer</th>
                                @endrole
                                <th>Position</th>
                                <th>Total Mark</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                                <tr>
                                    <td>{!!$project->projects->program_name!!}</td>
                                    <td>
                                        @if ($project->projects->title === "MASTER_PROJECT_1")
                                            <span class="badge badge-secondary">Master Project 1</span>
                                        @else
                                            <span class="badge badge-info">Master Project 2</span>
                                        @endif
                                    </td>
                                    @role('admin')
                                        <td>{!!$project->users->first_name!!} {!!$project->users->last_name!!}</td>
                                    @endrole
                                    <td>
                                        @if ($project->position === "ACCESSOR")
                                            <span class="badge badge-primary">Accessor</span>
                                        @else
                                            <span class="badge badge-light">Supervisor</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($project->total)
                                            {{$project->total}}
                                        @else
                                            <span class="badge badge-success">Not Available</span>
                                        @endif
                                    </td>
                                    <td class="text-end">
                                        @role('user')
                                        @if ($project->total)
                                            @if(date("m/d/Y") <= $project->projects->final_exam || $project->is_approved)
                                                <a href="{{route('admin.register.displayEditEvaluate', $project->id)}}" class="btn btn-primary btn-sm">Edit Mark</a>
                                            @else
                                                @if($project->is_request)
                                                    <button class="btn btn-info btn-sm" disabled>Requested</button>
                                                @else
                                                    <a href="{{route('admin.register.request', $project->id)}}" class="btn btn-info btn-sm">Request</a>
                                                @endif
                                            @endif
                                        @else
                                            <a href="{{route('admin.register.displayEvaludate', $project->id)}}" class="btn btn-primary btn-sm">Evaluate</a>
                                        @endif
                                        <a href="{{route('admin.register.view', $project->id)}}" class="btn btn-primary btn-sm">View</a>
                                        <a href="{{route('register.delete', $project->id)}}" onclick="return confirm('Are you sure you want to delete this project?');" class="btn btn-danger btn-sm">Delete</a>
                                        @endrole
                                        @role('admin')
                                            @if($project->is_request)
                                                <a href="{{route('admin.register.approve', $project->id)}}" class="btn btn-primary btn-sm">Approve</a>
                                            @endif
                                                <a href="{{route('admin.register.sendNotification', $project->id)}}" class="btn btn-primary btn-sm">Send Email</a>
                                            
                                            @if($project->total)
                                                <a href="{{route('admin.register.view', $project->id)}}" class="btn btn-primary btn-sm">View</a>
                                            @endif

                                                
                                        @endrole
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Category-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
@endsection