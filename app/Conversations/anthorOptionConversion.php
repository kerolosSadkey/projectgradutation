<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use Illuminate\Support\Facades\DB;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use App\Conversations\twoanthorConversation;
use App\Conversations\finishPulpitisOptionConversion;

class anthorOptionConversion extends Conversation
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
   
    $spys= DB::table('treatments')->select("treatments.*")->where("SymId",1)->get();
     
   foreach($spys as $spy){
        array_push($arrsyps, $spy->Symptoms);
        array_push($arrid, $spy->id);

    }
   
    $question = Question::create("What do you feel  pain?")->fallback('Unable choose option')
    ->callbackId('ask option')
        ->addButtons([
                Button::create($arrsyps[4])->value("4"),
                Button::create($arrsyps[5])->value("5"),
                Button::create($arrsyps[6])->value("6"),
                Button::create($arrsyps[7])->value("7"),
                Button::create("press to Next to go resluts")->value("next"),
                
        ]);
           
        $this->bot->ask($question,function(Answer $answer){
            if ($answer->isInteractiveMessageReply()){

                $val=$answer->getValue();
                switch($val){
                    case '4': 
                        session()->put("p4" ,$val);
                        $this->bot->reply("You have added Diagnosis Selection Number ".$answer->getText());
                        $this->bot->startConversation(new anthorOptionConversion());
                    break;   
                    case '5': 
                        session()->put("p5" ,$val);
                        $this->bot->reply("You have added Diagnosis Selection Number ".$answer->getText());
                        $this->bot->startConversation(new anthorOptionConversion());
                    break; 
                    case '6': 
                        session()->put("p6" ,$val);
                        $this->bot->reply("You have added Diagnosis Selection Number ".$answer->getText());
                        $this->bot->startConversation(new anthorOptionConversion());
                    break; 
                    case '7': 
                        session()->put("p7" ,$val);
                        $this->bot->reply("You have added Diagnosis Selection Number ".$answer->getText());
                        $this->bot->startConversation(new anthorOptionConversion());
                    break; 
                    case 'next': 
                        $this->bot->startConversation(new finishPulpitisOptionConversion());
                    break; 

                }
            }
            
        });
       
    }
}
