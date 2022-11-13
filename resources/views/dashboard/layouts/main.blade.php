<html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ILM Blog | Dashboard</title>
            
        {{-- Bootstrap CSS Online --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        
        <!-- Custom styles for this template -->
        <link href="/css/dashboard.css" rel="stylesheet">

        {{-- Trix Editor --}}
        <link rel="stylesheet" type="text/css" href="/css/trix.css">
        <script type="text/javascript" src="/js/trix.js"></script>

        <style>
          trix-toolbar [data-trix-button-group="file-tools"]{
            display: none;
          }
        </style>
      </head>
      <body>
        
    @include('dashboard.layouts.header')
    
    <div class="container-fluid">
      <div class="row">
        @include('dashboard.layouts.sidebar')
    
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          @yield('content')
        </main>
      </div>
    </div>
    
    {{-- script bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        
    {{-- Icon --}}
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    
    {{-- from public --}}
    <script src="/js/dashboard.js"></script>
    {{-- Script JS untuk Slug di Post Create --}}
    <script>
      const title = document.querySelector('#title');
      const slug = document.querySelector('#slug');

      title.addEventListener("keyup", function(){
        let preslug = title.value;
        preslug = preslug.replace(/ /g,"-");
        slug.value = preslug.toLowerCase();
      });
      
      // untuk menonaktifkan fitur trix editor pada button add file
      document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
      })

      // untuk menampilkan image di create
      
      function previewImage(){
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');
      
      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent) {
        imgPreview.src =oFREvent.target.result;
      }
      }
    </script>
      </body>
    </html>
    </h1>