<?php namespace Katana\Testimonials\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKatanaTestimonials extends Migration
{
    public function up()
    {
        Schema::create('katana_testimonials_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name');
            $table->text('testimonial');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('katana_testimonials_');
    }
}
