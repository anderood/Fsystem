<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints('transactions_member_id_foreign');
        Schema::dropIfExists('members');
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone')->nullable();
            $table->date('dateOfBirth')->nullable();
            $table->string('email')->nullable();
            $table->string('is_active');
            $table->foreignId('address_id')->constrained('addresses')->onUpdate('cascade')->onDelete('cascade');
            $table->string('observations')->nullable();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints('transactions_member_id_foreign');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints('transactions_member_id_foreign');
        Schema::dropIfExists('members');
    }
}
