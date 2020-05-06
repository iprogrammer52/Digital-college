<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFakeCards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('news')) {
            DB::table('news')->insert([
                [
                    'title' => 'Тестовая карточка 1',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt cupiditate quam ratione repellendus magnam distinctio excepturi in, quis nihil nesciunt? Culpa, voluptatem! Suscipit tempora laboriosam ipsam commodi temporibus officiis impedit distinctio optio natus officia omnis odio tenetur dignissimos harum quo, vitae quisquam? In ullam impedit recusandae dignissimos cum, fugit excepturi aperiam vel iure consectetur possimus voluptatibus ratione suscipit, quo accusamus ipsum voluptates architecto velit adipisci. Error a expedita assumenda cum. Sit aliquam, sunt sed nihil officia ullam, vel voluptatum unde alias voluptates, doloribus exercitationem tenetur autem quam sequi temporibus distinctio? Dolor tempora asperiores a, modi accusamus quos facere corrupti incidunt.',
                    'for_all' => 'on',
                    'created_at' => '2019-04-12',
                ],
                [
                    'title' => 'Тестовая карточка 2',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt cupiditate quam ratione repellendus magnam distinctio excepturi in, quis nihil nesciunt? Culpa, voluptatem! Suscipit tempora laboriosam ipsam commodi temporibus officiis impedit distinctio optio natus officia omnis odio tenetur dignissimos harum quo, vitae quisquam? In ullam impedit recusandae dignissimos cum, fugit excepturi aperiam vel iure consectetur possimus voluptatibus ratione suscipit, quo accusamus ipsum voluptates architecto velit adipisci. Error a expedita assumenda cum. Sit aliquam, sunt sed nihil officia ullam, vel voluptatum unde alias voluptates, doloribus exercitationem tenetur autem quam sequi temporibus distinctio? Dolor tempora asperiores a, modi accusamus quos facere corrupti incidunt.',
                    'for_all' => 'on',
                    'created_at' => '2019-04-12',
                    
                ],
                [
                    'title' => 'Тестовая карточка 3',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt cupiditate quam ratione repellendus magnam distinctio excepturi in, quis nihil nesciunt? Culpa, voluptatem! Suscipit tempora laboriosam ipsam commodi temporibus officiis impedit distinctio optio natus officia omnis odio tenetur dignissimos harum quo, vitae quisquam? In ullam impedit recusandae dignissimos cum, fugit excepturi aperiam vel iure consectetur possimus voluptatibus ratione suscipit, quo accusamus ipsum voluptates architecto velit adipisci. Error a expedita assumenda cum. Sit aliquam, sunt sed nihil officia ullam, vel voluptatum unde alias voluptates, doloribus exercitationem tenetur autem quam sequi temporibus distinctio? Dolor tempora asperiores a, modi accusamus quos facere corrupti incidunt.',
                    'for_all' => 'on',
                    'created_at' => '2019-04-12',
                ]
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
