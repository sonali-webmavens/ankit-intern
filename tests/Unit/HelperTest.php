<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Helper\Helper;
class HelperTest extends TestCase
{

    public function test_it_return_correct_age(): void
    {
        $bod = "2000/01/22";
        $response = Helper::getAge($bod);
        // dd($response);

        $this->assertTrue($response == "24 year, 4 month, 22 day");
    }

    public function test_it_return_incorrect_age(): void
    {
        $bod = "2030/01/22";
        $response = Helper::getAge($bod);
        // dd($response);
        $this->assertTrue($response == "5 year, 7 month, 8 day");
    }
}
