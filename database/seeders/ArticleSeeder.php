<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use Faker\Generator;
use Illuminate\Container\Container;


class ArticleSeeder extends Seeder
{
    public function __construct()
    {
        $this->faker = $this->withFaker();
    }

    protected function withFaker()
    {
        return Container::getInstance()->make(Generator::class);
    }

    public function run(): void
    {
        $article = new Article;
        $article->title = 'Concours';
        $article->content = 'Bienvenue au concours annuel de pétanque organisé par l\'association les pétanqueurs';
        $article->image = '';
        $article->date = '22-08-24';
        $article->location = 'Champlive';

        $article->save();


        for ($i = 1; $i <= 20; $i++) { /**Fait parti de la fonction $faker, et dit que l'on ajoute 20 données aléatoires */
            $article = new Article;
            $article->title = $this->faker->word();
            $article->content = $this->faker->paragraph();
            $article->image = '';
            $article->date = $this->faker->date();
            $article->location = $this->faker->word();

            $article->save();
        }

    }
}
