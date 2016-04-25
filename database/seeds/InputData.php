<?php

use Illuminate\Database\Seeder;

class InputData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	DB::table('asets')->insert([
            'nama' => 'Kursi',
            'jenis' => 'Alat berat',
    		'status' => 1
    	]);

    	DB::table('petugas')->insert([
    		'nama' => 'Karjo',
            'email' => 'karjo@gmail.com',
    		'pass' => Crypt::encrypt('manproganteng')
    	]);

    }
}
