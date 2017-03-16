<?php
/**
 * Created by PhpStorm.
 * User: samkling
 * Date: 3/3/17
 * Time: 12:30 PM
 */

function presentHeader() {
    $html = <<<HTML
<header>
    <a href="http://cse.msu.edu/~klingsam">
        <p class="title">Sam Kling</p>
    </a>
    <nav>
        <a href="http://cse.msu.edu/~klingsam">Home</a>
        <a href="resume.php">Resume</a>
    </nav>
</header>
HTML;
    return $html;
}