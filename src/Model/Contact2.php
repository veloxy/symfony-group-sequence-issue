<?php

namespace App\Model;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * @Assert\GroupSequence({"Contact2", "First", "Second"})
 */
class Contact2
{
    /**
     * @Assert\NotBlank(groups={"First"})
     */
    public $fieldOne;

    /**
     * @Assert\NotBlank(groups={"Second"})
     */
    public $fieldTwo;
}
