@extends('layouts.adminLayout')
@section('section')
{{-- <div id="app"> --}}
<div class="container">
  <div class="col s12 m12 l12">
    <div class="card-panel tengah">
      <h4 class=" header2">Login</h4>
      <p>Silahkan Isi No Induk dan Password</p>
      {{-- <div class="row"> --}}
      <form method="POST" action="{{ route('login','elearning') }}" class="col s12">
        @csrf
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">account_circle</i>
            <input id="nis" type="text" class="validate">
            <label for="nis">No Induk Siswa/Guru</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">lock_outline</i>
            <input id="password" type="password" class="validate">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">
          {{-- <div class="input-field col s12">
                  <i class="material-icons prefix">question_answer</i>
                  <textarea id="message4" class="materialize-textarea validate" length="120"></textarea>
                  <label for="message" class="">Message</label>
                </div> --}}
          <div class="row">
            <div class="input-field col s12" style="padding:0 20px">
              <button class="btn waves-effect waves-light" type="submit" name="action" style="width:100%">Submit
                {{-- <i class="material-icons right">send</i> --}}
              </button>
            </div>
          </div>
        </div>

      </form>
      {{-- </div> --}}
    </div>
  </div>
</div>
@endsection