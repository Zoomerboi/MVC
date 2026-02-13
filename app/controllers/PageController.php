<?php
class PageController
{
    public function about()
    {
        $content = '../app/views/about.php';
        include '../app/views/layout.php';
    }
}