<?php
$I = new ApiGuy($scenario);
$I->wantTo('get Github repos info');
$I->sendGet('repos/tan-yuki/php-codeception-test');
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
$I->seeResponseContains('"url":"https://api.github.com/repos/tan-yuki/php-codeception-test"');
