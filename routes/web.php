<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/about', function () {
    return view('about');
    })->name('about');   //Need to  write view code for about page

Route::get('/contact', function () {
    return view('contact');
    })->name('contact');    // Need to  write view code for contact page

Route::post('contact.submit',function(){

})->name('contact.submit');

Route::get('/faq', function () {
    return view('faq');
    })->name('faq');   // Need to  write view code for faq page


// Product Routes
Route::get('/business-accounts', function () {
    return view('products.business-accounts');
})->name('business-accounts');  

Route::get('/personal-accounts', function () {
    return view('products.personal-accounts');
})->name('personal-accounts');

Route::get('/corporate-accounts', function () {
    return view('products.corporate-accounts');
})->name('corporate-accounts');

Route::get('/card-issuing', function () {
    return view('products.card-issuing');
})->name('card-issuing');

Route::get('/infinity-cards', function () {
    return view('products.infinity-cards');
})->name('infinity-cards');

Route::get('/digital-wallets', function () {
    return view('products.digital-wallets');
})->name('digital-wallets');

Route::get('/myewallet-crypto-card', function () {
    return view('products.myewallet-crypto-card');
})->name('myewallet-crypto-card');

Route::get('/cryptoconnect', function () {
    return view('products.cryptoconnect');
})->name('cryptoconnect');

Route::get('/yield-treasury', function () {
    return view('products.yield-treasury');
})->name('yield-treasury');



// Resource Routes

Route::get('/how-it-works', function () {
    return view('resources.how-it-works');
})->name('how-it-works');

Route::get('/app-features', function () {
    return view('resources.app-features');
})->name('app-features');

Route::get('/complaince', function () {
    return view('resources.complaince');
})->name('complaince');

Route::get('/security', function () {
    return view('resources.security');
})->name('security');

Route::get('/supported-countries', function () {
    return view('resources.supported-countries');
})->name('supported-countries');

Route::get('/support', function () {
    return view('resources.support');
})->name('support');

Route::get('/faqs', function () {
    return view('resources.faqs');
})->name('faqs');

//register route
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

