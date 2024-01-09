<?php


require_once 'content.php';

class Article extends Content
{
    private $isBreakingNews;

    public function __construct(string $title, string $text, bool $isBreakingNews = false)
    {
        parent::__construct($title, $text);
        $this->isBreakingNews = $isBreakingNews;
    }

    public function display(): string
    {
        $formattedTitle = $this->isBreakingNews ? "BREAKING: {$this->getTitle()}" : $this->getTitle();
        return "<h2>{$formattedTitle}</h2><p>{$this->getText()}</p>";
    }
}
