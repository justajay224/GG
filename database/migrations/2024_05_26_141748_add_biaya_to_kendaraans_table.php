<?php

// database/migrations/xxxx_xx_xx_add_biaya_to_kendaraans_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBiayaToKendaraansTable extends Migration
{
    public function up()
    {
        Schema::table('kendaraans', function (Blueprint $table) {
            $table->double('biaya', 15, 2)->after('status');
        });
    }

    public function down()
    {
        Schema::table('kendaraans', function (Blueprint $table) {
            $table->dropColumn('biaya');
        });
    }
}

