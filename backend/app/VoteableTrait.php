<?php

namespace App;

use App\Models\User;

trait VoteableTrait
{
    public function votes()
    {
        return $this->morphToMany(User::class, 'voteables');
    }

    public function upVotes()
    {
        return $this->votes()->wherePivot('vote', 1);
    }

    public function downVotes()
    {
        return $this->votes()->wherePivot('vote', -1);
    }
}
