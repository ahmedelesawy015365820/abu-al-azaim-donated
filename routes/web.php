<?php

use App\Http\Controllers\Admin\ArticleCategoryController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CounterAboutController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqController as AdminFaqController;
use App\Http\Controllers\Admin\FaqSectionController;
use App\Http\Controllers\Admin\HomeSliderController;
use App\Http\Controllers\Admin\OneAboutController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ServiceFaqController;
use App\Http\Controllers\Admin\ProjectChallengeSolutionController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ProjectCategoryController;
use App\Http\Controllers\Admin\TeamController as AdminTeamController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\TwoAboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Client\AboutController;
use App\Http\Controllers\Client\AppointmentController;
use App\Http\Controllers\Client\ArticleController as ClientArticleController;
use App\Http\Controllers\Client\FaqController;
use App\Http\Controllers\Client\ProjectController as ProjectClientController;
use App\Http\Controllers\Client\ServiceController as ServiceClientController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\TeamController;
use App\Http\Resources\Admin\TwoAboutResource;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

Route::get('change-language/{locale}', [LanguageController::class, 'changeLanguage'])->name('change.language');

//auth routes
Route::group([], function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
});

//admin routes
Route::prefix('admin')->name('admin.')->group(function () {

    Route::group(['middleware' => ['auth:web']], function () {

        // dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::name('page.')->prefix('page')->group(function () {

            Route::get('home-sliders', [HomeSliderController::class, 'indexPage'])->name('home-sliders');
            Route::get('partners', [PartnerController::class, 'indexPage'])->name('partners');
            Route::get('faq-section', [FaqSectionController::class, 'indexPage'])->name('faq-section');
            Route::get('faqs', [AdminFaqController::class, 'indexPage'])->name('faq');
            Route::get('counters', [CounterController::class, 'indexPage'])->name('counter');
            Route::get('services', [ServiceController::class, 'indexPage'])->name('services');
            Route::get('setting', [SettingController::class, 'indexPage'])->name('setting');
            Route::get('projects', [ProjectController::class, 'indexPage'])->name('projects');
            Route::get('one-about', [OneAboutController::class, 'indexPage'])->name('one-about');
            Route::get('two-about', [TwoAboutController::class, 'indexPage'])->name('two-about');
            Route::get('counter-about', [CounterAboutController::class, 'indexPage'])->name('counter-about');
            Route::get('article-categories', [ArticleCategoryController::class, 'indexPage'])->name('article-categories');
            Route::get('articles-queries', [ArticleController::class, 'indexPageQueries'])->name('articles-queries');
            Route::get('articles', [ArticleController::class, 'indexPage'])->name('articles');
            Route::get('service-faqs', [ServiceFaqController::class, 'indexPage'])->name('service-faqs');
            Route::get('team', [AdminTeamController::class, 'indexPage'])->name('team');
            Route::get('testimonial', [TestimonialController::class, 'indexPage'])->name('testimonial');
            Route::get('project-categories', [ProjectCategoryController::class, 'indexPage'])->name('project-categories');
            Route::get('project-challenge-solutions', [ProjectChallengeSolutionController::class, 'indexPage'])->name('project-challenge-solutions');
        });

        // logout
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    });

});


//client routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blogs', [ClientArticleController::class, 'index'])->name('blogs');
Route::post('/blogs/submit-quiry', [ClientArticleController::class, 'submitQuiry'])->name('blog-submit-quiry');
Route::get('/blogs/blog-details/{slug}', [ClientArticleController::class, 'blogDetails'])->name('blog-details');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/project', [ProjectClientController::class, 'index'])->name('project');
Route::get('/project/{slug}', [ProjectClientController::class, 'show'])->name('project-details');
Route::get('/service', [ServiceClientController::class, 'index'])->name('service');
Route::get('/service/{slug}', [ServiceClientController::class, 'show'])->name('service-details');
Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment');
Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.store');
Route::post('/contact-message', [ContactController::class, 'store'])->name('contact.store');










