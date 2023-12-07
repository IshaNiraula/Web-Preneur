<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;
use App\Models\Post;
use App\Models\PostViewCount;
class PopularPost extends Component
{
    public $posts;
    public function mount()
    {
        $this->posts = Post::join('post_view_counts', 'posts.slug', '=', 'post_view_counts.post_slug')
        ->orderByDesc('post_view_counts.views')
        ->take(3)
        ->get();
        
    }
    public function render()
    {
        return view('livewire.post.popular-post');
    }
}
