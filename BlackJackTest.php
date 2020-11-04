<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/01/19
 * Time: 08:56
 */
namespace BlackJack;
use PHPUnit\Framework\TestCase;
/**
 * Class BlackJackTest
 * @package BlackJack
 */
class BlackJackTest extends TestCase
{
    public function testBlackjack()
    {
        $blackjack = new BlackJack();
        ////////////////////////////////////////////////pl/////bk////
        $this->assertEquals('player', $blackjack->play([5,9],[5,6]));
        $this->assertEquals('bank', $blackjack->play([5,9],[8,8])); 
        $this->assertEquals('player', $blackjack->play(['Q',9],[8,8]));
        $this->assertEquals('bank', $blackjack->play(['Q',9,5],[8,8,1]));  
        $this->assertEquals('player', $blackjack->play([9,5],[8,8,'K']));
        $this->assertEquals('bank', $blackjack->play([9,5],[8,'A']));
        $this->assertEquals('player', $blackjack->play(['A','A', 'A', 10],[8,2]));
    }
}