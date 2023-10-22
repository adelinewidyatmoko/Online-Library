@extends('layout.layoutindex')

@section('title','Detail')

@section('content')


<div class="row">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <div class="thumbnail">

               
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                      
                        <img src="{{$index['image_path']}}" class="pt-10 pb-10 pl-10" width="250px"> 
                        <div class="text-center">
                            <a href="#" class="btn btn-default mt-10 mb-10" role="button">Borrow</a>
                            <!-- <a href="#" class="btn btn-default" role="button">Buy</a> -->
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-8">
                        <p>{{$index['id']}}</p>
                        <h2><b>{{$index['title']}}</b></h2>
                        <p>{{$index['author']}}</p>
                        <p>{{$index['publisher']}}</p>
                        <p>{{$index['category']}}</p>
                        <p>{{$index['pages']}}</p>
                        <p>{{$index['language']}}</p>
                        <p>{{$index['publish_date']}}</p>
                        <p>{{$index['subjects']}}</p>
                        <p>{{$index['desc']}}</p>
                        {{--   --}}
                        <div class="text-center"><a href="{{route('book.edit', ['book' => $index['id']] )}}" class="btn btn-default" role="button">Show Detail</a></div>
                        <!-- add button to edit and delete -->
                      

                    </div>
                    
                </div>
           
            </div>
        </div>
    </div>
    
    @endsection
