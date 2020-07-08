<?php

namespace App\Conversations;
use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;
use Illuminate\Support\Facades\DB;
use App\Conversations\anthordeeppocktOptionConversion;

class deeppocktOptionConversion extends Conversation
{
    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
            $arrsyps=[];
            $arrid=[];
       
        $spys= DB::table('treatments')->select("treatments.*")->where("SymId",3)->get();
         
       foreach($spys as $spy){
            array_push($arrsyps, $spy->Symptoms);
            array_push($arrid, $spy->id);
    
        }
       
        $question = Question::create("What do you feel  pain?")->fallback('Unable choose option')
        ->callbackId('ask option')
            ->addButtons([
                    Button::create($arrsyps[0])->value("1"),
                    Button::create($arrsyps[1])->value("2"),
                    Button::create($arrsyps[2])->value("3"),
                    Button::create("press to Next question")->value("next"),
                    
            ]);
               
            $this->bot->ask($question,function(Answer $answer){
                if ($answer->isInteractiveMessageReply()){

                    $val=$answer->getValue();
                    switch($val){
                        case '1': 
                            session()->put("d1", $val);
                            $this->bot->reply("You have added Diagnosis Selection Number ".$answer->getText());
                            $this->bot->startConversation(new deeppocktOptionConversion());
                        break;   
                        case '2': 
                            session()->put("d2", $val);
                            $this->bot->reply("You have added Diagnosis Selection Number ".$answer->getText());
                            $this->bot->startConversation(new deeppocktOptionConversion());
                        break; 
                        case '3': 
                            session()->put("d3", $val);
                            $this->bot->reply("You have added Diagnosis Selection Number ".$answer->getText());
                            $this->bot->startConversation(new deeppocktOptionConversion());
                        break; 
                        case 'next': 
                           
                            $this->bot->startConversation(new anthordeeppocktOptionConversion());
                        break; 

                    }
                }
                
            });
            

        }
}
