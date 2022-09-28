<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    protected $testUser = [
        'name' => 'UserName',
        'email' => 'user-name@mail.com',
        'email_verified_at' => '2022-09-28 08:04:59',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'api_token' => 'IWF2TL9PksPodHpq5bxm5aNOgv8gszRUS3DrMtVm5aNphjTbhW6L4M12grLC',
        'remember_token' => 'tU8L9QHSNM'
    ];
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(User::class, 10)->create();
        User::create($this->testUser);
    }
}
