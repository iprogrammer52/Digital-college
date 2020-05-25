<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRootUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('users')) {
            DB::table('users')
                ->insert([
                    'name'       => 'Петр I',
                    'surname'    => 'Великий',
                    'middlename' => 'Алексеевич',
                    'email'      => 'test@test.com',
                    'password'   => Hash::make('kdc12345'),
                    'usergroup'  => 'root',
                    'lang'       => 'ru'
                ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
