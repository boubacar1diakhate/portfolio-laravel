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

    public function getVideoEmbedUrl(): ?string
    {
        if (!$this->video_url) {
            return null;
        }

        $url = trim($this->video_url);

        if (preg_match('/youtu\.be\/([a-zA-Z0-9_-]{11})/', $url, $matches)) {
            return 'https://www.youtube.com/embed/' . $matches[1] . '?rel=0&modestbranding=1&autoplay=1&mute=1';
        }

        if (preg_match('/youtube\.com\/watch\?v=([a-zA-Z0-9_-]{11})/', $url, $matches)) {
            return 'https://www.youtube.com/embed/' . $matches[1] . '?rel=0&modestbranding=1&autoplay=1&mute=1';
        }

        if (preg_match('/youtube\.com\/embed\/([a-zA-Z0-9_-]{11})/', $url, $matches)) {
            return 'https://www.youtube.com/embed/' . $matches[1] . '?rel=0&modestbranding=1&autoplay=1&mute=1';
        }

        if (preg_match('/vimeo\.com\/(\d+)/', $url, $matches)) {
            return 'https://player.vimeo.com/video/' . $matches[1] . '?autoplay=1&muted=1';
        }

        if (preg_match('/player\.vimeo\.com\/video\/(\d+)/', $url, $matches)) {
            return 'https://player.vimeo.com/video/' . $matches[1] . '?autoplay=1&muted=1';
        }

        if (str_contains($url, 'player.vimeo.com/video/') || str_contains($url, 'youtube.com/embed/')) {
            return $url;
        }

        return null;
    }

    public function getYoutubeEmbedUrl(): ?string
    {
        return $this->getVideoEmbedUrl();
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}