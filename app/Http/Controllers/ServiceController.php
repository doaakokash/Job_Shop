<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Requests\StoreServiceRequest; // يجب استيراد هذا
use App\Http\Resources\ServiceResource; // يجب استيراد هذا

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ServiceResource::collection(
            Service::with(['user', 'category'])->paginate(10)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request) // استخدام النموذج الصحيح للطلب
    {
        $service = Service::create($request->validated());
        return new ServiceResource($service->load(['user', 'category']));
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return new ServiceResource($service->load(['user', 'category']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        // يجب إضافة الكود هنا
        $service->update($request->all());
        return new ServiceResource($service->load(['user', 'category']));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        // يجب إضافة الكود هنا
        $service->delete();
        return response()->json(null, 204); // 204 No Content
    }
}