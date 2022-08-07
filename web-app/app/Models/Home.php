<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $guarded = ['id'];
    protected $with = ['Category','User'];

    public function scopeFilter ($query , array $filters)
    {
    $query->when($filters['search'] ?? false, function($query, $search) {
           return $query->where(function($query) use ($search) {
                $query->where('T_Home', 'like', '%' . $search . '%')
                             ->orWhere('J_Home', 'like', '%' . $search . '%')
                             ->orWhere('B_Home', 'like', '%' . $search . '%');
            });
        });

      $query->when($filters['Category'] ?? false, function($query, $Category) {
           return $query->wherehas('Category', function($query) use ($Category) {
                    $query->where('slug', $Category);

               });
        });

        $query->when($filters['User'] ?? false, function($query, $User) {
           return $query->wherehas('User', function($query) use ($User) {
                    $query->where('id', $User);

               });
        });

    }


    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

     public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'T_Home'
            ]
        ];
    }
}
