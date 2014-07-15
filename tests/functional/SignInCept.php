<?php 
$I = new FunctionalTester($scenario);
$I->am('a Larabook member');
$I->wantTo('Login to my Larabook account');

$I->signIn();

$I->seeInCurrentUrl( '/statuses' );
$I->see('Welcome back!');
$I->assertTrue(Auth::check());