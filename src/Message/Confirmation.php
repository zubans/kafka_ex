<?php

namespace App\Message;


class Confirmation
{
    private string $order;

    public function __construct(string $order)
    {

        $this->order = $order;
    }

    /**
     * @return string
     */
    public function getOrder(): string
    {
        return $this->order;
    }


}
