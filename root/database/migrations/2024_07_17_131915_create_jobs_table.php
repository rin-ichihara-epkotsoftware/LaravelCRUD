<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'jobs';
        Schema::create($tableName, function (Blueprint $table) {
            // $table->id() は $table->bigIncrements('id') でも同じ
            $table->id()->comment('ID'); // id
            $table->string('name')->comment('名称'); // name
            $table->softDeletes()->comment('削除日時'); // deleted_at
            // コメントが不要であれば $table->timestamps() でcreated_at、updated_atの作成が可能
            $table->timestamp('created_at')->nullable()->comment('作成日時'); // created_at
            $table->timestamp('updated_at')->nullable()->comment('更新日時'); // updated_at
        });
        // Illuminate\Support\Facades\DB
        DB::statement("ALTER TABLE {$tableName} COMMENT '職業'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
};
