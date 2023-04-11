<?php

namespace CorBosman\Passport\Tests\Claims;

use Laravel\Passport\Bridge\AccessToken;

class IntClaim
{
    public function handle(AccessToken $token, $next)
    {
        $token->addClaim('int-claim', 1);

        return $next($token);
    }
}
