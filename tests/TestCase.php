<?php

namespace Tests;

use Illuminate\Foundation\Testing\{LazilyRefreshDatabase, TestCase as BaseTestCase};

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    use LazilyRefreshDatabase;
}
