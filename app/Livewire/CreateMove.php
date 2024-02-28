<?php

namespace App\Livewire;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateMove extends Component
{
    public $title;
    public $subtitle;
    public $body;
    public $difficulty;
    public $tags;
    public $category;

    protected $rules = [
        'title' => 'required|unique:moves|min:3',
        'subtitle' => 'required|min:3',
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
        'title.unique' => 'Il :attribute è già stata utilizzata.',
    ];

    public function store()
    {
        $this->validate();

        $category = Category::find($this->category);
        $moves = $category->moves()->create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
            'difficulty' => $this->difficulty,
            'tags' => $this->tags,
        ]);
        Auth::user()->moves()->save($moves);
        session()->flash('message', 'Annuncio creato con successo!');

        $this->resetForm();
    }

    private function resetForm()
    {
        $this->title = '';
        $this->subtitle = '';
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
