<?php

namespace App\Http\Controllers;

use App\Exports\ProgramExport;
use App\Models\RegisterProgram;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class RegisterProgramController extends Controller
{
    public function index()
    {
        $user = User::where("id", Auth::user()->id)->first();
        if ($user->hasRole("admin")) {
            $projects = RegisterProgram::all();
            return view("admin.register_program.index", compact("projects"));
        } else {
            $projects = RegisterProgram::where(
                "user_id",
                Auth::user()->id
            )->get();
            return view("admin.register_program.index", compact("projects"));
        }
    }

    public function registerProjects()
    {
        $registered = RegisterProgram::where("user_id", Auth::user()->id)
            ->where("project_id", request("project_id"))
            ->where("position", request("position"))
            ->count();
        if ($registered > 0) {
            return back()->with(
                "error",
                "You are already registerd this project"
            );
        }
        RegisterProgram::create(request()->all());
        return back()->with("success", "You are registered successful");
    }

    public function displayEvaluate()
    {
        $register_program = RegisterProgram::where(
            "id",
            request("id")
        )->first();
        if ($register_program->position === "ACCESSOR") {
            return view(
                "admin.register_program.evaluate.accessor.form1",
                compact("register_program")
            );
        }
        if ($register_program->position === "SUPERVISOR") {
            if ($register_program->projects->title === "MASTER_PROJECT_1") {
                return view(
                    "admin.register_program.evaluate.supervisor.super2",
                    compact("register_program")
                );
            }
            if ($register_program->projects->title === "MASTER_PROJECT_2") {
                return view(
                    "admin.register_program.evaluate.supervisor.super_2",
                    compact("register_program")
                );
            }
        }
    }

    public function postEvaluate(Request $request)
    {
        $register_program = RegisterProgram::where(
            "id",
            request("id")
        )->first();
        if ($register_program->position === "ACCESSOR") {
            if (
                is_null($request->get("question_1")) ||
                is_null($request->get("question_2")) ||
                is_null($request->get("question_3")) ||
                is_null($request->get("question_4")) ||
                is_null($request->get("question_5")) ||
                is_null($request->get("question_6"))
            ) {
                return redirect()
                    ->route("admin.register")
                    ->with("error", "Please fill all the marks blanks");
            } else {
                $this->evaluateAccessor($register_program, $request);
                return redirect()
                    ->route("admin.register")
                    ->with("success", "You are submit successful");
            }
        }
        if ($register_program->position === "SUPERVISOR") {
            if (
                is_null($request->get("report_question_1")) ||
                is_null($request->get("report_question_2")) ||
                is_null($request->get("report_question_3")) ||
                is_null($request->get("report_question_4")) ||
                is_null($request->get("report_question_5")) ||
                is_null($request->get("report_question_6")) ||
                is_null($request->get("report_question_7")) ||
                is_null($request->get("report_question_8")) ||
                is_null($request->get("implementation_question_1")) ||
                is_null($request->get("implementation_question_2")) ||
                is_null($request->get("implementation_question_3")) ||
                is_null($request->get("implementation_question_4")) ||
                is_null($request->get("implementation_question_5")) ||
                is_null($request->get("implementation_question_6")) ||
                is_null($request->get("implementation_question_7"))
            ) {
                return redirect()
                    ->route("admin.register")
                    ->with("error", "Please fill all the marks blanks");
            } else {
                $this->evaluateSupervior($register_program, $request);
                return redirect()
                    ->route("admin.register")
                    ->with("success", "You are submit successful");
            }
        }
    }

    private function evaluateSupervior($register_program, $request)
    {
        $data_report = $request->only([
            "report_question_1",
            "report_question_2",
            "report_question_3",
            "report_question_4",
            "report_question_5",
            "report_question_6",
            "report_question_7",
            "report_question_8",
        ]);
        $data_implement = $request->only([
            "implementation_question_1",
            "implementation_question_2",
            "implementation_question_3",
            "implementation_question_4",
            "implementation_question_5",
            "implementation_question_6",
            "implementation_question_7",
        ]);
        $dataArray = [$data_report, $data_implement];
        $dataJson = json_encode($dataArray);
        $totalMark_report =
            (int) $request->get("report_question_1") * 0.5 +
            (int) $request->get("report_question_2") * 0.5 +
            (int) $request->get("report_question_3") +
            (int) $request->get("report_question_4") +
            (int) $request->get("report_question_5") +
            (int) $request->get("report_question_6") +
            (int) $request->get("report_question_7") +
            (int) $request->get("report_question_8");

        $totalMark_implementation =
            (int) $request->get("implementation_question_1") * 0.5 +
            (int) $request->get("implementation_question_2") +
            (int) $request->get("implementation_question_3") +
            (int) $request->get("implementation_question_4") * 0.5 +
            (int) $request->get("implementation_question_5") * 0.5 +
            (int) $request->get("implementation_question_6") * 0.5 +
            (int) $request->get("implementation_question_7") * 0.5;

        $register_program->marks_payload = $dataJson;
        $register_program->total = 1;
        $register_program->total_mark_report = $totalMark_report;
        $register_program->total_mark_implementation = $totalMark_implementation;
        $register_program->comment_report = $request->only("comment_report");
        $register_program->comment_implementation = $request->only(
            "comment_implementation"
        );
        $register_program->is_request = false;
        $register_program->is_approved = false;
        $register_program->save();
    }

    private function evaluateAccessor($register_program, $request)
    {
        $data = $request->only([
            "question_1",
            "question_2",
            "question_3",
            "question_4",
            "question_5",
            "question_6",
            "comment",
        ]);

        $dataJson = json_encode($data);
        $totalMark =
            (int) $request->get("question_1") +
            (int) $request->get("question_2") +
            (int) $request->get("question_3") +
            (int) $request->get("question_4") +
            (int) $request->get("question_5") +
            (int) $request->get("question_6");
        $register_program->marks_payload = $dataJson;
        $register_program->total = $totalMark * 0.5;
        $register_program->is_request = false;
        $register_program->is_approved = false;
        $register_program->save();

        $this->sendEmail($register_program);
    }

    private function sendEmail($register_program)
    {
        $details = [
            "first_name" => Auth::user()->first_name,
            "last_name" => Auth::user()->last_name,
            "body" =>
                "You Are submited the mark for the program " .
                $register_program->projects->program_name .
                ". The total mark is " .
                $register_program->total,
        ];

        Mail::to(Auth::user()->email)->send(
            new \App\Mail\SubmitMarkEmail($details)
        );
    }

    public function displayEditEvaluate()
    {
        $register_program = RegisterProgram::where(
            "id",
            request("id")
        )->first();

        $final_exam = $register_program->projects->final_exam;

        if (date("m/d/Y") <= $final_exam || $register_program->is_approved) {
            $marks = json_decode($register_program->marks_payload, true);
            if ($register_program->position === "ACCESSOR") {
                return view(
                    "admin.register_program.evaluate.accessor.edit_form1",
                    compact("register_program", "marks")
                );
            }
        }
        $details = [
            "subject" =>
                "Requested Mark Change from " .
                $register_program->users->first_name,
            "first_name" => $register_program->users->first_name,
            "last_name" => $register_program->users->last_name,
            "body" =>
                "You have received a changing mark of " .
                $register_program->projects->program_name .
                " from  " .
                $register_program->users->first_name,
        ];

        Mail::to("hoang@graduate.utm.my")->send(
            new \App\Mail\SendNotification($details)
        );
        $this->sendEmail($register_program);
    }

    public function request()
    {
        $register_program = RegisterProgram::where(
            "id",
            request("id")
        )->first();

        $register_program->is_request = true;
        $register_program->save();

        $details = [
            "subject" =>
                "Requested Mark Change from " .
                $register_program->users->first_name,
            "first_name" => $register_program->users->first_name,
            "last_name" => $register_program->users->last_name,
            "body" =>
                "You have an request to change the mark of " .
                $register_program->projects->program_name .
                " from  " .
                $register_program->users->first_name,
        ];

        Mail::to("hoang@graduate.utm.my")->send(
            new \App\Mail\SendNotification($details)
        );

        return redirect()
            ->back()
            ->with("success", "You are requested to change the mark");
    }

    public function approve()
    {
        $register_program = RegisterProgram::where(
            "id",
            request("id")
        )->first();
        $register_program->is_request = false;
        $register_program->is_approved = true;
        $register_program->save();
        return redirect()
            ->back()
            ->with("success", "You are approved to change the mark");
    }

    public function sendNotification()
    {
        $register_program = RegisterProgram::where(
            "id",
            request("id")
        )->first();

        $details = [
            "subject" => "Please fill all the marks blanks",
            "first_name" => $register_program->users->first_name,
            "last_name" => $register_program->users->last_name,
            "body" =>
                "Please fill all the marks blanks for the project " .
                $register_program->projects->program_name,
        ];

        Mail::to($register_program->users->email)->send(
            new \App\Mail\SendNotification($details)
        );

        return redirect()
            ->route("admin.register")
            ->with("success", "You are send email success");
    }

    public function view()
    {
        $register_program = RegisterProgram::where(
            "id",
            request("id")
        )->first();
        $marks = json_decode($register_program->marks_payload, true);
        if ($register_program->position === "ACCESSOR") {
            return view(
                "admin.register_program.evaluate.accessor.view_form1",
                compact("register_program", "marks")
            );
        }
    }

    public function delete()
    {
        $register_program = RegisterProgram::where(
            "id",
            request("id")
        )->delete();
        return redirect()
            ->route("admin.register")
            ->with("success", "Deleted successfully!");
    }

    public function export()
    {
        return Excel::download(new ProgramExport(), "register_programs.xlsx");
    }
}
