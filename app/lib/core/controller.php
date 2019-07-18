<?php
namespace Lib\Core;

/**
 *
 */
abstract class Controller
{
    public function __construct()
    {
        echo "was included";
    }

    public function index() {
        return [];
    }
}
