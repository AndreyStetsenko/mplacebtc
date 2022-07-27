@extends('../layout/' . $layout)

@section('subhead')
    <title>Товары</title>
@endsection

@section('subcontent')

    @if (session('success'))
    <div class="alert alert-success show mb-2" role="alert">
        {{ __( session()->get('success') ) }}
    </div>
    @endif

    <h2 class="intro-y text-lg font-medium mt-10">Категории</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <div class="intro-y box p-5">
                <h2 class="intro-y text-sm font-bold mb-2">@if ( $category ?? '' ){{ 'Обновить категорию' }}@else{{ 'Создать категорию' }}@endif</h2>
                <hr class="mb-2">
                <form action="@if ( $category ?? '' ){{ route('category.update', $category->id) }}@else{{ route('category.store') }}@endif" method="post">
                    @csrf
                    <div>
                        <label for="name" class="form-label">Название</label>
                        <input id="name" type="text" class="form-control w-full" name="name" value="{{ $category->name ?? '' }}">
                    </div>
                    <div class="mt-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input id="slug" type="text" class="form-control w-full" name="slug" value="{{ $category->slug ?? '' }}">
                    </div>
                    @if ( count($categories) > 0 )
                    <div class="mt-3">
                        <label for="sub" class="form-label">Родительская категория</label>
                        <select data-placeholder="Выберите родительскую категорию" class="tom-select w-full" id="sub" name="sub">
                            <option value="">Выберите категорию</option>
                            @foreach ( $categories as $item )
                            <option value="{{ $item->id }}" @if ( ($category->sub ?? '') == $item->id ){{ 'selected' }}@endif>{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
    
                    <div class="mt-3">
                        <label>Дочерняя категория</label>
                        <div class="form-switch mt-2">
                            <input type="checkbox" class="form-check-input" name="is_child" @if ( ($category->is_child ?? '') == 'on' ){{ 'checked' }}@endif>
                        </div>
                    </div>
                    @endif
                    
                    <div class="text-right mt-5">
                        @if ( $category ?? '' )
                        <a href="{{ route('dashboard.categories') }}" class="btn btn-outline-secondary w-24 mr-1">Отмена</a>
                        @endif
                        <button type="submit" class="btn btn-primary w-24">@if ( $category ?? '' ){{ 'Обновить' }}@else{{ 'Создать' }}@endif</button>
                    </div>
                </form>
            </div>
            <!-- END: Form Layout -->
        </div>

        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
            <div class="intro-y box p-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap">#</th>
                            <th class="whitespace-nowrap">Название</th>
                            <th class="whitespace-nowrap">Slug</th>
                            <th class="whitespace-nowrap"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $categories as $item )
                        <tr>
                            <td class="whitespace-nowrap">{{ $item->id }}</td>
                            <td class="whitespace-nowrap">{{ $item->name }}</td>
                            <td class="whitespace-nowrap">{{ $item->slug }}</td>
                            <td class="whitespace-nowrap">
                                <div class="actions flex">
                                    <a class="flex items-center mr-3" href="{{ route('category.view', $item->id) }}">
                                        <i data-feather="check-square" class="w-4 h-4 mr-1"></i>
                                    </a>
                                    <a class="flex items-center text-danger" href="{{ route('category.destroy', $item->id) }}">
                                        <i data-feather="trash-2" class="w-4 h-4 mr-1"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END: Form Layout -->
        </div>
    </div>
@endsection
