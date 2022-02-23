<?php

namespace Database\Seeders;

use App\Models\Champion;
use Illuminate\Database\Seeder;


class ChampionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $text = file_get_contents('http://ddragon.leagueoflegends.com/cdn/12.2.1/data/es_ES/champion.json');
        $json = json_decode($text);

        foreach($json->data as $champion){
            Champion::create([
                'name' => $champion->name,
                'title' => $champion->title,
                'blurb' => $champion->blurb,
                'miniimage' => 'http://ddragon.leagueoflegends.com/cdn/12.2.1/img/champion/' .$champion->id.".png",
                'image' => 'http://ddragon.leagueoglegends.com/cdn/img/champion/loading/' .$champion->id. "_0.jpg", 
            ]);
        }
    }
}
