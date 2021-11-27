<h3>Dane pobrane z bazy</h3>

@foreach ($data as $user)
<li>
    UserId: {{$user['id']}}, imię i nazwisko
    {{$user['name']}} {{$user['surname']}}, data utworzenia:
    {{$user['created_at']}}
</li>

@endforeach
