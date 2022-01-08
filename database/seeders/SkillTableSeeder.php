<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Skill;
use Illuminate\Database\Seeder;

class SkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $general = Skill::create([
            'name' => 'General',
        ]);
        $frontend = Skill::create([
            'name' => 'Frontend',
        ]);
        $backend = Skill::create([
            'name' => 'Backend',
        ]);
        $databases = Skill::create([
            'name' => 'Databases',
        ]);
        $systems = Skill::create([
            'name' => 'Systems',
        ]);

        $mapper = fn (string $item) => [
            'name' => $item,
        ];

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

        Skill::query()
            ->where('name', 'CSS')
            ->firstOrFail()
            ->children()
            ->createMany([
                [
                    'name' => 'SCSS',
                ],
                [
                    'name' => 'PostCSS',
                ],
            ]);

        Skill::query()
            ->where('name', 'Node.js')
            ->firstOrFail()
            ->children()
            ->createMany([
                [
                    'name' => 'Express',
                ],
                [
                    'name' => 'Meteor',
                ],
            ]);
    }
}
