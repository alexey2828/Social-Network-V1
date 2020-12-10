<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostController extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
 //  public function testExample()
 //  {
 //      //'127.0.0.1:8000/main';
 //      //'127.0.0.1:8000/user';

 //  	$response = $this->get('/main', 'posts');
 //  	$response->assertStatus();
 //    
 //      //$this->assertTrue(true);
 //  }

    public function PostControllerTest()
    {
        //'127.0.0.1:8000/main';
        //'127.0.0.1:8000/user';

    	$response = $this->get('/main');
    	$response->assertSee('<div id="SideMenuComponent"><side-menu-component></side-menu-component></div>');
      
        //$this->assertTrue(true);
    }
}
