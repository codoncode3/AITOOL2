<div class="py-8">

    <x-layout >
        <div class="mx-4">
        <div
            class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
        >
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">
                     Edit AiTools
                </h2>
                <p class="mb-4">Edit an AI T00L here</p>
            </header>

            <form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <label
                        for="name"
                        class="inline-block text-lg mb-2"
                        >Ai Tool Name</label
                    >
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="name"
                        value="{{$listing->name}}"
                    />
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                </div>

                <div class="mb-6">
                    <label for="minides" class="inline-block text-lg mb-2"
                        >Mini Description Here
                        </label
                    >
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="minides"
                        value="{{$listing->minides}}"
                    />
                    @error('minides')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror

                </div>

                <div class="mb-6">
                    <label
                        for="tags"
                        class="inline-block text-lg mb-2"
                        >Tags</label
                    >
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="tags"
                        value="{{$listing->tags}}"
                    />
                    @error('tags')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="price" class="inline-block text-lg mb-2"
                        >price</label
                    >
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="price"
                        value="{{$listing->price}}"
                    />
                    @error('price')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>



                <div class="mb-6">
                    <label
                        for="website"
                        class="inline-block text-lg mb-2"
                    >
                        Website
                    </label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="website"
                        value="{{$listing->website}}"
                    />
                    @error('website')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="logo" class="inline-block text-lg mb-2">
                        website Logo
                    </label>
                    <input
                        type="file"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="logo"
                    />
                    <img
                            class="w-20 ml-6 mb-6"
                            src="{{$listing->logo ? asset('storage/'.$listing->logo):asset('images/no-image.png')}}"
                            alt=""
                        />

                </div>

                <div class="mb-6">
                    <label for="screenshot" class="inline-block text-lg mb-2">
                        website screenshot
                    </label>
                    <input
                        type="file"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="screenshot"
                    />
                    <img
                            class="w-20 ml-6 mb-6"
                            src="{{$listing->screenshot ? asset('storage/'.$listing->screenshot):asset('images/no-image.png')}}"
                            alt=""
                        />

                </div>

                <div class="mb-6">
                    <label
                        for="description"
                        class="inline-block text-lg mb-2"
                    >
                        Description
                    </label>
                    <textarea
                        class="border border-gray-200 rounded p-2 w-full"
                        name="description"
                        rows="10"

                    >{{$listing->description}}</textarea>
                    @error('description')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button
                        class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                    >
                        Submit
                    </button>

                    <a href="/" class="text-black ml-4"> Back </a>
                </div>

            </form>
        </div>
    </div>

    </x-layout>

    </div>