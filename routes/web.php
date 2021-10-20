<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fontend\homeController;
use App\Http\Controllers\fontend\aboutController;
use App\Http\Controllers\fontend\contactController;
use App\Http\Controllers\fontend\protfolioController;
use App\Http\Controllers\fontend\blogController;

use App\Http\Controllers\backend\adminhomeController;
use App\Http\Controllers\backend\adminblogController;


use App\Http\Controllers\backend\profileController;
use App\Http\Controllers\backend\homesController;
use App\Http\Controllers\backend\contactsController;
use App\Http\Controllers\backend\protfoliosController;
use App\Http\Controllers\backend\categoryController;
use App\Http\Controllers\fontend\PostreviewController;
use App\Http\Controllers\fontend\SubscriberController;
use App\Http\Controllers\fontend\TagViewController;
use App\Http\Controllers\backend\SearchController;



use App\Http\Controllers\backend\personalController;
use App\Http\Controllers\backend\languageController;
use App\Http\Controllers\backend\educationController;
use App\Http\Controllers\backend\protfolioLinkController;
use App\Http\Controllers\backend\expertiseController;
use App\Http\Controllers\backend\experienceController;
use App\Http\Controllers\backend\certificationController;


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
//     return view('fontend.home');
// });

// Route::get('/admin', function () {
//     return view('backend.adminhome');
// })->middleware(['auth'])->name('admin');

require __DIR__.'/auth.php';




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

//home routes
Route::get('/', [homeController::class, 'home'])->name('home');
Route::get('/about', [aboutController::class, 'about'])->name('about');
Route::get('/contact', [contactController::class, 'contact'])->name('contact');
Route::get('/protfolio', [protfolioController::class, 'protfolio'])->name('protfolio');
Route::get('/blog', [blogController::class, 'blog'])->name('blog');
Route::get('/blog/{post_slug}', [blogController::class, 'viewpost'])->name('viewpost');

Route::get('/blog/category/{category_title}', [blogController::class, 'categoriesView'])->name('categoriesView');

//admin home controller
Route::get('/admin', [adminhomeController::class, 'admin'])->middleware(['auth'])->name('admin');
Route::POST('/admin/general/update/{id}', [adminhomeController::class, 'generalUpdate'])->middleware(['auth'])->name('generalUpdate');
Route::POST('/admin/general/update/footer/{id}', [adminhomeController::class, 'generalUpdateFooter'])->middleware(['auth'])->name('generalUpdateFooter');


//insert blog post
Route::get('/admin/blog', [adminblogController::class, 'adminblog'])->middleware(['auth'])->name('admin_blog');
Route::get('/admin/blog/create', [adminblogController::class, 'blogcreate'])->middleware(['auth'])->name('blogcreate');
Route::post('/admin/blog/store', [adminblogController::class, 'store'])->middleware(['auth'])->name('blog_store');
Route::get('/admin/blog/edit/{post_slug}', [adminblogController::class, 'edit'])->middleware(['auth'])->name('blog_edit');
Route::post('/admin/blog/update/{post_slug}', [adminblogController::class, 'update'])->middleware(['auth'])->name('blog_update');
Route::get('/admin/blog/delete/{post_slug}', [adminblogController::class, 'delete'])->middleware(['auth'])->name('blog_delete');



//profile edit update 
Route::get('admin/profile', [profileController::class, 'adminProfile'])->middleware(['auth'])->name('adminProfile');
Route::get('admin/home', [homesController::class, 'adminHome'])->middleware(['auth'])->name('adminHome');
Route::get('admin/contact', [contactsController::class, 'adminContact'])->middleware(['auth'])->name('adminContact');
Route::get('admin/protfolio', [protfoliosController::class, 'adminProtfolio'])->middleware(['auth'])->name('adminProtfolio');

