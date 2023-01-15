<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Liumenggit\GenerateKey\Models\AdminSettings;

class CreatePaySetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        AdminSettings::firstOrCreate([
            'slug' => 'liumenggit:generate-key',
            'value' => [
                'length' => 32,
                'constitute' => ['lower', 'upper', 'number', 'symbol']
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        AdminSettings::where('slug', 'liumenggit:generate-key')->delete();
    }
}
