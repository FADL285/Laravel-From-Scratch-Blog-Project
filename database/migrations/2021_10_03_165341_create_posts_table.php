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
        Schema::create("posts", function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("slug")->unique();
            $table->string("title");
            $table->text("excerpt");
            $table->text("body");
            $table->foreignId('user_id');
            $table->foreignId('category_id');
            $table->timestamps();
            $table->timestamp("published_at")->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists("posts");
    }
}