//category 
Route::get('admin/category', [categoryController::class, 'category'])->middleware(['auth'])->name('category');
Route::get('admin/category/view', [categoryController::class, 'view'])->middleware(['auth'])->name('categoryView');
Route::POST('admin/category/store', [categoryController::class, 'store'])->middleware(['auth'])->name('categoryStore');
Route::POST('admin/category/update/{id}', [categoryController::class, 'update'])->middleware(['auth'])->name('categoryUpdate');
Route::get('admin/category/updateView/{id}', [categoryController::class, 'updateView'])->middleware(['auth'])->name('updateView');
Route::get('admin/category/delete/{id}', [categoryController::class, 'delete'])->middleware(['auth'])->name('categoryDelete');


//rattings route here
Route::POST('/user/rattings', [PostreviewController::class, 'store'])->name('rattings');

//subscriber route
Route::POST('/subscriber', [SubscriberController::class, 'store'])->name('subscriber');
Route::get('/admin/subscriber/show', [SubscriberController::class, 'show'])->middleware(['auth'])->name('subscriberShow');
Route::get('/admin/subscriber/delete/{id}', [SubscriberController::class, 'delete'])->middleware(['auth'])->name('subscriberDelete');

//TagView Route
Route::get('/blog/publicTag/{value}', [TagViewController::class, 'tagview'])->name('tagview');
Route::get('/admin/tagview/insert', [TagViewController::class, 'insert'])->middleware(['auth'])->name('tagviewinsert');
Route::POST('/admin/tagview/store', [TagViewController::class, 'store'])->middleware(['auth'])->name('tagviewstore');
Route::get('/admin/tagview/show', [TagViewController::class, 'show'])->middleware(['auth'])->name('tagviewshow');
Route::POST('/admin/tagview/update/{id}', [TagViewController::class, 'update'])->middleware(['auth'])->name('tagviewupdate');
Route::get('/admin/tagview/edit/{id}', [TagViewController::class, 'edit'])->middleware(['auth'])->name('tagviewedit');
Route::get('/admin/tagview/delete/{id}', [TagViewController::class, 'delete'])->middleware(['auth'])->name('tagviewdelete');


//search route 
Route::POST('/postSearch', [SearchController::class, 'postSearch'])->name('postSearch');



//personal information seetings
Route::POST('/admin/seetingsPersonal/{user_id}', [personalController::class, 'seetingsPersonal'])->middleware(['auth'])->name('seetingsPersonal');
Route::get('/admin/personalView', [personalController::class, 'personalView'])->middleware(['auth'])->name('personalView');


// home Baner updates route
Route::get('/admin/home/Banner', [homesController::class, 'homeBanner'])->middleware(['auth'])->name('homeBanner');
Route::POST('/admin/home/banner/Update/{user_id}', [homesController::class, 'homeBannerUpdate'])->middleware(['auth'])->name('homeBannerUpdate');
Route::get('/admin/home/hideShow/{status}', [homesController::class, 'hideShow'])->middleware(['auth'])->name('hideShow');

// home Motivation updates route
Route::get('/admin/home/motivation', [homesController::class, 'homeMotivation'])->middleware(['auth'])->name('homeMotivation');
Route::POST('/admin/home/motivationUpdate/{user_id}', [homesController::class, 'motivationUpdate'])->middleware(['auth'])->name('motivationUpdate');



// home Skills  route
Route::get('/admin/home/skill', [homesController::class, 'homeSkill'])->middleware(['auth'])->name('homeSkill');
Route::POST('/admin/home/skill/insert', [homesController::class, 'homeSkillInsert'])->middleware(['auth'])->name('homeSkillInsert');
Route::get('/admin/home/skill/View/{id}', [homesController::class, 'homeSkillView'])->middleware(['auth'])->name('homeSkillView');
Route::POST('/admin/home/skill/Update/{id}', [homesController::class, 'skillUpdate'])->middleware(['auth'])->name('skillUpdate');
Route::get('/admin/home/skill/delete/{id}', [homesController::class, 'homeSkillDelete'])->middleware(['auth'])->name('homeSkillDelete');


