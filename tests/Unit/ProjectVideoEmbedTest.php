<?php

namespace Tests\Unit;

use App\Models\Project;
use Illuminate\Foundation\Testing\Concerns\InteractsWithExceptionHandling;
use Tests\TestCase;

class ProjectVideoEmbedTest extends TestCase
{
    public function test_it_builds_a_youtube_embed_url_from_a_watch_url(): void
    {
        $project = new Project();
        $project->video_url = 'https://www.youtube.com/watch?v=JMvWEU741vs';

        $this->assertSame(
            'https://www.youtube.com/embed/JMvWEU741vs?rel=0&modestbranding=1&autoplay=1&mute=1',
            $project->getVideoEmbedUrl()
        );
    }

    public function test_it_builds_a_vimeo_embed_url_from_a_vimeo_url(): void
    {
        $project = new Project();
        $project->video_url = 'https://vimeo.com/1189491788';

        $this->assertSame(
            'https://player.vimeo.com/video/1189491788?autoplay=1&muted=1',
            $project->getVideoEmbedUrl()
        );
    }
}
