<?php

namespace Components;

class NavComponent
{
    public static function render($navLinks = [])
    {
        ?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold d-flex align-items-center" href="#">
                    <img src="./assets/img/sneaker-logo.png" alt="SneakHub Logo" height="50" class="d-inline-block align-text-top" />
                    <span class="ms-3 fs-4">SneakHub</span>
                </a>

                <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">SneakHub</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <?php foreach ($navLinks as $link): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= $link['href'] ?>"><?= htmlspecialchars($link['label']) ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <?php
    }
}
