@php
    use Illuminate\Support\Str;
@endphp

@extends('admin.layouts.app')

@section('title', __('Сферы'))

@section('content')
    <div class="card bg-primary text-white">
        <div class="card-header">{{ __('Категории') }}</div>

        <div class="card-body bg-light">
            <!-- Фильтр -->
            <div class="mmot-margin20">
                @include('admin/components/filters/category')
            </div>

            <table class="table table-bordered">
                <thead class="table-secondary">
                <tr>
                    <th class="text-center">{{ __('#') }}</th>
                    <th class="text-start">{{ __('Название') }}</th>
                    <th class="text-start">{{ __('Описание раздела') }}</th>
                    <th class="text-start">{{ __('Сфера') }}</th>
                    <th class="text-center">{{ __('Видимость') }}</th>
                    <th class="text-end">{{ __('UD') }}</th>
                </tr>
                </thead>

                <tbody>
                @forelse($categories as $category)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-start"><a class="text-primary" href="{{ route('admin.category.show', $category->id) }}">{{ $category->title }}</a></td>
                        <td class="text-start">{!! Str::limit($category->body, 100, '...') !!}</td>
                        <td class="text-start">{{ $category->sphere->title }}</td>
                        <td class="text-center">{{ $category->active > 0 ? 'Активна' : 'Отключена' }}</td>
                        <td class="text-end">
                            <form method="post" action="{{ route('admin.category.destroy', $category->id) }}" class="admin-table__nomargin">
                                @csrf
                                @method('DELETE')

                                <div class="mmot-table__action">
                                    <a href="{{ route('admin.category.edit', $category->id) }}" class="mmot-table__action__one"><svg class="mmot-table_view mmot-table__ico"><use xlink:href="#site-edit"></use></svg></a>
                                    <button type="submit" class="mmot-table__action__one" onclick="return confirm('{{ __('Вы уверены, что хотите удалить категорию?') }}')"><svg class="mmot-table__delete mmot-table__ico"><use xlink:href="#site-delete"></use></svg></button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">
                            <div class="text-center p-2 mb-2 bg-secondary bg-gradient text-white rounded">{{ __('Категории отсутствуют') }}</div>
                        </td>
                    </tr>
                @endforelse

                <div>
                    {{ $categories->withQueryString()->links() }}
                </div>
                </tbody>
            </table>

            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <a href="{{ route('admin.category.create') }}" class="btn btn-primary rounded">{{ __('Добавить категорию') }}</a>
            </div>
        </div>
        <div class="card-footer bg-light border-0"></div>
    </div>
@endsection

