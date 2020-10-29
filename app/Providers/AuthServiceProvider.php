<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Page;
use App\Models\Tag;
use App\Models\User;
use App\Policies\CategoryPolicy;
use App\Policies\PagePolicy;
use App\Policies\TagPolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        User::class     => UserPolicy::class,
        Tag::class      => TagPolicy::class,
        Page::class     => PagePolicy::class,
        Category::class => CategoryPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Passport::routes();
    }
}
