<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCallbackRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('callback_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->enum('status',['open','processing','closed'])->comment('Статус запроса');
            $table->string('client_name');
            $table->string('client_phone_number',11);
            $table->timestamp('callback_at')->useCurrent();
            $table->string('action_id',69);
            $table->index('status');
            $table->index('callback_at');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('callback_requests');
    }
}
