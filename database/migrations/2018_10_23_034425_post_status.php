<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PostStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts',function(blueprint $table)
        {
            $table->tinyinteger('post_status')->after('post_author');
            $table->integer('post_view_count')->after('post_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts',function(blueprint $table)
        {
            $table->dropColumn('post_status');
            $table->dropColumn('post_view_count');
        });
    }
}
