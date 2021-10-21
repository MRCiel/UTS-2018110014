@include('layout.header')
<div class="container px-4 px-lg-5 mt-5">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        @foreach ($pokemons as $item)
            <div class="col mb-5">
                <div class="card h-100">

                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                        #{{ $item->id }}</div>

                    <img class="card-img-top flex-auto d-none d-md-block" data-src="holder.js/230x250?theme=thumb"
                        alt="Thumbnail [230x250]" style="width: 230px; height: 250px;" src={{ $item->image }}
                        data-holder-rendered="true">

                    <div class="card-body p-4">
                        <div class="text-center">

                            <h5 class="fw-bolder">{{ $item->name }}</h5>

                            @php
                                $type = json_decode($item->types);
                            @endphp
                            @foreach ($type as $types)
                                <div class="badge bg-dark text-white justify-content-center">{{ $types }}</div>
                            @endforeach
                        </div>
                    </div>
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                href="/detail {{ $item->id }}">detail</a>
                        </div>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
</div>
@include('layout.footer')
