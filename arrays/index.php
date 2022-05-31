
<?php

class Post {

    public $title;
    public $published;

    public function __construct($title, $published) {
        $this->title = $title;
        $this->published = $published;
    }


}


$posts = [

    new Post('My first post.', true),
    new Post('My second post.', true),
    new Post('My third post.', true),
    new Post('My forth post.', false),
];


$unpublishedPost = array_filter($posts, function($post){
    return !$post->published;
});

$publishedPost = array_filter($posts, function($post){
    return $post->published;
});


$titles = array_map(function($post){
    return $post->title;
}, $posts);

$titles = array_column($posts, 'title');


var_dump($titles);