<?php

namespace App\Services;

use App\Repositories\MessageRepository;
use Illuminate\Http\Request;

class MessageService
{
    private MessageRepository $repository;

    public function __construct(MessageRepository $messageRepository)
    {
        $this->repository = $messageRepository;
    }

    public function index()
    {
        return $this->repository->index();
    }

    public function store(array $data)
    {
        return $this->repository->store($data);
    }
}
