<?php

namespace Killsoft\CompetitionBundle\Randomizer;

/**
 * Class Result
 * @package Killsoft\CompetitionBundle\Randomizer
 */
class Result
{
    /**
     * @return string
     */
    public function create()
    {
        $number = rand(1, 100);

        if ($number < 20) {
            $result = "Sorry, very bad";
        } elseif ($number > 20 && $number < 40) {
            $result = "Bad result, but hope die in the end";
        } elseif ($number > 40 && $number < 60) {
            $result = "Not bad";
        } elseif ($number > 60 && $number < 80) {
            $result = "Good";
        } elseif ($number > 80 && $number < 100) {
            $result = "You're the best";
        }

        return $result;
    }
}
