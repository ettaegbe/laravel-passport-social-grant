<?php

namespace Icemix\SocialGrant\Resolvers;

use Illuminate\Contracts\Auth\Authenticatable;

interface SocialUserResolverInterface
{
    /**
     * Resolve user by provider credentials.
     *
     * @param string $provider
     * @param string $accessToken
     *
     * @return Authenticatable|null
     */
    public function resolveUserByProviderCredentials(string $provider, string $accessToken): ?Authenticatable;

    /**
     * Resolve twitter user by provider credentials.
     *
     * @param string $provider
     * @param string $accessToken
     * @param string $secret
     *
     * @return Authenticatable|null
     */
    public function resolveUserByProviderAccessTokenAndSecret(string $provider, string $accessToken, string $secret): ?Authenticatable;
}
