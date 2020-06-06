<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name=viewport content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta charset="utf-8">
    <title>Filter For Search</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('public/assets/css/home.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
  

<!-- Navbar -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
        <a href="" class="navbar-brand">ABNATION PROGRAMMERS</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item px-2">
                    <a href="" class="nav-link active">Dashboard</a>
                </li>
            </ul>


            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown mr-3">
                    <a href="" class="nav-link" data-toggle="">
                        Welcome Abdullah 
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

 



    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 _leftNav mb-30">

                    <div class="card leftNav cate-sect mb-30">
                        <h3>Refine By:<span class="_t-item">(0 items)</span></h3>
                        <div class="col-12 p-0" id="catFilters"></div>
                    </div>

                    <div class="card leftNav cate-sect">

                        <div class="accordion" id="accordionExample">
                            <div class="card-header" id="headingTwo">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    Categories</button>
                            </div>

                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="panel-body">

                                <?php $counter=0; ?>
                                @if(!empty($main_category))
                                @foreach ($main_category as $category)
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" {{($counter == 0 ? 'checked' : '')}}
                                        attr-name="{{$category->name}}"
                                        class="custom-control-input category_checkbox" id="{{$category->id}}">
                                    <label class="custom-control-label"
                                        for="{{$category->id}}">{{ucfirst($category->name)}}</label>
                                </div>
                                <?php $counter++; ?>
                                @endforeach
                                @endif
                            </div>
                        </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-9 col-md-12 col-sm-12 mb-30">
                    <div class="card rightSide h-100 mb-0">
                        <h1><span class="greencolor category_name_heading">{{ $sub_categories->name }}</span></h1>
                        <div class="row m-0 causes_div">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="{{ asset('public/assets/js/jquery-3.4.0.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/filter.js') }}"></script>

</body>
</html>
