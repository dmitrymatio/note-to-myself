@extends('layouts.app')

@section('content')
    <form action="{{ route('dashboard') }}" enctype="multipart/form-data" method="post"
        class="w-full flex flex-col items-center space-y-5">
        @csrf

        <div class="flex justify-between space-x-5 w-8/12 p-6 rounded-lg">
            <p class="text-blue-600 text-2xl">Dashboard</p>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Save
            </button>
        </div>
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-images">
                        Images
                    </label>
                    <div class="flex flex-col justify-between space-x-5 mb-5">
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('images') border-red-500 @enderror"
                            id="grid-images" type="file" name="image">

                        @error('images')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="flex justify-between space-x-2">
                        @foreach ($images as $image)
                            <div class="w-1/4 rounded overflow-hidden shadow-lg">
                                <a target="_blank" href="{{ $image->image_url }}">
                                    <img class="w-full" src="{{ $image->image_url }}">
                                </a>
                                <div class="px-6 py-4">
                                    <div class="font-bold text-l mb-2">{{ $image->name }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-notes">
                        Notes
                    </label>
                    @error('todos')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                    <textarea
                        class="appearance-none h-4/5 block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('notes') border-red-500 @enderror"
                        id="grid-notes" type="text"
                        name="notes">@if (!is_null($notes)) {{ $notes->notes }}@endif</textarea>
                </div>
            </div>
        </div>
        <div class="flex justify-between space-x-5 bg-white w-8/12 p-6 rounded-lg">
            <div class="w-full md:w-1/2 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    To do
                </label>
                @error('notes')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
                <textarea
                    class="appearance-none h-4/5 block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('todos') border-red-500 @enderror"
                    id="grid-to-do" type="text"
                    name='todos'>@if (!is_null($todos)){{ $todos->todos }}@endif</textarea>
            </div>
            <div class="w-full md:w-1/2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-websites">
                    Websites
                </label>
                <div class="flex flex-col justify-between space-x-5 mb-5">
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('website') border-red-500 @enderror"
                        id="grid-websites" type="text" name="website">
                    @error('website')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                            Example: http://google.com
                        </div>
                    @enderror
                </div>

                <ul class="flex flex-col justify-between space-y-2">
                    @foreach ($websites as $website)
                        <li>
                            <button
                                class="w-full bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                <a href="{{ $website->website }}">
                                    {{ $website->website }}
                                </a>
                            </button>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </form>
@endsection
