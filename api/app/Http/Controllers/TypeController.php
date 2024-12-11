<?php

namespace App\Http\Controllers;

use App\Http\Requests\TypeRequest;
use App\Http\Resources\TypeResource;
use App\Models\Type;

class TypeController extends Controller
{
    public function index()
    {
        return TypeResource::collection(Type::all());
    }

    public function store(TypeRequest $request)
    {
        $type = Type::create($request->validated());
        return new TypeResource($type);
    }

    public function show(Type $type)
    {
        return new TypeResource($type);
    }


    public function destroy(Type $type)
    {
        $type->delete();
        return response()->noContent();
    }
}

