<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeagueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("leagues")->insert([
            [
                'id' => 1,
                'name' => 'Alistar',
                'primary_role' => 'Tank',
                'secondary_role' => 'Support',
                'base_hp' => 575,
                'base_mana' => 250,
            ],
            [
                'id' => 2,
                'name' => 'Annie',
                'primary_role' => 'Mage',
                'secondary_role' => 'Burst',
                'base_hp' => 475,
                'base_mana' => 350,
            ],
            [
                'id' => 3,
                'name' => 'Ashe',
                'primary_role' => 'Marksman',
                'secondary_role' => 'Utility',
                'base_hp' => 500,
                'base_mana' => 280,
            ],
            [
                'id' => 4,
                'name' => 'Fiddlesticks',
                'primary_role' => 'Mage',
                'secondary_role' => 'Support',
                'base_hp' => 450,
                'base_mana' => 400,
            ],
            [
                'id' => 5,
                'name' => 'Jax',
                'primary_role' => 'Fighter',
                'secondary_role' => 'Assassin',
                'base_hp' => 560,
                'base_mana' => 300,
            ],
            [
                'id' => 6,
                'name' => 'Kayle',
                'primary_role' => 'Fighter',
                'secondary_role' => 'Support',
                'base_hp' => 510,
                'base_mana' => 340,
            ],
            [
                'id' => 7,
                'name' => 'Master Yi',
                'primary_role' => 'Assassin',
                'secondary_role' => 'Fighter',
                'base_hp' => 600,
                'base_mana' => 250,
            ],
            [
                'id' => 8,
                'name' => 'Morgana',
                'primary_role' => 'Mage',
                'secondary_role' => 'Support',
                'base_hp' => 490,
                'base_mana' => 340,
            ],
            [
                'id' => 9,
                'name' => 'Nunu',
                'primary_role' => 'Support',
                'secondary_role' => 'Tank',
                'base_hp' => 520,
                'base_mana' => 280,
            ],
            [
                'id' => 10,
                'name' => 'Ryze',
                'primary_role' => 'Mage',
                'secondary_role' => 'Burst',
                'base_hp' => 460,
                'base_mana' => 400,
            ],
            [
                'id' => 11,
                'name' => 'Sion',
                'primary_role' => 'Tank',
                'secondary_role' => 'Fighter',
                'base_hp' => 580,
                'base_mana' => 270,
            ],
            [
                'id' => 12,
                'name' => 'Sivir',
                'primary_role' => 'Marksman',
                'secondary_role' => 'Utility',
                'base_hp' => 500,
                'base_mana' => 300,
            ],
            [
                'id' => 13,
                'name' => 'Soraka',
                'primary_role' => 'Support',
                'secondary_role' => 'Healer',
                'base_hp' => 450,
                'base_mana' => 350,
            ],
            [
                'id' => 14,
                'name' => 'Teemo',
                'primary_role' => 'Marksman',
                'secondary_role' => 'Specialist',
                'base_hp' => 490,
                'base_mana' => 270,
            ],
            [
                'id' => 15,
                'name' => 'Tristana',
                'primary_role' => 'Marksman',
                'secondary_role' => 'Burst',
                'base_hp' => 500,
                'base_mana' => 250,
            ],
            [
                'id' => 16,
                'name' => 'Twisted Fate',
                'primary_role' => 'Mage',
                'secondary_role' => 'Marksman',
                'base_hp' => 475,
                'base_mana' => 300,
            ],
            [
                'id' => 17,
                'name' => 'Warwick',
                'primary_role' => 'Fighter',
                'secondary_role' => 'Tank',
                'base_hp' => 550,
                'base_mana' => 280,
            ],
            [
                'id' => 18,
                'name' => 'Zilean',
                'primary_role' => 'Support',
                'secondary_role' => 'Mage',
                'base_hp' => 460,
                'base_mana' => 350,
            ],
        ]);
    }
}
