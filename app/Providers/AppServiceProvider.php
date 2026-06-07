<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        \Illuminate\Support\Facades\Auth::provider('array', function ($app, array $config) {
            return new class implements \Illuminate\Contracts\Auth\UserProvider {
                public function retrieveById($identifier) {
                    if ($identifier == 1) {
                        return new \Illuminate\Auth\GenericUser(['id' => 1, 'email' => 'kumawatrohit228@gmail.com', 'name' => 'Rohit Kumawat', 'remember_token' => '']);
                    }
                    return null;
                }
                public function retrieveByToken($identifier, $token) { return null; }
                public function updateRememberToken(\Illuminate\Contracts\Auth\Authenticatable $user, $token) {}
                public function retrieveByCredentials(array $credentials) {
                    if ($credentials['email'] == 'kumawatrohit228@gmail.com') {
                        return new \Illuminate\Auth\GenericUser(['id' => 1, 'email' => 'kumawatrohit228@gmail.com', 'name' => 'Rohit Kumawat', 'password' => 'Nestora@Rohit2026!', 'remember_token' => '']);
                    }
                    return null;
                }
                public function validateCredentials(\Illuminate\Contracts\Auth\Authenticatable $user, array $credentials) {
                    return $credentials['password'] === 'Nestora@Rohit2026!';
                }
                public function rehashPasswordIfRequired(\Illuminate\Contracts\Auth\Authenticatable $user, array $credentials, bool $force = false) {}
            };
        });
    }
}
