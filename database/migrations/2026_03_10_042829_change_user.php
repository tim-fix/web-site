<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeUser extends Migration
	{
		public function up()
		{
		Schema::table('user', function (Blueprint $table) {
		$table->string('massage');
        $table->string('email')->comment('my comment');
        $table->integer('salary')->default('0');
        $table->integer('age')->nullable()->unsigned();
	});




		}
	
		public function down()
		{
			Schema::dropIfExists('posts');
		}
	}
