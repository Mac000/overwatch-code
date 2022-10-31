@if(Session::has('success'))
    <div class="w-full bg-emerald-200 z-[100] p-4 fixed" style="top: 1px; right: 0;">
        <p class="text-center">{{Session::get('success')}}</p>
    </div>
@endif
