@extends('layouts.main')

@section('title', 'Все товары')

@section('content')
    <main class="py-16 lg:py-20">
        <div class="container">

            <!-- Breadcrumbs -->
            <ul class="breadcrumbs flex flex-wrap gap-y-1 gap-x-4 mb-6">
                <li><a href="index.html" class="text-body hover:text-pink text-xs">Главная</a></li>
                <li><a href="catalog.html" class="text-body hover:text-pink text-xs">Каталог</a></li>
                <li><span class="text-body text-xs">Мыши</span></li>
            </ul>

            <section>
                <!-- Section heading -->
                <h2 class="text-lg lg:text-[42px] font-black">Категории</h2>

                <!-- Categories -->
                <div class="grid grid-cols-2 sm:grid-cols-3 xl:grid-cols-5 gap-3 sm:gap-4 md:gap-5 mt-8">
                    <a href="catalog.html" class="pointer-events-none p-3 sm:p-4 2xl:p-6 rounded-xl bg-purple text-xxs sm:text-xs lg:text-sm text-white font-semibold">Мыши</a>
                    <a href="catalog.html" class="p-3 sm:p-4 2xl:p-6 rounded-xl bg-card hover:bg-pink text-xxs sm:text-xs lg:text-sm text-white font-semibold">Клавиатуры</a>
                    <a href="catalog.html" class="p-3 sm:p-4 2xl:p-6 rounded-xl bg-card hover:bg-pink text-xxs sm:text-xs lg:text-sm text-white font-semibold">Наушники</a>
                    <a href="catalog.html" class="p-3 sm:p-4 2xl:p-6 rounded-xl bg-card hover:bg-pink text-xxs sm:text-xs lg:text-sm text-white font-semibold">Поверхности</a>
                    <a href="catalog.html" class="p-3 sm:p-4 2xl:p-6 rounded-xl bg-card hover:bg-pink text-xxs sm:text-xs lg:text-sm text-white font-semibold">Мониторы</a>
                    <a href="catalog.html" class="p-3 sm:p-4 2xl:p-6 rounded-xl bg-card hover:bg-pink text-xxs sm:text-xs lg:text-sm text-white font-semibold">Геймпады</a>
                    <a href="catalog.html" class="p-3 sm:p-4 2xl:p-6 rounded-xl bg-card hover:bg-pink text-xxs sm:text-xs lg:text-sm text-white font-semibold">Консоли</a>
                    <a href="catalog.html" class="p-3 sm:p-4 2xl:p-6 rounded-xl bg-card hover:bg-pink text-xxs sm:text-xs lg:text-sm text-white font-semibold">Акустика</a>
                    <a href="catalog.html" class="p-3 sm:p-4 2xl:p-6 rounded-xl bg-card hover:bg-pink text-xxs sm:text-xs lg:text-sm text-white font-semibold">Аксесуары</a>
                    <a href="catalog.html" class="p-3 sm:p-4 2xl:p-6 rounded-xl bg-card hover:bg-pink text-xxs sm:text-xs lg:text-sm text-white font-semibold">Распродажа</a>
                </div>
            </section>

            <section class="mt-16 lg:mt-24">
                <!-- Section heading -->
                <h2 class="text-lg lg:text-[42px] font-black">Каталог товаров</h2>

                <div class="flex flex-col lg:flex-row gap-12 lg:gap-6 2xl:gap-8 mt-8">

                    <!-- Filters -->
                    <aside class="basis-2/5 xl:basis-1/4">
                        <form class="overflow-auto max-h-[320px] lg:max-h-[100%] space-y-10 p-6 2xl:p-8 rounded-2xl bg-card">
                            <!-- Filter item -->
                            <div>
                                <h5 class="mb-4 text-sm 2xl:text-md font-bold">Цена</h5>
                                <div class="flex items-center justify-between gap-3 mb-2">
                                    <span class="text-body text-xxs font-medium">От, ₽</span>
                                    <span class="text-body text-xxs font-medium">До, ₽</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <input type="number" class="w-full h-12 px-4 rounded-lg border border-body/10 focus:border-pink focus:shadow-[0_0_0_3px_#EC4176] bg-white/5 text-white text-xs shadow-transparent outline-0 transition" value="9800" placeholder="От">
                                    <span class="text-body text-sm font-medium">–</span>
                                    <input type="number" class="w-full h-12 px-4 rounded-lg border border-body/10 focus:border-pink focus:shadow-[0_0_0_3px_#EC4176] bg-white/5 text-white text-xs shadow-transparent outline-0 transition" value="142800" placeholder="До">
                                </div>
                            </div>
                            <!-- Filter item -->
                            <div>
                                <h5 class="mb-4 text-sm 2xl:text-md font-bold">Бренд</h5>
                                <div class="form-checkbox">
                                    <input type="checkbox" id="filters-item-1">
                                    <label for="filters-item-1" class="form-checkbox-label">Steelseries</label>
                                </div>
                                <div class="form-checkbox">
                                    <input type="checkbox" id="filters-item-2">
                                    <label for="filters-item-2" class="form-checkbox-label">Razer</label>
                                </div>
                                <div class="form-checkbox">
                                    <input type="checkbox" id="filters-item-3">
                                    <label for="filters-item-3" class="form-checkbox-label">Logitech</label>
                                </div>
                                <div class="form-checkbox">
                                    <input type="checkbox" id="filters-item-4">
                                    <label for="filters-item-4" class="form-checkbox-label">HyperX</label>
                                </div>
                                <div class="form-checkbox">
                                    <input type="checkbox" id="filters-item-5">
                                    <label for="filters-item-5" class="form-checkbox-label">Playstation</label>
                                </div>
                                <div class="form-checkbox">
                                    <input type="checkbox" id="filters-item-6">
                                    <label for="filters-item-6" class="form-checkbox-label">XBOX</label>
                                </div>
                            </div>
                            <!-- Filter item -->
                            <div>
                                <h5 class="mb-4 text-sm 2xl:text-md font-bold">Цвет</h5>
                                <div class="form-checkbox">
                                    <input type="checkbox" id="filters-item-9">
                                    <label for="filters-item-9" class="form-checkbox-label">Белый</label>
                                </div>
                                <div class="form-checkbox">
                                    <input type="checkbox" id="filters-item-10">
                                    <label for="filters-item-10" class="form-checkbox-label">Чёрный</label>
                                </div>
                                <div class="form-checkbox">
                                    <input type="checkbox" id="filters-item-11">
                                    <label for="filters-item-11" class="form-checkbox-label">Желтый</label>
                                </div>
                                <div class="form-checkbox">
                                    <input type="checkbox" id="filters-item-12">
                                    <label for="filters-item-12" class="form-checkbox-label">Розовый</label>
                                </div>
                                <div class="form-checkbox">
                                    <input type="checkbox" id="filters-item-13">
                                    <label for="filters-item-13" class="form-checkbox-label">Красный</label>
                                </div>
                                <div class="form-checkbox">
                                    <input type="checkbox" id="filters-item-14">
                                    <label for="filters-item-14" class="form-checkbox-label">Серый</label>
                                </div>
                            </div>
                            <!-- Filter item -->
                            <div>
                                <h5 class="mb-4 text-sm 2xl:text-md font-bold">Подсветка</h5>
                                <div class="form-checkbox">
                                    <input type="checkbox" id="filters-item-7">
                                    <label for="filters-item-7" class="form-checkbox-label">Без подсветки</label>
                                </div>
                                <div class="form-checkbox">
                                    <input type="checkbox" id="filters-item-8">
                                    <label for="filters-item-8" class="form-checkbox-label">З подсветкой</label>
                                </div>
                            </div>
                            <div>
                                <button type="reset" class="w-full !h-16 btn btn-outline">Сбросить фильтры</button>
                            </div>
                        </form>
                    </aside>

                    <div class="basis-auto xl:basis-3/4">
                        <!-- Sort by -->
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
                            <div class="flex items-center gap-4">
                                <div class="flex items-center gap-2">
                                    <a href="catalog.html" class="pointer-events-none inline-flex items-center justify-center w-10 h-10 rounded-md bg-card text-pink">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 52 52">
                                            <path fill-rule="evenodd" d="M2.6 28.6h18.2a2.6 2.6 0 0 1 2.6 2.6v18.2a2.6 2.6 0 0 1-2.6 2.6H2.6A2.6 2.6 0 0 1 0 49.4V31.2a2.6 2.6 0 0 1 2.6-2.6Zm15.6 18.2v-13h-13v13h13ZM31.2 0h18.2A2.6 2.6 0 0 1 52 2.6v18.2a2.6 2.6 0 0 1-2.6 2.6H31.2a2.6 2.6 0 0 1-2.6-2.6V2.6A2.6 2.6 0 0 1 31.2 0Zm15.6 18.2v-13h-13v13h13ZM31.2 28.6h18.2a2.6 2.6 0 0 1 2.6 2.6v18.2a2.6 2.6 0 0 1-2.6 2.6H31.2a2.6 2.6 0 0 1-2.6-2.6V31.2a2.6 2.6 0 0 1 2.6-2.6Zm15.6 18.2v-13h-13v13h13ZM2.6 0h18.2a2.6 2.6 0 0 1 2.6 2.6v18.2a2.6 2.6 0 0 1-2.6 2.6H2.6A2.6 2.6 0 0 1 0 20.8V2.6A2.6 2.6 0 0 1 2.6 0Zm15.6 18.2v-13h-13v13h13Z" clip-rule="evenodd"/>
                                        </svg>
                                    </a>
                                    <a href="catalog-list.html" class="inline-flex items-center justify-center w-10 h-10 rounded-md bg-card text-white hover:text-pink">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 52 52">
                                            <path fill-rule="evenodd" d="M7.224 4.875v4.694h37.555V4.875H7.224ZM4.877.181a2.347 2.347 0 0 0-2.348 2.347v9.389a2.347 2.347 0 0 0 2.348 2.347h42.25a2.347 2.347 0 0 0 2.347-2.347v-9.39A2.347 2.347 0 0 0 47.127.182H4.877Zm2.347 23.472v4.694h37.555v-4.694H7.224Zm-2.347-4.695a2.347 2.347 0 0 0-2.348 2.348v9.389a2.347 2.347 0 0 0 2.348 2.347h42.25a2.347 2.347 0 0 0 2.347-2.348v-9.388a2.347 2.347 0 0 0-2.347-2.348H4.877ZM7.224 42.43v4.695h37.555v-4.694H7.224Zm-2.347-4.694a2.347 2.347 0 0 0-2.348 2.347v9.39a2.347 2.347 0 0 0 2.348 2.346h42.25a2.347 2.347 0 0 0 2.347-2.347v-9.389a2.347 2.347 0 0 0-2.347-2.347H4.877Z" clip-rule="evenodd"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="text-body text-xxs sm:text-xs">Найдено: 25 товаров</div>
                            </div>
                            <div class="flex flex-col sm:flex-row sm:items-center gap-3">
                                <span class="text-body text-xxs sm:text-xs">Сортировать по</span>
                                <form>
                                    <select class="form-select w-full h-12 px-4 rounded-lg border border-body/10 focus:border-pink focus:shadow-[0_0_0_3px_#EC4176] bg-white/5 text-white text-xxs sm:text-xs shadow-transparent outline-0 transition">
                                        <option value="умолчанию" class="text-dark">умолчанию</option>
                                        <option value="умолчанию" class="text-dark">от дешевых к дорогим</option>
                                        <option value="умолчанию" class="text-dark">от дорогих к дешевым</option>
                                        <option value="умолчанию" class="text-dark">наименованию</option>
                                    </select>
                                </form>
                            </div>
                        </div>

                        <!-- Products list -->
                        <div class="products grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-x-6 2xl:gap-x-8 gap-y-8 lg:gap-y-10 2xl:gap-y-12">
                            <!-- Product card -->
                            <div class="product-card flex flex-col rounded-3xl bg-card">
                                <a href="product.html" class="product-card-photo overflow-hidden h-[320px] rounded-3xl">
                                    <img src="{{Vite::asset('/resources/images/products/2.jpg')}}" class="object-cover w-full h-full" alt="SteelSeries Sensei Ten">
                                </a>
                                <div class="grow flex flex-col py-8 px-6">
                                    <h3 class="text-sm lg:text-md font-black"><a href="product.html" class="inline-block text-white hover:text-pink">SteelSeries Sensei Ten</a></h3>
                                    <div class="mt-auto pt-6">
                                        <div class="mb-3 text-sm font-semibold">43 900 ₽</div>
                                        <div class="flex flex-wrap items-center gap-4">
                                            <a href="#" class="w-[56px] !h-[56px] !px-0 btn btn-pink">
                                                <!-- <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 52 52">
                                                    <path d="M39.385 38.663a6.047 6.047 0 1 0 6.041 6.053v-.006a6.053 6.053 0 0 0-6.041-6.047ZM50.11 9.706a2.329 2.329 0 0 0-.439-.042H12.852l-.583-3.902a5.248 5.248 0 0 0-5.196-4.519h-4.74a2.332 2.332 0 1 0 0 4.665h4.746a.583.583 0 0 1 .583.513l3.592 24.62a6.45 6.45 0 0 0 6.35 5.447H41.87a6.414 6.414 0 0 0 6.292-5.126l3.796-18.923a2.333 2.333 0 0 0-1.847-2.733ZM24.571 44.45a6.047 6.047 0 0 0-6.062-5.782 6.047 6.047 0 0 0 .14 12.089h.146a6.047 6.047 0 0 0 5.776-6.306Z"/>
                                                </svg> -->
                                                ...
                                            </a>
                                            <a href="#" class="w-[56px] !h-[56px] !px-0 btn btn-purple" title="В избранное">
                                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 52 52">
                                                    <path d="M26 48.486c-.263 0-.526-.067-.762-.203-.255-.148-6.336-3.679-12.504-8.998-3.656-3.153-6.574-6.28-8.673-9.295C1.344 26.09-.022 22.338 0 18.84c.025-4.072 1.483-7.901 4.106-10.782 2.667-2.93 6.226-4.544 10.021-4.544 4.865 0 9.312 2.725 11.872 7.042 2.56-4.317 7.007-7.042 11.872-7.042 3.586 0 7.007 1.456 9.634 4.1 2.883 2.9 4.52 7 4.494 11.245-.022 3.493-1.414 7.24-4.137 11.134-2.105 3.013-5.02 6.14-8.66 9.291-6.146 5.32-12.183 8.85-12.437 8.997a1.524 1.524 0 0 1-.766.206ZM14.128 6.56c-2.927 0-5.686 1.26-7.768 3.548-2.115 2.324-3.292 5.431-3.313 8.75-.042 6.606 6.308 13.483 11.642 18.09 4.712 4.068 9.49 7.123 11.308 8.236 1.808-1.115 6.554-4.168 11.246-8.235 5.319-4.61 11.668-11.493 11.71-18.11.022-3.44-1.294-6.749-3.608-9.079-2.05-2.063-4.705-3.2-7.473-3.2-4.658 0-8.847 3.276-10.422 8.152a1.523 1.523 0 0 1-2.9 0C22.976 9.836 18.787 6.56 14.129 6.56Z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.product-card -->
                        </div>

                        <!-- Page pagination -->
                        <div class="mt-12">
                            <ul class="flex flex-wrap items-center justify-center gap-3">
                                <li><a href="#" class="block p-3 pointer-events-none text-pink text-sm font-black leading-none">1</a></li>
                                <li><a href="#" class="block p-3 text-white hover:text-pink text-sm font-black leading-none">2</a></li>
                                <li><a href="#" class="block p-3 text-white hover:text-pink text-sm font-black leading-none">3</a></li>
                                <li><span class="text-body/50 text-sm font-black leading-none">...</span></li>
                                <li><a href="#" class="block p-3 text-white hover:text-pink text-sm font-black leading-none">6</a></li>
                                <li><a href="#" class="block p-3 text-white hover:text-pink text-sm font-black leading-none">7</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main>
@endsection