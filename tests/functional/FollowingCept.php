<?php

$I = new FunctionalTester($scenario);
$I->am('a Larabook member');
$I->wantTo('follow other Larabook users');

// setup
$I->haveAnAccount(['username' => 'OtherUser']);
$I->signIn();

// action
$I->click('Browse Users');
$I->click('OtherUser');

$I->seeCurrentUrlEquals('/@OtherUser');
$I->click('Follow OtherUser');
$I->seeCurrentUrlEquals('/@OtherUser');

// expectations
$I->see('You are following OtherUser.');
$I->dontSee('Follow OtherUser');