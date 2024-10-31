<x-app-layout>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
        crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin=""></script>
    <style>
            #map { height: 250px; }
        </style>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="container-fluid py-4 px-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-md-flex align-items-center mb-3 mx-2">
                        <div class="mb-md-0 mb-3">
                            <!-- <h3 class="font-weight-bold mb-0">Hello User!</h3> ini ganti ama map
                            <p class="mb-0">Apps you might like!</p> -->
                            <script>
                                var map = L.map('map').setView([51.505, -0.09], 13);

                                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                    maxZoom: 19,
                                    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                                }).addTo(map);

                                navigator.geolocation.watchPosition(success, error);
                                let marker, circle, zoomed;

                                function success(pos){
                                    const lat = pos.coords.latitude;
                                    const lng = pos.coords.longitude;
                                    const accuracy = pos.coords.accuracy;

                                    if (marker){
                                        map.removeLayer(marker);
                                        map.removeLayer(circle);
                                    }
                                    marker = L.marker([lat, lng]).addTo(map);
                                    circle = L.circle([lat, lng], {radius: accuracy }).addTo(map);

                                    if (!zoomed){
                                        zoomed = map.fitBounds(circle.getBounds());
                                    }

                                    map.setView([lat, lng]);
                                }
                                function error(err){
                                    if (err.code === 1){
                                        alert("Please allow geolocation access");
                                    } else {
                                        alert("Cannot get location");
                                    }
                                }
                            </script>
                            
                        </div>
                        <button type="button"
                            class="btn btn-sm btn-white btn-icon d-flex align-items-center mb-0 ms-md-auto mb-sm-0 mb-2 me-2">
                            <span class="btn-inner--icon">
                                <span class="p-1 bg-success rounded-circle d-flex ms-auto me-2">
                                    <span class="visually-hidden">New</span>
                                </span>
                            </span>
                            <span class="btn-inner--text">Messages</span>
                        </button>
                        <button type="button" class="btn btn-sm btn-dark btn-icon d-flex align-items-center mb-0">
                            <span class="btn-inner--icon">
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="d-block me-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                </svg>
                            </span>
                            <span class="btn-inner--text">Sync</span>
                        </button>
                    </div>
                </div>
            </div>
            <hr class="my-0"> <br>
            <div class="row">
                <div class="col-3">
                    <div class="card" style="width: 15rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h7 class="card-title font-weight-bold" style="font-size: 17px;"> Card title</h7>
                                <p class="card-text" style="font-size: 14px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 15rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h7 class="card-title font-weight-bold" style="font-size: 17px;"> Card title</h7>
                                <p class="card-text" style="font-size: 14px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 15rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h7 class="card-title font-weight-bold" style="font-size: 17px;"> Card title</h7>
                                <p class="card-text" style="font-size: 14px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 15rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h7 class="card-title font-weight-bold" style="font-size: 17px;"> Card title</h7>
                                <p class="card-text" style="font-size: 14px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div> <br>
            <div class="row">
                <div class="col-3">
                    <div class="card" style="width: 15rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h7 class="card-title font-weight-bold" style="font-size: 17px;"> Card title</h7>
                                <p class="card-text" style="font-size: 14px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 15rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h7 class="card-title font-weight-bold" style="font-size: 17px;"> Card title</h7>
                                <p class="card-text" style="font-size: 14px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 15rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h7 class="card-title font-weight-bold" style="font-size: 17px;"> Card title</h7>
                                <p class="card-text" style="font-size: 14px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 15rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h7 class="card-title font-weight-bold" style="font-size: 17px;"> Card title</h7>
                                <p class="card-text" style="font-size: 14px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <x-app.footer />
        </div>
    </main>

</x-app-layout>
