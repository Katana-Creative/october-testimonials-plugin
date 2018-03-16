<?php namespace Katana\Testimonials\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKatanaTestimonials4 extends Migration
{
    public function up()
    {
        Schema::table('katana_testimonials_', function($table)
        {
            $table->binary('testimonial_opt');
            $table->binary('recommend_opt');
            $table->dropColumn('option');
        });
    }
    
    public function down()
    {
        Schema::table('katana_testimonials_', function($table)
        {
            $table->dropColumn('testimonial_opt');
            $table->dropColumn('recommend_opt');
            $table->text('option');
        });
    }
}
