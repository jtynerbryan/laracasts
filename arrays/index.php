<?php

class Post
{
    public $title;
    public $author;
    public $published;

    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }
}

$posts = [
  new Post('First Post', 'JTB', true),
  new Post('Second Post', 'JTB', true),
  new Post('Third Post', 'JTB', true),
  new Post('Fourth Post', 'JTB', false),
];

$unpublshedPosts = array_filter($posts, function ($post) {
    return ! $post->published;
});

$publishedPosts = array_filter($posts, function ($post) {
    return $post->published;
});

$modified = array_map(function ($post) {
    return ['title' => $post->title];
}, $posts);

$titles = array_column($posts, 'title');

$newPosts = array_map(function ($post) {
    return (array) $post;
}, $posts);

$authors = array_column($newPosts, 'author', 'title');

var_dump($authors);
