<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guest\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        for ($i=0; $i < 30; $i++) {
            //! CREO UNA NUOVA ISTANZA DEL MODELLO TRAIN
            $newTrain = new Train();

            //! POPOLO IL MODELLO CON FAKER
            $newTrain->azienda = $faker->word;
            $newTrain->stazione_partenza = $faker->unique()->city();
            $newTrain->stazione_arrivo = $faker->unique()->city();
            $newTrain->orario_arrivo = $faker->time("H:i");
            $newTrain->orario_partenza = $faker->time("H:i");
            $newTrain->codice_treno = $faker->numberBetween(1, 30000);
            $newTrain->numero_carrozze = $faker->numberBetween(1, 5);
            $newTrain->in_orario = $faker->boolean(60);
            $newTrain->cancellato = $faker->boolean(60);

            //! SALVO IL MODELLO NEL DATABASE
            $newTrain-> save();
        }
    }
}
