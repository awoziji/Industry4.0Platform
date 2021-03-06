<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    public function company()
    {
        return $this->belongsTo(company::class);
    }

    public function immediateData()
    {
    	return $this->hasOne(immediateData::class);
    }

    public function utilizations()
    {
    	return $this->hasMany(utilization::class);
    }

    public function utilizationsByOrderId($order_id)
    {
        return $this->utilizations->where("order_id",(int)$order_id);
    }

    public function latestOrder(){
        $utilization =  $this->utilizations->sortByDesc('created_at');
        $latestUtilization = $utilization->first();
        if($latestUtilization){
            $order = $latestUtilization->order;
            return $order;
        }else{
            return '';
        }
    }

    public function allOrders(){
        $orders = DB::table('utilizations')
             ->select(DB::raw('name,itemType'))
             ->join('orders', 'utilizations.order_id', '=', 'orders.id')
             ->where('machine_id',$this->id)
             ->groupBy('order_id')
             ->get();
        return $orders;
    }

}
