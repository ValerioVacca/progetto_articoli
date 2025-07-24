<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;

class ArticleCreateForm extends Component
{
        #[Validate('required|min:3|max:50')]
        public $title;
        #[Validate('required|min:5|max:100')]
        public $subtitle;
        #[Validate('required|min:10|max:1000')]
        public $body;

        // protected $rules =[
        //     'title' => 'required|min:3|max:50',
        //     'subtitle' => 'required|min:5|max:100',
        //     'body' => 'required|min:10|max:1000',
        // ];

    public function store(){
        $this->validate();

        Article::create([
            'title'=>$this->title,
            'subtitle'=>$this->subtitle,
            'body'=>$this->body
        ]);

        session()->flash('articleCreated', 'Articolo creato con successo');
        $this->reset();
    }
    public function render(){
        
        return view('livewire.article-create-form');
    }
}
