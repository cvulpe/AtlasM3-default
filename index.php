<?php
  include('includes/header.php');
?>
<section class="hero">
    <h2>Travel Beyond Limits.</h2>
    <h3>
        Start planning your dream vacation at an affordable price with Atlas<br />Contact
        us bellow
    </h3>
    <button name="book-btn" class="book">Book Now</button>
</section>
<section id="locations">
    <h2>Plan your well desired vacation now</h2>
    <h3>Chose from over 350 travel destinations</h3>
</section>
<section id="benefits">
    <header class="benefits-head">
        <h2>The perfect travel experiance</h2>
        <h3>We cover everything from picking the perfect hotel </br> to flight and destination</h3>
    </header>
    <div class="cards">
        <div class="card">
            <div class="card-icon">
                <img src="./icons/route-solid.svg" alt="">
            </div>
            <h4>Travel</h4>
            <p>Travel in over 250 countries with no effort</p>
        </div>
        <div class="card">
            <div class="card-icon">
                <img src="./icons/bed-solid.svg" alt="">
            </div>
            <h4>Hotel</h4>
            <p>Hotels located near popular areas.</p>
        </div>
        <div class="card">
            <div class="card-icon">
                <img src="./icons/plane-departure-solid.svg" alt="">
            </div>
            <h4>Fly</h4>
            <p>Flight included in every purchsed trim</p>
        </div>
    </div>
</section>

<section id="contact">
    <div class="form-wrapper">
        <header class="form-head">
            <h2>Contact US</h2>
        </header>
        <form>
            <div class="name-form">
                <input type="text" name="name" placeholder="Enter your name:" required>
            </div>
            <div class="email-form">
                <input type="email" name="email" placeholder="Enter your email:" required>
            </div>
            <div class="message-form">
                <textarea placeholder="Enter your message:" class="msg" name="message" cols="20" rows="4"></textarea>
            </div>
            <button type="submit" class="submit book">Submit</button>
        </form>
    </div>
</section>
<?php
    include('includes/footer.php');
?>