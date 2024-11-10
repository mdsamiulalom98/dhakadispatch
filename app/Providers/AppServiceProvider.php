<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\GeneralSetting;
use App\Models\SocialMedia;
use App\Models\Contact;
use App\Models\CreatePage;
use App\Models\GoogleTagManager;
use App\Models\ParcelStatus;
use App\Models\Payment;
use Config;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $generalsetting = GeneralSetting::where('status', 1)->limit(1)->first();
        view()->share('generalsetting', $generalsetting);

        $contact = Contact::where('status', 1)->first();
        view()->share('contact', $contact);

        $socialicons = SocialMedia::where('status', 1)->get();
        view()->share('socialicons', $socialicons);

        $pages = CreatePage::where(['status' => 1, 'section' => 1])->select('id', 'title', 'slug', 'status')->limit(5)->get();
        view()->share('pages', $pages);
        
        $payments = GoogleTagManager::where('status', 1)->get();
        view()->share('payments', $payments);

        $payment = Payment::where('status','process')->select('invoice_id','user_type','cod','status')->get();
        view()->share('payment', $payment);

        $parcelstatus = ParcelStatus::where('status', 1)->withCount('parcels')->get();
        view()->share('parcelstatus', $parcelstatus);
    }
}
