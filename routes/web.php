<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\HonourBoardsController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\RollCallController;
use App\Http\Controllers\StoryBoardController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\MiscellaniaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MicrosoftAuthController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterStep2Controller;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(route('home'));
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Auth ROUTES
Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::get('register/start', function () {
    return view('auth.register-first');
})->name('register.start');

Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);

Route::get('auth/microsoft', [MicrosoftAuthController::class, 'redirect'])->name('microsoft-auth');
Route::get('auth/microsoft/call-back', [MicrosoftAuthController::class, 'callbackMicrosoft']);

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::group(['middleware' => 'registration-completed'], function () {

        Route::get('profile', [ProfileController::class, 'getProfile'])->name('profile');
        Route::post('profile', [ProfileController::class, 'store'])->name('profile.store');
        Route::get('profile/remove-avatar', [ProfileController::class, 'remove']);
        Route::delete('myCollection/remove/{id}', [ProfileController::class, 'removeCollection']);
        Route::post('profile/change-profile', [ProfileController::class, 'changeProfile'])->name('change-profile');

        Route::get('museum', function () {
            return view('archives');
        })->name('archives');

        Route::get('chapel', function () {
            return view('chapel');
        })->name('chapel');

        Route::get('chapel-construction', function () {
            return view('chapel-construction');
        })->name('chapel-construction');

        Route::get('support-us', function () {
            return view('support-us');
        })->name('support-us');

        Route::get('about-us', function () {
            return view('about-us');
        })->name('about-us');

        Route::get('t150-college-celebrations', function () {
            return view('college-celebrations');
        })->name('t150-college-celebrations');

        Route::get('t150-infrastructure', function () {
            return view('infrastructure');
        })->name('t150-infrastructure');

        Route::get('history', function () {
            return view('history');
        })->name('trinity-history');

        Route::get('companion-volume', function () {
            return view('companion-volume');
        })->name('companion-volume');

        Route::get('stories', function () {
            return view('stories');
        })->name('stories');

        Route::get('anecdotes', function () {
            return view('anecdotes');
        })->name('anecdotes');

        Route::get('articles', function () {
            return view('articles');
        })->name('articles');

        Route::get('about', function () {
            return view('about');
        })->name('about');

        Route::get('trinity-story', function () {
            return view('trinity-story');
        })->name('trinity-story');

        Route::get('trinity-story-ch01', function () {
            return view('trinity-story-ch01');
        })->name('trinity-story-ch01');
        Route::get('trinity-story-ch01', function () {
            return view('trinity-story-ch01');
        })->name('trinity-story-ch01');
        Route::get('trinity-story-ch02', function () {
            return view('trinity-story-ch02');
        })->name('trinity-story-ch02');
        Route::get('trinity-story-ch03', function () {
            return view('trinity-story-ch03');
        })->name('trinity-story-ch03');
        Route::get('trinity-story-ch04', function () {
            return view('trinity-story-ch04');
        })->name('trinity-story-ch04');
        Route::get('trinity-story-ch05', function () {
            return view('trinity-story-ch05');
        })->name('trinity-story-ch05');
        Route::get('trinity-story-ch06', function () {
            return view('trinity-story-ch06');
        })->name('trinity-story-ch06');
        Route::get('trinity-story-ch07', function () {
            return view('trinity-story-ch07');
        })->name('trinity-story-ch07');
        Route::get('trinity-story-ch08', function () {
            return view('trinity-story-ch08');
        })->name('trinity-story-ch08');
        Route::get('trinity-story-ch09', function () {
            return view('trinity-story-ch09');
        })->name('trinity-story-ch09');
        Route::get('trinity-story-ch10', function () {
            return view('trinity-story-ch10');
        })->name('trinity-story-ch10');

        // new stories trinity-story-chapter01
        Route::get('trinity-story-chapter01', function () {
            return view('trinity-story-chapter01');
        })->name('trinity-story-chapter01');
        Route::get('trinity-story-chapter02', function () {
            return view('trinity-story-chapter02');
        })->name('trinity-story-chapter02');
        Route::get('trinity-story-chapter03', function () {
            return view('trinity-story-chapter03');
        })->name('trinity-story-chapter03');

        Route::get('principals', function () {
            return view('principal');
        })->name('principal.index');
        Route::get('principals/data', [PrincipalController::class, 'index']);
        Route::get('principals/data/search', [PrincipalController::class, 'search']);
        Route::get('principal/info/{id}', [PrincipalController::class, 'principalInfo'])->name('principal.info');

        Route::get('staff', function () {
            return view('staff');
        })->name('staff.index');
        Route::get('staff/data', [StaffController::class, 'index']);
        Route::get('staff/info/{id}', [StaffController::class, 'staffInfo'])->name('staff.info');

        Route::get('honour-boards', [HonourBoardsController::class, 'index'])->name('honour-boards.index');
        Route::get('honour-boards/show/{id}/{name}', [HonourBoardsController::class, 'show'])->name('honour-boards.show');

        Route::get('roll-calls', [RollCallController::class, 'index'])->name('roll-call.index');
        Route::get('roll-call/info/{id}', [RollCallController::class, 'rollCallInfo'])->name('roll-call.info');

        Route::get('story-board/index', [StoryBoardController::class, 'index'])->name('story-board.index');
        Route::get('story-board/info/{id}', [StoryBoardController::class, 'storyBoardInfo'])->name('story-board.info');

        Route::get('digital-archive', [GalleryController::class, 'index'])->name('gallery.index');
        Route::get('gallery/info/{album_id}/{id}', [GalleryController::class, 'galleryInfo'])->name('gallery.info');
        Route::get('album/info/{id}', [GalleryController::class, 'albumInfo'])->name('album.info');
        Route::get('album/image/{id}', [GalleryController::class, 'galleryView'])->name('album.image.view');
        Route::get('album/image/modal/{id}/{album_id}', [GalleryController::class, 'galleryViewModal'])->name('album.image.view.modal');

        Route::get('timeline', [TimelineController::class, 'timeline_30_years'])->name('timeline.index');
        Route::get('timeline/explore', [TimelineController::class, 'explore'])->name('timeline.explore');
        Route::get('timeline/explore/{id}', [TimelineController::class, 'exploreById'])->name('timeline.explore-by-id');
        Route::get('timeline/info/{path}', [TimelineController::class, 'info'])->name('timeline.info');
        Route::get('timeline/filter-data/{year}', [TimelineController::class, 'filterData'])->name('timeline.filter-data');
        Route::get('timeline/next-range-data/{year}', [TimelineController::class, 'nextRangeData'])->name('timeline.filter-next-range');
        Route::get('timeline/filter-by-type/{type}', [TimelineController::class, 'filterByType'])->name('timeline.filter-by-type');
        Route::get('timeline/filter-by-year/{year}', [TimelineController::class, 'filterByYear'])->name('timeline.filter-by-year');
        Route::get('timeline/timeline_30_years', [TimelineController::class, 'timeline_30_years'])->name('timeline.timeline_30_years');
        Route::get('timeline/filter-timeline_30_years/{year}', [TimelineController::class, 'filter30YearData'])->name('timeline.filter-timeline_30_years');
        Route::get('timeline/filter-by-type-30-years/{type}', [TimelineController::class, 'filterByType30Years'])->name('timeline.filter-by-type-30-years');
        Route::get('timeline/info-1-year/{path}', [TimelineController::class, 'info1Year'])->name('timeline.info-1-year');
        Route::get('timeline/details/{id}', [TimelineController::class, 'timelineDetails'])->name('timeline.details');

        Route::get('the-trinity-story', [StoryController::class, 'index'])->name('trinity-story-main');
        Route::get('history-library', [PublicationController::class, 'index'])->name('publications');

        Route::get('miscellanea/{category}', [MiscellaniaController::class, 'index'])->name('miscellanea_filter');
        Route::get('miscellanea/view/post/{id}', [MiscellaniaController::class, 'show'])->name('miscellanea_view');
        Route::get('pdf/sample', [PublicationController::class, 'sample']);

        Route::get('virtual-tours', [TourController::class, 'tours'])->name('tours');

        Route::get('3d/model',  function () {
            return view('3d-model');
        });

        Route::post('send-information', [InformationController::class, 'send'])->name('send');

        Route::get('myCollection/add', [CollectionController::class, 'add']);
    });

    Route::get('register-step2', [RegisterStep2Controller::class, 'create'])->name('register-step2.create');

    Route::post('register-step2', [RegisterStep2Controller::class, 'store'])->name('register-step2.post');
});
