<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once 'Greeter.php';

final class GreeterTest extends TestCase
{
    public function testGreetsWithName(): void
    {
        $greeter = new Greeter;

        $greeting = $greeter->greet('Alice');

        $this->assertSame('Hello, Alice!', $greeting);
    }

    public function testGreetsWithNameFailing(): void
    {
        $greeter = new Greeter;

        $greeting = $greeter->greet('Alice');

        $this->assertSame('Hello, Bruno!', $greeting);
    }

    public function testGreeterHtmlUrl(): void
    {
        $content = file_get_contents('http://localhost/php/Greeter.html');
        $expected = ['hello' => 'world'];

        $this->assertJson($content);
        $this->assertEquals($expected, json_decode($content, true));
    }
}
