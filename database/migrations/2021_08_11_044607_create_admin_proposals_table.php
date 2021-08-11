<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_proposals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('proposal_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('price');
            $table->text('comments');
            $table->foreign('proposal_id')->references('id')->on('proposals')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('admins')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('admin_proposals');
    }
}