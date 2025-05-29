<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUptimesTable extends Migration
{
    public function up()
    {
        Schema::create('uptimes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('uptime_seconds'); // np. 123456 sekund działania
            $table->timestamp('reported_at');             // kiedy zgłoszono ten uptime
            $table->timestamps();                         // created_at / updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('uptimes');
    }
}
