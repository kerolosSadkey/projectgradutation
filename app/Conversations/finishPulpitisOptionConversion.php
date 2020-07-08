<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\This;

class finishPulpitisOptionConversion extends Conversation
{
    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
           $s="";
        for($i=1;$i<8;$i++){
            if(session()->has("p".$i)){
             $r= DB::table('treatments')->select("treatments.*")->where("id",session()->get("p".$i))->get();
           
             if($r[0]->analgesics != "null")
                $s  .= $r[0]->analgesics. " and ";
            
            if($r[0]->antibiotics != "null")
                $s  .= $r[0]->analgesics. " and ";
            }
            
         }
            
             $this->bot->reply("you have Pulpitis in your teeth and we help for some drug as  ". $s);
             session()->flush();
    }
}
