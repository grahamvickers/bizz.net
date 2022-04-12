<?php

namespace App\Transformers;

class UserTransformer extends Transformer 
{
    /**
     * transform an item 
     * 
     * @param $user 
     * @return mixed
     */
    public function transform($user)
    {
        return [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'has_avatar' => $user->hasAvatar,
            'avatar_uri' => $user->avatarUri
        ];
    }
}