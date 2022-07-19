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
                @role('admin')
                <a href="{{route('admin.projects.create')}}" class="btn btn-sm btn-primary">Create</a>
                @endrole
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
                                <th>Final Exam Date</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                                <tr>
                                    <td>{!!$project->program_name!!}</td>
                                    <td>
                                        @if ($project->title === "MASTER_PROJECT_1")
                                            Master Project 1
                                        @else
                                            Master Project 2
                                        @endif
                                    </td>
                                    <td>
                                        {!!$project->final_exam!!}
                                    </td>
                                    <td class="text-end">
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_{{$project->id}}">Register</button>
                                        @role('admin')
                                            <a href="{{route('admin.projects.delete', $project->id)}}" onclick="return confirm('Are you sure you want delete this project?')" class="btn btn-danger btn-sm">Delete</a>
                                        @endrole
                                    </td>
                                </tr>
                                <!--begin::Modal-->
                                <div class="modal fade" tabindex="-1" id="kt_modal_{{$project->id}}">
                                    <form action="{{route('admin.register.projects')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                        <input type="hidden" name="project_id" value="{{$project->id}}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Register</h5>
                                                    <!--begin::Close-->
                                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                        <span class="svg-icon svg-icon-2x"></span>
                                                    </div>
                                                    <!--end::Close-->
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-10">
                                                        <label for="" class="form-label">Register Your Position</label>
                                                        <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#kt_modal_{{$project->id}}" data-placeholder="Select an option" data-allow-clear="true" name="position">
                                                            <option value="ACCESSOR">Accessor</option>
                                                            <option value="SUPERVISOR">Supervisor</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--end::Modal-->
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