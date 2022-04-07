<?php

// Create new Plates instance
$templates = new League\Plates\Engine('public');

// Render a template
echo $templates->render('home', ['name' => 'Dravide']);
