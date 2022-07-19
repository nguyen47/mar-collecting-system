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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Accessor Form</h1>
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
                <!--begin::Category-->
                <div class="card card-flush">
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            {{-- Begin Question 1 --}}
                            <table class="table table-row-dashed table-row-gray-300 gy-7">
                                <thead>
                                    <tr class="fw-bolder fs-6 text-gray-800">
                                    <th colspan="3">Present information clearly through written mode (PLO5) -10 x 0.5 Marks = 5 Marks</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style="width: 70%">Ideas are well-expressed in a coherent and cohesive manner, and are discussed effectively.</td>
                                    <td style="width: 20%">
                                        <div class="radio-inline">
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_1" value="8">
                                                <span></span>08
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_1" value="9">
                                                <span></span>09
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_1" value="10">
                                                <span></span>10
                                            </label>
                                        </div>
                                    </td>
                                    <td class="fw-bolder fs-6 text-gray-800" rowspan="4">
                                        Total Mark
                                            <h1 class="total_question_1">0</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 70%">Ideas are reasonably expressed in a coherent and cohesive manner, and are discussed moderately.</td>
                                    <td style="width: 20%">
                                        <div class="radio-inline">
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_1" value="5">
                                                <span></span>05
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_1" value="6">
                                                <span></span>06
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_1" value="7">
                                                <span></span>07
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 70%">Ideas are haphazardly expressed and lacks logical development.</td>
                                    <td style="width: 20%">
                                        <div class="radio-inline">
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_1" value="2">
                                                <span></span>02
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_1" value="3">
                                                <span></span>03
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_1" value="4">
                                                <span></span>04
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 70%">Ideas are muddled and not well-expressed.</td>
                                    <td style="width: 20%">
                                        <div class="radio-inline">
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_1" value="0">
                                                <span></span>0
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_1" value="1">
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
                                    <th colspan="3">Subject Knowledge and analysis (PLO5) - 8 x 0.5 Marks = 4 Marks</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style="width: 70%">Makes exceptionally critical, relevant, and consistent connections in handling the topic/problem and makes excellent analysis.</td>
                                    <td style="width: 20%">
                                        <div class="radio-inline">
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_2" value="8">
                                                <span></span>08
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_2" value="7">
                                                <span></span>07
                                            </label>
                                        </div>
                                    </td>
                                    <td class="fw-bolder fs-6 text-gray-800" rowspan="4">Total Mark
                                        <h1 class="total_question_2">0</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 70%">Makes consistent connections in handling the topic/problem and makes good analysis.</td>
                                    <td style="width: 20%">
                                        <div class="radio-inline">
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_2" value="4">
                                                <span></span>04
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_2" value="5">
                                                <span></span>05
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_2" value="6">
                                                <span></span>06
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 70%">Makes some connections in handling the topic/problem and makes average analysis.</td>
                                    <td style="width: 20%">
                                        <div class="radio-inline">
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_2" value="2">
                                                <span></span>02
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_2" value="3">
                                                <span></span>03
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 70%">Makes limited connections in handling the topic/problem and makes immature analysis.</td>
                                    <td style="width: 20%">
                                        <div class="radio-inline">
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_2" value="0">
                                                <span></span>0
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_2" value="1">
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
                                    <th colspan="3">Present information and express ideas clearly, effectively and confidently through oral mode (PLO5) – 8 x 0.5 Marks = 4 Marks</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style="width: 70%">Communicates and presents ideas clearly, excellently, and effectively.</td>
                                    <td style="width: 20%">
                                        <div class="radio-inline">
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_3" value="8">
                                                <span></span>08
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_3" value="7">
                                                <span></span>07
                                            </label>
                                        </div>
                                    </td>
                                    <td class="fw-bolder fs-6 text-gray-800" rowspan="4">Total Mark
                                        <h1 class="total_question_3">0</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 70%">Communicates and presents ideas comprehensively and satisfactorily.</td>
                                    <td style="width: 20%">
                                        <div class="radio-inline">
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_3" value="4">
                                                <span></span>04
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_3" value="5">
                                                <span></span>05
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_3" value="6">
                                                <span></span>06
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 70%">Communicates and presents ideas moderately and adequately.</td>
                                    <td style="width: 20%">
                                        <div class="radio-inline">
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_3" value="2">
                                                <span></span>02
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_3" value="3">
                                                <span></span>03
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 70%">Communicates and presents ideas incoherently and unsatisfactorily.</td>
                                    <td style="width: 20%">
                                        <div class="radio-inline">
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_3" value="0">
                                                <span></span>0
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_3" value="1">
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
                                    <th colspan="3">Actively listen and respond to the ideas of other people (PLO5) - 8 x 0.5 Marks = 4 Marks</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style="width: 70%">Listens attentively and responds intelligently.</td>
                                    <td style="width: 20%">
                                        <div class="radio-inline">
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_4" value="8">
                                                <span></span>08
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_4" value="7">
                                                <span></span>07
                                            </label>
                                        </div>
                                    </td>
                                    <td class="fw-bolder fs-6 text-gray-800" rowspan="4">Total Mark
                                        <h1 class="total_question_4">0</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 70%">Listens carefully and responds appropriately.</td>
                                    <td style="width: 20%">
                                        <div class="radio-inline">
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_4" value="4">
                                                <span></span>04
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_4" value="5">
                                                <span></span>05
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_4" value="6">
                                                <span></span>06
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 70%">Listens and responds moderately.</td>
                                    <td style="width: 20%">
                                        <div class="radio-inline">
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_4" value="2">
                                                <span></span>02
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_4" value="3">
                                                <span></span>03
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 70%">Listens poorly and responds ineffectively.</td>
                                    <td style="width: 20%">
                                        <div class="radio-inline">
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_4" value="0">
                                                <span></span>0
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_4" value="1">
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
                                    <th colspan="3">Make clear and confident presentation appropriate to audience (PLO5) - 8 x 0.5 Marks = 4 Marks</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style="width: 70%">Speaks clearly and confidently with the right pitch, intonation and volume, establishes excellent eye contact.</td>
                                    <td style="width: 20%">
                                        <div class="radio-inline">
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_5" value="8">
                                                <span></span>08
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_5" value="7">
                                                <span></span>07
                                            </label>
                                        </div>
                                    </td>
                                    <td class="fw-bolder fs-6 text-gray-800" rowspan="4">Total Mark
                                        <h1 class="total_question_5">0</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 70%">Speaks clearly with the suitable pitch, intonation and volume, establishes good eye contact.</td>
                                    <td style="width: 20%">
                                        <div class="radio-inline">
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_5" value="4">
                                                <span></span>04
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_5" value="5">
                                                <span></span>05
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_5" value="6">
                                                <span></span>06
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 70%"> Speaks relatively clear with inappropriate pitch, intonation and volume and glances at audience occasionally.</td>
                                    <td style="width: 20%">
                                        <div class="radio-inline">
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_5" value="2">
                                                <span></span>02
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_5" value="3">
                                                <span></span>03
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 70%">Speaks with unclear utterances, incongruous pitch, intonation and volume, does not establish any eye contact with audience.</td>
                                    <td style="width: 20%">
                                        <div class="radio-inline">
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_5" value="0">
                                                <span></span>0
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_5" value="1">
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
                                    <th colspan="3">Creativity in presentation (PLO5) - 8 x 0.5 Marks = 4 Marks</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style="width: 70%">Uses visuals or other aids effectively and creatively to deliver the points/messages.</td>
                                    <td style="width: 20%">
                                        <div class="radio-inline">
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_6" value="8">
                                                <span></span>08
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_6" value="7">
                                                <span></span>07
                                            </label>
                                        </div>
                                    </td>
                                    <td class="fw-bolder fs-6 text-gray-800" rowspan="4">Total Mark
                                        <h1 class="total_question_6">0</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 70%">Uses visuals or other aids moderately to deliver the points/messages.</td>
                                    <td style="width: 20%">
                                        <div class="radio-inline">
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_6" value="4">
                                                <span></span>04
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_6" value="5">
                                                <span></span>05
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_6" value="6">
                                                <span></span>06
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 70%">Uses visuals or other aids fairly to deliver the points/messages</td>
                                    <td style="width: 20%">
                                        <div class="radio-inline">
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_6" value="2">
                                                <span></span>02
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_6" value="3">
                                                <span></span>03
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 70%">Uses visuals or other aids that are irrelevant or no visuals or other aids are available to deliver the points/messages.</td>
                                    <td style="width: 20%">
                                        <div class="radio-inline">
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_6" value="0">
                                                <span></span>0
                                            </label>
                                            <label class="radio radio-solid">
                                                <input type="radio" name="question_6" value="1">
                                                <span></span>01
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            {{-- End Question 6 --}}
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
                        <h1 class="totalMark">0/25</h1>
                    </div>
                </div>
                {{-- End totalMark --}}
                {{-- begin::Comment --}}
                <div class="card card-flush">
                    <div class="card-header">
                        <h3 class="card-title">Assessor’s comments/suggestions</h3>
                    </div>
                    <div class="card-body pt-0">
                        <textarea id="kt_docs_tinymce_basic" name="comment" class="tox-target">
                            {{$marks['comment']}}
                        </textarea>
                    </div>
                </div>
                {{-- End Comment --}}
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
    const question1_mark = {{$marks["question_1"]}};
    const question2_mark = {{$marks["question_2"]}};
    const question3_mark = {{$marks["question_3"]}};
    const question4_mark = {{$marks["question_4"]}};
    const question5_mark = {{$marks["question_5"]}};
    const question6_mark = {{$marks["question_6"]}};


    $("#kt_datatable_example_1").DataTable();
    var options = {selector: "#kt_docs_tinymce_basic"};
    if (KTApp.isDarkMode()) {
        options["skin"] = "oxide-dark";
        options["content_css"] = "dark";
    }
    tinymce.init(options);

    let totalMark = 0;
    let markQuestion1 = question1_mark;
    let markQuestion2 = question2_mark;
    let markQuestion3 = question3_mark;
    let markQuestion4 = question4_mark;
    let markQuestion5 = question5_mark;
    let markQuestion6 = question6_mark;

    $('input:radio[name="question_1"]').filter(`[value=${question1_mark}]`).attr('checked', true);
    $(".total_question_1").html(question1_mark * 0.5);

    $('input:radio[name="question_2"]').filter(`[value=${question2_mark}]`).attr('checked', true);
    $(".total_question_2").html(question2_mark * 0.5);

    $('input:radio[name="question_3"]').filter(`[value=${question3_mark}]`).attr('checked', true);
    $(".total_question_3").html(question3_mark * 0.5);

    $('input:radio[name="question_4"]').filter(`[value=${question4_mark}]`).attr('checked', true);
    $(".total_question_4").html(question4_mark * 0.5);

    $('input:radio[name="question_5"]').filter(`[value=${question5_mark}]`).attr('checked', true);
    $(".total_question_5").html(question5_mark * 0.5);

    $('input:radio[name="question_6"]').filter(`[value=${question6_mark}]`).attr('checked', true);
    $(".total_question_6").html(question6_mark * 0.5);
    
    $('.totalMark').html((question1_mark * 0.5 + question2_mark * 0.5 + question3_mark * 0.5 + question4_mark * 0.5 + question5_mark * 0.5 + question6_mark * 0.5) + '/25');


    $('input[type=radio][name=question_1]').change(function() {
        markQuestion1 = parseInt(this.value);
        $(".total_question_1").html(markQuestion1 * 0.5);
        totalMark = markQuestion1 * 0.5 + markQuestion2 * 0.5 + markQuestion3 * 0.5 + markQuestion4 * 0.5 + markQuestion5 * 0.5 + markQuestion6 * 0.5;
        $('.totalMark').html(totalMark + '/25');
    });
    $('input[type=radio][name=question_2]').change(function() {
        markQuestion2 = parseInt(this.value);
        $(".total_question_2").html(markQuestion2 * 0.5);
        totalMark = markQuestion1 * 0.5 + markQuestion2 * 0.5 + markQuestion3 * 0.5 + markQuestion4 * 0.5 + markQuestion5 * 0.5 + markQuestion6 * 0.5;
        $('.totalMark').html(totalMark + '/25');
    });
    $('input[type=radio][name=question_3]').change(function() {
        markQuestion3 = parseInt(this.value);
        $(".total_question_3").html(markQuestion3 * 0.5);
        totalMark = markQuestion1 * 0.5 + markQuestion2 * 0.5 + markQuestion3 * 0.5 + markQuestion4 * 0.5 + markQuestion5 * 0.5 + markQuestion6 * 0.5;
        $('.totalMark').html(totalMark + '/25');
    });
    $('input[type=radio][name=question_4]').change(function() {
        markQuestion4 = parseInt(this.value);
        $(".total_question_4").html(markQuestion4 * 0.5);
        totalMark = markQuestion1 * 0.5 + markQuestion2 * 0.5 + markQuestion3 * 0.5 + markQuestion4 * 0.5 + markQuestion5 * 0.5 + markQuestion6 * 0.5;
        $('.totalMark').html(totalMark + '/25');
    });
    $('input[type=radio][name=question_5]').change(function() {
        markQuestion5 = parseInt(this.value);
        $(".total_question_5").html(markQuestion5 * 0.5);
        totalMark = markQuestion1 * 0.5 + markQuestion2 * 0.5 + markQuestion3 * 0.5 + markQuestion4 * 0.5 + markQuestion5 * 0.5 + markQuestion6 * 0.5;
        $('.totalMark').html(totalMark + '/25');
    });
    $('input[type=radio][name=question_6]').change(function() {
        markQuestion6 = parseInt(this.value);
        $(".total_question_6").html(markQuestion6 * 0.5);
        totalMark = markQuestion1 * 0.5 + markQuestion2 * 0.5 + markQuestion3 * 0.5 + markQuestion4 * 0.5 + markQuestion5 * 0.5 + markQuestion6 * 0.5;
        $('.totalMark').html(totalMark + '/25');
    });
</script>
@endsection