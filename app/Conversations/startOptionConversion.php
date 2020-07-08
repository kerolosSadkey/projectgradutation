<?php

namespace App\Conversations;
use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;
use App\Conversations\PulpitisOptionConversion;
use App\Conversations\periodontitisOptionConversion;
use App\Conversations\deeppocktOptionConversion;
use Illuminate\Support\Facades\DB;

class startOptionConversion extends Conversation
{
    /**
     * Start the conversation.
     *
     * @return mixed
     */
  
    public function run()
    {
       
        $question = Question::create("What do you feel  pain?")->fallback('Unable choose option')
        ->callbackId('ask option')
            ->addButtons([
                           
                                
                    Button::create("Do you have swelling with severe pain in your teeth?")->value("Pulpitis"),
                    Button::create("Do you have bleeding with severe pain with redness on your gums?")->value("periodontitis"),
                    Button::create("Do you have pain in your teeth with decay in one of them?")->value("deeppockt"),
                  
                    
            ]);
               
            $this->bot->ask($question,function(Answer $answer){
                if ($answer->isInteractiveMessageReply()){

                    $val=$answer->getValue();
                    switch($val){
                        case 'Pulpitis': 
                            $this->bot->startConversation(new PulpitisOptionConversion());
                        break;   
                        case 'periodontitis': 
                            $this->bot->startConversation(new periodontitisOptionConversion());
                        break; 
                        case 'deeppockt': 
                            $this->bot->startConversation(new deeppocktOptionConversion());
                        break; 

                    }
                }
               
            });
          
    }



    
}
