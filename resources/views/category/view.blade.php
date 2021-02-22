@extends('layouts.admin.master')

@section('content')

    <div class="container-fluid">
        <ul>
            @foreach ($categories as $category)
                <li>{{$category->name}}</li>
                <ul>
                    @foreach ($category->categories as $childCategory)
                       <li>{{$childCategory->name}}</li>
                       @if ($childCategory)
                           <ul>
                               @foreach ($childCategory->categories as $child2Category)
                                   <li>{{$child2Category->name}}</li>
                                   @if ($child2Category)
                                       <ul>
                                           @foreach ($child2Category->categories as $child3Category)
                                               <li>{{$child3Category->name}}</li>
                                           @endforeach
                                       </ul>
                                   @endif
                               @endforeach
                           </ul>
                       @endif
                    @endforeach
                </ul>
            @endforeach
        </ul>
    </div>

@endsection
