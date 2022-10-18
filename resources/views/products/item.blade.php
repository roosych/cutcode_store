@extends('layouts.main')

@section('title', 'Товар')

@section('content')
    <main class="py-16 lg:py-20">
        <div class="container">

            <!-- Breadcrumbs -->
            <ul class="breadcrumbs flex flex-wrap gap-y-1 gap-x-4 mb-6">
                <li><a href="/" class="text-body hover:text-pink text-xs">Главная</a></li>
                <li><a href="catalog.html" class="text-body hover:text-pink text-xs">Каталог</a></li>
                <li><a href="catalog.html" class="text-body hover:text-pink text-xs">Мыши</a></li>
                <li><span class="text-body text-xs">SteelSeries Aerox 3 Snow</span></li>
            </ul>

            <!-- Main product -->
            <section class="flex flex-col lg:flex-row gap-10 xl:gap-14 2xl:gap-20 mt-12">

                <div class="basis-full lg:basis-2/5 xl:basis-2/4">
                    <div class="overflow-hidden h-auto max-h-[620px] lg:h-[480px] xl:h-[620px] rounded-3xl">
                        <img src="{{Vite::asset('/resources/images/products/1.jpg')}}" class="object-cover w-full h-full" alt="SteelSeries Aerox 3 Snow">
                    </div>
                </div>

                <div class="basis-full lg:basis-3/5 xl:basis-2/4">
                    <div class="grow flex flex-col lg:py-8">
                        <h1 class="text-lg md:text-xl xl:text-[42px] font-black">SteelSeries Aerox 3 Snow</h1>
                        <ul class="flex items-center gap-2 mt-4">
                            <li class="text-[#FFC107]">
                                <svg class="w-4 md:w-6 h-4 md:h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 52 52">
                                    <path d="M51.864 19.948a2.758 2.758 0 0 0-2.379-1.9l-15.008-1.363-5.935-13.89a2.765 2.765 0 0 0-5.083.002l-5.935 13.888-15.011 1.363a2.763 2.763 0 0 0-2.377 1.9 2.76 2.76 0 0 0 .808 2.936l11.345 9.95L8.944 47.57a2.763 2.763 0 0 0 1.074 2.853 2.753 2.753 0 0 0 3.036.133L26 42.818l12.942 7.738a2.765 2.765 0 0 0 4.113-2.986l-3.346-14.736 11.345-9.948a2.765 2.765 0 0 0 .81-2.938Z"/>
                                </svg>
                            </li>
                            <li class="text-[#FFC107]">
                                <svg class="w-4 md:w-6 h-4 md:h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 52 52">
                                    <path d="M51.864 19.948a2.758 2.758 0 0 0-2.379-1.9l-15.008-1.363-5.935-13.89a2.765 2.765 0 0 0-5.083.002l-5.935 13.888-15.011 1.363a2.763 2.763 0 0 0-2.377 1.9 2.76 2.76 0 0 0 .808 2.936l11.345 9.95L8.944 47.57a2.763 2.763 0 0 0 1.074 2.853 2.753 2.753 0 0 0 3.036.133L26 42.818l12.942 7.738a2.765 2.765 0 0 0 4.113-2.986l-3.346-14.736 11.345-9.948a2.765 2.765 0 0 0 .81-2.938Z"/>
                                </svg>
                            </li>
                            <li class="text-[#FFC107]">
                                <svg class="w-4 md:w-6 h-4 md:h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 52 52">
                                    <path d="M51.864 19.948a2.758 2.758 0 0 0-2.379-1.9l-15.008-1.363-5.935-13.89a2.765 2.765 0 0 0-5.083.002l-5.935 13.888-15.011 1.363a2.763 2.763 0 0 0-2.377 1.9 2.76 2.76 0 0 0 .808 2.936l11.345 9.95L8.944 47.57a2.763 2.763 0 0 0 1.074 2.853 2.753 2.753 0 0 0 3.036.133L26 42.818l12.942 7.738a2.765 2.765 0 0 0 4.113-2.986l-3.346-14.736 11.345-9.948a2.765 2.765 0 0 0 .81-2.938Z"/>
                                </svg>
                            </li>
                            <li class="text-[#FFC107]">
                                <svg class="w-4 md:w-6 h-4 md:h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 52 52">
                                    <path d="M51.864 19.948a2.758 2.758 0 0 0-2.379-1.9l-15.008-1.363-5.935-13.89a2.765 2.765 0 0 0-5.083.002l-5.935 13.888-15.011 1.363a2.763 2.763 0 0 0-2.377 1.9 2.76 2.76 0 0 0 .808 2.936l11.345 9.95L8.944 47.57a2.763 2.763 0 0 0 1.074 2.853 2.753 2.753 0 0 0 3.036.133L26 42.818l12.942 7.738a2.765 2.765 0 0 0 4.113-2.986l-3.346-14.736 11.345-9.948a2.765 2.765 0 0 0 .81-2.938Z"/>
                                </svg>
                            </li>
                            <li class="text-body">
                                <svg class="w-4 md:w-6 h-4 md:h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 52 52">
                                    <path d="M51.864 19.948a2.758 2.758 0 0 0-2.379-1.9l-15.008-1.363-5.935-13.89a2.765 2.765 0 0 0-5.083.002l-5.935 13.888-15.011 1.363a2.763 2.763 0 0 0-2.377 1.9 2.76 2.76 0 0 0 .808 2.936l11.345 9.95L8.944 47.57a2.763 2.763 0 0 0 1.074 2.853 2.753 2.753 0 0 0 3.036.133L26 42.818l12.942 7.738a2.765 2.765 0 0 0 4.113-2.986l-3.346-14.736 11.345-9.948a2.765 2.765 0 0 0 .81-2.938Z"/>
                                </svg>
                            </li>
                        </ul>
                        <div class="flex items-baseline gap-4 mt-4">
                            <div class="text-pink text-lg md:text-xl font-black">43 900 ₽</div>
                            <div class="text-body text-md md:text-lg font-bold line-through">59 300 ₽</div>
                        </div>
                        <ul class="sm:max-w-[360px] space-y-2 mt-8">
                            <li class="flex justify-between text-body"><strong class="text-white">Вес (г):</strong> 92</li>
                            <li class="flex justify-between text-body"><strong class="text-white">Тип сенсора:</strong> Оптический</li>
                            <li class="flex justify-between text-body"><strong class="text-white">DPI мыши:</strong> 18000</li>
                            <li class="flex justify-between text-body"><strong class="text-white">Количество кнопок мыши:</strong> 8</li>
                            <li class="flex justify-between text-body"><strong class="text-white">Подсветка:</strong> RGB</li>
                        </ul>

                        <!-- Add to cart -->
                        <form class="space-y-8 mt-8">
                            <div class="grid grid-cols-2 md:grid-cols-3 2xl:grid-cols-4 gap-4">
                                <div class="flex flex-col gap-2">
                                    <label for="filter-item-1" class="cursor-pointer text-body text-xxs font-medium">Цвет</label>
                                    <select id="filter-item-1" class="form-select w-full h-12 px-4 rounded-lg border border-body/10 focus:border-pink focus:shadow-[0_0_0_3px_#EC4176] bg-white/5 text-white text-xs shadow-transparent outline-0 transition">
                                        <option value="Белый" class="text-dark">Белый</option>
                                        <option value="Чёрный" class="text-dark">Чёрный</option>
                                        <option value="Синий" class="text-dark">Синий</option>
                                    </select>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label for="filter-item-2" class="cursor-pointer text-body text-xxs font-medium">Размер (хват)</label>
                                    <select id="filter-item-2" class="form-select w-full h-12 px-4 rounded-lg border border-body/10 focus:border-pink focus:shadow-[0_0_0_3px_#EC4176] bg-white/5 text-white text-xs shadow-transparent outline-0 transition">
                                        <option value="Маленький" class="text-dark">Маленький</option>
                                        <option value="Средний" class="text-dark">Средний</option>
                                        <option value="Большой" class="text-dark">Большой</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex flex-wrap items-center gap-3 xs:gap-4">
                                <div class="flex items-stretch h-[54px] lg:h-[72px] gap-2">
                                    <button type="button" class="w-12 h-full rounded-lg border border-body/10 hover:bg-card/20 active:bg-card/50 focus:border-pink focus:shadow-[0_0_0_3px_#EC4176] bg-white/5 text-white text-xs text-center font-bold shadow-transparent outline-0 transition">-</button>
                                    <input type="number" class="h-full px-2 md:px-4 rounded-lg border border-body/10 focus:border-pink focus:shadow-[0_0_0_3px_#EC4176] bg-white/5 text-white text-xs text-center font-bold shadow-transparent outline-0 transition" min="1" max="999" value="1" placeholder="К-во">
                                    <button type="button" class="w-12 h-full rounded-lg border border-body/10 hover:bg-card/20 active:bg-card/50 focus:border-pink focus:shadow-[0_0_0_3px_#EC4176] bg-white/5 text-white text-xs text-center font-bold shadow-transparent outline-0 transition">+</button>
                                </div>
                                <button type="submit" class="!px-6 xs:!px-8 btn btn-pink">Добавить в корзину</button>
                                <a href="#" class="w-[68px] !px-0 btn btn-purple" title="В избранное">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 52 52">
                                        <path d="M26 48.486c-.263 0-.526-.067-.762-.203-.255-.148-6.336-3.679-12.504-8.998-3.656-3.153-6.574-6.28-8.673-9.295C1.344 26.09-.022 22.338 0 18.84c.025-4.072 1.483-7.901 4.106-10.782 2.667-2.93 6.226-4.544 10.021-4.544 4.865 0 9.312 2.725 11.872 7.042 2.56-4.317 7.007-7.042 11.872-7.042 3.586 0 7.007 1.456 9.634 4.1 2.883 2.9 4.52 7 4.494 11.245-.022 3.493-1.414 7.24-4.137 11.134-2.105 3.013-5.02 6.14-8.66 9.291-6.146 5.32-12.183 8.85-12.437 8.997a1.524 1.524 0 0 1-.766.206ZM14.128 6.56c-2.927 0-5.686 1.26-7.768 3.548-2.115 2.324-3.292 5.431-3.313 8.75-.042 6.606 6.308 13.483 11.642 18.09 4.712 4.068 9.49 7.123 11.308 8.236 1.808-1.115 6.554-4.168 11.246-8.235 5.319-4.61 11.668-11.493 11.71-18.11.022-3.44-1.294-6.749-3.608-9.079-2.05-2.063-4.705-3.2-7.473-3.2-4.658 0-8.847 3.276-10.422 8.152a1.523 1.523 0 0 1-2.9 0C22.976 9.836 18.787 6.56 14.129 6.56Z"/>
                                    </svg>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

            </section>

            <!-- Description -->
            <section class="mt-12 xl:mt-16 pt-8 lg:pt-12 border-t border-white/10">
                <h2 class="mb-12 text-lg lg:text-[42px] font-black">Описание</h2>
                <article class="text-xs md:text-sm">
                    <h5 class="mb-4 text-md lg:text-lg font-black">AEROX 3</h5>
                    <ul class="mb-12 list-outside space-y-3">
                        <li>Сверхлегкий корпус весом 57 грамм для быстрого игрового процесса.</li>
                        <li>Съемный кабель Super Mesh USB-C для уменьшения сопротивления.</li>
                        <li>Отлично скользящие глайды из PTFE для плавных движений мыши.</li>
                        <li>Оптический игровой сенсор TrueMove Core с технологией Pixel perfect.</li>
                        <li>AquaBarrier™ для водонепроницаемости, защиты от пыли и других загрязнений.</li>
                    </ul>
                    <h5 class="mb-4 text-md lg:text-lg font-black">МОЛНИЕНОСНАЯ</h5>
                    <p class="mb-12">Aerox 3 оптимизирована для получения самых быстрых движений в играх, поэтому вы всегда на шаг впереди конкурентов. Когда на счету миллисекунды, скорость имеет значение.</p>
                    <h5 class="mb-4 text-md text-md lg:text-lg font-black">УЛЬТРАЛЕГКАЯ - 57 ГРАММ</h5>
                    <p class="mb-12">Уникальный перфорированный внешний корпус и уменьшенная электроника - все это с высокой точностью спроектировано так, чтобы обеспечить потрясающе легкий вес и новый уровень прочности.</p>
                </article>
            </section>

            <!-- Watched products  -->
            <section class="mt-16 xl:mt-24">
                <h2 class="mb-12 text-lg lg:text-[42px] font-black">Просмотренные товары</h2>
                <!-- Products list -->
                <div class="products grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-x-8 gap-y-8 lg:gap-y-10 2xl:gap-y-12">
                    <!-- Product card -->
                    <div class="product-card flex flex-col rounded-3xl bg-card">
                        <a href="product.html" class="product-card-photo overflow-hidden h-[320px] rounded-3xl">
                            <img src="{{Vite::asset('/resources/images/products/1.jpg')}}" class="object-cover w-full h-full" alt="SteelSeries Aerox 3 Snow">
                        </a>
                        <div class="grow flex flex-col py-8 px-6">
                            <h3 class="text-sm lg:text-md font-black"><a href="product.html" class="inline-block text-white hover:text-pink">SteelSeries Aerox 3 Snow</a></h3>
                            <div class="mt-auto pt-6">
                                <div class="mb-3 text-sm font-semibold">30 000 ₽</div>
                                <div class="flex flex-wrap items-center gap-4">
                                    <a href="#" class="w-[56px] !h-[56px] !px-0 btn btn-pink">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 52 52">
                                            <path d="M39.385 38.663a6.047 6.047 0 1 0 6.041 6.053v-.006a6.053 6.053 0 0 0-6.041-6.047ZM50.11 9.706a2.329 2.329 0 0 0-.439-.042H12.852l-.583-3.902a5.248 5.248 0 0 0-5.196-4.519h-4.74a2.332 2.332 0 1 0 0 4.665h4.746a.583.583 0 0 1 .583.513l3.592 24.62a6.45 6.45 0 0 0 6.35 5.447H41.87a6.414 6.414 0 0 0 6.292-5.126l3.796-18.923a2.333 2.333 0 0 0-1.847-2.733ZM24.571 44.45a6.047 6.047 0 0 0-6.062-5.782 6.047 6.047 0 0 0 .14 12.089h.146a6.047 6.047 0 0 0 5.776-6.306Z"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="w-[56px] !h-[56px] !px-0 btn btn-purple" title="Удалить из избранного">
                                        <!-- <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 52 52">
                                            <path d="M26 48.486c-.263 0-.526-.067-.762-.203-.255-.148-6.336-3.679-12.504-8.998-3.656-3.153-6.574-6.28-8.673-9.295C1.344 26.09-.022 22.338 0 18.84c.025-4.072 1.483-7.901 4.106-10.782 2.667-2.93 6.226-4.544 10.021-4.544 4.865 0 9.312 2.725 11.872 7.042 2.56-4.317 7.007-7.042 11.872-7.042 3.586 0 7.007 1.456 9.634 4.1 2.883 2.9 4.52 7 4.494 11.245-.022 3.493-1.414 7.24-4.137 11.134-2.105 3.013-5.02 6.14-8.66 9.291-6.146 5.32-12.183 8.85-12.437 8.997a1.524 1.524 0 0 1-.766.206ZM14.128 6.56c-2.927 0-5.686 1.26-7.768 3.548-2.115 2.324-3.292 5.431-3.313 8.75-.042 6.606 6.308 13.483 11.642 18.09 4.712 4.068 9.49 7.123 11.308 8.236 1.808-1.115 6.554-4.168 11.246-8.235 5.319-4.61 11.668-11.493 11.71-18.11.022-3.44-1.294-6.749-3.608-9.079-2.05-2.063-4.705-3.2-7.473-3.2-4.658 0-8.847 3.276-10.422 8.152a1.523 1.523 0 0 1-2.9 0C22.976 9.836 18.787 6.56 14.129 6.56Z"/>
                                        </svg> -->
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 52 52">
                                            <path d="M26 48.486c-.263 0-.526-.067-.762-.203-.255-.148-6.336-3.679-12.504-8.998-3.656-3.153-6.574-6.28-8.673-9.295C1.344 26.09-.022 22.338 0 18.84c.025-4.072 1.483-7.901 4.106-10.782 2.667-2.93 6.226-4.544 10.021-4.544 4.865 0 9.312 2.725 11.872 7.042 2.56-4.317 7.007-7.042 11.872-7.042 3.586 0 7.007 1.456 9.634 4.1 2.883 2.9 4.52 7 4.494 11.245-.022 3.493-1.414 7.24-4.137 11.135-2.105 3.012-5.02 6.138-8.66 9.29-6.146 5.32-12.183 8.85-12.437 8.997a1.524 1.524 0 0 1-.766.206Z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.product-card -->
                </div>
            </section>

        </div>
    </main>
@endsection