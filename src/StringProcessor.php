<?php

declare(strict_types=1);

namespace IgorKachko\OtusComposerPackage;

use Exception;

class StringProcessor
{
    public function getLength(string $s): int {
        return mb_strlen($s);
    }

    /**
     * @throws Exception
     */
    public function checkParenthesis(string $str): bool {
        $counter = 0;
        for ($i=0; $i < strlen($str); $i++) {
            $item = substr($str, $i, 1);
            if($item === "(")  {
                $counter++;
            } elseif($item === ")") {
                $counter--;
            }

            if($counter < 0) {
                throw new Exception("Ошибка в порядке закрытия скобок на символе " . $i+1);
            }
        }

        return true;
    }
}