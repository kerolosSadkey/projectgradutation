<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use Illuminate\Support\Facades\DB;

class finishdeeppocktOptionConversion extends Conversation
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
            if(session()->has("d".$i)){
             $r= DB::table('treatments')->select("treatments.*")->where("id",session()->get("d".$i))->get();
           
             $s  .= $r[0]->analgesics. " and ";
            }
         }
            
             $this->bot->reply("you have Deep pocket in your teeth and we help for some drug as  ". $s);

             session()->flush();
    }
}
