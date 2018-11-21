<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class MailController extends Controller
{
    public function send(){


      Mail::raw('O arquivo CSV que você fez o upload já foi processado e os produtos nele presentes foram inseridos no banco de dados!', function($message){
            
            $message->to('kevinlevrone.r@gmail.com', 'Usuário')->subject('Arquivo(s) CSV processado(s)!');
            $message->from('kevinlevrone.r@gmail.com', 'Kevin');
        });
        
        return redirect('products');
      }
}
