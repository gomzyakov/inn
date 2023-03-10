<?php

declare(strict_types = 1);

namespace Gomzyakov\Validator;

class INN
{
    /**
     * @param string $inn_number
     */
    public function __construct(
        readonly string $inn_number
    ) {
    }

    /**
     * @param string $inn_number
     *
     * @return self
     */
    public static function create(string $inn_number): self
    {
        return new self($inn_number);
    }

    /**
     * @return bool
     */
    public function isValid(): bool
    {
        $inn = (string) $this->inn_number;

        if (preg_match('/\D/', $inn)) {
            return false;
        }

        $len = strlen($inn);

        if ($len === 10) {
            $num9 = (string) (((2 * (int) $inn[0] + 4 * (int) $inn[1] + 10 * (int) $inn[2] + 3 * (int) $inn[3] + 5 * (int) $inn[4] + 9 * (int) $inn[5] + 4 * (int) $inn[6] + 6 * (int) $inn[7] + 8 * (int) $inn[8]) % 11) % 10);

            return $inn[9] === $num9;
        } elseif ($len === 12) {
            $num10 = (string) (((7 * (int) $inn[0] + 2 * (int) $inn[1] + 4 * (int) $inn[2] + 10 * (int) $inn[3] + 3 * (int) $inn[4] + 5 * (int) $inn[5] + 9 * (int) $inn[6] + 4 * (int) $inn[7] + 6 * (int) $inn[8] + 8 * (int) $inn[9]) % 11) % 10);

            $num11 = (string) (((3 * (int) $inn[0] + 7 * (int) $inn[1] + 2 * (int) $inn[2] + 4 * (int) $inn[3] + 10 * (int) $inn[4] + 3 * (int) $inn[5] + 5 * (int) $inn[6] + 9 * (int) $inn[7] + 4 * (int) $inn[8] + 6 * (int) $inn[9] + 8 * (int) $inn[10]) % 11) % 10);

            return $inn[11] === $num11 && $inn[10] === $num10;
        }

        return false;
    }
}
