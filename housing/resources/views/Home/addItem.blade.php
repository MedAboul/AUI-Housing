@extends('layouts.app')
@section('content')

<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="index.html">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Storage</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{url('/addIteam/create')}}">
          <i class="bi bi-circle"></i><span>Add Item</span>
        </a>
      </li>
      <li>
        <a href="components-accordion.html">
          <i class="bi bi-circle"></i><span>Find Item</span>
        </a>
      </li>
     
    
      </li>
       
    </ul>
  </li><!-- End Components Nav -->
</ul>

</aside><!-- End Sidebar-->

<main id="main" class="main">

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <!-- End Left side columns -->

    <!-- Right side columns -->
        <div class="mt-3 card">
            <div class="card-body">
                <form method="POST" action="{{ url('/storeItem') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom</label>
                            <input value="" type="text" class="form-control" name="name" id="name" placeholder="Entrer le nom d'évenement">
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>


                    <div class="mb-3">
                        <label for="place" class="form-label">Location</label>
                        <input value="" type="text" class="form-control" name="place" id="place" placeholder="Entrer la location d'évenement">
                        @error('place') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>


                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input value="" type="date" class="form-control" name="date" id="date">
                        @error('date') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea type="text" class="form-control" name="description" id="description"   placeholder="Entrer une description d'évenement">?? null)}}</textarea>
                        
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
            </div>
        </div>
        <!-- End Right side columns -->

  </div>
</section>

</main><!-- End #main -->



@endsection