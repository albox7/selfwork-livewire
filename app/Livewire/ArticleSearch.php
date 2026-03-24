<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;

class ArticleSearch extends Component
{
	
	public string $search = '';

	
	public function render() {

		$articles = Article::where('title', 'like', '%' . $this->search . '%')
					->orWhere('article', 'like', '%' . $this->search . '%')->get();

		return view('livewire.article-search', ['articles' => $articles]);
	}


    // public function render()
    // {
    //     return view('livewire.article-search');
    // }
}
