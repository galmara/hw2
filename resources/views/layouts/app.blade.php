
<body>
        <header>
            <nav> 
                    <a class="button" href="welcome">Home</a>

                    @if(isset($customer))
                    <a class="button" href="orders">I miei ordini</a>
                    <a class="button" href="cart">Carrello</a>
                    <a class="button" href="logout">Logout</a>
                    @else <a class="button" href="login">Login</a>
                    @endif
                    
            </nav>
            <div id="logo">
                <h1>Auditorium</h1> 
                <div class="overlay"></div>
            </div>
        </header>

        <section>
        @section("cont")
        
        @show
        </section>
        

        <footer>
            <em>Auditorium</em> nasce nel 2020, con l'idea di far entrare la musica all'interno di tutte le case, creando il primo e-commerce italiano totalmente dedito ad essa.
            <p><em>Auditorium, costruito intorno a te.</em><br>
                Tamara Galeno - O46002046
            </p> 
        </footer>
</body>