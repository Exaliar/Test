<?php

namespace FabrykaAbstrakcyjnaMenu;

interface iHTML{
    public function menu() : object;
    public function body() : object;
    public function footer() : object;
    public function render() : string;
}