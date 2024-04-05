<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

     protected $fillable = ['name','minides','tags','price','website','description','user_id'];

    public function scopeFilter($query, array $filters){

        if($filters['tag'] ?? false){
            $query->where('tags','like','%'.request('tag').'%');
        }

        if($filters['search'] ?? false){
            $query->where('name','like','%'.request('search').'%')

                ->orWhere('description','like','%' . request('search').'%')

                ->orWhere('tags','like','%' . request('search').'%');

        }
    }

    // Relationship to User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

}


