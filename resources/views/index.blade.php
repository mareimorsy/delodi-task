@extends('layouts.master')

@section('content')
<h1>Event Registration Form</h1>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif


<form class="form-horizontal" method="post" action="{{ asset('/') }}">

{{-- XSRF Security Token --}}
{{ csrf_field() }}

{{-- First & Last Name --}}
<div class="form-group">

  <div class="col-md-6 nested-col">
    <label class="col-md-12" for="first_name">First Name</label>  
    <div class="col-md-12">
      <input id="first_name" name="first_name" type="text" placeholder="First Name" class="form-control input-md" value="{{ old('first_name') }}">
    </div>
  </div>

  <div class="col-md-6 nested-col">
    <label class="col-md-12" for="last_name">Last Name</label>  
    <div class="col-md-12">
      <input id="last_name" name="last_name" type="text" placeholder="Last Name" class="form-control input-md" value="{{ old('last_name') }}">
    </div>
  </div>

</div>

{{-- E-mail & Phone --}}
<div class="form-group">

  <div class="col-md-6 nested-col">
    <label class="col-md-12" for="email">E-mail</label>  
    <div class="col-md-12">
      <input id="email" name="email" type="text" placeholder="E-mail" class="form-control input-md" value="{{ old('email') }}">
    </div>
  </div>

  <div class="col-md-6 nested-col">
    <label class="col-md-12" for="phone">Phone</label>  
    <div class="col-md-12">
      <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md" value="{{ old('phone') }}">
    </div>
  </div>

</div>

{{-- Governorate & Area --}}
<div class="form-group">

  <div class="col-md-6 nested-col">
    <label class="col-md-12" for="governorate">Governorate</label>  
    <div class="col-md-12">
      <select id="governorate" name="governorate" class="form-control">
        @foreach ( $governorates as $key => $governorate )
          <option value="{{ $loop->iteration -1 }}" @if($key == old('governorate')) {{ 'selected' }} @endif>{{ $governorate }}</option>
        @endforeach
      </select>
    </div>
  </div>

  <div class="col-md-6 nested-col">
    <label class="col-md-12" for="area">Area</label>  
    <div class="col-md-12">
      <select id="area" name="area" class="form-control">
        @foreach ( $areas as $key => $area )
          <option value="{{ $loop->iteration -1 }}" @if($key == old('area')) {{ 'selected' }} @endif>{{ $area }}</option>
        @endforeach
      </select>
    </div>
  </div>

</div>

{{-- University & Graduation year --}}
<div class="form-group">

  <div class="col-md-6 nested-col">
    <label class="col-md-12" for="university">University</label>  
    <div class="col-md-12">
      <select id="university" name="university" class="form-control">
        @foreach ( $universities as $key => $university )
          <option value="{{ $loop->iteration -1 }}" @if($key == old('university')) {{ 'selected' }} @endif>{{ $university }}</option>
        @endforeach
      </select>
    </div>
  </div>

  <div class="col-md-6 nested-col">
    <label class="col-md-12" for="year">Graduation year</label>  
    <div class="col-md-12">
      <select id="year" name="graduation_year" class="form-control">
        @for( $i = 2017; $i >= 2000; $i-- )
          <option value="{{ $i }}" @if($i == old('graduation_year')) {{ 'selected' }} @endif>{{ $i }}</option>
        @endfor
      </select>
    </div>
  </div>

</div>

{{-- Specialization of Study --}}
<div class="form-group extra-margin">

  <label class="col-md-12">Specialization of study</label>  
  <div class="col-md-6 nested-col">
    <div class="col-md-12">
      <label for="ict">
          <input type="radio" name="specialization" id="ict" value="1" @if( old('specialization') == 1 ) {{ 'checked' }} @endif> ICT/Electronics
      </label>
    </div>
  </div>

  <div class="col-md-6 nested-col">
    <div class="col-md-12">
      <label for="none-ict">
        <input type="radio" name="specialization" id="none-ict" value="0" @if( old('specialization') == 0 ) {{ 'checked' }} @endif> None ICT/Electronics
      </label>
    </div>
  </div>

</div>

{{-- Profession --}}
<div class="form-group extra-margin">

  <label class="col-md-12">You want to register as :</label>  
  <div class="col-md-12 nested-col">
    <div class="col-md-12">
      @foreach ($professions as $profession)
        <div class="radio">
            <label for="profession-{{ $loop->iteration -1 }}">
              <input type="radio" name="profession" id="profession-{{ $loop->iteration -1 }}" value="{{ $loop->iteration -1 }}" @if( old('profession') == $loop->iteration -1 ) {{ 'checked' }} @endif> {{ $profession }}
            </label>
        </div>
      @endforeach
    </div>
  </div>

</div>

{{-- Notes --}}
<div class="form-group">

  <label class="col-md-12" for="notes">We would like to hear your expectations, suggestions and ideas about the event</label>  
  <div class="col-md-12 nested-col">
    <div class="col-md-12">
      <textarea class="form-control" id="notes" name="notes" rows="3" placeholder="We would like to hear your expectations, suggestions and ideas about the event."></textarea>
    </div>
  </div>

</div>

{{-- Submit button --}}
<div class="form-group">
  <div class="col-md-12">
    <button class="btn btn-lg btn-info full-width" type="submit">
      <span class="glyphicon glyphicon-send" aria-hidden="true"></span> Submit
    </button>
  </div>
</div>

</form>

<hr>
<h2>Current Registrars</h2>
<div class="row">
  @foreach ( $registrars as $registrar )
    <div class="col-sm-12 col-md-6">
      <div>
        <span class="title">Ticket/Seat # </span>
        <span>{{ $loop->iteration}}</span>
      </div>

      <div>
        <span class="title">First Name</span>
        <span>{{ $registrar->first_name }}</span>
      </div>

      <div>
        <span class="title">Last Name</span>
        <span>{{ $registrar->last_name }}</span>
      </div>

      <div>
        <span class="title">E-mail</span>
        <span>{{ $registrar->email }}</span>
      </div>

      <div>
        <span class="title">Phone</span>
        <span>{{ $registrar->phone }}</span>
      </div>

      <div>
        <span class="title">Governorate</span>
        <span>{{ \MareiClasses\CountryAssets\EgyGovernorates::find($registrar->governorate) }}</span>
      </div>

      <div>
        <span class="title">Area</span>
        <span>{{ \MareiClasses\CountryAssets\EgyAreas::find($registrar->area) }}</span>
      </div>

      <div>
        <span class="title">University</span>
        <span>{{ \MareiClasses\CountryAssets\EgyUniversities::find($registrar->university) }}</span>
      </div>

      <div>
        <span class="title">Graduation year</span>
        <span>{{ $registrar->graduation_year }}</span>
      </div>

      <div>
        <span class="title">Specialization</span>
        <span>{{ $registrar->specialization? 'ICT/Electronics' : 'None ICT/Electronics' }}</span>
      </div>

      <div>
        <span class="title">Registered as</span>
        <span>{{ \MareiClasses\CountryAssets\Professions::find(0) }}</span>
      </div>

      <div>
        <span class="title">Notes</span>
        <span>{{ $registrar->notes }}</span>
      </div>
    </div>
  @endforeach
</div>

@endsection