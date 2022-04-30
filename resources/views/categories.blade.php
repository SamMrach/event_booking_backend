@extends('theme')
@push('cssCategories')
<style>
.category_container {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
    padding: 20px;
    overflow: auto;
}

.category_header {
    width: 100%;
    height: 100px;
    padding: 10px 20px !important;
}

.category_header h3 {
    float: left;
}

.myBtn {
    float: right;
}

.category_body {
    padding: 10px 20px !important;
    grid-template-columns: repeat(3, 1fr);

}

.card {
    margin: 0 30px 15px 0 !important;
}

.card-text {
    margin-bottom: 5px;
    text-overflow: ellipsis;
}
</style>
@endpush

@section('main-content')
<div class="category_container">
    <div class="category_header">
        <h3>Gestion categories</h3>
        <a href="/categories/add" class="btn btn-primary myBtn">Ajouter categorie</a>
    </div>
    <div class="category_body">
        @foreach($categories as $categorie)
        <div class="card" style="width:20rem;">
            <img class="card-img-top img-fluid" src="{{asset($categorie->icon)}}" alt="card image">
            <div class="card-body">
                <h4 class="card-title">{{$categorie->name}}</h4>
                <p class="card-text">{{$categorie->description}}</p>
                <a href="/categories/delete/{{$categorie->id}}" class="btn btn-primary">supprimer</a>
            </div>
        </div>
        @endforeach


    </div>
    @endsection

    @push('jsCategories')

    @endpush