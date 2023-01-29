<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class WithdrawStatus extends Enum
{
    const Withdrawn = 0;
    const Pending = 1;
}
