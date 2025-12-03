<?php
declare(strict_types=1);

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{
    private const MONTHS_FR = [
        'January' => 'Janvier',
        'February' => 'Février',
        'March' => 'Mars',
        'April' => 'Avril',
        'May' => 'Mai',
        'June' => 'Juin',
        'July' => 'Juillet',
        'August' => 'Août',
        'September' => 'Septembre',
        'October' => 'Octobre',
        'November' => 'Novembre',
        'December' => 'Décembre',
    ];

    private const DAYS_FR = [
        'Mon' => 'lun',
        'Monday' => 'lundi',
        'Tue' => 'mar',
        'Tuesday' => 'mardi',
        'Wed' => 'mer',
        'Wednesday' => 'mercredi',
        'Thu' => 'jeu',
        'Thursday' => 'jeudi',
        'Fri' => 'ven',
        'Friday' => 'vendredi',
        'Sat' => 'sam',
        'Saturday' => 'samedi',
        'Sun' => 'dim',
        'Sunday' => 'dimanche',
    ];

    public function getFilters(): array
    {
        return [
            new TwigFilter('month_fr', [$this, 'translateMonth']),
            new TwigFilter('day_fr', [$this, 'translateDay']),
            new TwigFilter('contains', [$this, 'contains']),
        ];
    }

    public function translateMonth(string $month): string
    {
        return self::MONTHS_FR[$month] ?? $month;
    }

    public function translateDay(string $day): string
    {
        return self::DAYS_FR[$day] ?? strtolower($day);
    }

    public function contains(string $haystack, string $needle): bool
    {
        return stripos($haystack, $needle) !== false;
    }
}

