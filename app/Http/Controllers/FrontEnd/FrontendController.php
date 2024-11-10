<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\News;
use App\Models\Post;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Createpage;
use App\Models\District;
use App\Models\Thana;
use App\Models\Merchant;
use App\Models\Service;
use App\Models\Pricing;
use App\Models\Client;
use App\Models\Banner;
use App\Models\Faq;
use App\Models\Parcel;
use App\Models\ParcelNote;
use App\Models\About;
use App\Models\MissionVission;
use App\Models\Counter;
use App\Models\ClientFeedback;
use App\Models\DeliveryCharge;
use App\Models\ServiceType;
use App\Models\Whychooseus;
use Carbon\Carbon;
use Str;
use Session;
use DB;

class FrontEndController extends Controller
{
    private function districts()
    {
        return District::select('id', 'name', 'status')->where('status', 1)->get();
    }
    private function thanas()
    {
        return Thana::select('id', 'name', 'district_id', 'status')->where('status', 1);
    }
    private function categories()
    {
        return Category::select('name', 'slug', 'image', 'status')->where('status', 1)->withCount('posts')->get();
    }
    private function servicetypes()
    {
        return  ServiceType::where('status',1)->get();
    }
    public function index(){
        $sliders = Banner::where(['status'=>1])->get();
        $regular_services = Service::where(['status'=>1,'type'=>1])->get();
        $advance_services = Service::where(['status'=>1,'type'=>2])->get();
        $within_dhaka = Pricing::where(['status'=>1,'type'=>1])->get();
        $advance_delivery = Pricing::where(['status'=>1,'type'=>2])->get();
        $suburb_delivery = Pricing::where(['status'=>1,'type'=>3])->get();
        $weight_charge = Pricing::where(['status'=>1,'type'=>4])->get();
        $whychooseus = Whychooseus::where(['status'=>1])->limit(1)->get();
        $clients = Client::where(['status'=>1])->get();
        $faqs = Faq::where(['status'=>1])->get();
        $districts = $this->districts();
        $servicetypes = $this->servicetypes();
        return view('frontEnd.index', compact('sliders','regular_services','advance_services','within_dhaka','advance_delivery','suburb_delivery','weight_charge','whychooseus','clients','faqs','districts','servicetypes'));
    }

    public function track(Request $request){
        $parcel = Parcel::where('parcel_id',$request->parcel_id)->with('parcelstatus')->first();
        $notes  = ParcelNote::where('parcel_id',$parcel?$parcel->id:'')->latest()->get();
        return view('frontEnd.layouts.pages.track', compact('parcel','notes'));
    }
    public function coverage(Request $request){
        $coverages = District::where('status',1)->with('areas');
        if ($request->keyword) {
            $coverages = $coverages->where('name', 'LIKE', '%' . $request->keyword . '%')
                ->orWhereHas('areas', function($query) use ($request) {
                    $query->where('area_name', 'LIKE', '%' . $request->keyword . '%');
                });
        }
        $coverages = $coverages->get();
        return view('frontEnd.layouts.pages.coverage', compact('coverages'));
    }
    public function about_us(Request $request){
        $about      = About::where('status',1)->limit(1)->get();
        $mission    = MissionVission::where(['status'=>1,'category'=>1])->limit(1)->get();
        $vission    = MissionVission::where(['status'=>1,'category'=>2])->limit(1)->get();
        $counters   = Counter::where(['status'=>1])->limit(4)->get();
        $feedbacks  = ClientFeedback::where(['status'=>1])->limit(10)->get();
        return view('frontEnd.layouts.pages.about_us', compact('about','mission','vission','counters','feedbacks'));
    }
    public function pricing(Request $request){
        $areas = DB::table('thanas')->select('id','name','status')->where('status',1)->get();
        $servicetypes = $this->servicetypes();
        return view('frontEnd.layouts.pages.pricing',compact('areas','servicetypes'));
    }
    public function cost_calculate(Request $request){
        $pricing = DeliveryCharge::where(['service_id'=>$request->service_id,'zone_id'=>$request->zone_id])->first();
        if($request->weight > 1){
            $extra_charge = ($request->weight - 1)*20;
        }else{
            $extra_charge = 0;
        }
        $delivery_charge = $pricing->amount+$extra_charge;
        $cod_charge =  0;
        $cod_amount = $request->cod;
        return response()->json(['status'=>'success','delivery_charge'=>$delivery_charge,'cod_charge'=>$cod_charge,'cod_amount'=>$cod_amount]);
    }
    public function faq(Request $request){
        $faqs = Faq::where(['status'=>1])->get();
        return view('frontEnd.layouts.pages.faq',compact('faqs'));
    }
    public function contact(Request $request){
        return view('frontEnd.layouts.pages.contact');
    }
    public function page($slug)
    {
        $details = Createpage::where(['slug' => $slug, 'status' => 1])
            ->firstOrFail();
        return view('frontEnd.layouts.pages.page', compact('details'));
    }
    public function parcel_create(){
        $districts = $this->districts();
        $servicetypes = $this->servicetypes();
        return view('frontEnd.layouts.pages.parcel_create', compact('districts','servicetypes'));
    }

