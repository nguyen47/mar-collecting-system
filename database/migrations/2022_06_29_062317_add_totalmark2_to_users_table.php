<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("register_programs", function (Blueprint $table) {
            $table->float("total_mark_report")->nullable();
            $table->float("total_mark_implementation")->nullable();
            $table->text("comment_report")->nullable();
            $table->text("comment_implementation")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("register_programs", function (Blueprint $table) {
            //
        });
    }
};
