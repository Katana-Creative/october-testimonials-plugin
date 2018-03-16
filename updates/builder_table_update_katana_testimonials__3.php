<?php namespace Katana\Testimonials\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKatanaTestimonials3 extends Migration
{
    public function up()
    {
        Schema::table('katana_testimonials_', function($table)
        {
            $table->string('option', 65535)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('katana_testimonials_', function($table)
        {
            $table->binary('option')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
