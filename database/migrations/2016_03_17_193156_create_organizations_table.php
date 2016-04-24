<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Orgusers_email');// creates "email" field in our database
            $table->string('Orgusers_firstName');
            $table->string('Orgusers_lastName');
            $table->string('OrgTax_ID');
            $table->string('Organization_name');
            $table->string('Orgpassword',60);
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('organizations');
    }
}
