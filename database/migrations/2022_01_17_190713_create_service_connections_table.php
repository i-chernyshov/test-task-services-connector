<?php

use App\Models\Connection;
use App\Models\Service;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceConnectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_connections', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignIdFor(Service::class);
            $table->foreignIdFor(Connection::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_connections');
    }
}
