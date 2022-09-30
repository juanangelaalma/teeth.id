<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctor = Doctor::all()->first();
        for($i=0; $i < 10; $i++) {
            Article::create([
                'title' => 'Article ' . $i,
                'slug'  => Str::slug('Article ' . $i),
                'image' => "https://picsum.photos/id/$i/300/200",
                'body' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. In, minus quidem? Consequatur eaque asperiores quia, hic vel aliquid? Iste rerum iusto pariatur! Ad temporibus voluptas reiciendis cum, maxime quisquam iste, nesciunt non aperiam distinctio optio earum atque facere dolorum laudantium aut beatae, incidunt dolorem provident mollitia! Et voluptatibus dolore tempore modi eum labore delectus soluta ipsum, saepe sapiente sequi ab commodi praesentium quas deserunt corrupti omnis facilis cupiditate vero quisquam quae dolores. Modi provident tenetur reprehenderit ut doloremque, animi officiis eligendi aliquid nostrum beatae doloribus mollitia rerum ex dicta odit itaque nisi pariatur hic perferendis, quae, commodi qui ducimus harum.",
                'doctor_id' => $doctor->id
            ]);
        }
    }
}
