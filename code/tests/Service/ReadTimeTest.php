<?php

namespace App\Tests;

use App\Service\ReadTime;
use PHPUnit\Framework\TestCase;

class ReadTimeTest extends TestCase
{
    public function testGetReadTime(): void
    {
        $readTime = new ReadTime();
        $this->assertIsFloat($readTime->getReadTime('oooo aaaa'), 'Check if returned value is float type');
        $this->assertIsNotFloat($readTime->getReadTime(file_get_contents('../../documentation/assets/article.txt')), 'Check if returned value is float type with file read function');
    }
}
