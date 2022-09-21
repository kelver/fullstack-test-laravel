<?php
namespace App\Repositories;

use App\Models\Messages;
use Illuminate\Http\Request;

class MessageRepository
{
    private Messages $model;

    public function __construct(Messages $message)
    {
        $this->model = $message;
    }

    public function index()
    {
        return $this->model->orderBy('id', 'desc')->paginate(12);
    }

    public function store(array $data)
    {
        return $this->model->create($data);
    }
}
