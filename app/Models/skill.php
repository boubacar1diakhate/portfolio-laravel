<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'level',
        'icon',
        'order',
    ];

    public function scopeByCategory($query, string $category)
    {
        return $query->where('category', $category)->orderBy('order');
    }

    public static function grouped(): array
    {
        return [
            'Frontend'  => self::byCategory('frontend')->get(),
            'Backend'   => self::byCategory('backend')->get(),
            'DevOps'    => self::byCategory('devops')->get(),
            'Outils'    => self::byCategory('tools')->get(),
        ];
    }
}