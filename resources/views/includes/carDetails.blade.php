<img src="{{ asset('assets/admin/carImages/' . $car->image) }}" alt="" class="img-fluid p-3 mb-5 bg-white rounded">

<div class="grey-bg container-fluid">
    <section id="minimal-statistics">
    <div class="row">
        <div class="col-12 mt-3 mb-1">
        <h4 class="text-uppercase">Properties</h4>
        <p>Car Details</p>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-sm-6 col-12"> 
        <div class="card">
            <div class="card-content">
            <div class="card-body">
                <div class="media d-flex">
                <div class="align-self-center">
                    <i class="icon-pencil primary font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                    <h3>{{ $car->doors }}</h3>
                    <span>Doors</span>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-content">
            <div class="card-body">
                <div class="media d-flex">
                <div class="align-self-center">
                    <i class="icon-speech warning font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                    <h3>{{ $car->luggages }}</h3>
                    <span>Laggage</span>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-content">
            <div class="card-body">
                <div class="media d-flex">
                <div class="align-self-center">
                    <i class="icon-graph success font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                    <h3>{{ $car->price }} $</h3>
                    <span>Price</span>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>              
</div>

<p class="lead">{{ $car->content }}</p>

<div class="pt-5">
    <p>Category:  <a href="#">{{ $car->category->name }}</a></p>
</div>