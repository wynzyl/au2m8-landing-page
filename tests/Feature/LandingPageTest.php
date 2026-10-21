<?php

test('landing pages render successfully', function (string $routeName) {
    $this->get(route($routeName))
        ->assertOk();
})->with(['home', 'about', 'projects', 'contact']);

test('contact page shows the studio contact details', function () {
    $this->get(route('contact'))
        ->assertSee('wynzyltayag@gmail.com')
        ->assertSee('+63 (919) 095-9251')
        ->assertSee('Poblacion, Urdaneta City, Pangasinan, 2428 Philippines');
});

test('contact page email links open a pre-filled compose window', function () {
    $this->get(route('contact'))
        ->assertSee('mail.google.com/mail/?view=cm', false)
        ->assertSee('wynzyltayag%40gmail.com', false);
});

test('site uses the official au2m8 logo assets', function () {
    $this->get(route('home'))
        ->assertSee('/images/brand/au2m8-mark.png')
        ->assertSee('/images/brand/au2m8-wordmark.png');
});

test('about page shows the team portraits', function () {
    $this->get(route('about'))
        ->assertSee('/images/team/me.png')
        ->assertSee('/images/team/Pat.jpg')
        ->assertSee('/images/team/Ian.png');
});

test('projects page features the healthcare and school projects', function () {
    $this->get(route('projects'))
        ->assertSee('Healthcare Management System')
        ->assertSee('Merryland Montessori')
        ->assertSee('/images/projects/healthcare-dashboard.webp')
        ->assertSee('/images/projects/mmhsi.webp');
});
