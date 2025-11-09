<?php

use App\Models\Category;
use App\Models\Contact;
use App\Models\HomePageSlide;
use App\Models\Publication;
use App\Models\Vacancy;
use Illuminate\Support\Collection;

if (! function_exists('slides')) {
    function slides(): Collection
    {
        if (cache('slides', null)) {
            return cache('slides');
        }

        $slides = HomePageSlide::query()
            ->where('enabled', 1)
            ->orderBy('position')
            ->get();

        cache(['slides' => $slides]);

        return $slides;
    }
}

if (! function_exists('publications')) {
    function publications(): Collection
    {
        if (cache('publications', null)) {
            return cache('publications');
        }

        $publications = Publication::query()
            ->orderBy('date', 'desc')
            ->get();

        cache(['publications' => $publications]);

        return $publications;
    }
}

if (! function_exists('vacancies')) {
    function vacancies(): Collection
    {
        if (cache('vacancies', null)) {
            return cache('vacancies');
        }

        $vacancies = Vacancy::query()
            ->where('enabled', 1)
            ->get();

        cache(['vacancies' => $vacancies]);

        return $vacancies;
    }
}

if (! function_exists('instruments')) {
    function instruments(): Collection
    {
        if (cache('instruments', null)) {
            return cache('instruments');
        }

        $instruments = Category::query()
            ->with('enabledInstruments')
            ->whereHas('enabledInstruments')
            ->orderBy('position')
            ->get();

        cache(['instruments' => $instruments]);

        return $instruments;
    }
}

if (! function_exists('contacts')) {
    function contacts(): Contact
    {
        if (cache('contacts', null)) {
            return cache('contacts');
        }

        $contacts = Contact::query()
            ->first();

        cache(['contacts' => $contacts]);

        return $contacts;
    }
}
