<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Upload Details</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('profile.uploaddetails') }}">
                     @csrf -->

                       <!--  <div>
                            <x-jet-label for="name" value="{{ __('Name') }}" />
                            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                        </div>

                        <div>
                            <x-jet-label for="phone" value="{{ __('Phone') }}" />
                            <x-jet-input id="phone" class="block mt-1 w-full" type="number" name="phone " :value="old('phone')" required autofocus autocomplete="phone" />
                        </div>  

                        <div>
                            <x-jet-label for="address" value="{{ __('Address') }}" />
                            <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
                        </div> -->

            

    
            <!-- @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif -->

<!--                         <div class="flex items-center justify-end mt-4">
                
                            <x-jet-button class="ml-4">
                                {{ __('Upload Details') }}
                            </x-jet-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>  
</div>   
 -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Flat Detail Upload</h1>
  <!-- <p>Resize this responsive page to see the effect!</p>  -->
</div>
  
<div class="container">
  <div class="row justify-content-center ">
    <div class="col-sm-6 mt-4">
        <div class ="card p-4">
            <form method="POST" action="/upload-image" enctype="multipart/form-data">
                @csrf 
                <!-- <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" required />
                </div> 
                <br><br> 
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="profile" class="form-control" />
                </div>  -->
                
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="address" id="address" class="form-control"></br>
                <label>Mobile</label></br>
                <input type="text" name="mobile" id="mobile" class="form-control"></br>
                <input class="form-control" name="profile" type="file" >

                <button type="submit" class="btn btn-info">Submit</button>
            </form>

    </div>
  </div>
</div>


</body>
</html>
