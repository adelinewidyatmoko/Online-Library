@extends('layout.layoutindex') {{--untuk transfer dari layout yg sama ke halaman--}}

@section('title','Home') {{--untuk ganti title dr nama titile ke home--}}

@section('content') {{--ini untuk transfer hanya pada section yang suka berubah ubah--}}
<div class="text-center mb-50 "><a href="{{route('book.create')}}" class="btn btn-default" role="button">Create New Book</a></div>
<div style="display:grid;grid-template-columns:auto auto auto;gap:10px">{{--untuk css style nya itu di parent kalau kondisinya dia perulangan items--}}

@foreach($index as $book) {{--$index itu dari bookcontrollernya property nya --}}
    
    <!-- first item -->
    <div >
      <div class="thumbnail">
        <img src={{$book['image_path']}} {{--untuk ['image'] itu maksudnya data dari book controller di kirim ke sini cara call nya begitu--}}alt="..." width="250px">
        <div class="caption">
          <h3>{{$book['title']}}</h3>
          <p>{{$book['short_desc']}}</p>
        <div class="text-center"><a href="{{route('book.show', ['id' => $book['id']] )}}" class="btn btn-default" role="button">Show Detail</a></div>
        </div>
      </div>
</div>

    
  @endforeach
</div>
@endsection

@section('pagination')
@parent
<div class ="d-flex">
  {!! $index->links()!!}
</div>



@endsection
