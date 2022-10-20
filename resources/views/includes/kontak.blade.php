<div class="kontak" id="kontak">
    <div class="position-relative">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0b1a59" fill-opacity="1"
                d="M0,160L80,144C160,128,320,96,480,90.7C640,85,800,107,960,106.7C1120,107,1280,85,1360,74.7L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
        </svg>
    </div>
    <div class="main-kontak pb-5">
        <div class="container">
            <h2 class="text-white text-center mb-5">
                Berminat Untuk Diskusi Dengan Account <br />
                Executive Kami?
            </h2>
            <form action="{{ route('kontakCreate') }}" method="POST">
                @csrf
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="card card-body h-100">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" placeholder="Paturahman Fikri" required
                                name="nama" />
                            <label for="">Email</label>
                            <input type="email" class="form-control" placeholder="paturahman@gmail.com" required
                                name="email" />
                            <label for="">Phone</label>
                            <input type="number" class="form-control" placeholder="08191169449" required name="phone" />
                            <label for="">Nama Perusahaan</label>
                            <input type="text" class="form-control" placeholder="nama perusahaan . . ."
                                name="perusahaan" />
                            <button class="btn btn-warning mt-4" type="submit">Submit</button>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="embed-responsive embed-responsive-1by1">
                            <div id="map_canvas" class="embed-responsive-item">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.6507164491195!2d106.75386591468629!3d-6.309534695433627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69efdafd223f91%3A0x6dd7b9d70a16b6ec!2sPMII%20Cabang%20Ciputat!5e0!3m2!1sid!2sid!4v1665903859545!5m2!1sid!2sid"
                                    width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                                    class="rounded embed-responsive-item"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
