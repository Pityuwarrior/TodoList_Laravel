<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;
// A textbox tartalma itt kerül feldolgozásra
class TodoListController extends Controller
{
    public function index(){
        return view('welcome', ['listItems' => ListItem::all()]);
    }

    public function markComplete($id){
        $listItem = ListItem::find($id);
        $listItem->is_complete = 1;
        $listItem->save();

        return redirect('/');
    }

    public function delete($id){
        $listItem = ListItem::find($id);
        $listItem->delete();
        return redirect('/');
    }

    public function saveItem(Request $request)
    {
        //A textboxból kapott érték az adatbázisba helyezése. 
        $newListItem = new ListItem;
        $newListItem->name = $request->listItem;
        $newListItem->is_complete = 0;
        $newListItem->save();
        
        return redirect('/');
    }
}
