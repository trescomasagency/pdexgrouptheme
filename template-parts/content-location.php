<?php

if(!is_user_logged_in() && str_contains($_SERVER["REQUEST_URI"], 'panel')) {
    header("Location: ". home_url());
    exit();
}