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
                    <div class="flex justify-between space-x-5 mb-5">
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-images" type="file" name="images">

                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded h-12">
                            Add
                        </button>
                    </div>
                    <ul class="flex justify-between space-x-2">
                        <li>
                            <button
                                class="w-full bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                google.com
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-full bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                google.com
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-full bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                google.com
                            </button>
                        </li>
                        <li>
                            <button
                                class="w-full bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                                google.com
                            </button>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-notes">
                        Notes
                    </label>
                    <textarea
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-notes" type="text" name="notes"></textarea>
                </div>
            </div>
        </div>
        <div class="flex justify-between space-x-5 bg-white w-8/12 p-6 rounded-lg">
            <div class="w-full md:w-1/2 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    To do
                </label>
                <textarea
                    class="appearance-none h-4/5 block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="grid-to-do" type="text" name='todos'></textarea>
            </div>
            <div class="w-full md:w-1/2">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-websites">
                    Websites
                </label>
                <div class="flex justify-between space-x-5 mb-5">
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-websites" type="text">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded h-12">
                        Add
                    </button>
                </div>
                <ul class="flex flex-col justify-between space-y-2">
                    <li>
                        <button
                            class="w-full bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            google.com
                        </button>
                    </li>
                    <li>
                        <button
                            class="w-full bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            google.com
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </form>
@endsection
