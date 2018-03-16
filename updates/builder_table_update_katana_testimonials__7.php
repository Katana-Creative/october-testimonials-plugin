<?php namespace Katana\Testimonials\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKatanaTestimonials7 extends Migration
{
    public function up()
    {
        Schema::table('katana_testimonials_', function($table)
        {
            $table->dropColumn('details');
        });
    }
    
    public function down()
    {
        Schema::table('katana_testimonials_', function($table)
        {
            $table->text('details');
        });
    }
}
