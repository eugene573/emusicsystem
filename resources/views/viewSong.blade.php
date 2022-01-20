@extends('layouts.app')
@section('content')

<div class="row" style="margin:30px;"> 
         @foreach($songs as $song)  
            <div class="col-sm-3" style="background-color:white;margin:10px;
            padding:10px;">       
                    <tr>                      
                       <h4><b><td>{{$song->name}}</td><br></b></h4> 
                        <p style="color:hsl(240,100%,50%);">Artist:   {{$song->arName}}</p>
                        <p style="color:hsl(240,100%,50%);">Music Type:   {{$song->mName}}</p>
                        <p style="color:hsl(240,100%,50%);">Duration:   {{$song->duration}}</p>
                        <td><audio controls style="width:250px;">
                   <source src="{{asset('songmp3')}}/{{$song->file}}"></source>
                </audio>
                   <br> <br>
                        <td>Lyrics:<br>
                        <br>
                        <p>{!! nl2br($song->lyrics) !!}</p>
                        </td><br>
                        <br>
                    
                        </td>
                    </div>
                    </tr>
            @endforeach            
        </div> 
    @endsection