<?php


namespace App\Http\Controllers;


use App\Http\Requests\PostStartupRequest;
use App\Http\Resources\Startup\FounderStartupResource;
use App\Models\Role;
use App\Models\Startup;
use App\Models\StartupMember;
use Illuminate\Support\Facades\Auth;

class StartupController extends Controller
{
    /**
     * @param PostStartupRequest $request
     * @return FounderStartupResource
     */
    public function store(PostStartupRequest $request)
    {
        $startup = Startup::create($request->validated());
        $startup->locales()->sync($request->locales);
        $startup->industries()->sync($request->industries);
        $member = StartupMember::create([
            'startup_id' => $startup->id,
            'user_id' => Auth::id()
        ]);
        $member->roles()->attach(Role::getByKey(Role::FOUNDER)->id);

        return new FounderStartupResource($startup);
    }
}
