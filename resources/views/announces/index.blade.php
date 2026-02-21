<x-layout>
    <main class="container">
        <section class="row index-announce pt-5 g-4 custom-gap">
            @foreach ($announces as $announce)
             @if($announce->is_accepted==true)
                <article class="col-12 col-md-4"> 
                    <x-card :announce="$announce"/>
                </article>
                @endif
            @endforeach
        </section>

        <div class="mt-5">
            {{$announces->links()}}
        </div>
    </main>
</x-layout>