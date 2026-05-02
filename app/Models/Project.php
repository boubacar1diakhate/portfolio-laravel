<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'description', 'long_description',
        'image', 'screenshots', 'video_url', 'demo_url',
        'github_url', 'technologies', 'featured', 'status', 'order',
    ];

    protected $casts = [
        'technologies' => 'array',
        'screenshots'  => 'array',
        'featured'     => 'boolean',
    ];

    public function isEnCours(): bool
    {
        return $this->status === 'en_cours';
    }

    // Convertit le lien YouTube watch en lien embed
    public function getYoutubeEmbedUrl(): ?string
{
    if (!$this->video_url) return null;

    // Format youtu.be/XXXXXXXXXXX
    if (preg_match('/youtu\.be\/([a-zA-Z0-9_-]{11})/', $this->video_url, $matches)) {
        return 'https://www.youtube.com/embed/' . $matches[1] . '?rel=0&modestbranding=1';
    }

    // Format youtube.com/watch?v=XXXXXXXXXXX
    if (preg_match('/youtube\.com\/watch\?v=([a-zA-Z0-9_-]{11})/', $this->video_url, $matches)) {
        return 'https://www.youtube.com/embed/' . $matches[1] . '?rel=0&modestbranding=1';
    }

    return null;
}

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}