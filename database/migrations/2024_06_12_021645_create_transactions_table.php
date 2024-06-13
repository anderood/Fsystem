<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->decimal('amount', 8, 2);
            $table->date('date');
            $table->unsignedBigInteger('member_id');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('origin_id');
            $table->unsignedBigInteger('movement_id');
            $table->text('observation')->nullable();
            $table->timestamps();

            $table->foreign('member_id')->references('id')->on('members');
            $table->foreign('type_id')->references('id')->on('types');
            $table->foreign('origin_id')->references('id')->on('origins');
            $table->foreign('movement_id')->references('id')->on('movements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('transactions', function (Blueprint $table) {
           $table->dropConstrainedForeignId('member_id');
           $table->dropConstrainedForeignId('type_id');
           $table->dropConstrainedForeignId('origin_id');
           $table->dropConstrainedForeignId('movement_id');
        });

        Schema::dropIfExists('transactions');
    }
}