// home Works  route
Route::get('/admin/home/works', [homesController::class, 'homeWorks'])->middleware(['auth'])->name('homeWorks');
Route::POST('/admin/home/works/insert', [homesController::class, 'homeWorksInsert'])->middleware(['auth'])->name('homeWorksInsert');
Route::get('/admin/home/works/View/{id}', [homesController::class, 'homeWorksView'])->middleware(['auth'])->name('homeWorksView');
Route::POST('/admin/home/works/Update/{id}', [homesController::class, 'homeworksUpdate'])->middleware(['auth'])->name('homeworksUpdate');
Route::get('/admin/home/works/delete/{id}', [homesController::class, 'homeWorksDelete'])->middleware(['auth'])->name('homeWorksDelete');

//profile Hide Show Route
Route::get('/admin/about/hideShow/{status}', [profileController::class, 'hideShow'])->middleware(['auth'])->name('hideShow');

// Profile Baner updates route
Route::get('/admin/about/Banner', [profileController::class, 'aboutBanner'])->middleware(['auth'])->name('aboutBanner');
Route::POST('/admin/about/banner/Update/{id}', [profileController::class, 'aboutBannerUpdate'])->middleware(['auth'])->name('aboutBannerUpdate');
Route::POST('/admin/about/banner/Update/carrier/{id}', [profileController::class, 'aboutBannercarrier'])->middleware(['auth'])->name('aboutBannercarrier');
Route::POST('/admin/about/banner/Update/declaration/{id}', [profileController::class, 'aboutBannerdeclaration'])->middleware(['auth'])->name('aboutBannerdeclaration');


// Profile Language route
Route::get('/admin/about/language', [languageController::class, 'aboutLanguage'])->middleware(['auth'])->name('aboutLanguage');
Route::POST('/admin/about/language/insert', [languageController::class, 'aboutLanguageInsert'])->middleware(['auth'])->name('aboutLanguageInsert');
Route::get('/admin/about/language/View/{id}', [languageController::class, 'aboutLanguageView'])->middleware(['auth'])->name('aboutLanguageView');
Route::POST('/admin/about/language/Update/{id}', [languageController::class, 'aboutLanguageUpdate'])->middleware(['auth'])->name('aboutLanguageUpdate');
Route::get('/admin/about/language/delete/{id}', [languageController::class, 'aboutLanguageDelete'])->middleware(['auth'])->name('aboutLanguageDelete');

// Profile Education route
Route::get('/admin/about/education', [educationController::class, 'aboutEducation'])->middleware(['auth'])->name('aboutEducation');
Route::POST('/admin/about/education/insert', [educationController::class, 'aboutEducationInsert'])->middleware(['auth'])->name('aboutEducationInsert');
Route::get('/admin/about/education/View/{id}', [educationController::class, 'aboutEducationView'])->middleware(['auth'])->name('aboutEducationView');
Route::POST('/admin/about/education/Update/{id}', [educationController::class, 'aboutEducationUpdate'])->middleware(['auth'])->name('aboutEducationUpdate');
Route::get('/admin/about/education/delete/{id}', [educationController::class, 'aboutEducationDelete'])->middleware(['auth'])->name('aboutEducationDelete');


// Profile Protfolio links route
Route::get('/admin/about/links', [protfolioLinkController::class, 'aboutLinks'])->middleware(['auth'])->name('aboutLinks');
Route::POST('/admin/about/links/insert', [protfolioLinkController::class, 'aboutLinksInsert'])->middleware(['auth'])->name('aboutLinksInsert');
Route::get('/admin/about/links/View/{id}', [protfolioLinkController::class, 'aboutLinksView'])->middleware(['auth'])->name('aboutLinksView');
Route::POST('/admin/about/links/Update/{id}', [protfolioLinkController::class, 'aboutLinksUpdate'])->middleware(['auth'])->name('aboutLinksUpdate');
Route::get('/admin/about/links/delete/{id}', [protfolioLinkController::class, 'aboutLinksDelete'])->middleware(['auth'])->name('aboutLinksDelete');

