@extends('layouts.app')

@section('content')
<div class="container about">
    <h1>O нас:</h1>
    <div class="d-flex">
        <div class="ms-auto">
            <h2>True Games</h2>
            <p>Мы занимаемся продажей игровых приставок и аксессуаров</p>
        </div>
        <img src="{{ url('http://pukvjpi-m1.wsr.ru/public/img/logo.jpg') }}" class="about__logo ms-auto" alt="">
    </div>



    <div class="slider d-flex justify-content-between mt-5">
        <div id="carouselExample" class="carousel slide w-100">
            <div class="carousel-inner w-100">
                <div class="carousel-item w-100 active">
                    <div class=" d-flex justify-content-between">
                    
                        <a href="{{ url('http://pukvjpi-m1.wsr.ru/public/2') }}" class="slide-item item w-100 text-center">
                            <img src="/public/img/minecraft.jpg" alt="minecraft">
                            <h3>Minecraft</h3>
                            <p>900 рублей</p>
                        </a>
                        <a href="{{ url('http://pukvjpi-m1.wsr.ru/public/8') }}" class="slide-item item w-100 text-center">
                            <img src="/public/img/battlefield.jpg" alt="minecraft">
                            <h3>battlefield</h3>
                            <p>5000 рублей</p>
                        </a>
                        <a href="{{ url('http://pukvjpi-m1.wsr.ru/public/6') }}" class="slide-item item w-100 text-center">
                            <img src="/public/img/pristavka5.jpg" alt="minecraft">
                            <h3>Play Station One</h3>
                            <p>5000 рублей</p>
                        </a>
                        <a href="{{ url('http://pukvjpi-m1.wsr.ru/public/3') }}" class="slide-item item w-100 text-center">
                            <img src="/public/img/zaryadka.png" alt="minecraft">
                            <h3>Зарядка</h3>
                            <p>800 рублей</p>
                        </a>
                        <a href="{{ url('http://pukvjpi-m1.wsr.ru/public/5') }}" class="slide-item item w-100 text-center">
                            <img src="/public/img/pristavka4.jpg" alt="minecraft">
                            <h3>X-Box 360</h3>
                            <p>9000 рублей</p>
                        </a>
                    </div>
                </div>
                <div class="carousel-item w-100">
                    <div class=" d-flex justify-content-between">
                        
                        
                        <a href="{{ url('http://pukvjpi-m1.wsr.ru/public/8') }}" class="slide-item item w-100 text-center">
                            <img src="/public/img/battlefield.jpg" alt="minecraft">
                            <h3>battlefield</h3>
                            <p>5000 рублей</p>
                        </a>
                        <a href="{{ url('http://pukvjpi-m1.wsr.ru/public/2') }}" class="slide-item item w-100 text-center">
                            <img src="/public/img/minecraft.jpg" alt="minecraft">
                            <h3>Minecraft</h3>
                            <p>900 рублей</p>
                        </a>
                        <a href="{{ url('http://pukvjpi-m1.wsr.ru/public/6') }}" class="slide-item item w-100 text-center">
                            <img src="/public/img/pristavka5.jpg" alt="minecraft">
                            <h3>Play Station One</h3>
                            <p>5000 рублей</p>
                        </a>
                        <a href="{{ url('http://pukvjpi-m1.wsr.ru/public/3') }}" class="slide-item item w-100 text-center">
                            <img src="/public/img/zaryadka.png" alt="minecraft">
                            <h3>Зарядка</h3>
                            <p>800 рублей</p>
                        </a>
                        <a href="{{ url('http://pukvjpi-m1.wsr.ru/public/5') }}" class="slide-item item w-100 text-center">
                            <img src="/public/img/pristavka4.jpg" alt="minecraft">
                            <h3>X-Box 360</h3>
                            <p>9000 рублей</p>
                        </a>
                    </div>
                </div>
                <div class="carousel-item w-100">
                    <div class=" d-flex justify-content-between">
                        
                        
                        <a href="{{ url('http://pukvjpi-m1.wsr.ru/public/8') }}" class="slide-item item w-100 text-center">
                            <img src="/public/img/battlefield.jpg" alt="minecraft">
                            <h3>battlefield</h3>
                            <p>5000 рублей</p>
                        </a>
                        <a href="{{ url('http://pukvjpi-m1.wsr.ru/public/6') }}" class="slide-item item w-100 text-center">
                            <img src="/public/img/pristavka5.jpg" alt="minecraft">
                            <h3>Play Station One</h3>
                            <p>5000 рублей</p>
                        </a>
                        <a href="{{ url('http://pukvjpi-m1.wsr.ru/public/2') }}" class="slide-item item w-100 text-center">
                            <img src="/public/img/minecraft.jpg" alt="minecraft">
                            <h3>Minecraft</h3>
                            <p>900 рублей</p>
                        </a>
                        <a href="{{ url('http://pukvjpi-m1.wsr.ru/public/3') }}" class="slide-item item w-100 text-center">
                            <img src="/public/img/zaryadka.png" alt="minecraft">
                            <h3>Зарядка</h3>
                            <p>800 рублей</p>
                        </a>
                        <a href="{{ url('http://pukvjpi-m1.wsr.ru/public/5') }}" class="slide-item item w-100 text-center">
                            <img src="/public/img/pristavka4.jpg" alt="minecraft">
                            <h3>X-Box 360</h3>
                            <p>9000 рублей</p>
                        </a>
                    </div>
                </div>
                <div class="carousel-item w-100">
                    <div class=" d-flex justify-content-between">
                        
                        
                        <a href="{{ url('http://pukvjpi-m1.wsr.ru/public/8') }}" class="slide-item item w-100 text-center">
                            <img src="/public/img/battlefield.jpg" alt="minecraft">
                            <h3>battlefield</h3>
                            <p>5000 рублей</p>
                        </a>
                        <a href="{{ url('http://pukvjpi-m1.wsr.ru/public/6') }}" class="slide-item item w-100 text-center">
                            <img src="/public/img/pristavka5.jpg" alt="minecraft">
                            <h3>Play Station One</h3>
                            <p>5000 рублей</p>
                        </a>
                        <a href="{{ url('http://pukvjpi-m1.wsr.ru/public/3') }}" class="slide-item item w-100 text-center">
                            <img src="/public/img/zaryadka.png" alt="minecraft">
                            <h3>Зарядка</h3>
                            <p>800 рублей</p>
                        </a>
                        <a href="{{ url('http://pukvjpi-m1.wsr.ru/public/2') }}" class="slide-item item w-100 text-center">
                            <img src="/public/img/minecraft.jpg" alt="minecraft">
                            <h3>Minecraft</h3>
                            <p>900 рублей</p>
                        </a>
                        <a href="{{ url('http://pukvjpi-m1.wsr.ru/public/5') }}" class="slide-item item w-100 text-center">
                            <img src="/public/img/pristavka4.jpg" alt="minecraft">
                            <h3>X-Box 360</h3>
                            <p>9000 рублей</p>
                        </a>
                    </div>
                </div>
                <div class="carousel-item w-100">
                    <div class=" d-flex justify-content-between">
                        
                        
                        <a href="{{ url('http://pukvjpi-m1.wsr.ru/public/8') }}" class="slide-item item w-100 text-center">
                            <img src="/public/img/battlefield.jpg" alt="minecraft">
                            <h3>battlefield</h3>
                            <p>5000 рублей</p>
                        </a>
                        <a href="{{ url('http://pukvjpi-m1.wsr.ru/public/6') }}" class="slide-item item w-100 text-center">
                            <img src="/public/img/pristavka5.jpg" alt="minecraft">
                            <h3>Play Station One</h3>
                            <p>5000 рублей</p>
                        </a>
                        <a href="{{ url('http://pukvjpi-m1.wsr.ru/public/3') }}" class="slide-item item w-100 text-center">
                            <img src="/public/img/zaryadka.png" alt="minecraft">
                            <h3>Зарядка</h3>
                            <p>800 рублей</p>
                        </a>
                        <a href="{{ url('http://pukvjpi-m1.wsr.ru/public/5') }}" class="slide-item item w-100 text-center">
                            <img src="/public/img/pristavka4.jpg" alt="minecraft">
                            <h3>X-Box 360</h3>
                            <p>9000 рублей</p>
                        </a>
                        <a href="{{ url('http://pukvjpi-m1.wsr.ru/public/2') }}" class="slide-item item w-100 text-center">
                            <img src="/public/img/minecraft.jpg" alt="minecraft">
                            <h3>Minecraft</h3>
                            <p>900 рублей</p>
                        </a>
                    </div>
                </div>
            </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
@endsection
