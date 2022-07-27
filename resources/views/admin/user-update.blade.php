@extends('../layout/' . $layout)

@section('title', $user->name ?? 'Добавить нового пользователя')

@section('subhead')
    <title>Редактирование - {{ $user->name }}</title>
@endsection

@section('subcontent')
    
    @if (session('success'))
    <div class="alert alert-success show mb-2" role="alert">
        {{ __( session()->get('success') ) }}
    </div>
    @endif

    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">@if ( $user ?? '' ){{ 'Обновить ' . $user->name }}@else{{ 'Добавить новый товар' }}@endif</h2>
    </div>
    <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
        <!-- BEGIN: Post Content -->
        <div class="intro-y col-span-12 lg:col-span-8">
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Основное</h2>
                </div>
                <div id="input" class="p-5">
                    <form action="@if ( $user ?? '' ){{ route('user.update', $user->id) }}@else{{ route('user.store') }}@endif" method="post" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="form_type" value="main">
                        <div class="preview">
                            <div class="mb-3">
                                <label for="name" class="form-label">Имя</label>
                                <input id="name" name="name" type="text" class="form-control" placeholder="Имя" value="{{ $user->name ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" name="email" type="text" class="form-control" placeholder="Email" value="{{ $user->email ?? '' }}">
                            </div>
                            <div class="mb-3">
                                <label for="regular-form-1" class="form-label">Пол</label>
                                <select data-placeholder="Выберите пол" class="tom-select w-full" name="gender" id="gender">
                                    <option value="">Выберите пол</option>
                                    <option value="male" @if ( ($user->gender ?? '') == 'male' ){{ 'selected' }}@endif>Мужской</option>
                                    <option value="female" @if ( ($user->gender ?? '') == 'female' ){{ 'selected' }}@endif>Женский</option>
                                    <option value="other" @if ( ($user->gender ?? '') == 'other' ){{ 'selected' }}@endif>Другое</option>
                                </select>
                            </div>
                            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                                <button class="btn btn-primary shadow-md flex items-center">
                                    Сохранить
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END: Post Content -->
        <!-- BEGIN: Post Info -->
        <div class="col-span-12 lg:col-span-4">
            <div class="intro-y box p-5 mb-3">
                <form action="@if ( $user ?? '' ){{ route('user.update', $user->id) }}@else{{ route('user.store') }}@endif" method="post" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="form_type" value="image">
                    <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                        <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                            <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="{{ asset($attach->first()->url ?? '') }}">
                        </div>
                        <div class="ml-5">
                            <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">{{ $user->name }}</div>
                        </div>
                    </div>
                    <div class="mt-5 mb-3">
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                        <button class="btn btn-primary shadow-md flex items-center">
                            Сохранить
                        </button>
                    </div>
                </form>
            </div>
            <div class="intro-y box p-5">
                <form action="@if ( $user ?? '' ){{ route('user.update', $user->id) }}@else{{ route('user.store') }}@endif" method="post" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="form_type" value="password">
                    <div class="mb-3">
                        <label for="password" class="form-label">Пароль</label>
                        <input id="password" name="password" type="password" class="form-control" placeholder="Пароль">
                    </div>
                    <div class="mb-3">
                        <label for="password_repeat" class="form-label">Повторите пароль</label>
                        <input id="password_repeat" name="password_repeat" type="password" class="form-control" placeholder="Повторите пароль">
                    </div>
                    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                        <button class="btn btn-primary shadow-md flex items-center">
                            Сохранить
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- END: Post Info -->
    </div>

@endsection

@section('script')
    <script src="{{ mix('dist/js/ckeditor-classic.js') }}"></script>
@endsection
