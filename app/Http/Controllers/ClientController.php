<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClientResource;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(Request $request)
    {
        $allClients = Client::with('contacts')->filterData($request->client, $request->contact)->orderBy('name')->paginate(7);
        $clients = ClientResource::collection($allClients);

        return view('all-clients.list', compact('clients'));
    }

    public function viewClientModal(Request $request)
    {
        $client = Client::with('contacts')->whereId($request->id)->first();
        return ClientResource::make($client);
    }
}
