<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('name');
            $table->string('email');
            $table->string('contact');
            $table->string('city');
            $table->string('profile_image');
            $table->timestamp('email_verified_at')->nullable();
            $table->longtext('address');
            $table->string('password');
            $table->string('confirm_password');
            $table->string('role')->default(2);
            $table->string('is_active')->default(1);
            $table->rememberToken();
            $table->timestamps();
        });

        $data = array('name'=>'admin', 'email' => 'admin@mplussoft.com', 'contact' => '9876543210', 'password' => '$2y$10$esSxMW6nP.GxooOXdM/uROyIEwwgSyYIZmX2MGEf14qYJyOEVJy2.', 'address' => 'pune','confirm_password' => '$2y$10$esSxMW6nP.GxooOXdM/uROyIEwwgSyYIZmX2MGEf14qYJyOEVJy2.','city' => 'Pune','profile_image' => '1.png','role' => '1');

        User::insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
