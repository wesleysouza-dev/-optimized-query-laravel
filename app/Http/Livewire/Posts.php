<?php

namespace App\Http\Livewire;

use console;
use App\Models\Post;
use Livewire\Component;
use App\Traits\DateFormatter;
use Illuminate\Support\Facades\Cache;

class Posts extends Component
{
    public $posts;
    public $totalPosts = 0;
    public $searchTerm = '';
    public $allowFilter = false;

    use DateFormatter;

    public function updatedSearchTerm($term)
    {
        if ($this->searchTerm !== '') {
            $this->filter($this->searchTerm);
        } else {
            $this->loadPosts();
        }
    }

    public function loadPosts()
    {
        $this->allowFilter = true;
        $posts = Cache::remember('posts.all', now()->addMinutes(10), function () {
            return Post::with('user')->get();
        });
        $this->posts = $this->formatCreatedAt($posts);
        $this->totalPosts = $this->posts->count();
    }
    
    public function loadPostsBad()
    {
        $this->allowFilter = true;
        $posts = Post::all();
        $this->posts = $this->formatCreatedAt($posts);
        $this->totalPosts = Post::count();
    }

    public function filter($searchTerm)
    {
        $posts = Post::join('users', 'posts.user_id', '=', 'users.id')
        ->where(function ($query) use ($searchTerm) {
            $query->where('title', 'like', '%'.$searchTerm.'%')
                ->orWhere('description', 'like', '%'.$searchTerm.'%')
                ->orWhere('users.name', 'like', '%'.$searchTerm.'%')
                ->distinct('posts.id');
        })
        ->with('user')
        ->get();
        $this->posts = $this->formatCreatedAt($posts);
        $this->totalPosts = $this->posts->count();
    }

    public function render()
    {
        return view('livewire.posts');
    }
}
