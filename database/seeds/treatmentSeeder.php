<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class treatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('treatments')->insert([
              "Symptoms"=>'Severe pain',
              "analgesics"=> 'catayad 50g',
              "antibiotics"=>'null',
              "SymId"=>1
            ]);

            DB::table('treatments')->insert([
                "Symptoms"=>'migraine pain and Throbbing pain Necrosis',
                "analgesics"=> 'catayad 50g',
                "antibiotics"=>'null',
                "SymId"=>1
              ]);
              DB::table('treatments')->insert([
                "Symptoms"=>'Pain during eating',
                "analgesics"=> 'EPTOL 200 MG',
                "antibiotics"=>'null',
                "SymId"=>1
              ]);
              DB::table('treatments')->insert([
                "Symptoms"=>'Evoke pain simultaneously',
                "analgesics"=> 'paracetamol',
                "antibiotics"=>'null',
                "SymId"=>1
              ]);
              DB::table('treatments')->insert([
                "Symptoms"=>'Pain and sensitivity in the jaw around the tooth',
                "analgesics"=> 'Ibuprofen 600g',
                "antibiotics"=>'null',
                "SymId"=>1
              ]);
              DB::table('treatments')->insert([
                "Symptoms"=>'Swelling of the jaw or face' ,
                "analgesics"=>'AVENTYL 25mg',
                "antibiotics"=>'null',
                "SymId"=>1
              ]);
              DB::table('treatments')->insert([
                "Symptoms"=>'Prolonged pain or sensitivity after exposure to heat' ,
                "analgesics"=>'NORTRILEN 25mg',
                "antibiotics"=>'null',
                "SymId"=>1
              ]);
              DB::table('treatments')->insert([
                "Symptoms"=>'sensitivity to hot,cold food and sweet food' ,
                "analgesics"=>'Pamelor',
                "antibiotics"=>'null',
                "SymId"=>1
              ]);

              DB::table('treatments')->insert([
                "Symptoms"=>'Gum swelling and the gums may increase from slight redness to severe pain' ,
                "analgesics"=>'Pamelor',
                "antibiotics"=>'amrizole 500g',
                "SymId"=>2
              ]);
              DB::table('treatments')->insert([
                "Symptoms"=>'Mouthful smell' ,
                "analgesics"=>'null',
                "antibiotics"=>'flaqyle 500g(an adobe)',
                "SymId"=>2
              ]);
              DB::table('treatments')->insert([
                "Symptoms"=>'Pain when chewing food' ,
                "analgesics"=>'null',
                "antibiotics"=>'flaqyle 500g(an adobe)',
                "SymId"=>2
              ]);
              DB::table('treatments')->insert([
                "Symptoms"=>'lancinating pain and severe calculus' ,
                "analgesics"=>'paracetamol',
                "antibiotics"=>'Tetracycline',
                "SymId"=>2
              ]);
              DB::table('treatments')->insert([
                "Symptoms"=>'spontaneous bleeding' ,
                "analgesics"=>'null',
                "antibiotics"=>'Metronidazole',
                "SymId"=>2
              ]);
              DB::table('treatments')->insert([
                "Symptoms"=>'pain when the gums are touched' ,
                "analgesics"=>'null',
                "antibiotics"=>'FORTEPEN 0.4GM',
                "SymId"=>2
              ]);
              DB::table('treatments')->insert([
                "Symptoms"=>'pus between the teeth and gum' ,
                "analgesics"=>'null',
                "antibiotics"=>'Clindamycin 300 g side effect diarrhea',
                "SymId"=>2
              ]);
              DB::table('treatments')->insert([
                "Symptoms"=>'Redness and bleeding from brush use' ,
                "analgesics"=>'null',
                "antibiotics"=>'Oral rinse with antibiotics containing chlorhexidine for oral cleansing',
                "SymId"=>2
              ]);
              DB::table('treatments')->insert([
                "Symptoms"=>'Migraine' ,
                "analgesics"=>'paracetamol',
                "antibiotics"=>'null',
                "SymId"=>3
              ]);
              DB::table('treatments')->insert([
                "Symptoms"=>'Etching sensation' ,
                "analgesics"=>'null',
                "antibiotics"=>'Clindamycin 300 g side effect diarrhea',
                "SymId"=>3
              ]);
              DB::table('treatments')->insert([
                "Symptoms"=>'brown or black spots appearing on your teeth' ,
                "analgesics"=>'NORTRILEN 25mg',
                "antibiotics"=>'Oral rinse with antibiotics containing chlorhexidine for oral cleansing',
                "SymId"=>3
              ]);
              DB::table('treatments')->insert([
                "Symptoms"=>'pain with cold water or eating' ,
                "analgesics"=>'catayad 500g',
                "antibiotics"=>'null',
                "SymId"=>3
              ]);
              DB::table('treatments')->insert([
                "Symptoms"=>'pain with cold water or eating' ,
                "analgesics"=>'null',
                "antibiotics"=>'Tetracycline',
                "SymId"=>3
              ]);
              DB::table('treatments')->insert([
                "Symptoms"=>'either continuous pain keeping you awake' ,
                "analgesics"=>'null',
                "antibiotics"=>'FORTEPEN 0.4GM',
                "SymId"=>3
              ]);
    }


//INSERT INTO treatments (TmId, SymId,Symptoms, analgesics,antibiotics) VALUES
//(1, 1,'Severe pain', 'catayad 50g', 'null'),
//(2, 1,'migraine pain and Throbbing pain Necrosis', 'catayad 500g', 'null'),
//(3, 1,'Pain during eating' ,'EPTOL 200 MG', 'null'),
//(4, 1,'Evoke pain simultaneously' ,'paracetamol', 'null'),
//(5, 1,'Pain and sensitivity in the jaw around the tooth' ,'Ibuprofen 600g', 'null'),
//(6, 1,'Swelling of the jaw or face' ,'AVENTYL 25mg', 'null'),
//(7, 1,'Prolonged pain or sensitivity after exposure to heat' ,'NORTRILEN 25mg', 'null'),
//(8, 1,'sensitivity to hot,cold food and sweet food' ,'Pamelor', 'null'),
//(9,  2,'Gum swelling and the gums may increase from slight redness to severe pain', 'Pamelor', 'amrizole 500g'),
//(10, 2,'Mouthful smell', 'null', 'flaqyle 500g(an adobe)'),
//(11, 2,'Pain when chewing food','null', 'fluox 500g(aerobe)'),
//(12, 2,'lancinating pain and severe calculus' ,'paracetamol', 'Tetracycline'),
//(13, 2,'spontaneous bleeding' ,'null', 'Metronidazole'),
//(14, 2,'pain when the gums are touched' ,'null', 'FORTEPEN 0.4GM'),
//(15, 2,'pus between the teeth and gum' ,'null', 'Clindamycin 300 g side effect diarrhea'),
//(16, 2,'Redness and bleeding from brush use', 'null', 'Oral rinse with antibiotics containing chlorhexidine for oral cleansing'),
//(17, 3,'Migraine', 'paracetamol', 'null'),
// (18, 3,'Etching sensation' ,'null', 'Clindamycin 300 g side effect diarrhea'),
//(19, 3,'brown or black spots appearing on your teeth' ,'NORTRILEN 25mg', 'Oral rinse with antibiotics containing chlorhexidine for oral cleansing'),
//(20, 3,'pain with cold water or eating' ,'catayad 500g', 'null'),
//(21, 3,'pulp exposure' ,'null', 'Tetracycline'),
//(22, 3,'either continuous pain keeping you awake','null', 'FORTEPEN 0.4GM');
}
