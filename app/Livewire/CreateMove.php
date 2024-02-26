<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Move;
use Livewire\Component;

class CreateMove extends Component
{
    public $title;
    public $body;
    public $difficulty;
    public $tags;
    public $category;

    protected $rules = [
        'title' => 'required|unique:moves|min:3',
        'body' => 'required|min:8',
        'difficulty' => 'required|numeric',
        'tags' => 'nullable',
        'category' => 'required',
    ];

    protected $messages = [
        'required' => 'Il campo :attribute è richiesto',
        'min' => 'Il campo :attribute è troppo corto',
        'numeric' => 'Il campo :attribute dev \'essere un numero',
        'max' => 'Il campo :attribute non può superare le centinaia',
        'title.unique' => 'L \':attribute è già stata utilizzata.',
    ];

    public function store()
    {
        $this->validate();

        $category = Category::find($this->category);
        $category->move()->create([
            'title' => $this->title,
            'body' => $this->body,
            'difficulty' => $this->difficulty,
            'tags' => $this->tags,
        ]);

        session()->flash('message', 'Annuncio creato con successo!');

        $this->resetForm();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    private function resetForm()
    {
        $this->title = '';
        $this->body = '';
        $this->difficulty = '';
        $this->tags = '';
        $this->category = '';
    }

    public function render()
    {
        return view('livewire.create-move');
    }
}
