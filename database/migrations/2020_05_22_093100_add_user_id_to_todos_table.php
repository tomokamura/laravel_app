<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       //               出ましたクロージャ↓Blueprintオブジェクト  インスタンス化されて入ってる
         Schema::table('todos', function (Blueprint $table) {
             $table->integer('user_id');  //Blueprintのメソッドを使ってカラム定義(型名のメソッド！)
         });
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
         Schema::table('todos', function (Blueprint $table) {
             $table->dropColumn('user_id');  // 追記
         });
     }
}
