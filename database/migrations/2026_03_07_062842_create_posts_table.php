<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
	{
		public function up()
		{
			Schema::create('posts', function (Blueprint $table) {
				$table->increments('id');
				$table->integer('votes');
				$table->string('name', 255);
                $table->text('text');
                $table->dateTime('created_at');
                $table->timestamp('added_on');
                $table->string('desc')->nullable();
                $table->string('value')->default('some value');
                $table->string('comment')->comment('my comm ent');
                $table->integer('vote')->unsigned();

			});
		}
	
		public function down()
		{
			Schema::dropIfExists('posts');
		}
	}
