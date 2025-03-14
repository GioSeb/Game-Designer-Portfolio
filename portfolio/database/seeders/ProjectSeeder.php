<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'projectName' => 'portfolio/public/img/projects/project1/texts/title.png',
                'projectDescription' => 'portfolio/public/img/projects/project1/texts/description.png',
                'tool1' => 'portfolio/public/img/projects/project1/tools/c2.png',
                'tool2' => 'portfolio/public/img/projects/project1/tools/unity.png',
                'tool3' => null,
                'tool4' => null,
                'tool5' => null,
                'img1' => 'portfolio/public/img/projects/project1/imgs/img1.png',
                'img2' => 'portfolio/public/img/projects/project1/imgs/img2.png',
                'img3' => 'portfolio/public/img/projects/project1/imgs/img3.png',
                'video' => '',
            ],
            [
                'projectName' => 'portfolio/public/img/projects/project2/texts/title.png',
                'projectDescription' => 'portfolio/public/img/projects/project2/texts/description.png',
                'tool1' => 'portfolio/public/img/projects/project2/tools/c1.png',
                'tool2' => null,
                'tool3' => null,
                'tool4' => null,
                'tool5' => null,
                'img1' => 'portfolio/public/img/projects/project2/imgs/img1.png',
                'img2' => 'portfolio/public/img/projects/project2/imgs/img2.png',
                'img3' => 'portfolio/public/img/projects/project2/imgs/img3.png',
                'video' => '',
            ],
            [
                'projectName' => 'portfolio/public/img/projects/project3/texts/title.png',
                'projectDescription' => 'portfolio/public/img/projects/project3/texts/description.png',
                'tool1' => 'portfolio/public/img/projects/project3/tools/c1.png',
                'tool2' => null,
                'tool3' => null,
                'tool4' => null,
                'tool5' => null,
                'img1' => 'portfolio/public/img/projects/project3/imgs/img1.png',
                'img2' => 'portfolio/public/img/projects/project3/imgs/img2.png',
                'img3' => 'portfolio/public/img/projects/project3/imgs/img3.png',
                'video' => '',
            ],
            [
                'projectName' => 'portfolio/public/img/projects/project4/texts/title.png',
                'projectDescription' => 'portfolio/public/img/projects/project4/texts/description.png',
                'tool1' => 'portfolio/public/img/projects/project4/tools/c1.png',
                'tool2' => 'portfolio/public/img/projects/project4/tools/unreal.png',
                'tool3' => null,
                'tool4' => null,
                'tool5' => null,
                'img1' => 'portfolio/public/img/projects/project4/imgs/img1.png',
                'img2' => 'portfolio/public/img/projects/project4/imgs/img2.png',
                'img3' => 'portfolio/public/img/projects/project4/imgs/img3.png',
                'video' => '',
            ],
            [
                'projectName' => 'portfolio/public/img/projects/project5/texts/title.png',
                'projectDescription' => 'portfolio/public/img/projects/project5/texts/description.png',
                'tool1' => 'portfolio/public/img/projects/project5/tools/unreal.png',
                'tool2' => null,
                'tool3' => null,
                'tool4' => null,
                'tool5' => null,
                'img1' => 'portfolio/public/img/projects/project5/imgs/img1.png',
                'img2' => 'portfolio/public/img/projects/project5/imgs/img2.png',
                'img3' => 'portfolio/public/img/projects/project5/imgs/img3.png',
                'video' => '',
            ],
            [
                'projectName' => 'portfolio/public/img/projects/project6/texts/title.png',
                'projectDescription' => 'portfolio/public/img/projects/project6/texts/description.png',
                'tool1' => 'portfolio/public/img/projects/project5/tools/unreal.png',
                'tool2' => null,
                'tool3' => null,
                'tool4' => null,
                'tool5' => null,
                'img1' => 'portfolio/public/img/projects/project6/imgs/img1.png',
                'img2' => 'portfolio/public/img/projects/project6/imgs/img2.png',
                'img3' => 'portfolio/public/img/projects/project6/imgs/img3.png',
                'video' => '',
            ],
        ];

        foreach ($projects as $project) {
            DB::table('projects')->insert($project);
        }
    }
}
