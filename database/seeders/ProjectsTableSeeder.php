<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Project;
use App\Skill;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::query()
            ->create([
                'title' => 'StemApp',
                'description' => '<p>
    For school I worked together with four other students to create an application that\'s supposed
    to be used in classrooms to help the political involvement of students .
</p>
<p> It\'s written using Laravel and React and using a PostgresQL database</p>',
                'url' => 'https://github.com/WesleyKlop/ipsen5',
            ])
            ->skills()
            ->attach(Skill::query()->whereIn('name', ['React', 'Laravel', 'PostgresQL', 'Git', 'Continuous Integration'])->get());
        Project::query()
            ->create([
                'title' => 'wesley.io',
                'description' => 'The site you\'re looking at right now! Designed and made by myself using Laravel. It really helped me better my design skills and I think it looks great!',
                'url' => 'https://github.com/WesleyKlop/wesley.io',
            ])
            ->skills()
            ->attach(Skill::query()->whereIn('name', ['Laravel', 'SCSS', '(Modern) JavaScript', 'Git'])->get());
    }
}
