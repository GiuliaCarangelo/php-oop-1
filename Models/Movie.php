<?php

class Movie{
    protected $title;
    protected $authors;
    public $description;
    public $imageUrl;

    public function __construct(string $_title, Array $_authors, string $_description, string $_imageUrl){
        $this->title = ucfirst(strtolower($_title));
        $this->authors = $_authors;
        $this->description = $_description;
        $this->imageUrl = $_imageUrl;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle(string $_title){
        $this->title = ucfirst(strtolower($_title));
    }

    public function getAuthors(){
        return $this->authors;
    }

    public function setAuthors(Array $_authors){
        $this->authors = $_authors;
    }
}