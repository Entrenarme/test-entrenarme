<?php

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $file_n = public_path('answers.csv');
        $file = fopen($file_n, "r");
        $all_data = array();
        while ( ($data = fgetcsv($file, 200, ",")) !== FALSE) {

            if(count($data) == 5):

                $_insert = array(
                    "id" => $data[0],
                    "question_id" => $data[1],
                    "text" => $data[2],
                    'count_validations' => rand (0, 20), 
                    "created_at" => ($data[3]) ?: null,
                    "updated_at" => ($data[4]) ?: null,
                );

           endif;

           try{
               \DB::table('answers')->insert($_insert);
           } catch (\Exception $e){
               var_dump($e);
           }

         }

         fclose($file);
    }
}
