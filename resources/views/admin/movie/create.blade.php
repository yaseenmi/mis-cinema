@extends('components.layouts.dash')

{{-- Styles --}}
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/admin/movie.css') }}">
@endsection

{{-- Content --}}
@section('content')

<main>
    <x-sidemenu-container
    px="2"
    py="2"
    minHeight="93"
    menuLinksGap="1"
    menuColor="#DCDCDC"
    mainColor="#F2F2F2">
        <x-slot name="menuLinks">
                <x-sidebar.link href="/admin/dashboard" iconColor="black" icon="stat">Statistics</x-sidebar-link>
                <x-sidebar.link href="/admin/dashboard/movie" iconColor="black" icon="movie">Movies</x-sidebar-link>
                <x-sidebar.link href="/admin/dashboard/screen" iconColor="black" icon="screen">Screens</x-sidebar-link>
                <x-sidebar.link href="/admin/dashboard/user" iconColor="black" icon="user">Users</x-sidebar-link>
        </x-slot>

        <form action="{{ route('createMovie') }}" method="POST" enctype="multipart/form-data" class="create-movie-form-container flex items-center justify-center">
            @csrf

            <div class="flex flex-col gap-3">
                <div class="flex gap-3 row">
                    <div  class="col-2 p-10 flex flex-col gap-6">
                        <div class="flex flex-col gap-2">
                            <label class="form-label" for="">Movie Name</label>
                            <input type="text" name="name" class="form-input">
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="form-label" for="">Description</label>
                            <textarea type="text" name="description" class="form-input"></textarea>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="form-label" for="">Gerne</label>
                            <select name="type" id="" class="form-select">
                                <option value="action" selected>Action</option>
                                <option value="drama" selected>Drama</option>
                            </select>
                        </div>
                        <hr>
                        <div class="flex flex-col gap-1">
                            <label class="form-label">Show Time</label>
                            <div class="flex justify-between gap-4">
                                <div class="flex items-center gap-3">
                                    <label for="" class="form-label">Start </label>
                                    <input type="text" name="start" class="form-input">
                                </div>
                                <div class="flex items-center gap-3">
                                    <label for="" class="form-label">End </label>
                                    <input type="text" name="end" class="form-input">
                                </div>
                            </div>
                            <p style="font-size: 0.8rem;color:#888888">Note: You can add more show times later in movie details.</p>

                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="form-label">Display </label>
                            <div class="flex gap-4">
                                <div class="form-check">
                                    <input type="radio" name="display" id="flexRadioDefault1">
                                    <label class="form-check-label text-gray-800" for="flexRadioDefault1">
                                        3D
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input type="radio" name="display" id="flexRadioDefault2" checked>
                                    <label class="form-check-label text-gray-800" for="flexRadioDefault2">
                                      2D
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <label for="" class="form-label">Show Screens</label>
                            <div class="flex gap-5">
                                <div class="flex items-center gap-2">
                                    <input type="checkbox">
                                    <label for="" name="screen_id" class="form-label">Screen 1</label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="checkbox">
                                    <label for=""  class="form-label">Screen 2</label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="checkbox">
                                    <label for=""  class="form-label">Screen 3</label>
                                </div>
                                <div class="flex items-center gap-2">
                                    <input type="checkbox">
                                    <label for=""  class="form-label">Screen 4</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-right-container flex flex-col justify-between gap-4 py-10">
                        <div class="flex flex-col gap-6 cover-container">
                            <div class="flex items-center justify-center">
                                <img src="" alt="" id="uploaded-image">
                            </div>
                            <div>
                                <label for="upload-btn" class="default-btn background-btn label-upload">Upload Movie Cover</label>
                                <input type="file" name="image" id="upload-btn" onchange="handleFileChange()">
                            </div>
                        </div>

                        <div class="flex justify-start items-end">
                            <x-button type="submit" style="no-background-btn" px="50" py="8" radius="5">Submit</x-button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </x-sidemenu-container>
</main>

@endsection



{{-- SCRIPTS SECTION --}}
@section('scripts')

    <script>
        /* Function for displaying the uploaded image */
        function handleFileChange(){
            let reader = new FileReader();

            reader.onload = (event) => {
                let uploadedImage = document.getElementById('uploaded-image');
                uploadedImage.src = event.target.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }

    </script>

@endsection

