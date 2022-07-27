@extends('../layout/' . $layout)

@section('title', $product->title ?? 'Добавить новый товар')

@section('subhead')
    <title>Редактирование - {{ $product->title }}</title>
@endsection

@section('subcontent')
    
    @if (session('success'))
    <div class="alert alert-success show mb-2" role="alert">
        {{ __( session()->get('success') ) }}
    </div>
    @endif

    <form action="@if ( $product ?? '' ){{ route('product.update', $product->id) }}@else{{ route('product.store') }}@endif" method="post" enctype="multipart/form-data">
        @csrf
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">@if ( $product ?? '' ){{ 'Обновить ' . $product->title }}@else{{ 'Добавить новый товар' }}@endif</h2>
            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                <button class="btn btn-primary shadow-md flex items-center">
                    Сохранить
                </button>
            </div>
        </div>
        <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
            <!-- BEGIN: Post Content -->
            <div class="intro-y col-span-12 lg:col-span-8">
                <input type="text" class="intro-y form-control py-3 px-4 box pr-10" name="title" id="title" placeholder="Название товара" value="{{ $product->title ?? '' }}">
                <div class="post intro-y overflow-hidden box mt-5">
                    <div class="post__content">
                        <div id="content" class="p-5">
                            <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5" id="description">
                                <div class="font-medium flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                                    Описание товара
                                </div>
                                <div class="mt-5">
                                    <textarea name="description" class="editor">{{ $product->description ?? '' }}</textarea>
                                </div>
                            </div>
                            <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5 mt-5">
                                <div class="font-medium flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                                    Дополнительно
                                </div>
                                <div class="mt-5">
                                    <div>
                                        <label for="post-form-7" class="form-label">Короткое описание</label>
                                        <input id="post-form-7" type="text" class="form-control" name="shortDescription" id="shortDescription" placeholder="" value="{{ $product->short_description ?? '' }}">
                                    </div>
                                    <div class="mt-3">
                                        <label class="form-label">Добавить изображение товара</label>
                                        <div class="border-2 border-dashed dark:border-darkmode-400 rounded-md pt-4" id="dropzone">
                                            <div class="flex flex-wrap px-4">

                                                @foreach ( $attach as $item )
                                                <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                                    <img class="rounded-md" alt="Rubick Tailwind HTML Admin Template" src="{{ asset($item->url) }}">
                                                    <a href="{{ route('product.destroy-attach', [$product->id, $item->id]) }}" title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2">
                                                        <i data-feather="x" class="w-4 h-4"></i>
                                                    </a>
                                                </div>
                                                @endforeach

                                            </div>
                                            <div class="px-4 pb-4 flex items-center cursor-pointer relative">
                                                <i data-feather="image" class="w-4 h-4 mr-2"></i> Нажмите чтобы выбрать изображения
                                                <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0" name="images" id="images">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Post Content -->
            <!-- BEGIN: Post Info -->
            <div class="col-span-12 lg:col-span-4">
                <div class="intro-y box p-5">
                    <div>
                        <label class="form-label">Автор</label>
                        <select class="form-select" name="author" id="author">
                            @foreach ($users as $item)
                                <option @if ($item->id == ($product->user_author ?? Auth::user()->id)) selected @endif value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="post-form-2" class="form-label">Дата публикации</label>
                        <input type="text" class="datepicker form-control" id="post-form-2" data-single-mode="true" value="{{ $product->created_at ?? $nowDate['date'] }}">
                    </div>
                    <div class="mt-3">
                        <label for="post-form-2" class="form-label">Время публикации</label>
                        <input type="time" class="form-control" id="post-form-2" data-single-mode="true" value="{{ $product->created_at ?? $nowDate['time'] }}">
                    </div>
                    <div class="mt-3">
                        <label for="post-form-3" class="form-label">Категории</label>
                        <select data-placeholder="Select categories" class="tom-select w-full" id="post-form-3" name="categories">
                            <option value="">Выберите категорию</option>
                            @if ( $product ?? '' )
                                @foreach ( $categories as $item )
                                <option value="{{ $item->id }}" @if ( ($product->categories->last()->id ?? '') == $item->id ?? '' ){{ 'selected' }}@endif>{{ $item->name }}</option>
                                @endforeach
                            @else
                                @foreach ( $categories as $item )
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-check form-switch flex flex-col items-start mt-3">
                        <label for="post-form-5" class="form-check-label ml-0 mb-2">Опубликовано</label>
                        <input id="post-form-5" class="form-check-input" type="checkbox" name="published" id="published" checked>
                    </div>
                </div>
    
                <div class="intro-y box p-5 mt-2">
    
                    <div>
                        <label for="price" class="form-label">Цена</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ $product->price ?? '' }}">
                    </div>
    
                    <div class="mt-3">
                        <label for="price" class="form-label">Акционная цена</label>
                        <input type="text" class="form-control" id="price_sale" name="price_sale" value="{{ $product->price_sale ?? '' }}">
                    </div>
    
                </div>
            </div>
            <!-- END: Post Info -->
        </div>
    </form>
@endsection

@section('script')
    <script src="{{ mix('dist/js/ckeditor-classic.js') }}"></script>
@endsection
