@include('layout.headerdetail')
@foreach ($pokemons as $item)

    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6">
                <img class="card-img-top mb-5 mb-md-0 justify-content-center" data-src="holder.js/400x450?theme=thumb"
                    alt="Thumbnail [400x450]" style="width: 400px; height: 450px;" src={{ $item->image }}
                    data-holder-rendered="true">
            </div>
            <div class="col-md-6">
                <div class="small mb-1">#{{ $item->id }}</div>
                <h1 class="display-5 fw-bolder">{{ $item->name }}</h1>
                <div class="fs-5 mb-5">
                    <h1>Abilities</h1>
                    @php
                        $skill = json_decode($item->abilities);
                    @endphp
                    @foreach ($skill as $abilities)
                        <div class="badge bg-dark text-white justify-content-center">{{ $abilities }}</div>
                    @endforeach
                </div>
                <p class="lead"> Profile:</p>
                <div class="d-flex">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            Height : {{ $item->height }}
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            Weight : {{ $item->weight }}
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            Species : {{ $item->species }}
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <div class="          card-body">
                            Types :
                            @php
                                $type = json_decode($item->types);
                            @endphp
                            @foreach ($type as $types)
                                <div class="badge bg-dark text-white justify-content-center">{{ $types }}</div>
                            @endforeach
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <p class="lead"> Stats:</p>
                    <h4 class="medium">
                        hp:

                    </h4>
                    <div class="text mb-4">
                        <p class="text-left">{{ $item->hp }}</p>
                    </div>

                    <h4 class="medium">
                        attack:

                    </h4>
                    <div class="text mb-4">
                        <p class="text-left">{{ $item->attack }}</p>

                    </div>

                    <h4 class="medium">
                        defense:

                    </h4>
                    <div class="text mb-4">
                        <p class="text-left">{{ $item->defense }}</p>

                    </div>

                    <h4 class="medium">
                        sp.attack:

                    </h4>
                    <div class="text mb-4">
                        <p class="text-left">{{ $item->sp_attack }}</p>

                    </div>

                    <h4 class="medium">
                        sp.defense:

                    </h4>
                    <div class="text mb-4">
                        <p class="text-left">{{ $item->sp_defense }}</p>

                    </div>

                    <h4 class="medium">
                        speed:

                    </h4>
                    <div class="text mb-4">
                        <p class="text-left">{{ $item->speed }}</p>

                    </div>
                </div>
            </div>
        </div>
        <center>
            <div class="card">
                <div class="card-body">
                    EVOLUTION
                </div>
            </div>
        </center>
        @php
            $evolution = json_decode($item->evolutions);
        @endphp
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($evolution as $evolutions)
                    <div class="col mb-5">
                        <div class="card h-100">


                            <div class="card-body p-4">
                                <div class="text-center">

                                    <h5 class="fw-bolder">{{ $evolutions }}</h5>

                                </div>

                            </div>

                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endforeach
@include('layout.footer')
