<?php

namespace App\Http\Controllers;

use App\Http\Resources\MessageResource;
use App\Services\MessageService;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    private MessageService $messageService;

    public function __construct(MessageService $messageService)
    {
        $this->messageService = $messageService;
    }

    public function index()
    {
        return MessageResource::collection($this->messageService->index());
    }

    public function store(Request $request)
    {
        $this->messageService->store($request->all());

        return response()->json(['data' => 'Mensagem inserida com sucesso.'], 201);
    }
}
