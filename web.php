<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Models\image;
use App\Models\photo;

use App\Models\category;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ImageController;

use Illuminate\Http\Request;

use App\Http\Controllers\PhotoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', function () {
    return view('index');
});



//Route::resource('/upload',ImageController::class);
// Route::resource('/ex',ImageController::class);


Route::get('/ex', function () {
            $images=category::All();
        return view('ex',compact('images'));
    
});

Route::get('/about', function () {
    $p=photo::All();
    return view('about-us',compact('p'));
});

Route::get('/form', function () {
    return view('form');
});


Route::get('/service', function () {
    return view('services');
});

Route::get('/demo', function () {
    return view('demo1');
});

Route::get('/m2', function () {
    return view('m2');
});

Route::get('/contact', function () {
    return view('contacts');
});
 




//Route::resource('/delete/{id}',CategoryController::class);
//Route::post('/upload', [ContactController::class, 'upload']);




//Route::get('/dashboard', [home::class, 'checkuser'])->middleware
//(['auth, 'verified'])->name('dashboard');   

Route::get('/dashboard',[homeController::class,'checkuser'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//----------------------------------- Admin side routes ----------------------------------------------------------//



Route::get('/docs', function () {
       $data=Image::paginate(5);
        return view('admin.docs',compact('data'));
    
    //return view('admin.docs');
});

Route::get('/indexA', function () {
    return view('admin.index');
});



Route::get('/tablesA', function () {
    return view('admin.tables');
});


Route::get('/profileA', function () {
    return view('admin.profile');
});

Route::get('/adminmaster', function () {
    return view('admin.adminmaster');
});


Route::get('/aboutA', function () {
    return view('admin.about');
});


Route::get('/addcategoryA', function () {
    return view('admin.addcategory');
});


Route::get('/addfeedbackA', function () {
    return view('admin.addfeedback');
});


Route::get('/addselldataA', function () {
    return view('admin.addselldata');
});


Route::get('/category1A', function () {
    return view('admin.category');
});


Route::get('/editfeedbackA', function () {
    return view('admin.editfeedback');
});



Route::get('/editselldataA', function () {
    return view('admin.editselldata');
});


Route::get('/edituserA', function () {
    return view('admin.edituser');
});


Route::get('/feedbackA', function () {
    return view('admin.feedback');
});


Route::get('/userdataA', function () {
    return view('admin.userdata');
});


    
Route::get('/photos', function () {
    return view('admin.photos');
});


    Route::post('/photos', [Photo::class, 'store']);

/*Route::get('/docs', function () {
  return view('admin.docs');
});*/






//------------------------category controller------------------------------//
Route::get('/category1A',[CategoryController::class,'show']);
Route::resource('/category1A',CategoryController::class);
Route::resource('/category',CategoryController::class);
Route::post('/search',[CategoryController::class,'searchdata']);
Route::get('/delete/{id}',[CategoryController::class,'delete']);



//--------------------------imagecontroller---------------------//
Route::post('/searchc',[ImageController::class,'searchdata']);
Route::delete('/docs/{id}', [ImageController::class, 'destroy'])->name('docs.destroy');
Route::get('/docs/{id}/edit', [ImageController::class, 'edit'])->name('docs.edit');
Route::put('/docs/{id}', [ImageController::class, 'update'])->name('docs.update');
Route::get('/images', [ImageController::class, 'show']);
Route::post('/image/store', [ImageController::class, 'store'])->name('image.store')->middleware('auth');




//---------------------------------contact form-----------------//
Route::resource('/contact',FeedbackController::class);
Route::get('/feedbackA',[FeedbackController::class,'show']);
Route::get('/delete/{id}',[FeedbackController::class,'delete']);
Route::post('/searchf',[FeedbackController::class,'searchdata']);



//-----------------------downloadcontroller-----------------------//
Route::get('/print_pdf/{id}',[ImageController::class,'print_pdf']);
Route::post('/ph',[PhotoController::class,'store']);
