@php
    use Illuminate\Support\Str;
    use App\Http\Libs\Helper;
@endphp

@extends('admin.layouts.app')

@section('title', __('Категория') . ' : '. $category->title)

@section('content')
    <div class="card bg-primary text-white">
        <div class="card-header">{{ $category->title }}</div>

        <div class="card-body bg-light">
            <table class="table table-striped table-borderless">
                <tbody>
                    <tr>
                        <th class="text-start">{{ __('Название') }}</th>
                        <td class="text-end">{{ $category->title }}</a></td>
                    </tr>
                    <tr>
                        <th class="text-start">{{ __('Описание') }}</th>
                        <td class="text-start">{{ $category->body }}</a></td>
                    </tr>
                    <tr>
                        <th class="text-start">{{ __('Сфера') }}</th>
                        <td class="text-end">{{ $category->sphere->title }}</a></td>
                    </tr>
                    <tr>
                        <th class="text-start">{{ __('Статус') }}</th>
                        <td class="text-end">{{ __('sphere_status_' . $category->active) }}</td>
                    </tr>
                    <tr>
                        <th class="text-start">{{ __('Дата добавления') }}</th>
                        <td class="text-end">{{ date('d.m.Y', $category->created_at) }}</a></td>
                    </tr>
                </tbody>
            </table>

            <div class="accordion mb-3">
                <div class="accordion-item">
                    <h2 class="accordion-header shadow-sm" id="heading1">
                        <button class="accordion-button bg-light text-secondary collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                            {{ __('Услуги') }}
                        </button>
                    </h2>
                    <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1"
                         data-bs-parent="#accordion1">
                        <div class="accordion-body">
                            <table class="table table-bordered">
                                <thead class="table-secondary">
                                <tr>
                                    <th class="text-center">{{ __('#') }}</th>
                                    <th class="text-start">{{ __('Название') }}</th>
                                    <th class="text-start">{{ __('Описание раздела') }}</th>
                                    <th class="text-end">{{ __('Цена') }}</th>
                                    <th class="text-end">{{ __('Видимость') }}</th>
                                </tr>
                                </thead>

                                <tbody>
                                @forelse($category->services as $service)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-start"><a class="text-primary" href="{{ route('admin.service.show', $service->id) }}">{{ $service->title }}</a></td>
                                        <td class="text-start">{{ Str::limit($service->body, 100, '...') }}</td>
                                        <td class="text-end">{{ Helper::getServicePrice($service) }}</td>
                                        <td class="text-end">
                                            <form method="post" action="{{ route('admin.service.destroy', $service->id) }}" class="admin-table__nomargin">
                                                @csrf
                                                @method('DELETE')

                                                <div class="mmot-table__action">
                                                    <a href="{{ route('admin.service.edit', $service->id) }}" class="mmot-table__action__one"><svg class="mmot-table_view mmot-table__ico"><use xlink:href="#site-edit"></use></svg></a>
                                                    <button type="submit" class="mmot-table__action__one" onclick="return confirm('{{ __('Вы уверены, что хотите удалить услугу?') }}')"><svg class="mmot-table__delete mmot-table__ico"><use xlink:href="#site-delete"></use></svg></button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">
                                            <div class="text-center p-2 mb-2 bg-secondary bg-gradient text-white rounded">{{ __('Категории отсутствуют') }}</div>
                                        </td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <form method="post" action="{{ route('admin.category.destroy', $category->id) }}">
                @csrf
                @method('DELETE')

                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <a href="{{ route('admin.category.index') }}" class="btn btn-secondary me-1 rounded">{{ __('Список') }}</a>
                    <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-warning me-1 rounded">{{ __('Изменить') }}</a>
                    <button type="submit" onclick="return confirm('{{ __('Вы уверены, что хотите удалить категорию?') }}')" class="btn btn-danger me-1 rounded">{{ __('Удалить') }}</button>
                    <a href="{{ route('admin.category.create') }}" class="btn btn-primary rounded">{{ __('Добавить категорию') }}</a>
                </div>
            </form>
        </div>
        <div class="card-footer bg-light border-0"></div>
    </div>
@endsection

