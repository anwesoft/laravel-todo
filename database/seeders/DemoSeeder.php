<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TaskItem;
use App\Models\User;
use Database\Factories\UserFactory;

class DemoSeeder extends Seeder
{
    public function run(): void
    {
        // Create one example user
        User::factory()->create(); // nimmt E-Mail und Passwort aus config/demo.php

        // Create 20 TaskItems (no user_id assumed)
        TaskItem::factory()->count(20)->create();
    }
}
