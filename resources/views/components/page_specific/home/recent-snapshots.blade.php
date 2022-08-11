<section class="my-6">
    <h1 class="text-center text-28">Recent Snapshots</h1>
</section>

<section class="w-full md:w-3/5 mx-auto">
    <div class="">
        @forelse($recentSnapshots as $snapshot)
            @include('components/page_specific/home/recent-snapshots-timeline')
        @empty
            <p>No snapshots exist yet!</p>
        @endforelse
    </div>
</section>
