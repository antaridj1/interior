<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->unsignedBigInteger('type_interior_id');
            // $table->boolean('isRenovation');
            $table->string('needs');
            $table->string('location');
            $table->string('room_size')->nullable();
            $table->string('style_interior')->nullable();
            $table->string('budget')->nullable();
            $table->date('started_month');
            $table->text('detail')->nullable();
            $table->integer('subtotal')->nullable();
            $table->integer('progress')->default(0);
            $table->string('results')->nullable();
            $table->string('documents')->nullable();
            $table->string('bukti_bayar')->nullable();
            $table->text('komentar_customer')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();

            $table->foreign('type_interior_id')
            ->references('id')
            ->on('type_interiors')
            ->onDelete('cascade');

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->foreign('employee_id')
            ->references('id')
            ->on('employees')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
