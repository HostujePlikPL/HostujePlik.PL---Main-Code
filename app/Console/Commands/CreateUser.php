<?php

namespace App\Console\Commands;

use App\Models\User;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fs:user:create {login?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new user with username and password';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $login = strtolower($this->argument('login'));

        login:
        // Jeśli login nie jest podany, zapytaj o niego
        if (empty($login)) {
            $login = strtolower($this->ask('Enter the user\'s login'));
        }

        if (!preg_match('~^[a-z0-9]{4,40}$~', $login)) {
            $this->error('Invalid login format. Must only contain letters and numbers, between 4 and 40 chars');
            unset($login);
            goto login;
        }

        $existing = User::where('username', $login)->first();
        if (!empty($existing)) {
            $this->error('User "' . $login . '" already exists');
            unset($login);
            goto login;
        }

        password:
        // Zapytaj o hasło użytkownika
        $password = $this->secret('Enter the user\'s password');

        if (!preg_match('~^[^\s]{5,100}$~', $password)) {
            $this->error('Invalid password format. Must be between 5 and 100 chars without spaces');
            unset($password);
            goto password;
        }

        try {
            User::create([
                'username' => $login,
                'password' => Hash::make($password),
            ]);

            $this->info('User has been created successfully!');
            $this->info('Username: ' . $login);
            $this->info('Password: ' . $password);  // <-- wyświetla hasło jawnie
        } catch (Exception $e) {
            $this->error('An error occurred, could not create user: ' . $e->getMessage());
        }
    }
}
