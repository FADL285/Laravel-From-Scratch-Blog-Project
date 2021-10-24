@if($errors->any())
    <ul class="mb-2 text-center">
        @foreach($errors->all() as $error)
            <li class="text-red-500 text-sm">{{ $error }}</li>
        @endforeach
    </ul>
@endif
