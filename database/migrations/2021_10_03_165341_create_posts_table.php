<?php
/**
 * Author: Mohamed Fadl <Mohamed.Fadl2852@gmail.com>
 * Date: 10/3/2021
 * Time: 4:53 PM
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('thumbnail')->nullable();
            $table->text('excerpt');
            $table->text('body');
            $table->foreignId('user_id');
            $table->foreignId('category_id');
            $table->timestamps();
            $table->timestamp('published_at')->nullable();
        });

        // Full text index - for search
        DB::statement(
            'ALTER TABLE `posts` ADD FULLTEXT INDEX posts_title_body_idx(title,body)'
        );
    }

    public function down()
    {
        Schema::table('posts', function ($table) {
            $table->dropIndex('posts_title_body_idx');
        });
        Schema::dropIfExists('posts');
    }
}
