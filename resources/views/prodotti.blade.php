@include('head')
<main>
    <div class="prodotti">
        <h1>Lunghe</h1>
        <div class="tipologia">
            @foreach($lunghe as $prodotto)
                <a href="">
                    <div class="prodotto">
                        <img src="{{$prodotto['src']}}" alt="">
                    </div>
                </a>  
            @endforeach 
        </div>
        <h1>Corte</h1>
        <div class="tipologia">
            @foreach($corte as $prodotto)
                <a href="">
                    <div class="prodotto">
                        <img src="{{$prodotto['src']}}" alt="">
                    </div>
                </a>  
            @endforeach 
        </div>
        <h1>Cortissime</h1>
        <div class="tipologia">
            @foreach($cortissime as $prodotto)
                <a href="">
                    <div class="prodotto">
                        <img src="{{$prodotto['src']}}" alt="">
                    </div>
                </a>  
            @endforeach 
        </div>
      
    </div>
</main>
    </body>
</html>