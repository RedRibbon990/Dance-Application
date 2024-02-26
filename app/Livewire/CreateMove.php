<?php

namespace App\Livewire;

use App\Models\Move;
use Livewire\Component;

class CreateMove extends Component
{
    public $title;
    public $body;
    public $difficulty;
    public $tags;

    protected $rules = [
        'title' => 'required|unique:moves|min:3',
        'body' => 'required|min:8',
        'difficulty' => 'required|numeric|max:3',
        'tags' => 'nullable',
    ];

    protected $messages = [
        'required' => 'Il campo :attribute è richiesto',
        'min' => 'Il campo :attribute è troppo corto',
        'numeric' => 'Il campo :attribute dev \'essere un numero',
        'max' => 'Il campo :attribute non può superare le centinaia',
    ];

    public function store()
    {
        $this->validate();

        Move::create([
            'title' => $this->title,
            'body' => $this->body,
            'difficulty' => $this->difficulty,
            'tags' => $this->tags,
        ]);

        session()->flash('message', 'Annuncio creato con successo!');

        $this->resetForm();
    }

    private function resetForm()
    {
        $this->title = '';
        $this->body = '';
        $this->difficulty = '';
        $this->tags = '';
    }

    public function render()
    {
        return view('livewire.create-move');
    }
}