// Profile Expertice  route
Route::get('/admin/about/expertise', [expertiseController::class, 'aboutExpertise'])->middleware(['auth'])->name('aboutExpertise');
Route::POST('/admin/about/expertise/insert', [expertiseController::class, 'aboutExpertiseInsert'])->middleware(['auth'])->name('aboutExpertiseInsert');
Route::get('/admin/about/expertise/View/{id}', [expertiseController::class, 'aboutExpertiseView'])->middleware(['auth'])->name('aboutExpertiseView');
Route::POST('/admin/about/expertise/Update/{id}', [expertiseController::class, 'aboutExpertiseUpdate'])->middleware(['auth'])->name('aboutExpertiseUpdate');
Route::get('/admin/about/expertise/delete/{id}', [expertiseController::class, 'aboutExpertiseDelete'])->middleware(['auth'])->name('aboutExpertiseDelete');


// Profile Training & certifications  route
Route::get('/admin/about/certification', [certificationController::class, 'aboutCertification'])->middleware(['auth'])->name('aboutCertification');
Route::POST('/admin/about/certification/insert', [certificationController::class, 'aboutCertificationInsert'])->middleware(['auth'])->name('aboutCertificationInsert');
Route::get('/admin/about/certification/View/{id}', [certificationController::class, 'aboutCertificationView'])->middleware(['auth'])->name('aboutCertificationView');
Route::POST('/admin/about/certification/Update/{id}', [certificationController::class, 'aboutCertificationUpdate'])->middleware(['auth'])->name('aboutCertificationUpdate');
Route::get('/admin/about/certification/delete/{id}', [certificationController::class, 'aboutCertificationDelete'])->middleware(['auth'])->name('aboutCertificationDelete');


// Profile Experience  route
Route::get('/admin/about/experience', [experienceController::class, 'aboutExperience'])->middleware(['auth'])->name('aboutExperience');
Route::POST('/admin/about/experience/insert', [experienceController::class, 'aboutExperienceInsert'])->middleware(['auth'])->name('aboutExperienceInsert');
Route::get('/admin/about/experience/View/{id}', [experienceController::class, 'aboutExperienceView'])->middleware(['auth'])->name('aboutExperienceView');
Route::POST('/admin/about/experience/Update/{id}', [experienceController::class, 'aboutExperienceUpdate'])->middleware(['auth'])->name('aboutExperienceUpdate');
Route::get('/admin/about/experience/delete/{id}', [experienceController::class, 'aboutExperienceDelete'])->middleware(['auth'])->name('aboutExperienceDelete');

//contuct status roude for hide Show
Route::get('/admin/contact/hideShow/{status}', [contactsController::class, 'hideShow'])->middleware(['auth'])->name('hideShow');

// Profile Contact  route
Route::get('/admin/contact/banner/view', [contactsController::class, 'contactBanner'])->middleware(['auth'])->name('contactBanner');
Route::POST('/admin/contact/banner/update/{id}', [contactsController::class, 'contactBannerUpdate'])->middleware(['auth'])->name('contactBannerUpdate');


// Profile Contact  route
Route::POST('/admin/protfolio/banner/update/{id}', [protfoliosController::class, 'protfolioBannerUpdate'])->middleware(['auth'])->name('protfolioBannerUpdate');
Route::get('/admin/protfolio/showHide/{status}', [protfoliosController::class, 'showHide'])->middleware(['auth'])->name('showHide');


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

    Route::post('ckeditor/upload',[aboutController::class, 'ckeditorUpload'])->name('ckeditor.upload');
    