@extends('layouts.main')

@section('content')
    <div class="listings-page">
      <div class="listings-city">
        <img class="listings-city__image" src="https://images.dwell.com/photos-6311371353569939456/6739650785763569664-large/modern-architectural-style-with-warm-finishes-to-compliment-mountain-setting.jpg" alt="">
        <h1 class="listings-city__title">South Beach</h1>
      </div>
      <div class="listings-filter">
        <div class="listings-filter__wrapper">
          <div class="listings-filter__option">
          Any Price <i class="fa-solid fa-caret-down"></i>
        </div>
        <div class="listings-filter__option">
          All Beds <i class="fa-solid fa-caret-down"></i>
        </div>
        <div class="listings-filter__option">
          Hometype <i class="fa-solid fa-caret-down"></i>
        </div>
        <div class="listings-filter__option">
          More <i class="fa-solid fa-caret-down"></i>
        </div>
        <div class="listings-filter__button">
          Search
        </div>
        </div>
        
      </div>
    </div>
@endsection