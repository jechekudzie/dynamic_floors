<div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <section>
        <div class="container">
            <div class="col-lg-12 col-md-12">
                <form action="#" method="post" novalidate="novalidate">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 p-0">
                                    <input wire:model.debounce .300ms="search" type="text" class="form-control"
                                           placeholder="Search by Material or Color or Profile Type"
                                    style="border-style: solid;height: 35px;">

                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <select wire:model="profile_type" name="profile_type" class="form-control
                                        "
                                            id="exampleFormControlSelect1">
                                        <option value="">By Profile Type</option>
                                        @foreach($profile_types as $profile_type)
                                            <option value="{{$profile_type->id}}">{{$profile_type->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                                    <select wire:model="material" name="material" class="form-control
                                        " id="exampleFormControlSelect1">
                                        <option value="">By Material</option>
                                        @foreach($materials as $material)
                                            <option value="{{$material->id}}">{{$material->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                                    <select wire:model="color" name="color" class="form-control"
                                            id="exampleFormControlSelect1">
                                        <option value="">By Color</option>
                                        @foreach($colors as $color)
                                            <option value="{{$color->id}}">{{$color->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <hr/>
            <hr/>
            <div class="row">
                @foreach($profiles as $profile)
                    <div style="background-color: lightgrey;" class="col-md-4 col-lg-4">
                        <a href="#">
                            <img style="width: 500px; height: 300px;" src="{{asset($profile->image)}}" alt="">
                        </a>
                        <div class="">
                            <h5 style="text-align: center;">
                                @if($profile->material){{$profile->material->name}}@endif
                                <i style="color: #c1613f;">({{$profile->color->name}})</i>
                            </h5>
                            <p style="text-align: center;">{{$profile->profile_type->name}}</p>
                        </div>

                    </div>
                @endforeach
            </div>
            <div class="row" style="padding-top: 15px;">
                {!! $profiles->links() !!}
                <div>
                    Showing {!! $profiles->firstItem() !!} of {!! $profiles->lastItem() !!} out
                    of {!! $profiles->total() !!}

                </div>
            </div>

        </div>
    </section>

</div>
