@if ($errors->any())
    <div class="mx-auto mt-4 mb-4 p-4 bg-red-200">
        <ul class="text-red-400 list-disc pl-4">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
