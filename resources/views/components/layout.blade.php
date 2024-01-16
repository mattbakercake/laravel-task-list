<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Laravel Tasks</title>
</head>

<body>
    <div class="w-full p-4" style="background-image: url({{ asset('img/notes_background.jpg') }}); 
        background-position: center center; 
        background-size: cover">

        <!-- alert -->
        @if(session('success'))
        <div class="w-full lg:w-3/4 h-32 m-auto bg-green-100 border-l-4 border-green-500 text-green-700 p-1 flex items-center rounded-xl" role="alert">
            <p>{{ session('success') }}</p>
        </div>
        @endif

        <main role="main" class="w-full flex flex-col h-screen content-center justify-center">

            <div class="wrapper">

                <!-- title card -->
                <div class="mb-4 w-full lg:w-3/4 bg-gray-50 rounded-xl m-auto">
                    <div class="bg-white rounded shadow px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <h1 class="font-bold text-xl">{{ $title }}<h1>
                    </div>
                </div>

                <!-- main content -->
                <div class="mb-4 w-full lg:w-3/4 bg-gray-50 rounded-xl m-auto">
                    <div class="bg-white rounded shadow px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                       
                        {{ $content }}

                    </div>
                </div>

                <!-- any additional content -->
                {{ $additional_content ?? null}}

            </div>

        </main>

    </div>
</body>

</html>