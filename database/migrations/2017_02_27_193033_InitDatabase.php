<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('title');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
		});

        Schema::create('answers', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('question_id');
            $table->text('text');
            $table->integer('count_validations')->default(0);
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
        Schema::drop('questions');
        Schema::drop('answers');

    }
}
