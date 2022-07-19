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
        Schema::create("register_programs", function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id")->unsigned();
            $table
                ->foreign("user_id")
                ->references("id")
                ->on("users");
            $table->bigInteger("project_id")->unsigned();
            $table
                ->foreign("project_id")
                ->references("id")
                ->on("projects");
            $table->text("marks_payload")->nullable();
            $table->tinyText("position");
            $table->boolean("is_request")->default(false);
            $table->float("total")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("register_programs");
    }
};
