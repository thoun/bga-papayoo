<?php
/**
 *------
 * BGA framework: © Gregory Isabelli <gisabelli@boardgamearena.com> & Emmanuel Colin <ecolin@boardgamearena.com>
 * papayoo implementation : © Guillaume NAVEL <guillaume.navel@gmail.com>
 *
 * This code has been produced on the BGA studio platform for use on http://boardgamearena.com.
 * See http://en.boardgamearena.com/#!doc/Studio for more information.
 * -----
 *
 * gameoptions.inc.php
 *
 * papayoo game options description
 */
require_once("modules/constants.inc.php");

$game_options = [
  OPTIONS_NBR_HANDS => [
    'name' => totranslate('Number of hands to play'),
    'values' => [
      JUST_ONE => ['name' => totranslate( 'Just one hand' )],
      ONE_PER_PLAYER => ['name' => totranslate( 'One time the number of player' ) ],
      TWO_PER_PLAYER => ['name' => totranslate( 'Two time the number of player' ) ],
      THREE_PER_PLAYER => ['name' => totranslate( 'Three time the number of player' )],
    ],
    'default' => ONE_PER_PLAYER
  ]
];
