<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;
use App\Models\Post;
use App\Models\PostViewCount;

class PostView extends Component
{
    public $postSlug;
    public $viewsCount;

    public function mount($postSlug)
    {
        $this->postSlug = $postSlug;
     

        // Check if a record with the given post_slug exists
        $postViewCount = PostViewCount::where('post_slug', $this->postSlug)->first();

        if ($postViewCount) {
            // If the record exists, increment the 'views' field by 1
            $postViewCount->increment('views');
        } else {
            // If the record doesn't exist, create a new record with 'views' set to 1
            PostViewCount::create(['post_slug' => $this->postSlug, 'views' => 1]);
        }

        // Retrieve the updated count
        $this->viewsCount = PostViewCount::where('post_slug', $this->postSlug)->value('views');

    }
  

    public function render()
    {
        return view('livewire.post.post-view');
    }
}
