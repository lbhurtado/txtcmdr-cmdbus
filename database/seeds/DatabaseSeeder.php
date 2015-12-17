<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call('UserTableSeeder');
        $this->call('IslandGroupsTableSeeder');
        $this->call('RegionsTableSeeder');
        $this->call('ProvincesTableSeeder');
        $this->call('TownsTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('SettingsTableSeeder');
        $this->call('ProjectsTableSeeder');
        $this->call('GroupsTableSeeder');
        $this->call('SubscriptionsTableSeeder');
        $this->call('ConferencesTableSeeder');
        $this->call('AddressesTableSeeder');
        $this->call('StatusesTableSeeder');
        $this->call('ObjectivesTableSeeder');
        $this->call('TranscriptsTableSeeder');
        $this->call('TasksTableSeeder');
        $this->call('AssignmentsTableSeeder');
        $this->call('ContributionsTableSeeder');

        Model::reguard();
    }
}

//composer dump-autoload
//php artisan migrate:refresh --seed