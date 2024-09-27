<x-bootstrap-theme>

    <div class="row g-12">
        <div class="col-lg-12 d-flex justify-content-end">
            <a class="btn btn-success me-3" href="{{ route('BangCOC.create') }}">Create New BangCOC</a>
          
        </div>
    </div>
    
        


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif





    <div class="container">
        <div class="row">
            <h1>Defenses</h1>
            <h2>Home Village</h2>
            <div class="row row-cols-1 row-cols-md-6 g-4">
                {{-- Show1 --}}
                <div class="col">
                    <div class="card">
                        <a href="\show1" class="">
                            <img src="https://cloud.frankeapps.com/resize/3/air-sweeper7.145x156q50.png.webp"
                                class="card-img-top" height="230" alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <a href="\show1" class=""><button type="button" class="btn btn-success">View
                                    details</button></a>
                        </div>
                    </div>
                </div>
                {{-- Show2 --}}
                <div class="col">
                    <div class="card">
                        <a href="\show2" class="">
                        <img src="https://cloud.frankeapps.com/resize/3/air-defense14.146x200q50.png.webp"
                            class="card-img-top" height="230" alt="...">
                        <div class="card-body"></a>
                            <h5 class="card-title">Card title</h5>
                            <a href="\show2" class=""><button type="button"
                                    class="btn btn-success">View details</button></a>
                        </div>
                    </div>
                </div>
                {{-- Show3 --}}
                <div class="col">
                    <div class="card">
                        <a href="\show3" class="">
                        <img src="https://cloud.frankeapps.com/resize/3/eagle-artillery6.165x200q50.png.webp"
                            class="card-img-top" height="230" alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <a href="\show3" class=""><button type="button"
                                    class="btn btn-success">View details</button></a>
                        </div>
                    </div>
                </div>
                {{-- Show4 --}}
                <div class="col">
                    <div class="card">
                        <a href="\show4" class="">
                        <img src="https://cloud.frankeapps.com/resize/3/archer-tower21.170x223q50.png.webp"
                            class="card-img-top" height="230" alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <a href="\show4" class=""><button type="button"
                                class="btn btn-success">View details</button></a>
                        </div>
                    </div>
                </div>
                {{-- Show5 --}}
                <div class="col">
                    <div class="card">
                        <img src="https://cloud.frankeapps.com/resize/3/bomb-tower10-2.137x178q50.png.webp"
                            class="card-img-top" height="230" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <a href="/defense/air-blaster" class=""><button type="button"
                                    class="btn btn-success">View details</button></a>
                        </div>
                    </div>
                </div>
                {{-- Show6 --}}
                <div class="col">
                    <div class="card">
                        <img src="https://cloud.frankeapps.com/resize/3/x-bow10-air-2.205x200q50.png.webp"
                            class="card-img-top" height="230" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <a href="/defense/air-blaster" class=""><button type="button"
                                    class="btn btn-success">View details</button></a>
                        </div>
                    </div>
                </div>
                {{-- Show7 --}}
                <div class="col">
                    <div class="card">
                        <img src="https://cloud.frankeapps.com/resize/3/ricochet-cannon2.210x230q50.png.webp"
                            class="card-img-top" height="230" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <a href="/defense/air-blaster" class=""><button type="button"
                                    class="btn btn-success">View details</button></a>
                        </div>
                    </div>
                </div>
                {{-- Show8 --}}
                <div class="col">
                    <div class="card">
                        <img src="https://cloud.frankeapps.com/resize/3/inferno-tower9-single.155x215q50.png.webp"
                            class="card-img-top" height="230" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <a href="/defense/air-blaster" class=""><button type="button"
                                    class="btn btn-success">View details</button></a>
                        </div>
                    </div>
                </div>
                {{-- Show9 --}}
                <div class="col">
                    <div class="card">
                        <img src="https://cloud.frankeapps.com/resize/3/monolith2-2.210x300q50.png.webp"
                            class="card-img-top" height="230" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <a href="/defense/air-blaster" class=""><button type="button"
                                    class="btn btn-success">View details</button></a>
                        </div>
                    </div>
                </div>
                {{-- Show10 --}}
                <div class="col">
                    <div class="card">
                        <img src="https://cloud.frankeapps.com/resize/3/mortar16.180x180q50.png.webp"
                            class="card-img-top" height="230" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <a href="/defense/air-blaster" class=""><button type="button"
                                    class="btn btn-success">View details</button></a>
                        </div>
                    </div>
                </div>
                {{-- Show11 --}}
                <div class="col">
                    <div class="card">
                        <img src="https://cloud.frankeapps.com/resize/3/scattershot4.200x200q50.png.webp"
                            class="card-img-top" height="230" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <a href="/defense/air-blaster" class=""><button type="button"
                                    class="btn btn-success">View details</button></a>
                        </div>
                    </div>
                </div>
                {{-- Show12 --}}
                <div class="col">
                    <div class="card">
                        <img src="https://cloud.frankeapps.com/resize/3/wizard-tower16.167x200q50.png.webp"
                            class="card-img-top" height="230" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <a href="/defense/air-blaster" class=""><button type="button"
                                    class="btn btn-success">View details</button></a>
                        </div>
                    </div>
                </div>
                {{-- Show13 --}}
                <div class="col">
                    <div class="card">
                        <img src="https://cloud.frankeapps.com/resize/3/spell-tower3-rage-3.160x180q50.png.webp"
                            class="card-img-top" height="230" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <a href="/defense/air-blaster" class=""><button type="button"
                                    class="btn btn-success">View details</button></a>
                        </div>
                    </div>
                </div>
                {{-- Show14 --}}
                <div class="col">
                    <div class="card">
                        <img src="https://cloud.frankeapps.com/resize/3/hidden-tesla14.133x200q50.png.webp"
                            class="card-img-top" height="230" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <a href="/defense/air-blaster" class=""><button type="button"
                                    class="btn btn-success">View details</button></a>
                        </div>
                    </div>
                </div>
                {{-- Show15 --}}
                <div class="col">
                    <div class="card">
                        <img src="https://cloud.frankeapps.com/resize/3/wall17.209x300q50.png.webp"
                            class="card-img-top" height="230" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <a href="/defense/air-blaster" class=""><button type="button"
                                    class="btn btn-success">View details</button></a>
                        </div>
                    </div>
                </div>
                {{-- Show16 --}}
                <div class="col">
                    <div class="card">
                        <img src="https://cloud.frankeapps.com/resize/3/builders-hut5-active.145x205q50.png.webp"
                            class="card-img-top" height="230" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <a href="/defense/air-blaster" class=""><button type="button"
                                    class="btn btn-success">View details</button></a>
                        </div>
                    </div>
                </div>
                {{-- Show17 --}}
                <div class="col">
                    <div class="card">
                        <img src="https://cloud.frankeapps.com/resize/3/multi-archer-tower2.200x240q50.png.webp"
                            class="card-img-top" height="230" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <a href="/defense/air-blaster" class=""><button type="button"
                                    class="btn btn-success">View details</button></a>
                        </div>
                    </div>
                </div>
                {{-- Show18 --}}
                <div class="col">
                    <div class="card">
                        <img src="https://cloud.frankeapps.com/resize/3/cannon21-2.238x195q50.png.webp"
                            class="card-img-top" height="230" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <a href="/defense/air-blaster" class=""><button type="button"
                                    class="btn btn-success">View details</button></a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        
    </div>
    

</x-bootstrap-theme>
