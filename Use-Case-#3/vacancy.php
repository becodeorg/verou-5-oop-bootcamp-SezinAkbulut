<?php

require_once 'content.php';

class Vacancy extends Content
{
    public function display(): string
    {
        // Override display method to append " - apply now!" to vacancies
        //return $this->title . ': ' . $this->text . ' - apply now!';
        return "<h2>{$this->getTitle()}</h2><p>{$this->getText()} - Apply Now!</p>";
    }
}
