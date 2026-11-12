<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    private const USERS = [
        [
            'name' => 'Administrator',
            'email' => 'admin@example.test',
            'role' => 'admin',
        ],
        [
            'name' => 'Regular User',
            'email' => 'user@example.test',
            'role' => 'user',
        ],
    ];

    public function run(): void
    {
        $password = Str::password(24);
        $newAccounts = [];

        foreach (self::USERS as $account) {
            $user = User::firstOrNew(['email' => $account['email']]);
            $isNew = ! $user->exists;
            $user->name = $account['name'];
            $user->role = $account['role'];
            $user->is_active = true;

            if ($isNew) {
                $user->password = $password;
                $user->email_verified_at = now();
                $newAccounts[] = [$account['role'], $account['email'], $password];
            }

            $user->save();
        }

        if ($newAccounts === []) {
            $this->command->info('Seed accounts already exist; their passwords were not changed.');

            return;
        }

        $this->command->table(['Role', 'Email', 'Shared password'], $newAccounts);
        $this->command->warn('Use this generated shared password only for local development.');
    }
}
