<?php

namespace Components;

class HeadComponent
{
    public static function render($pageTitle = 'SneakHub')
    {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
            <link rel="stylesheet" href="./assets/css/style.css" />
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        </head>
        <body>
        <?php
    }
}
