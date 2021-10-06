<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public $table = "tbl_products";

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id')->default("0")->nullable()->unsigned();
            $table->text('name');
            $table->string('sku', 20)->nullable();
            $table->string('tiki_pid', 20)->nullable();
            $table->text('slug')->nullable();
            $table->text('teaser')->nullable();
            $table->text('description')->nullable();
            $table->string('image', 255)->nullable();
            $table->tinyInteger('status')->default("0");
            $table->tinyInteger('sort_order')->default("0");
            $table->string('meta_title', 255)->nullable();
            $table->string('meta_keyword', 255)->nullable();
            $table->text('meta_description')->nullable();
            $table->integer('created_id')->default("0")->nullable()->unsigned();
            $table->integer('updated_id')->default("0")->nullable()->unsigned();
            $table->timestamp('published_at', 0)->nullable();
            $table->timestamps();
            $table->collation = 'utf8_unicode_ci';
            $table->charset = 'utf8';
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->table);
    }
}
