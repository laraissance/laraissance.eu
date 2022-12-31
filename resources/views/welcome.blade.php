<!DOCTYPE html>
<html lang="sk">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laraissance - Česko-slovenská Laravel komunita</title>

        @vite('resources/css/app.css')

        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
    </head>
    <body class="antialiased text-gray-700">
        <header class="pt-12">
            <div class="mx-auto max-w-screen-sm px-4">
                <img class="h-12" src="{{ asset('img/logotype.svg') }}" alt="Laraisssance logotyp">
            </div>
        </header>

        <main class="mt-12 pb-16 lg:mt-20">
            <div class="mx-auto max-w-screen-sm px-4">
                {{-- Hero --}}
                <section>
                    <h1 class="text-[7vw] font-bold text-gray-900 sm:text-5xl">Svet moderného Laravelu</h1>
                    <p class="mt-4 text-lg leading-relaxed">Sme skupina vývojárov ktorým záleží na kvalite a efektivite. Tu zdieľame novinky, best practices a zaujímavosti z Laravelu.</p>
                    <div class="mt-8">
                        <a href="https://join.slack.com/t/laraissance/shared_invite/zt-1mfyh8gkh-Epil1SJsaAfbAFj~s5AcMw" class="inline-flex gap-2 bg-gray-800 text-white text-sm font-bold rounded-full px-4 py-2.5">
                            <img src="{{ asset('img/slack_logo.svg') }}"><span>Pridaj sa na slack</span>
                        </a>
                    </div>
                </section>

                {{-- Content --}}
                <section class="mt-16 space-y-12 lg:mt-24 lg:space-y-16">
                    <div>
                        <h2 class="font-bold text-gray-900">Kvalitný Laravel sa nepíše len v zahraničí</h2>
                        <p class="mt-4 leading-8">Laraissance (čítaj Larasáns) je snaha vytvoriť aktívnu komunitu a priniesť kvalitný obsah zo sveta Laravelu aj do našich krajov. Laravel je aktuálne najpopulárnejší backend framework no u nás sa o ňom moc nehovorí. Poďme to spolu zmeniť.</p>
                    </div>

                    <div>
                        <h2 class="font-bold text-gray-900">Súčasné postupy a technológie</h2>
                        <p class="mt-4 leading-8">Píšeš testy, upgraduješ na nové verzie, používaš statickú analýzu, AI, CI, TALL, TDD, BDD, DDD alebo iný 3 písmenkový akronym? Pravdepodovne si budeme si rozumieť. Ak nie, poď sa pozrieť ako dostať z Laravelu maximum, radi ťa nasmerujeme.</p>
                    </div>

                    <div>
                        <h2 class="font-bold text-gray-900">Začínaš s Laravelom?</h2>
                        <p class="mt-4 leading-8">Máš sa na čo tešiť. Postav si na začiatok napríklad mikroblog podľa Taylora Otwella. <a href="https://bootcamp.laravel.com" target="_blank" class="underline">Laravel Bootcamp</a> ťa prevedie celým procesom až po nasadenie do produkcie. Ak sa ti nechce čítať, otvor Laracasts. Vzdelávaciu video platforma kde sa dozvieš prakticky všetko. Začni free sériou <a href="https://laracasts.com/series/laravel-8-from-scratch" target="_blank" class="underline">Laravel 8 From Scratch</a>.</p>
                        <p class="mt-4 leading-8">Pre slovenský / český obsah sa pozri na <a href="https://skillmea.sk/online-kurzy/webrebel-3-oop-a-laravel" target="_blank" class="underline">Skillmea</a>. Ak chceš ale zostať v obraze, najvýhodnejšie je sledovať dianie v zahraničí, napríklad na <a href="https://laravel-news.com" target="_blank" class="underline">Laravel&nbsp;News</a>.</p>
                    </div>

                    <div>
                        <h2 class="font-bold text-gray-900">Nezabudni sa pridať do komunity</h2>
                        <div class="mt-8 flex flex-wrap gap-4">
                            <a href="https://join.slack.com/t/laraissance/shared_invite/zt-1mfyh8gkh-Epil1SJsaAfbAFj~s5AcMw" class="flex-shrink-0 inline-flex gap-2 bg-gray-800 text-white text-sm font-bold rounded-full px-4 py-2.5">
                                <img src="{{ asset('img/slack_logo.svg') }}"><span>Pridaj sa na slack</span>
                            </a>

                            <a href="https://twitter.com/laraissance" class="flex-shrink-0 inline-flex gap-2 bg-[#1D9BF0] text-white text-sm font-bold rounded-full px-4 py-2.5">
                                <img src="{{ asset('img/twitter_logo.svg') }}"><span>Sleduj na twitteri</span>
                            </a>
                        </div>
                    </div>
                </secion>
            </div>
        </main>
    </body>
</html>
