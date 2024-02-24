@php
    use Illuminate\Support\Str;
@endphp

@extends('admin.layouts.app')

@section('title', __('Сферы'))

@section('content')
    <div class="card bg-primary text-white">
        <div class="card-header">{{ __('Сферы') }}</div>

        <div class="card-body bg-light">
            <!-- Фильтр -->
            <div class="mmot-margin20">
                @include('admin/components/filters/sphere')
            </div>

            <table class="table table-bordered">
                <thead class="table-secondary">
                <tr>
                    <th class="text-center">{{ __('#') }}</th>
                    <th class="text-start">{{ __('Название') }}</th>
                    <th class="text-start">{{ __('Описание раздела') }}</th>
                    <th class="text-end">{{ __('Видимость') }}</th>
                </tr>
                </thead>

                <tbody>
                @forelse($spheres as $sphere)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-start"><a class="text-primary" href="{{ route('admin.sphere.show', $sphere->id) }}">{{ $sphere->title }}</a></td>
                        <td class="text-start">{{ Str::limit($sphere->body, 100, '...') }}</td>
                        <td class="text-end">
                            <form method="post" action="{{ route('admin.sphere.destroy', $sphere->id) }}" class="admin-table__nomargin">
                                @csrf
                                @method('DELETE')

                                <div class="mmot-table__action">
                                    <a href="{{ route('admin.sphere.edit', $sphere->id) }}" class="mmot-table__action__one"><svg class="mmot-table_view mmot-table__ico"><use xlink:href="#site-edit"></use></svg></a>
                                    <button type="submit" class="mmot-table__action__one" onclick="return confirm('{{ __('Вы уверены, что хотите удалить сферу?') }}')"><svg class="mmot-table__delete mmot-table__ico"><use xlink:href="#site-delete"></use></svg></button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">
                            <div class="text-center p-2 mb-2 bg-secondary bg-gradient text-white rounded">{{ __('Сферы отсутствуют') }}</div>
                        </td>
                    </tr>
                @endforelse

                <div>
                    {{ $spheres->withQueryString()->links() }}
                </div>
                </tbody>
            </table>

            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <a href="{{ route('admin.sphere.create') }}" class="btn btn-primary rounded">{{ __('Добавить сферу') }}</a>
            </div>
        </div>
        <div class="card-footer bg-light border-0"></div>
    </div>
@endsection

