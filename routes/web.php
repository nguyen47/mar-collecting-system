<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RegisterProgramController;
use App\Http\Controllers\UserController;
use App\Models\RegisterProgram;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function () {
    return view("welcome");
});

Route::get("setup", [AuthController::class, "createRoles"]);

Route::prefix("auth")->group(function () {
    Route::get("login", [AuthController::class, "displayLoginPage"])->name(
        "admin.signIn"
    );

    Route::post("login", [AuthController::class, "login"])
        ->name("post.admin.signIn")
        ->middleware("throttle:3,1");

    Route::get("register", [
        AuthController::class,
        "displayRegisterPage",
    ])->name("admin.signUp");
    Route::post("register", [AuthController::class, "register"])->name(
        "post.admin.signUp"
    );
});

Route::middleware("isAuth")->group(function () {
    Route::get("logout", [AuthController::class, "logout"])->name(
        "admin.logout"
    );
    Route::prefix("admin")->group(function () {
        Route::get("dashboard", function () {
            return view("admin.dashboard");
        })->name("admin.dashboard");

        Route::prefix("projects")->group(function () {
            Route::get("/", [ProjectController::class, "index"])->name(
                "admin.projects"
            );
            Route::get("create", [ProjectController::class, "create"])->name(
                "admin.projects.create"
            );

            Route::post("create", [ProjectController::class, "store"])->name(
                "admin.projects.store"
            );

            Route::get("delete/{id}", [
                ProjectController::class,
                "delete",
            ])->name("admin.projects.delete");
        });

        Route::prefix("register")->group(function () {
            Route::get("/", [RegisterProgramController::class, "index"])->name(
                "admin.register"
            );

            Route::post("/reigster", [
                RegisterProgramController::class,
                "registerProjects",
            ])->name("admin.register.projects");

            Route::get("/evaluate/{id}", [
                RegisterProgramController::class,
                "displayEvaluate",
            ])->name("admin.register.displayEvaludate");

            Route::put("/evaluate/{id}", [
                RegisterProgramController::class,
                "postEvaluate",
            ])->name("admin.register.postEvaluate");

            Route::get("/evaluate/edit/{id}", [
                RegisterProgramController::class,
                "displayEditEvaluate",
            ])->name("admin.register.displayEditEvaluate");

            Route::get("/evaluate/request/{id}", [
                RegisterProgramController::class,
                "request",
            ])->name("admin.register.request");

            Route::get("/approve/{id}", [
                RegisterProgramController::class,
                "approve",
            ])->name("admin.register.approve");

            Route::get("send-email/{id}", [
                RegisterProgramController::class,
                "sendNotification",
            ])->name("admin.register.sendNotification");

            Route::get("view/{id}", [
                RegisterProgramController::class,
                "view",
            ])->name("admin.register.view");

            Route::get("delete/{id}", [
                RegisterProgramController::class,
                "delete",
            ])->name("register.delete");

            Route::get("export", [
                RegisterProgramController::class,
                "export",
            ])->name("register.export");
        });

        Route::resource("users", UserController::class);
        Route::get("approve/{id}", [UserController::class, "approve"])->name(
            "users.approve"
        );
        Route::get("delete/{id}", [UserController::class, "delete"])->name(
            "users.delete"
        );
    });
});
