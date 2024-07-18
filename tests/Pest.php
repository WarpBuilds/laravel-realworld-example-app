<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/*
|--------------------------------------------------------------------------
| Test Case
|--------------------------------------------------------------------------
|
| This is the base class that is used by all of your test cases. Here
| you can include global setup, teardown, or helpers that you need
| across multiple test files.
|
*/

uses(TestCase::class)->in('Feature', 'Unit');

/*
|--------------------------------------------------------------------------
| Expectations
|--------------------------------------------------------------------------
|
| When you're writing tests, you often need to add custom assertions
| to the test cases. Here you can define global expectations that
| you can use in your test files.
|
*/

expect()->extend('toBeOne', function () {
    return $this->toBe(1);
});

/*
|--------------------------------------------------------------------------
| Functions
|--------------------------------------------------------------------------
|
| Pest allows you to define global helper functions that you can use
| in your test files to keep your tests clean and consistent.
|
*/

function something()
{
    // ..
}