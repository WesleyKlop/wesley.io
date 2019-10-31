<?php

use App\Skill;
use Illuminate\Database\Seeder;

class SkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $general = Skill::create(['name' => 'General']);
        $frontend = Skill::create(['name' => 'Frontend']);
        $backend = Skill::create(['name' => 'Backend']);
        $databases = Skill::create(['name' => 'Databases']);
        $systems = Skill::create(['name' => 'Systems']);

        $mapper = function (string $item) {
            return ['name' => $item];
        };

        $general
            ->children()
            ->createMany(collect([
                'SOLID',
                'Design Patterns',
                'UML',
                'Test Driver Development',
                'Continuous Integration',
                'Database theories',
                'Git',
            ])->map($mapper));

        $frontend
            ->children()
            ->createMany(collect([
                'HTML5',
                'CSS',
                '(Modern) JavaScript',
                'React',
                'Angular',
                'Redux',
                'Meteor',
                'Webpack',
            ])->map($mapper));

        $backend
            ->children()
            ->createMany(collect([
                'PHP',
                'Laravel',
                'Node.js',
            ])->map($mapper));

        $databases
            ->children()
            ->createMany(collect([
                'PostgresQL',
                'MySQL / MariaDB',
                'MongoDB',
            ])->map($mapper));

        $systems
            ->children()
            ->createMany(collect([
                'Debian-based systems',
                'Shell',
                'Apache2',
                'Nginx',
                'PHP-FPM',
                'Docker (and compose)',
            ])->map($mapper));

        Skill
            ::where('name', 'CSS')
            ->firstOrFail()
            ->children()
            ->createMany([
                ['name' => 'SCSS'],
                ['name' => 'PostCSS'],
            ]);

        Skill
            ::where('name', 'Node.js')
            ->firstOrFail()
            ->children()
            ->createMany([
                ['name' => 'Express'],
                ['name' => 'Meteor'],
            ]);
    }
}