    public function ajax_district(Request $request) {
        if($request->id == 1 || $request->id == 2){
            $districts = District::where(['id' => 1])->pluck('name', 'id');
        }else{
             $districts = District::whereNotIn('id',[1,2])->pluck('name', 'id');
        }
        return response()->json($districts);
    }
    public function ajax_area(Request $request)
    {
        $areas = Thana::where(['district_id' => $request->id]);
        if($request->zone_id){
          $areas  = $areas->where('zone_id',$request->zone_id);
        }
        $areas = $areas->pluck('name', 'id');

        return response()->json($areas);
    }
    public function ajax_zone(Request $request)
    {

        $services = DeliveryCharge::where(['service_id' => $request->id])->get();
        $zones = [];
        foreach($services as $service) {
            $zones[] = [
                'id' => $service->zone->id,
                'name' => $service->zone->name
            ];
        }
        return response()->json($zones);
    }
    public function ajax_subcategory(Request $request)
    {
        $subcategories = Subcategory::where("category_id", $request->id)
            ->pluck('name', 'id');
        return response()->json($subcategories);
    }
    public function parcel_store(Request $request){
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string',
            'service_id' => 'required',
            'zone_id' => 'required',
            'cod' => 'required|numeric',
            'weight' => 'required|numeric',

        ]);
        $pricing = DeliveryCharge::where(['service_id'=>$request->service_id,'zone_id'=>$request->zone_id])->first();
       
        if($request->weight > 1){
            $extra_charge = ($request->weight - 1)*20;
        }else{
            $extra_charge = 0;
        }
        $delivery_charge = $pricing->amount+$extra_charge;
        $cod_charge =  0;
        $cod_amount = $request->cod;
        $payable_amount = $request->cod - ($delivery_charge+$cod_charge);

        $merchant = Merchant::where('shop_id',$request->merchant_id)->first();

        // return $request->all();
        $store_data = new Parcel();
        $store_data->merchant_id = $merchant->id;
        $store_data->parcel_id = $this->parcelIdGenerate();
        $store_data->service_id = $request->service_id;
        $store_data->zone_id = $request->zone_id;
        $store_data->name = $request->name;
        $store_data->phone = $request->phone;
        $store_data->address = $request->address;
        $store_data->district_id = $request->district?$request->district : null;
        $store_data->area_id = $request->area?$request->area : null;
        $store_data->weight = $request->weight;
        $store_data->cod = $cod_amount;
        $store_data->cod_charge = $cod_charge;
        $store_data->delivery_charge = $delivery_charge;
        $store_data->payable_amount= $payable_amount;
        $store_data->merchant_invoice = $request->merchant_invoice;
        $store_data->note = $request->note;
        $store_data->payment_status = 'unpaid';
        $store_data->status = 1;
        $store_data->save();

        $note = new ParcelNote();
        $note->parcel_id = $store_data->id;
        $note->note = "Parcel added by Merchant(Website)";
        $note->save();

        Toastr::success('message', 'Your parcel create successfully!');
        return redirect()->back();
    }
    function parcelIdGenerate(){
        do {
            $uniqueId = 'GC'.date('dmy').Str::upper(Str::random(6));
            $exists = Parcel::where('parcel_id', $uniqueId)->exists();
        }while ($exists);

        return $uniqueId;
    }
}
