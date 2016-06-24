<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientUpload extends Model
{
    /**
     * Get the user that created the task.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
