<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreNote;
use App\Models\Message;

class MessageController extends Controller
{
    public function show()
    {
        return view('message.show');
    }

    public function addMessage(StoreNote $req)
    {
        $message = new Message();
        $message->author = $req->author;
        $message->text = $req->note;
        $message->save();
        return 1;
    }

    public function getPage(Request $req)
    {
        // $_GET['page'] = 2; //don't work - я хотел т.обр. указать какую страницу должен вернуть paginate()
        // т.обр. можно было бы реализовать запоминание последней запрошенной страницы
        // $req->page = 2; //тоже не работает (не удивительно - это же магическое свойство)
        return \json_encode(Message::orderBy('created_at', 'desc')->paginate(5));
    }
}
