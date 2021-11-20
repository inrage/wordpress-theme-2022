<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use function Roots\asset;

abstract class AbstractBlock extends Block
{
    public function enqueue(): void
    {
        if (asset('styles/blocks/' . $this->slug . '.css')->exists()) {
            wp_enqueue_style('blocks/' . $this->slug . '.css', asset('styles/blocks/' . $this->slug . '.css')->uri(), false, null);
        }
    }

    protected function sampleImageSrc(string $imagePath): string
    {
        return '<img src="' . asset($imagePath)->uri() . '" />';
    }
}
