<?php

declare(strict_types = 1);

namespace Tests\unit;
use SocialPost\Dto\SocialPostTo;
use PHPUnit\Framework\TestCase;
use Statistics\Dto\StatisticsTo;

/**
 * Class ATestTest
 *
 * @package Tests\unit
 */
class TestTest extends TestCase
{
    /**
     * @test
     */
    public function if_stats_exists(): void
    {
        $statisticsTo = new StatisticsTo;
        $stats =empty($statisticsTo->getChildren());
        $this->assertTrue($stats);
    }


}
