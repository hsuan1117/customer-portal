<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Issue;

class IssueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Issue::factory()->count(30)->create();
    }
}
