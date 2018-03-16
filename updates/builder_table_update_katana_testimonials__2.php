<?php namespace Katana\Testimonials\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKatanaTestimonials2 extends Migration
{
    public function up()
    {
        Schema::table('katana_testimonials_', function($table)
        {
            $table->binary('option');
        });
    }
    
    public function down()
    {
        Schema::table('katana_testimonials_', function($table)
        {
            $table->dropColumn('option');
        });
    }
}
