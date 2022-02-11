<?php

use App\Models\Client;
use App\Models\Company;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignIdFor(Company::class);
            $table->foreignIdFor(Client::class);
            $table->integer('number');
            $table->date('due_date');

            $table->float('subtotal');
            $table->float('tax');
            $table->float('discount');
            $table->float('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
};
