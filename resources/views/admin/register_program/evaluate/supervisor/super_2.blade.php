@extends('layout.masterLayout')
@section('css')
@endsection
@section('js')
<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<script src="assets/plugins/custom/tinymce/tinymce.bundle.js"></script>
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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Supervisor Form</h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <form action="{{route('admin.register.postEvaluate', $register_program->id)}}" method="POST">
                @method('PUT')
                @csrf
                <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_1">Report Form 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_2">Implentation Form 2</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    {{-- Report Form --}}
                    <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">
                        <!--begin::Category-->
                        <div class="card card-flush">
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    {{-- Begin Question 1 --}}
                                    <table class="table table-row-dashed table-row-gray-300 gy-7">
                                        <thead>
                                            <tr class="fw-bolder fs-6 text-gray-800">
                                            <th colspan="3">Problem Background, Problem Statement, Purpose of Project (PLO1) - 10 Marks x 0.5 = 5 Marks</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td style="width: 70%">Provides clear, specific and substantial issue, statement of problem, significance of project and
                                                purpose of project.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_1" value="8">
                                                        <span></span>08
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_1" value="9">
                                                        <span></span>09
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_1" value="10">
                                                        <span></span>10
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="fw-bolder fs-6 text-gray-800" rowspan="4">
                                                Total Mark
                                                    <h1 class="total_report_question_1">0</h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Provides relevant and significant issue, statement of problem, significance of project and
                                                purpose of project .</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_1" value="5">
                                                        <span></span>05
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_1" value="6">
                                                        <span></span>06
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_1" value="7">
                                                        <span></span>07
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Provides a weak, debatable or insignificant issue, statement of problem, significance of project
                                                and purpose of project.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_1" value="2">
                                                        <span></span>02
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_1" value="3">
                                                        <span></span>03
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_1" value="4">
                                                        <span></span>04
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Provides inappropriate & un-research-worthy issue, statement of problem, significance of project
                                                and purpose of project.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_1" value="0">
                                                        <span></span>0
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_1" value="1">
                                                        <span></span>01
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    {{-- End Question 1 --}}
                                    {{-- Begin Question 2 --}}
                                    <table class="table table-row-dashed table-row-gray-300 gy-7">
                                        <thead>
                                            <tr class="fw-bolder fs-6 text-gray-800">
                                            <th colspan="3">Project Objectives, Project Questions, Project Scope, Project Significance (PLO1) - 10 Marks x 0.5 = 5 Marks</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td style="width: 70%">Provides clear, reasonable, succinct project objectives and questions in relation to the purpose,
                                                design, scope, significance and methods of the proposed project.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_2" value="8">
                                                        <span></span>08
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_2" value="9">
                                                        <span></span>09
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_2" value="10">
                                                        <span></span>10
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="fw-bolder fs-6 text-gray-800" rowspan="4">
                                                Total Mark
                                                    <h1 class="total_report_question_2">0</h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Provides clear project objectives and questions in relation to the purpose, design, scope
                                                significance and methods of the proposed project.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_2" value="5">
                                                        <span></span>05
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_2" value="6">
                                                        <span></span>06
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_2" value="7">
                                                        <span></span>07
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Provides poorly-formed, ambiguous, or illogical project objectives and questions in relation to the
                                                purpose, design, scope, significance and methods of the proposed project. </td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_2" value="2">
                                                        <span></span>02
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_2" value="3">
                                                        <span></span>03
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_2" value="4">
                                                        <span></span>04
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Provides inappropriate objectives and questions, in relation to the purpose, design, scope,
                                                significance and methods of the proposed project.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_2" value="0">
                                                        <span></span>0
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_2" value="1">
                                                        <span></span>01
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    {{-- End Question 2 --}}
                                    {{-- Begin Question 3 --}}
                                    <table class="table table-row-dashed table-row-gray-300 gy-7">
                                        <thead>
                                            <tr class="fw-bolder fs-6 text-gray-800">
                                            <th colspan="3">Literature Review: Relevance of LR to Topic Studied (PLO2) - 8 Marks</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td style="width: 70%">Provides clear, critical, logical and consolidative narratives on relevant literatures and makes
                                                meaningful connection to topic/problem studied.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_3" value="7">
                                                        <span></span>07
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_3" value="8">
                                                        <span></span>08
                                                    </label>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="fw-bolder fs-6 text-gray-800" rowspan="4">
                                                Total Mark
                                                    <h1 class="total_report_question_3">0</h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Provides relevant, critical and logical narratives on relevant literatures and makes connection to
                                                topic/problem studied.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_3" value="4">
                                                        <span></span>04
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_3" value="5">
                                                        <span></span>05
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_3" value="6">
                                                        <span></span>06
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Provides appropriate yet uncritical and weak narratives on relevant literatures and make slight
                                                connection to topic/problem studied. </td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_3" value="2">
                                                        <span></span>02
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_3" value="3">
                                                        <span></span>03
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Provides irrelevant, inaccurate or faint narratives and makes no connection to topic/problem
                                                studied.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_3" value="0">
                                                        <span></span>0
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_3" value="1">
                                                        <span></span>01
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    {{-- End Question 3 --}}
                                    {{-- Begin Question 4 --}}
                                    <table class="table table-row-dashed table-row-gray-300 gy-7">
                                        <thead>
                                            <tr class="fw-bolder fs-6 text-gray-800">
                                            <th colspan="3">Project Methodology: Project Activities and Procedure (PLO6) - 8 Marks</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td style="width: 70%">Has a workable structure that is distinctively and adequately grounded to each of the key
                                                constructs and variables in carrying out activities of proposed project.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_4" value="7">
                                                        <span></span>07
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_4" value="8">
                                                        <span></span>08
                                                    </label>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="fw-bolder fs-6 text-gray-800" rowspan="4">
                                                Total Mark
                                                    <h1 class="total_report_question_4">0</h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Has a workable structure that is compatible with the key constructs and variables in carrying out
                                                activities of the proposed project.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_4" value="4">
                                                        <span></span>04
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_4" value="5">
                                                        <span></span>05
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_4" value="6">
                                                        <span></span>06
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Has a weak structure and it does not identify well with the key constructs and variables in
                                                carrying out activities of the proposed project. </td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_4" value="2">
                                                        <span></span>02
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_4" value="3">
                                                        <span></span>03
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Has an incomprehensible, irrelevant, or confusing structure and does not identify at all with the
                                                key constructs and variables in carrying out of activities of the proposed project.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_4" value="0">
                                                        <span></span>0
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_4" value="1">
                                                        <span></span>01
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    {{-- End Question 4 --}}
                                    {{-- Begin Question 5 --}}
                                    <table class="table table-row-dashed table-row-gray-300 gy-7">
                                        <thead>
                                            <tr class="fw-bolder fs-6 text-gray-800">
                                            <th colspan="3">Discussion: Experimental Setup, Data Pre-Processing or Prototype/System Development (PLO7) - 9 Marks</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td style="width: 70%">Establishes procedures that are thorough, manageable, coherent, and effective in generating
                                                valid and reliable data. Has sufficient reported experiment/simulation. </td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_5" value="7">
                                                        <span></span>07
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_5" value="8">
                                                        <span></span>08
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_5" value="9">
                                                        <span></span>09
                                                    </label>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="fw-bolder fs-6 text-gray-800" rowspan="4">
                                                Total Mark
                                                    <h1 class="total_report_question_5">0</h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Establishes procedures that are working in generating valid and reliable data. Has sufficient
                                                reported experiment/simulation. </td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_5" value="4">
                                                        <span></span>04
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_5" value="5">
                                                        <span></span>05
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_5" value="6">
                                                        <span></span>06
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">stablishes procedures that are confusing, incomplete, or lacked relevance in generating valid
                                                and reliable data. Has insufficient reported experiment/simulation. </td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_5" value="2">
                                                        <span></span>02
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_5" value="3">
                                                        <span></span>03
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Omits procedures and does not report any results. </td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_5" value="0">
                                                        <span></span>0
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_5" value="1">
                                                        <span></span>01
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    {{-- End Question 5 --}}
                                    {{-- Begin Question 6 --}}
                                    <table class="table table-row-dashed table-row-gray-300 gy-7">
                                        <thead>
                                            <tr class="fw-bolder fs-6 text-gray-800">
                                            <th colspan="3">Conclusion: Project Constraint, Challenges and Future Implementation (PLO6) - 4 Marks x 0.5 = 2 Marks.</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td style="width: 70%">Describes clearly the constraints and challenges of the project to be implemented. </td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_6" value="4">
                                                        <span></span>04
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="fw-bolder fs-6 text-gray-800" rowspan="4">
                                                Total Mark
                                                    <h1 class="total_report_question_6">0</h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Describes moderately the constraints and challenges of the project to be implemented.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_6" value="3">
                                                        <span></span>03
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Describes vaguely the constraints and challenges of the project to be implemented. </td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_6" value="2">
                                                        <span></span>02
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Does not describe the constraint and challenges of the project to be implemented. </td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_6" value="1">
                                                        <span></span>01
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    {{-- End Question 6 --}}
                                    {{-- Begin Question 7 --}}
                                    <table class="table table-row-dashed table-row-gray-300 gy-7">
                                        <thead>
                                            <tr class="fw-bolder fs-6 text-gray-800">
                                            <th colspan="3">Overall: Proposed solution can be implemented in the related industry (PLO7) - 3 Marks</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td style="width: 70%">Provides proposed solution that can be highly implemented in the industry. </td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_7" value="3">
                                                        <span></span>03
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="fw-bolder fs-6 text-gray-800" rowspan="4">
                                                Total Mark
                                                    <h1 class="total_report_question_7">0</h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Provides proposed solution that can be moderately implemented in the industry.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_7" value="2">
                                                        <span></span>02
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Provides proposed solution that can be fairly implemented in the industry. </td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_7" value="1">
                                                        <span></span>01
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Provides proposed solution that is not suitable to be implemented in the industry. </td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_7" value="0">
                                                        <span></span>0
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    {{-- End Question 7 --}}
                                    {{-- Begin Question 8 --}}
                                    <table class="table table-row-dashed table-row-gray-300 gy-7">
                                        <thead>
                                            <tr class="fw-bolder fs-6 text-gray-800">
                                            <th colspan="3">References or Citations, English Composition, & Comply to UTM Thesis Manual Writing (PLO2) - 4 Marks x 0.5 = 2 Marks</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td style="width: 70%">Has most of the latest references and completely complies to UTM Thesis Writing Guideline. </td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_8" value="4">
                                                        <span></span>04
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="fw-bolder fs-6 text-gray-800" rowspan="4">
                                                Total Mark
                                                    <h1 class="total_report_question_8">0</h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Has moderate of the latest references and partly complies to UTM Thesis Writing Guideline. </td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_8" value="3">
                                                        <span></span>03
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Has minimum of the latest references and minimally complies to UTM Thesis Writing Guideline. </td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_8" value="2">
                                                        <span></span>02
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Has minimum of the latest references and minimally complies to UTM Thesis Writing Guideline. </td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="report_question_8" value="1">
                                                        <span></span>01
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    {{-- End Question 8 --}}
                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Category-->
                        {{-- begin::totalMark --}}
                        <div class="card card-flush">
                            <div class="card-header">
                                <h3 class="card-title">Total Marks</h3>
                            </div>
                            <div class="card-body pt-0">
                                <h1 class="totalMark_report_form">0/40</h1>
                            </div>
                        </div>
                        {{-- End totalMark --}}
                    </div>
                    {{-- begin::Comment --}}
                <div class="card card-flush">
                    <div class="card-header">
                        <h3 class="card-title">Assessor’s comments/suggestions</h3>
                    </div>
                    <div class="card-body pt-0">
                        <textarea id="kt_docs_tinymce_basic_report_form" name="comment_report" class="tox-target">
                        </textarea>
                    </div>
                </div>
                {{-- End Comment --}}
                    {{-- End Report Form --}}
                    {{-- Implentation Form --}}
                    <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel">
                        <!--begin::Category-->
                        <div class="card card-flush">
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    {{-- Begin Question 1 --}}
                                    <table class="table table-row-dashed table-row-gray-300 gy-7">
                                        <thead>
                                            <tr class="fw-bolder fs-6 text-gray-800">
                                            <th colspan="3">Problem solving approaches, ideas and creativity (PLO9) – 6 Marks x 0.5 = 3 Marks</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td style="width: 70%">Solves problems effectively using interesting and creative ideas and shows excellent conceptual
                                                grasp of the subject matter.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_1" value="6">
                                                        <span></span>06
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="fw-bolder fs-6 text-gray-800" rowspan="4">
                                                Total Mark
                                                    <h1 class="total_implementation_question_1">0</h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Solves problem using good and creative ideas and shows good grasp of the subject matter</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_1" value="5">
                                                        <span></span>05
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_1" value="4">
                                                        <span></span>04
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Solves problems but lack of creative ideas and shows a minimal grasp of the subject matter. </td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_1" value="2">
                                                        <span></span>02
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_1" value="3">
                                                        <span></span>03
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Unable to solve problems and shows null grasp of the subject matter.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_1" value="0">
                                                        <span></span>0
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_1" value="1">
                                                        <span></span>01
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    {{-- End Question 1 --}}
                                    {{-- Begin Question 2 --}}
                                    <table class="table table-row-dashed table-row-gray-300 gy-7">
                                        <thead>
                                            <tr class="fw-bolder fs-6 text-gray-800">
                                            <th colspan="3">Follow methodology; produce, organize, analyze, data and deduce findings (PLO9) – 8 Marks</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td style="width: 70%">Satisfactory results with comprehensive analysis and assessment conducted using pertinent tools.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_3" value="7">
                                                        <span></span>07
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_3" value="8">
                                                        <span></span>08
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="fw-bolder fs-6 text-gray-800" rowspan="4">
                                                Total Mark
                                                    <h1 class="total_implementation_question_3">0</h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Appropriate results with sufficient analysis and assessment conducted using appropriate tools.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_3" value="5">
                                                        <span></span>05
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_3" value="6">
                                                        <span></span>06
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Inferior results with lack of analysis or assessment of data. </td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_3" value="3">
                                                        <span></span>03
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_3" value="4">
                                                        <span></span>04
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Poor results with no analysis or evaluation of data. </td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_3" value="2">
                                                        <span></span>02
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_3" value="1">
                                                        <span></span>01
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    {{-- End Question 2 --}}
                                    {{-- Begin Question 3 --}}
                                    <table class="table table-row-dashed table-row-gray-300 gy-7">
                                        <thead>
                                            <tr class="fw-bolder fs-6 text-gray-800">
                                            <th colspan="3">Show the appropriate skills and knowledge in conducting research (PLO9) – 7 Marks</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td style="width: 70%">Demonstrates excellent applications of skills and applies in effectively and thoroughly conducting
                                                research.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_3" value="6">
                                                        <span></span>06
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_3" value="7">
                                                        <span></span>07
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="fw-bolder fs-6 text-gray-800" rowspan="4">
                                                Total Mark
                                                    <h1 class="total_implementation_question_3">0</h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Demonstrates sufficient applications of skills and knowledge in thoroughly conducting research.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_3" value="5">
                                                        <span></span>05
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_3" value="4">
                                                        <span></span>04
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Demonstrates moderate applications of skills and applies in conducting research.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_3" value="3">
                                                        <span></span>03
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_3" value="2">
                                                        <span></span>02
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Unable to demonstrate applications of skill and knowledge in conducting research.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_3" value="0">
                                                        <span></span>00
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_3" value="1">
                                                        <span></span>01
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    {{-- End Question 3 --}}
                                    {{-- Begin Question 4 --}}
                                    <table class="table table-row-dashed table-row-gray-300 gy-7">
                                        <thead>
                                            <tr class="fw-bolder fs-6 text-gray-800">
                                            <th colspan="3">Strategy, organization and execution (PLO9) – 6 Marks x 0.5 = 3 Marks</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td style="width: 70%">Employs effective strategies and plans carefully; solves problem effectively within time frame.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_4" value="6">
                                                        <span></span>06
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="fw-bolder fs-6 text-gray-800" rowspan="4">
                                                Total Mark
                                                    <h1 class="total_implementation_question_4">0</h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Employs good strategies and plans reasonably; solves problem within time frame. </td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_4" value="5">
                                                        <span></span>05
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_4" value="4">
                                                        <span></span>04
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Employs strategies and plans inferiorly; could not solve problem promptly within time frame. </td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_4" value="3">
                                                        <span></span>03
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_4" value="2">
                                                        <span></span>02
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Does not employ any strategy and does not plan, unable to solve problem within time frame. </td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_4" value="0">
                                                        <span></span>00
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_4" value="1">
                                                        <span></span>01
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    {{-- End Question 4 --}}
                                    {{-- Begin Question 5 --}}
                                    <table class="table table-row-dashed table-row-gray-300 gy-7">
                                        <thead>
                                            <tr class="fw-bolder fs-6 text-gray-800">
                                            <th colspan="3">Ethical consideration and behaviour (PLO11) – 10 Marks x 0.5 = 5 Marks</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td style="width: 70%">Shows up for three (3) meetings or more and prepares well for discussions.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_5" value="8">
                                                        <span></span>08
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_5" value="9">
                                                        <span></span>09
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_5" value="10">
                                                        <span></span>10
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="fw-bolder fs-6 text-gray-800" rowspan="4">
                                                Total Mark
                                                    <h1 class="total_implementation_question_5">0</h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Shows up for two (2) meetings and prepares for discussions.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_5" value="5">
                                                        <span></span>05
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_5" value="6">
                                                        <span></span>06
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_5" value="7">
                                                        <span></span>07
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Shows up for one (1) meeting and makes minimal progress.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_5" value="3">
                                                        <span></span>03
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_5" value="4">
                                                        <span></span>04
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Misses meetings but shows some progress. </td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_5" value="0">
                                                        <span></span>00
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_5" value="1">
                                                        <span></span>01
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_5" value="2">
                                                        <span></span>02
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    {{-- End Question 5 --}}
                                    {{-- Begin Question 6 --}}
                                    <table class="table table-row-dashed table-row-gray-300 gy-7">
                                        <thead>
                                            <tr class="fw-bolder fs-6 text-gray-800">
                                            <th colspan="3">Commitment and discipline (PLO9) – 10 Marks x 0.5 = 5 Marks</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td style="width: 70%">Shows up for three (3) meetings or more and prepares well for discussions.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_6" value="8">
                                                        <span></span>08
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_6" value="9">
                                                        <span></span>09
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_6" value="10">
                                                        <span></span>10
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="fw-bolder fs-6 text-gray-800" rowspan="4">
                                                Total Mark
                                                    <h1 class="total_implementation_question_6">0</h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Shows up for two (2) meetings and prepares for discussions.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_6" value="5">
                                                        <span></span>05
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_6" value="6">
                                                        <span></span>06
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_6" value="7">
                                                        <span></span>07
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Shows up for one (1) meeting and makes minimal progress.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_6" value="3">
                                                        <span></span>03
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_6" value="4">
                                                        <span></span>04
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Misses meetings but makes some progress. </td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_6" value="0">
                                                        <span></span>00
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_6" value="1">
                                                        <span></span>01
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_6" value="2">
                                                        <span></span>02
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    {{-- End Question 6 --}}
                                    {{-- Begin Question 7 --}}
                                    <table class="table table-row-dashed table-row-gray-300 gy-7">
                                        <thead>
                                            <tr class="fw-bolder fs-6 text-gray-800">
                                            <th colspan="3">Independence and taking responsibility (PLO9) – 8 Marks x 0.5 = 4 Marks</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td style="width: 70%">Independent and responsible and successfully completes project exceeding supervisor’s
                                                expectations.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_7" value="7">
                                                        <span></span>07
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_7" value="8">
                                                        <span></span>08
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="fw-bolder fs-6 text-gray-800" rowspan="4">
                                                Total Mark
                                                    <h1 class="total_implementation_question_7">0</h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Independent and responsible and thoroughly completes project as supervisor’s expectations.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_7" value="5">
                                                        <span></span>05
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_7" value="6">
                                                        <span></span>06
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Partially independent and responsible and completes project with close supervision. </td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_7" value="3">
                                                        <span></span>03
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_7" value="4">
                                                        <span></span>04
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%">Dependent and needs constant supervision to complete projects.</td>
                                            <td style="width: 20%">
                                                <div class="radio-inline">
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_7" value="2">
                                                        <span></span>02
                                                    </label>
                                                    <label class="radio radio-solid">
                                                        <input type="radio" name="implementation_question_7" value="1">
                                                        <span></span>01
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    {{-- End Question 7 --}}
                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Category-->
                        {{-- begin::totalMark --}}
                        <div class="card card-flush">
                            <div class="card-header">
                                <h3 class="card-title">Total Marks</h3>
                            </div>
                            <div class="card-body pt-0">
                                <h1 class="totalMark_implementation_form">0/35</h1>
                            </div>
                        </div>
                        {{-- End totalMark --}}
                        {{-- begin::Comment --}}
                <div class="card card-flush">
                    <div class="card-header">
                        <h3 class="card-title">Assessor’s comments/suggestions</h3>
                    </div>
                    <div class="card-body pt-0">
                        <textarea id="kt_docs_tinymce_basic_iplementation_form" name="comment_implementation" class="tox-target">
                        </textarea>
                    </div>
                </div>
                {{-- End Comment --}}
                    </div>
                    {{-- End Implentation Form --}}
                </div>
                
                <div class="d-flex justify-content-end pt-10">
                    <!--begin::Button-->
                    <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                        <span class="indicator-label">Submit</span>
                        <span class="indicator-progress">Please wait... 
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <!--end::Button-->
                </div>
            </form>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
@endsection
@section('custom_js')
<script>
   
</script>
@endsection