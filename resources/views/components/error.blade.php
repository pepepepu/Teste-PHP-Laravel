@if($errors->any())
    <div class="alert alert-danger alert-custom" id="mensagemSucesso">
        @foreach ($errors->all() as $error)
            <p class="alert-custom-text">{{$error}}</p>
        @endforeach
    </div>
@endif