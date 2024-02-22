<?php

namespace App\Http\Controllers\Admin;

use App\Http\Filters\Admin\SphereFilter;
use App\Http\Requests\Admin\Sphere\SphereFilterRequest;
use App\Models\Sphere;
use Illuminate\View\View;


class SphereController extends Controller {

    public function __construct()
    {
        $this->middleware('access.admin');
    }

    public function index(SphereFilterRequest $request): View
    {
        $data = $request->validated();

        $filter = app()->make(SphereFilter::class, [
            'queryParams' => $data
        ]);

        $spheres = Sphere::filter($filter)
            ->orderBy('id')
            ->paginate(3);

        return view('admin.spheres.index', [
            'spheres' => $spheres,
        ]);
    }

    public function show()
    {

    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
