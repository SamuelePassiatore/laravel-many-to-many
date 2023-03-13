<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            ['label' => 'HTML', 'color' => 'danger', 'icon' => 'https://imgs.search.brave.com/QTj864aK_RiCgNC4dN0gFvT9ZogbjvI4FHKfLWnNiKQ/rs:fit:1200:1200:1/g:ce/aHR0cHM6Ly9jbGlw/Z3JvdW5kLmNvbS9p/bWFnZXMvaHRtbDUt/bG9nby0yLnBuZw'],
            ['label' => 'CSS', 'color' => 'info', 'icon' => 'https://imgs.search.brave.com/D3XfeawZKsLT1j5dYDItPjVAQ5uErPTpXsCavUxvsnA/rs:fit:512:512:1/g:ce/aHR0cHM6Ly9jZG4u/aWNvbnNjb3V0LmNv/bS9pY29uL2ZyZWUv/cG5nLTUxMi9jc3Mt/MTE4LTU2OTQxMC5w/bmc'],
            ['label' => 'Javascript', 'color' => 'warning', 'icon' => 'https://imgs.search.brave.com/9_6xGq3kLL9srkG1nF9RgmiqWF9FCskoTMmPOuiXlZs/rs:fit:920:630:1/g:ce/aHR0cHM6Ly93d3cu/dHJhaW5pbmctZGV2/LmZyL0ltZy9DYXRl/Z29yeS9Kcy5wbmc'],
            ['label' => 'Bootstrap', 'color' => 'dark', 'icon' => 'https://imgs.search.brave.com/n4jPn8rDnxKfiryw8hd7oo_0AM5WkbotqjgucSa5BrY/rs:fit:400:330:1/g:ce/aHR0cHM6Ly9nZXRi/b290c3RyYXAuY29t/L2RvY3MvNS4yL2Fz/c2V0cy9icmFuZC9i/b290c3RyYXAtbG9n/by1zaGFkb3cucG5n'],
            ['label' => 'Vue JS', 'color' => 'success', 'icon' => 'https://imgs.search.brave.com/DLPT46fndqvFmUoqJx8Mis7AlMZZi0962V3iRHxgcG8/rs:fit:400:400:1/g:ce/aHR0cHM6Ly92dWVq/cy5vcmcvaW1hZ2Vz/L2xvZ28ucG5n'],
            ['label' => 'PHP', 'color' => 'primary', 'icon' => 'https://imgs.search.brave.com/ourBXH1q9AiLUwCaOhKZbX8gAnOhkaYvvvxmuZD2h_s/rs:fit:1200:1200:1/g:ce/aHR0cDovL2NsaXBh/cnQtbGlicmFyeS5j/b20vaW1hZ2VzX2sv/cGhwLWxvZ28tdHJh/bnNwYXJlbnQvcGhw/LWxvZ28tdHJhbnNw/YXJlbnQtNi5wbmc'],
            ['label' => 'MySQL', 'color' => 'secondary', 'icon' => 'https://imgs.search.brave.com/-bCADAsdu0IEvqiqIdC0Jj7GLd3Zu0L5cfs8yqagagY/rs:fit:1200:1200:1/g:ce/aHR0cDovL3BuZ2lt/Zy5jb20vdXBsb2Fk/cy9teXNxbC9teXNx/bF9QTkcyMi5wbmc'],
            ['label' => 'SASS', 'color' => 'secondary', 'icon' => 'https://imgs.search.brave.com/fKbOF5qEgbY1kekgTTVZYM6i-qyitYNJS71ZUU8gCF8/rs:fit:320:320:1/g:ce/aHR0cHM6Ly9zYXNz/LWxhbmcuY29tL2Fz/c2V0cy9pbWcvc3R5/bGVndWlkZS9zZWFs/LWNvbG9yLWFlZjAz/NTRjLnBuZw'],
            ['label' => 'Laravel', 'color' => 'danger', 'icon' => 'https://imgs.search.brave.com/0DwD95ocRzszNma4Mkt1KKv-8kvXnzWEcNNV11u_1MY/rs:fit:1024:1024:1/g:ce/aHR0cHM6Ly9sb2dv/c3BuZy5vcmcvZG93/bmxvYWQvbGFyYXZl/bC9sb2dvLWxhcmF2/ZWwtaWNvbi0xMDI0/LnBuZw'],
        ];

        foreach ($technologies as $technology) {
            $new_technology = new Technology();
            $new_technology->label = $technology['label'];
            $new_technology->color = $technology['color'];
            $new_technology->icon = $technology['icon'];
            $new_technology->save();
        }
    }
}
