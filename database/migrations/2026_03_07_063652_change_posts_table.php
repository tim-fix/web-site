<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangePostsTable extends Migration
	{
		public function up()
		{
		Schema::table('posts', function (Blueprint $table) {
		$table->renameColumn('name', 'title');
        $table->string('title')->first()->change();
	});




		}
	
		public function down()
		{
			Schema::dropIfExists('posts');
		}
	}
