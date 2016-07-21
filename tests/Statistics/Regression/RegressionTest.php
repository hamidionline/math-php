<?php
namespace Math\Statistics\Regression;

class RegressionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider dataProviderForR
     */
    public function testCorrelationCoefficient(array $points, $r)
    {
        $this->assertEquals($r, Regression::correlationCoefficient($points), '', 0.001);
    }

    /**
     * @dataProvider dataProviderForR
     */
    public function testR(array $points, $r)
    {
        $this->assertEquals($r, Regression::r($points), '', 0.001);
    }

    public function dataProviderForR()
    {
        return [
            [
                [ [1,2], [2,3], [4,5], [5,7], [6,8] ],
                0.993
            ],
            [
                [ [4,390], [9,580], [10,650], [14,730], [4,410], [7,530], [12,600], [22,790], [1,350], [3,400], [8,590], [11,640], [5,450], [6,520], [10,690], [11,690], [16,770], [13,700], [13,730], [10,640] ],
                0.9336
            ],
        ];
    }

    /**
     * @dataProvider dataProviderForR2
     */
    public function testCoefficientOfDetermination(array $points, $r2)
    {
        $this->assertEquals($r2, Regression::coefficientOfDetermination($points), '', 0.001);
    }

  /**
   * @dataProvider dataProviderForR2
   */
    public function testR2(array $points, $r2)
    {
        $this->assertEquals($r2, Regression::r2($points), '', 0.001);
    }

    public function dataProviderForR2()
    {
        return [
            [
                [ [1,2], [2,3], [4,5], [5,7], [6,8] ],
                0.986049
            ],
            [
                [ [4,390], [9,580], [10,650], [14,730], [4,410], [7,530], [12,600], [22,790], [1,350], [3,400], [8,590], [11,640], [5,450], [6,520], [10,690], [11,690], [16,770], [13,700], [13,730], [10,640] ],
                0.87160896
            ],
        ];
    }
}