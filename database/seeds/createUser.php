<?php

use Illuminate\Database\Seeder;
class createUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('pelanggans')->insert([
    		'nama' => 'Rizky',
    		'alamat' => 'Sukabirus',
    		'noTelp' => '0812345678',
    		'email' => 'rzkysol@gmail.com',
    		'password' => Crypt::encrypt('manproganteng')
    	]);
        //
    }
}
