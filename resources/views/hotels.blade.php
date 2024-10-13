<section id="hotels" class="section">
    <div class="container">
        <h2>Popular Hotels in Aqaba</h2>
        <div class="cards">
            <div class="card">
                <a href="{{ route('hotel5') }}" class="btn-book">
                    <img src="{{ asset('img/the-amazing-5-star-deluxe.jpg') }}" alt="5-Star Hotel" />
                    <h3>5-Star Hotel</h3>
                    <p>Top service and stunning views of the Red Sea.</p>
                </a>
            </div>
            <div class="card">
                <a href="{{ route('hotel4') }}" class="btn-book">
                    <img src="{{ asset('img/OIP.jpeg') }}" alt="4-Star Hotel" />
                    <h3>4-Star Hotel</h3>
                    <p>Luxurious comfort and an unforgettable experience.</p>
                </a>
            </div>
            <!-- You can add more hotel cards here -->
        </div>
    </div>
</section>
