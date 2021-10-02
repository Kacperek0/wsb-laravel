<h3>Informacje o uzytkowniku</h3>
<!-- {{$errors}} -->
@if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="UserController" method="post">
        {{@csrf_field()}}
        <input type="text" name="email" placeholder="Podaj email" autofocus>
        @error('email')
            <span>{{$message}}</span>
        @enderror<br><br>
        <input type="password" name="password" placeholder="Podaj hasło"><br><br>
        <input type="submit" value="Zatwierdź">
    </form>
