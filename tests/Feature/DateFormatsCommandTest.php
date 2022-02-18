<?php

test('date formats command', function () {
    $this->artisan('date-formats')
        //  ->expectsOutput('Simplicity is the ultimate sophistication.')
         ->assertExitCode(0);
});
