<?php

/**
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * @see https://github.com/ecphp
 */

declare(strict_types=1);

namespace EcPhp\LaravelCas\Tests\Unit;

use EcPhp\LaravelCas\Tests\TestCase;

class LoginControllerTest extends TestCase
{
    private $uri = 'login';

    private $response;

    public function setUp(): void
    {
        parent::setUp();
        $this->response = $this->get($this->uri);
    }

    public function testIfRedirectUri()
    {
        $this->response->assertRedirect('https://webgate.ec.europa.eu/cas/login?service=https%3A%2F%2Fmy-app%2Fhomepage-login');
    }
}
