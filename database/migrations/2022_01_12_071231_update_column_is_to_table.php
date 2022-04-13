<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateColumnIsToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function __construct()
    {

        // $platform = Schema::getConnection()->getDoctrineSchemaManager()->getDatabasePlatform();
        // $platform->registerDoctrineTypeMapping('enum', 'string');
        // $platform->registerDoctrineTypeMapping('set', 'string');
        // // DB::getDoctrineSchemaManager()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');

        DB::statement("ALTER TABLE tickets CHANGE `title` `status` ");
    }

    public function up()
    {
        Schema::table('tickets', function (Blueprint $table) {
            $table->string('title', '25')->change();
            $table->text('description')->nullable()->change();
            $table->unsignedBigInteger('ticket_category_id')->nullable()->cahnge();
            $table->unsignedBigInteger('user_id')->nullable()->change();
            $table->enum('status',['open', 'hold', 'closed'])->default('open')->comment('open hold closed')->change();
   

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tickets', function (Blueprint $table) {
            //
            Schema::dropIfExists('tickets');
        });
    }
}
