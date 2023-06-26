@extends('main_master')
@section('main')


        <div class="pb-8">
            @if ($errors->any())
                <ul class="border border-t-0 border-red-500 rouded-b bg-red-100 px-4 text-red-700">
                    @foreach ($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>


        <!-- component -->
        <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
            <div class="container max-w-screen-lg mx-auto">
                <div>
                    <form method="GET" action="{{route('info.update')}}" enctype="multipart/form-data">
                        <h2 class="font-semibold text-xl text-gray-600">Favorite Programming Edit Form</h2><br>

                        <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                                <div class="text-gray-600">
                                <p class="font-medium text-lg">Favorite Page Details</p>
                                <p>Please fill out all the fields.</p>
                                </div>

                                <div class="lg:col-span-2">
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                        <div class="md:col-span-5">
                                        <label for="full_name">Programming Language Name</label>
                                        <input type="hidden" name="id" value="">
                                        <input type="text" name="favorite" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$infos->favorite}}" />
                                        </div>

                                        <div class="md:col-span-5">
                                        <label for="email">Description</label>
                                        <textarea name="description" rows="4" class="h-30 border mt-1 rounded px-4 w-full bg-gray-50">{{$infos->description}}</textarea><br><br>
                                        </div>

                                        <div class="md:col-span-2">
                                            <label for="city">Advantage #1</label>
                                            <input type="text" name="advantage_1" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$infos->advantage_1}}" />
                                        </div>

                                        <div class="md:col-span-3">
                                            <label for="address">Short Explanation</label>
                                            <textarea name="explain_1" rows="4" class="h-30 border mt-1 rounded px-4 w-full bg-gray-50" >{{$infos->explain_1}}</textarea><br><br>
                                        </div>

                                        <div class="md:col-span-2">
                                            <label for="city">Advantage #2</label>
                                            <input type="text" name="advantage_2" id="city" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$infos->advantage_2}}" />
                                        </div>

                                        <div class="md:col-span-3">
                                            <label for="address">Short Explanation</label>
                                            <textarea name="explain_2" rows="4" class="h-30 border mt-1 rounded px-4 w-full bg-gray-50">{{$infos->explain_2}}</textarea><br><br>
                                        </div>

                                        <div class="md:col-span-2">
                                            <label for="city">Advantage #3</label>
                                            <input type="text" name="advantage_3" id="city" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$infos->advantage_3}}" p />
                                        </div>

                                        <div class="md:col-span-3">
                                            <label for="address">Short Explanation</label>
                                            <textarea name="explain_3" rows="4" class="h-30 border mt-1 rounded px-4 w-full bg-gray-50" >{{$infos->explain_3}}</textarea><br><br>
                                        </div>

                                        <div class="md:col-span-5">
                                            <label>Upload Logo</label><br>
                                            <input name="logo" class="block w-full text-sm border border-gray-50 rounded-lg cursor-pointer bg-gray-50 focus:outline-none dark:bg-gray-200 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                                        </div>

                                        <br><br>
                                        <div class="md:col-span-5 text-right">
                                            <div class="inline-flex items-end">
                                                <button type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
