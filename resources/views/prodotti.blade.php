@include('head')
<main>
    <div class="prodotti">
        @foreach($prodottiConvertito as $prodotto)
            @if ($loop->first)
                <h1>Le Lunghe</h1>
            @endif
            <a href="">
                <div class="prodotto">
                    <img src="{{$prodotto['src']}}" alt="">
                </div>
            </a>      
        @endforeach    
    </div>
</main>
    </body>
</html>