<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Message extends Model
{
    public function getAuthor() {
        return User::find($this->author_id)->username;
    }
}
