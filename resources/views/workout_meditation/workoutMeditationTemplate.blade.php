@extends('master')

@section('title')
    @yield('titleActive')
@endsection

@section('body')
    <div class="w-full">
        {{-- Kotak Biru Atas --}}
        <div class="lg:w-full lg:flex lg:gap-2 md:w-full md:flex md:gap-2">
            <div class="w-full h-[390px] p-10 pt-16 bg-cBlue rounded-b-[50px] lg:rounded-bl-[0px] lg:rounded-tr-[50px] lg:w-[30%] lg:h-fit lg:mt-16 lg:items-center md:rounded-bl-[0px] md:rounded-tr-[50px] md:w-[30%] md:h-fit md:mt-16 md:items-center">
                <h1 class="text-3xl text-white">Workout Yuk!</h1>
                <h2>Categories</h2>

                {{-- Category Container --}}
                <div class="w-80% h-[160px] flex mt-5 justify-between md:w-[30vw] md:flex-col md:mb-[300px] md:gap-5 lg:w-[30vw] lg:flex-col lg:mb-[300px] lg:gap-5">
                    {{-- Category Satuan --}}
                    {{-- Class selected --}}
                    <a href="/workouts" class="w-[48%] lg:w-[80%] lg:h-[200px] lg:items-center lg:justify-center md:w-[80%] md:h-[200px] md:items-center md:justify-center">
                        <div class="w-full h-full flex flex-col bg-cDarkBlue rounded-3xl overflow-hidden @yield('isWorkoutActive')">
                            {{-- Image Atas --}}
                            <div class="h-[65%] w-full bg-cover lg:h-[75%] md:h-[75%]" style="background-image: url('/assets/olahragaCategory.png')">
                            </div>
                            <p class="text-center text-white mt-3">Olahraga</p>
                        </div>
                    </a>
                    {{-- Category Satuan --}}
                    <a href="/meditations" class="w-[48%] lg:w-[80%] lg:h-[200px] lg:items-center lg:justify-center md:w-[80%] md:h-[200px] md:items-center md:justify-center">
                        <div class="w-full h-full flex flex-col bg-cDarkBlue rounded-3xl overflow-hidden @yield('isMeditationActive')">
                            {{-- Image Atas --}}
                            <div class="h-[65%] w-full bg-cover lg:h-[75%] md:h-[75%]" style="background-image: url('/assets/meditasiCategory.png')">
                            </div>
                            <p class="text-center text-white mt-3">Meditasi</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="lg:w-[70%] lg:p-10 lg:pt-32 lg:items-center lg:justify-center lg:content-center md:w-[70%] md:p-10 md:pt-32 md:items-center md:justify-center md:content-center">
                @yield('content')
            </div>
    </div>

        @include('component.navbar', ['active' => 'workout'])
    </div>
@endsection

@section('scripts')
    @yield('script')
@endsection
