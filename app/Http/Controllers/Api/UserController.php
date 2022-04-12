<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Transformers\UserTransformer;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    /**
     * Update User
     * 
     * @param UserRequest $request
     * @param UserTransformer $userTransformer
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(
        UserRequest $request,
        UserTransformer $userTransformer,
        $id
    ) {
        $user = User::find($id);

        if ($request->has('upload_avatar')) {
        $avatarName = Storage::putFile('public/thumbnail', $request->avatar);

        $user->thumbnail = $avatarName;
        $user->save();
        }

        if ($request->has('remove_avatar')) {
            Storage::delete($user->thumbnail);
            $user->thumbnail = null;
            $user->save();
        }

        if ($request->has('old_password')) {
            $user->password = Hash::make($request->new_password);
            $user->save();
        }

        $user->fresh();

        return response()->json($userTransformer->transform($user));
    }
}
