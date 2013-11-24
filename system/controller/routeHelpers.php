<?php
function redirect($location)
{
    header('location: ' . base_url($location));
    exit;
}