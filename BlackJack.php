<?php


namespace BlackJack;
class BlackJack 
{
    
    const HEADS = ['Q','K','J'];
    const AS = 'A';
   
    public function play(array $playerCards, array $bankCards): string
    {  
        $totalPlayer = $this->getSum($playerCards);
        $totalBank   = $this->getSum($bankCards);
        if ($totalPlayer > 21) {
            return 'bank';
        }
        if ($totalBank > 21) {
            return 'player';
        }
        $winner = 'bank';
        if ($totalPlayer > $totalBank) {
            $winner = 'player';
        }
        return $winner;
    }

    private function getSum($cards)
    {
        $total = 0;
        $nbAs = 0;
        foreach ($cards as $card) {
            if (in_array($card, self::HEADS)){
                $card = 10;
            }
            if ($card === self::AS){
                $card = 11;
                $nbAs++;
            }
            $total += $card;
        }
        if ($total > 21 && in_array(self::AS, $cards)){
            $total -= ($nbAs * 10);
        }
        return $total;
    }

}
