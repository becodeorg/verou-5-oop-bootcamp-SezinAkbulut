<?php

require_once 'content.php';
class Ads extends Content
{
    public function display(): string
    {
        // Override display method to show ads in all caps
        return strtoupper($this->getTitle()) . ': ' . $this->getText();
    }
}
