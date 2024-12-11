<?php

namespace App\Http\Controllers;

use App\Http\Requests\CashRegisterRequest;
use App\Http\Resources\CashRegisterResource;
use App\Models\CashRegister;

class CashRegisterController extends Controller
{
    public function index()
    {
        return CashRegisterResource::collection(CashRegister::all());
    }

    public function store(CashRegisterRequest $request)
    {
        $cashRegister = CashRegister::create($request->validated());
        return new CashRegisterResource($cashRegister);
    }

    public function show(CashRegister $cashRegister)
    {
        return new CashRegisterResource($cashRegister);
    }

    public function update(CashRegisterRequest $request, CashRegister $cashRegister)
    {
        $cashRegister->update($request->validated());
        return new CashRegisterResource($cashRegister);
    }

    public function destroy(CashRegister $cashRegister)
    {
        $cashRegister->delete();
        return response()->noContent();
    }
}

