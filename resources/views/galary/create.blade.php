@extends('layouts.app')


@section('content')
<style>
        .image-container {
            position: relative;
            display: inline-block;
            margin-right: 10px;
            margin-bottom: 10px;
        }

        .remove-image {
            position: absolute;
            top: 5px;
            right: 5px;
            background-color: #ff0000;
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            padding: 0;
            font-size: 14px;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .remove-image:hover {
            background-color: #cc0000;
        }

        #uploadButton {
            cursor: pointer;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
        }

        #uploadButton:hover {
            background-color: #0056b3;
        }

        #images {
            display: none;
        }
    </style>
<div class="pagetitle">
  <h1>{{trans('lang.create_product_galary')}}</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">{{trans('lang.home')}}</a></li>
      <li class="breadcrumb-item">{{trans('lang.forms')}}</li>
      <li class="breadcrumb-item active">{{trans('lang.create_product_galary')}}</li>
    </ol>
  </nav>
</div>
  <section class="section">
<div class="row">
<div class="col-lg-12">
  <div class="card">
      <div class="card-body">
          <h5 class="card-title"></h5>
            
          @if ($message = Session::get('error'))
          <div class="alert alert-danger">
            <p>{{ $message }}</p>
          </div>
          @endif



{!! Form::open(array('route' => 'galary.store','method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{trans('lang.product_name')}}:</strong>
            {!! Form::text('name', null, array('placeholder' => trans('lang.name'),'class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group"><br><br>
        <label for="images" id="uploadButton">{{trans('lang.upload_images')}}</label>
        <input type="file" name="images[]" id="images" multiple accept="image/*" onchange="uploadImages(event)">
        </div>
    </div><br>

    <div id="imagePreview">
        @if(isset($images) && count($images) > 0)
            @foreach($images as $image)
                <div class="image-container">
                    <img src="{{ asset('images/'.$image) }}" alt="Image">
                    <button class="remove-image" data-image="{{ $image }}" onclick="removeImage(event)">x</button>
                </div>
            @endforeach
        @endif
    </div>
  
    <div class="col-xs-12 col-sm-12 col-md-12 text-center"><br>
        <button type="submit" class="btn btn-primary">{{trans('lang.submit')}}</button>
    </div>
</div>
{!! Form::close() !!}


</div>
      </div>
    </div>
</div>
      </section>
@endsection
<script>
        function uploadImages(event) {
            const files = event.target.files;
            const preview = document.getElementById('imagePreview');
            preview.innerHTML = ''; // Clear previous previews

            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                const reader = new FileReader();

                reader.onload = function (event) {
                    const imgElement = document.createElement('img');
                    imgElement.src = event.target.result;
                    imgElement.style.width = '200px'; // Adjust size as needed
                    imgElement.style.height = 'auto';

                    const container = document.createElement('div');
                    container.classList.add('image-container');
                    container.appendChild(imgElement);

                    const removeButton = document.createElement('button');
                    removeButton.classList.add('remove-image');
                    removeButton.innerText = 'x';
                    removeButton.setAttribute('data-image', file.name);
                    removeButton.onclick = removeImage;
                    container.appendChild(removeButton);

                    preview.appendChild(container);
                };

                reader.readAsDataURL(file);
            }
        }

        function removeImage(event) {
          const imageName = event.target.getAttribute('data-image');
          const imageContainer = event.target.parentElement;
          imageContainer.remove();

          // Remove the file from the input element's files list
          const input = document.getElementById('images');
          const files = Array.from(input.files);
          const updatedFiles = files.filter(file => file.name !== imageName);
          
          // Create a new FileList instance
          const newFileList = new DataTransfer();
          updatedFiles.forEach(file => {
              newFileList.items.add(file);
          });

          // Update the input's files property with the new FileList
          input.files = newFileList.files;
      }
    </script>