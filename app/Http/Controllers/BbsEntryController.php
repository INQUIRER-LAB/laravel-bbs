<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BbsEntry;
use Illuminate\Support\Facades\Validator;

class BbsEntryController extends Controller
{
    // 投稿一覧を表示
    function index()
    {
        $item_list = BbsEntry::orderBy("id", "desc")->paginate(10);
        return view("bbs_entry_list", [
            "item_list" => $item_list
        ]);
    }
    function create(Request $request)
    {
        // 投稿処理を行う
        $input = $request->only('author', 'title', 'body');

        $validator =  Validator::make($input, [
            'author' => 'required|string|max:30',
            'title' => 'required|string|max:30',
            'body' => 'required|string|max:100'
        ]);
        
        if($validator->fails()){
            return redirect('/home')->withErrors($validator);
        }

        $entry = new BbsEntry();
        $entry->author = $input["author"];
        $entry->title = $input["title"];
        $entry->body = $input["body"];
        $entry->save();

        return redirect('/');
    }
}
