<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        // Announcement data — replace static array with Announcement::active()->get()
        // when the announcements DB table and model are ready.
        View::share('announcements', [
            [
                'id'           => 'etcon-2026',
                'type'         => 'event',
                'label'        => 'Announcement',
                'badge'        => 'Upcoming Event',
                'title'        => 'ETCON 2026 @ KLCC',
                'subtitle'     => 'Energy Transformation Conference 2026',
                'description'  => 'Integrax will participate in the Energy Transformation Conference 2026.',
                'full_content' => 'Integrax Berhad is proud to announce its participation in the Energy Transformation Conference (ETCON) 2026, held at the Kuala Lumpur Convention Centre (KLCC). ETCON is one of Southeast Asia\'s leading platforms for energy leaders, policymakers, and innovators shaping the future of sustainable energy. Our team will be present to engage with partners, investors, and stakeholders on our latest initiatives across marine, infrastructure, and energy solutions.',
                'date_display' => 'June 3-5, 2026',
                'location'     => 'Kuala Lumpur Convention Centre (KLCC), Malaysia',
                'cta_label'    => 'Learn More',
                'cta_url'      => '/announcements/etcon-2026',
                'auto_hide'    => 8,
                'delay'        => 3,
                'active'       => true,
            ],
        ]);
    }
}
