<?php
namespace App\Imports;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\District;
use App\Models\Thana;
use App\Models\Parcel;
use App\Models\DeliveryCharge;
use Carbon\Carbon;
use Str;
use Auth;
class ParcelImport implements ToCollection,WithHeadingRow
{
    protected $request;
    public function __construct($request)
    {
        $this->request = $request;
    }
    function parcelIdGenerate(){
      do {
          $uniqueId = 'GC'.date('dmy').Str::upper(Str::random(6));
          $exists = Parcel::where('parcel_id', $uniqueId)->exists();
      }while ($exists);

      return $uniqueId;
    }

  public function collection(Collection $rows){
        foreach ($rows->toArray() as $key=>$row){
       
           $firstRow = $rows->first();
            if (!isset($firstRow['name'])) {
                notify()->error('Your Excel file is incorrect, please check it.');
                return;
            }

            $pricing = DeliveryCharge::where(['service_id'=>$row['type'],'zone_id'=>$row['zone']])->first();
            if($row['weight'] > 1){
                $extra_charge = ($row['weight'] - 1)*20;
            }else{
                $extra_charge = 0;
            }
            $delivery_charge = $pricing->amount+$extra_charge;
            $cod_charge =  0;
            $cod_amount = $row['cod'];
            $payable_amount = $row['cod'] - ($delivery_charge+$cod_charge);


           if($pricing){
              $store_data               = new Parcel();
              $store_data->merchant_id  = Auth::guard('merchant')->user()->id;
              $store_data->parcel_id    = $this->parcelIdGenerate();
              $store_data->name         = $row['name'];
              $store_data->phone        = $row['phone'];
              $store_data->address      = $row['address'];
              $store_data->service_id  = $row['type'];
              $store_data->zone_id  = $row['zone'];
              $store_data->weight       = $row['weight'];
              $store_data->cod          = $cod_amount;
              $store_data->cod_charge   = $cod_charge;
              $store_data->delivery_charge = $delivery_charge;
              $store_data->payable_amount = $payable_amount;
              $store_data->note = $row['note'];
              $store_data->payment_status = 'unpaid';
              $store_data->status = 1;
              $store_data->save();
           }
        }
    }

}
