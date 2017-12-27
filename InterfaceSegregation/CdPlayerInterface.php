<?php

namespace Exercises\InterfaceSegregation;

interface StereoInterface
{
    public function open();

    public function eject();

    public function play();

    public function stop();
}