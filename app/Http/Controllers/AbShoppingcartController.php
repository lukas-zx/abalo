<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbShoppingcartController extends Controller
{
    function getItems_api() {

    }

    function addItem_api(Request $request) {
        $createdate = date('Y-m-d H:i:s');
        if(!DB::table('ab_shoppingcart_item')
            ->insert([
                'ab_shoppingcart_id' => 1,
                'ab_article_id' => $request['id'],
                'ab_createdate' => $createdate
            ])) return response()->json('Fehler beim eintragen');
        else return response()->json('Eintragen erfolgreich');
    }

    function deleteItem_api(Request $request, int $cartid, int $articleid) {

        if(!DB::table('ab_shoppingcart_item')
        ->where('ab_article_id', '=', $articleid)
        ->delete()) return response()->json('Fehler beim löschen');
        else return response()->json('Löschen erfolgreich');
    }
}
