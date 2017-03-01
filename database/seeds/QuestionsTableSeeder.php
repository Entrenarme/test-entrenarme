<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         $file_n = public_path('questions.csv');
         $file = fopen($file_n, "r");
         $all_data = array();
         while ( ($data = fgetcsv($file, 200, ",")) !== FALSE) {

             if(count($data) == 5):

                 $_insert = array(
                     "id" => $data[0],
                     "title" => $data[1],
                     "created_at" => ($data[2]) ?: null,
                     "updated_at" => ($data[3]) ?: null,
                     "published_at" => ($data[4]) ?: null
                 );

            endif;

            try{
                \DB::table('questions')->insert($_insert);
            } catch (\Exception $e){
                var_dump($e->getMessage());
            }

          }

          fclose($file);
      }
}
