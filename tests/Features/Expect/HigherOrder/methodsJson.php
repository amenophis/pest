<?php

it('can use json in method high order expectation', function () {
    expect(new Response())
        ->getStatusCode()
            ->toBe(200)
        ->getContent()
            ->json()
                ->id->toBe(1)
                ->username->toBe('amenophis')
                ->email->toBe('amenophis@leherpeur.net')
    ;
});

class Response
{
    private $statusCode = 200;
    private $content = '{"id":1,"username":"amenophis","email":"amenophis@leherpeur.net"}';

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}
