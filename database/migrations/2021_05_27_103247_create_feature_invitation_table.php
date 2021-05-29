<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeatureInvitationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_invitation', function (Blueprint $table) {
            $table->foreignId('feature_id')->constrained('features');
            $table->foreignId('invitation_id')->constrained('invitations');
            $table->primary(['feature_id', 'invitation_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feature_invitation');
    }
}
