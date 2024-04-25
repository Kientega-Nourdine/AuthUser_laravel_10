<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('auth.register')}}" class="vstack gap-2" method="POST">
                            @csrf 
                            <div class="bg-light ">
                            <h1 class="text-center ">Inscription</h1>
                            </div>
                            <div class="form-group">
                                <label for="name">Nom : <sup class="text-danger">*</sup></label>
                                <input name="name" type="text" class="form-control" placeholder="Votre nom" value="{{ old('name') }}">
                                @error('name')
                                    <small class="text-danger"> {{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Adresse email : <sup class="text-danger">*</sup></label>
                                <input name="email" type="email" class="form-control" placeholder="Votre emai ex: Kientega@gmail.com " value="{{ old('email') }}">
                                @error('email')
                                    <small class="text-danger"> {{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe : <sup class="text-danger">*</sup></label>
                                <input name="password" type="password" class="form-control" placeholder="Votre mot de passe ">
                                @error('password')
                                    <small class="text-danger"> {{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">confirmer mot de passe : <sup class="text-danger">*</sup></label>
                                <input name="password_confirmation" type="password" class="form-control" placeholder="Confirmer le mot de passe">
                                @error('password_confirmation')
                                    <small class="text-danger"> {{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">S'inscrire</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>