@extends('layouts.app')
@section('page_title')
    Gallery | {{ env('APP_NAME') }}
@endsection
@section('page_content')

<style type="text/css">


    .desul {
        display: flex;
        flex-wrap: wrap;
        margin: 2vmin;
    }

    .desli {
        height: 40vh;
        flex-grow: 1;
        margin: 2vmin;
    }

    .desli:last-child {
        flex-grow: 10;
    }

    img {
        max-height: 100%;
        min-width: 100%;
        object-fit: cover;
        vertical-align: bottom;
        border-radius: 1vmin;
    }

    @media (max-aspect-ratio: 1/1) {
        .desli {
            height: 30vh;
        }
    }

    @media (max-height: 480px) {
        .desli {
            height: 80vh;
        }
    }

    @media (max-aspect-ratio: 1/1) and (max-width: 480px) {
        .desul {
            flex-direction: row;
        }

        .desli {
            height: auto;
            width: 100%;
        }

        img {
            width: 100%;
            max-height: 75vh;
            min-width: 0;
        }
    }


    .fixedButton{
        position: fixed;
        bottom: 0px;
        right: 0px;
        padding: 20px;
    }
    .roundedFixedBtn{
      height: 80px;
      line-height: 80px;
      width: 100px;
      font-size: 2em;
      font-weight: bold;
      border-radius: 50%;
      background-color: orangered;
      color: white;
      text-align: center;
      cursor: pointer;
      z-index: 1;
    }

</style>




<div class="dz-bnr-inr style-2" style="background-image:url('{{ asset('assets/images/banner/bnr7.jpg') }}');">
    <div class="container">
        <div class="dz-bnr-inr-entry">
            <h1>Contact Us</h1>
            <!-- Breadcrumb Row -->
            <nav aria-label="breadcrumb" class="breadcrumb-row">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ul>
            </nav>
            <!-- Breadcrumb Row End -->
        </div>
    </div>
</div>


<section class="content-inner">
    <div class="container">
        <div class="row about-bx9">
            <div class="col-lg-12 m-b30">

                <ul class="desul lightgallery" style="list-style: none;">

                        <?php

                            $files = scandir('assets/images/gallery');
                            foreach ($files as $image) {
                                echo '<li class="desli">
                                    <span data-exthumbimage="assets/images/gallery/' . $image . '" data-src="assets/images/gallery/' . $image . '" class="lightimg">
                                            <img src="assets/images/gallery/' . $image . '" alt="">
                                        </span>
                                </li>';
                            }

                            ?>

                        <li class="desli"></li>

                    </ul>

            </div>
        </div>
    </div>
</section>
@endsection
