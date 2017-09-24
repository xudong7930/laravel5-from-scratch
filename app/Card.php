<?php

namespace App;

use App\Note;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = ['title'];

    public function notes()
    {
        return $this->hasMany(Note::class, 'card_id');
    }

    public function addNote(Note $note, $userId)
    {
        $note->user_id = $userId;
        return $this->notes()->save($note);
    }
}
