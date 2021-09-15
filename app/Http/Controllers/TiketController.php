<?php

namespace App\Http\Controllers;


use App\Models\Tiket_model;
use Illuminate\Http\Request;
//uuid
use Illuminate\Support\Str;

class TiketController extends Controller
{
    public function index($limit)
    {
        $tiket = Tiket_model::take($limit)->get();
        return response()->json(array('success' => 200,'data' => $tiket, 'message' => 'Limit '.$limit.' Data' ), 200);
    }

    public function show($id)
    {
        $tiket = Tiket_model::where('ticket_id', $id)->get();        
        return response()->json(array('success' => 200,'data' => $tiket, 'message' => 'Success get data' ), 200);
    }

    public function store(Request $request)
    {
        $uuid = Str::uuid()->toString();

        $tiket = new Tiket_model();
        $tiket->id = $uuid;
        $tiket->subject = $request->subject;
        $tiket->message = $request->message;
        $tiket->status = 'Open';
        $tiket->priority = $request->priority;
        $tiket->save();

        return response()->json(array('success' => 200, 'message' => 'data saved successfully' ), 201);
    }

    public function reply(Request $request)
    {
        $id = $request->ticket_id;
        $message = $request->message;
        Tiket_model::where('ticket_id', $id)->update(['status' => 'Answered','message' => $message ]);

        return response()->json(array('success' => 200, 'message' => 'data updated successfully' ), 201);
    }

    public function close(Request $request)
    {
        $id = $request->ticket_id;
        Tiket_model::where('ticket_id', $id)->update(['status' => 'Closed']);

        //return response()->json($upd, 200);
        return response()->json(array('success' => 200, 'message' => 'data closed successfully' ), 201);
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        Tiket_model::where('id', $id)->delete();

        //return response()->json($upd, 200);
        return response()->json(array('success' => 200, 'message' => 'data deleted successfully' ), 201);
    }
}
