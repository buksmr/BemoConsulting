<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreeinvoiceCompanies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freeinvoice_companies', function (Blueprint $table) {
            $table->uuid('id', 36)->primary();
              $table->string('company_name', 255);
            $table->string('name', 255);
           $table->string('email', 255);
            $table->softdeletes();
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
        Schema::dropIfExists('freeinvoice_companies');
    }
}
