<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ClientUploadTest extends TestCase
{

    /**
     * My test implementation
     */
    public function testClientUpload()
    {
      $this->visit('/Data-History/create');
      $this->type('This is a name for data', 'name');
      $this->select('trade_data', 'type');
      $this->attach('absolutePathToFile', 'file');
      $this->type('Samplee description', 'description');
      $this->press('button');
      $this->seePageIs('/Data-Pending');
    }
}
