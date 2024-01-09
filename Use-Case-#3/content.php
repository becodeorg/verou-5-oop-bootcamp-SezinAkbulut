<?php


class Content
{
    protected $title;
    protected $text;

    public function __construct(string $title, string $text)
    {
        $this->title = $title;
        $this->text = $text;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function display(): string
    {
       // return $this->title . ': ' . $this->text;
        return "<h2>{$this->title}</h2><p>{$this->text}</p>";
    }
}

