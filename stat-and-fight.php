<?php


while ($me['pv'] == 0 && $ennemy ['pv'] == 0) {
    $me = [
        'pv' => 30,
        'defense' => 10,
        'spell' => [
            'fire-ball' => 10,
            'sword-dash' => 5,
            'regain' => 7,
        ]
    ];

    $ennemy = [
        'pv' => 30,
        'defense' => 5,
        'spell' => [
            'sword dash' => 5,
            'regain' => 7,
        ]
    ];

    $action = (int)readline('Choose a spell:(fire-ball, sword-dash,regain )');

}


function myStatAfterRound($attack, $myStat, $oppenants)
{


    if ($attack == $myStat ['spell']['fire-ball']) {
        return $oppenants['pv'] -= ['spell']['fire-ball'];
    } elseif ($attack == $myStat ['spell']['sword-dash']) {
        return $oppenants['pv'] -= $myStat ['spell']['sword-dash'];
    } elseif ($attack == $myStat ['spell']['regain']) {
        return $myStat['pv'] += $myStat ['spell']['regain'];
    }
    return $myStat;
}

function ennemyStatAfterRound()
{

}