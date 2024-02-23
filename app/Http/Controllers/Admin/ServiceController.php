<?php

namespace App\Http\Controllers\Admin;

use App\Http\Filters\Admin\ServiceFilter;
use App\Http\Requests\Admin\Service\ServiceFilterRequest;
use App\Http\Requests\Admin\Service\ServiceStoreRequest;
use App\Http\Requests\Admin\Service\ServiceUpdateRequest;
use App\Http\Traits\Dictionarable;
use App\Models\Service;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


/**
 * Контроллер работы с услугами
 */
class ServiceController extends Controller {

    use Dictionarable;


    public function __construct()
    {
        $this->middleware('access.admin');
    }

    /**
     * Список услуг
     *
     * @param ServiceFilterRequest $request
     * @return View
     * @throws BindingResolutionException
     */
    public function index(ServiceFilterRequest $request): View
    {
        $data = $request->validated();

        $filter = app()->make(ServiceFilter::class, [
            'queryParams' => array_filter($data)
        ]);

        $services = Service::with('category')
            ->filter($filter)
            ->orderBy('id')
            ->paginate(10);

        return view('admin.services.index', [
            'services' => $services,
            'categories' => $this->categoryList(),
            'spheres' => $this->sphereList(),
        ]);
    }

    /**
     * Информация по услуге
     *
     * @param int $id
     * @return View
     */
    public function show(int $id): View
    {
        $service = Service::with('category')
            ->findOrFail($id);

        return view('admin.services.show', [
            'service' => $service,
        ]);
    }

    /**
     * Форма добавления услуги
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.services.create', [
            'categories' => $this->categoryList(),
            'spheres' => $this->sphereList(),
        ]);
    }

    /**
     * Сохранение новой услуги
     *
     * @param ServiceStoreRequest $request
     * @return RedirectResponse
     */
    public function store(ServiceStoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        Service::create($data);

        return redirect()->route('admin.service.index');
    }

    /**
     * Форма редактирования услуги
     *
     * @param int $id
     * @return View
     */
    public function edit(int $id): View
    {
        $service = Service::findOrFail($id);

        return view('admin.services.edit', [
            'service' => $service,
            'categories' => $this->categoryList(),
            'spheres' => $this->sphereList(),
        ]);
    }

    /**
     * Обновление услуги
     *
     * @param ServiceUpdateRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(ServiceUpdateRequest $request, int $id): RedirectResponse
    {
        $data = $request->validated();

        $service = Service::findOrFail($id);

        $service->update($data);

        return redirect()->route('admin.service.index');
    }

    /**
     * Удалить услугу
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $service = Service::findOrFail($id);

        $service->delete();

        return redirect()->route('admin.service.index');
    }
}
