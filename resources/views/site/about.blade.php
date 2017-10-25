@extends('layouts.site',['title'=>'About', 'hasClass'=>'is-medium bg-img is-warning'])
{{--  @section('title, has-class')  --}}
@section('hero')
    <!-- Hero content: will be in the middle -->
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title">
        FIND YOUR DREAM <span>STUDY CHOICE</span>
      </h1>
      <h2 class="subtitle">
        Discover thousands of Scholarship Opportunities worldwide!
      </h2>

      <div class="columns  is-three-quarters is-centered m-t-100">

            <div class="field is-grouped">
              <div class="control">
                <input class="input is-half" type="text" placeholder="Choose what to study?">
              </div>
              <div class="control">
                <input class="input is-half" type="text" placeholder="Choose where to study?">
              </div>
              <div class="control">
                <button class="button is-info">Submit</button>
              </div>
            </div>
             
      </div>
    </div>
    
  </div>

  <!-- Hero footer: will stick at the bottom -->
  {{--  <div class="hero-foot">
    <nav class="tabs">
      <div class="container">
        <ul>
          <li class="is-active"><a>Scholarship</a></li>
          <li><a>Career Choice</a></li>
          <li><a>Consult</a></li>
          <li><a>Elements</a></li>
          <li><a>Components</a></li>
          <li><a>Ambassador</a></li>
        </ul>
      </div>
    </nav>
  </div>  --}}

@endsection

@section('content')

 <section class="section">
    <div class="container">
      <h1 class="title ">About</h1>
      <h2 class="subtitle">
        A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading
      </h2>
    </div>
  </section>

@endsection