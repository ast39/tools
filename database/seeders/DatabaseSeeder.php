<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(WorkFlow::class);
        $this->call(ElectricSeed::class);
        $this->call(PlumberSeed::class);
        $this->call(HourMasterSeed::class);
        $this->call(TechnicSeed::class);
        $this->call(FurnitureSeed::class);
        $this->call(AppartmentSeed::class);
        $this->call(CarpenterSeed::class);
    }
}
