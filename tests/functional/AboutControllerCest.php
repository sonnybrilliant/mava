<?php


class AboutControllerCest
{
    public function _before(FunctionalTester $I)
    {
    }

    public function _after(FunctionalTester $I)
    {
    }

    // tests
    public function aboutActionTest(FunctionalTester $I)
    {
        $I->wantTo('Too see user profile');
        $I->amOnPage('/about/jack');
        $I->see('He is a cool guy too ');
    }
}
