<?php

namespace App\Http\Controllers;

use App\Exports\ClientExport;
use App\Http\Resources\ClientResource;
use App\Mail\ClientEmail;
use App\Models\Client;
use App\Models\ClientContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

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

    public function exportClientData(Request $request)
    {
        return Excel::download(new ClientExport, 'clients'.date('Y-m-d-H-i-s').'.xlsx');
    }

    public function sendEmail(Request $request)
    {
        $mailContent = [
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium porro voluptas labore quod numquam veritatis blanditiis quo dicta facilis maxime quasi commodi, iste eum aut nobis fugit. Nisi, consectetur atque.'
        ];

        $emails = ClientContact::where('client_id', $request->id)->get();
        foreach ($emails as $email) {
            Mail::to($email->email)->send(new ClientEmail($mailContent));
        }
        return response()->json([
            'message' => 'Mail OK',
        ]);
    }
}
