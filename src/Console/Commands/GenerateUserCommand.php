<?php

namespace Alfianizzah\Traspac\Console\Commands;

use Alfianizzah\Traspac\Models\UserModel;
use Faker\Factory;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class GenerateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'traspac:generate-user {jumlah}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $jumlah = $this->argument("jumlah");
        $this->info("generate user...");
        for ($i = 0; $i <= $jumlah; $i++) {
            $faker = Factory::create("id_ID");
            $attr = [
                "name" => $faker->name,
                "email" => $faker->email,
                "password" => Hash::make($faker->name),
            ];
            UserModel::create($attr);
        }
        $this->info("berhasil generate user..");
    }
}
