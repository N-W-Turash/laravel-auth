<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class MailController extends Controller
{
    public function send(){

        Mail::send(['text'=>'mail'], ['name', 'Turash'], function($message){

            $message->to('lightofhell666@gmail.com', 'to turash')->subject('test email');
            $message->from('lightofhell666@gmail.com', 'turash');
        });
    }
}
