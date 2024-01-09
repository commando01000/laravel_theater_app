@extends('event_registeration.layout')

@section('header')
    <div class="header-image">
        <img src="{{ asset('assets/272200-cinema-movies-theatre-and-theater-hd.jpg') }}" alt="theater">
    </div>
@endsection

@section('content')
<div class="reserveTicket">
    <a href="{{ url('/event_registeration/create') }}" class="btn btn-dark  btn-sm p-3 fs-5 register-ticket position-absolute" title="Register Event !">
        <i aria-hidden="true" class="fa-solid fa-ticket"></i> Reserve Your Ticket Now !
    </a>
</div>
<section id="testimonials" class="my-5 py-1">
    <div class="container">
      <div class="testimonials-title">
        <h3 class="my-5">Testiomnials.</h3>
        <div
          id="carouselExampleAutoplaying"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
              src="./assets/captain-america-uymfdo8a063hcbxb.jpg"
                class="d-block w-100 m-auto"
                alt="..."
              />
              <br />
              <div class="carousel-text text-center">
                <p class="text-dark lead">
                  Lorem Ipsum has been the industry's standard dummy text ever
                  since the when an unknown printer took a galley of type
                  <br />
                  and scrambled it to make a type specimen book.
                </p>
                <span
                  class="text-dark fw-bold"
                  style="
                    font-size: 16px;
                    font-weight: 600;
                    color: rgb(52, 52, 52);
                    line-height: 17.6px;
                    font-family: Montserrat;
                  "
                  >Captain America</span
                >
                <br />
                <span
                  style="
                    font-size: 12px;
                    font-weight: 600;
                    color: rgb(136, 136, 136);
                    line-height: 17px;
                    font-family: Poppins;
                  "
                  >....</span
                >
              </div>
            </div>
            <div class="carousel-item">
              <img
              src="./assets/Astromnomers.jpg"
                class="d-block w-100 m-auto"
                alt="..."
              />
              <br />
              <div class="carousel-text text-center">
                <p class="text-dark lead">
                  Lorem Ipsum has been the industry's standard dummy text ever
                  since the when an unknown printer took a galley of type
                  <br />
                  and scrambled it to make a type specimen book.
                </p>
                <span
                  class="text-dark fw-bold"
                  style="
                    font-size: 16px;
                    font-weight: 600;
                    color: rgb(52, 52, 52);
                    line-height: 17.6px;
                    font-family: Montserrat;
                  "
                  >Astronomers</span
                >
                <br />
                <span
                  style="
                    font-size: 12px;
                    font-weight: 600;
                    color: rgb(136, 136, 136);
                    line-height: 17px;
                    font-family: Poppins;
                  "
                  >....</span
                >
              </div>
            </div>
            <div class="carousel-item">
              <img
                src="./assets/681612.jpg"
                class="d-block w-100 m-auto"
                alt="..."
              />
              <br />
              <div class="carousel-text text-center">
                <p class="text-dark lead">
                    Lorem Ipsum has been the industry's standard dummy text ever
                    since the when an unknown printer took a galley of type
                  <br />
                  and scrambled it to make a type specimen book.
                </p>
                <span
                  class="text-dark fw-bold"
                  style="
                    font-size: 16px;
                    font-weight: 600;
                    color: rgb(52, 52, 52);
                    line-height: 17.6px;
                    font-family: Montserrat;
                  "
                  >Dead Pool</span
                >
                <br />
                <span
                  style="
                    font-size: 12px;
                    font-weight: 600;
                    color: rgb(136, 136, 136);
                    line-height: 17px;
                    font-family: Poppins;
                  "
                  >....</span
                >
              </div>
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev"
          >
            <span
              class="carousel-control-prev-icon"
              aria-hidden="true"
            ></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next"
          >
            <span
              class="carousel-control-next-icon"
              aria-hidden="true"
            ></span>
            <span class="visually-hidden">Next</span>
          </button>
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#carouselExampleAutoplaying"
              data-bs-slide-to="0"
              class="active"
              aria-current="true"
              aria-label="Slide 1"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleAutoplaying"
              data-bs-slide-to="1"
              aria-label="Slide 2"
            ></button>
            <button
              type="button"
              data-bs-target="#carouselExampleAutoplaying"
              data-bs-slide-to="2"
              aria-label="Slide 3"
            ></button>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

