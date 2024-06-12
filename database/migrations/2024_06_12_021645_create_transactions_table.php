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
            $table->string('amount');
            $table->date('date');
            $table->foreignId('member_id')->nullable()->constrained();
            $table->foreignId('type_id')->constrained();
            $table->foreignId('origin_id')->constrained();
            $table->foreignId('movement_id')->constrained();
            $table->string('observation')->nullable();
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

        Schema::table('transactions', function (Blueprint $table) {
           $table->dropConstrainedForeignId('member_id');
           $table->dropConstrainedForeignId('type_id');
           $table->dropConstrainedForeignId('origin_id');
           $table->dropConstrainedForeignId('movement_id');
        });

        Schema::dropIfExists('transactions');
    }
}
