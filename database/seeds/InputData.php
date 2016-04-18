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
    	DB::table('pemesanans')->insert([
    		'senjataID' => 1,
    		'adminID' => 1,
    		'tglPesan' => '2016-04-06'
    	]);
    	
    	DB::table('senjatas')->insert([
    		'jenis' => 'revolver',
    		'isRepaired' => 1,
    		'isDamaged' => 0,
    		'stok' => 2
    	]);

    	DB::table('admins')->insert([
    		'jenis' => 'inv',
    		'nama' => '0812345678',
    		'shift' => 'pagi',
    		'email' => 'admininv1@gmail.com',
    		'password' => Crypt::encrypt('manproganteng')
    	]);

    	DB::table('direksis')->insert([
    		'nama' => 'direksi1',
    		'email' => 'direksi1@gmail.com',
    		'password' => Crypt::encrypt('manproganteng')
    	]);


    }
}
