@extends('theme')
@section('main-content')
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header">
                <div class="icon icon-warning">
                    <span class="material-icons">equalizer</span>
                </div>
            </div>
            <div class="card-content">
                <p class="category"><strong>utilisateurs</strong></p>
                <h3 class="card-title">{{$users->count()}}</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons text-info">info</i>
                    <a href="/users">voir utilisateurs</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header">
                <div class="icon icon-rose">
                    <span class="material-icons">shopping_cart</span>
                </div>
            </div>
            <div class="card-content">
                <p class="category"><strong>Commandes</strong></p>
                <h3 class="card-title">{{$orders}}</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">local_offer</i><a href="/orders"> voir commandes</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header">
                <div class="icon icon-success">
                    <span class="material-icons">
                        attach_money
                    </span>
                </div>
            </div>
            <div class="card-content">
                <p class="category"><strong>Revenue</strong></p>
                <h3 class="card-title">MAD {{$sum}}</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">date_range</i> chiffre d'affaire
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header">
                <div class="icon icon-info">
                    <span class="material-icons">
                        <i style={width:30px} class="material-icons">
                            today
                        </i>
                    </span>
                </div>
            </div>
            <div class="card-content">
                <p class="category"><strong>Evènements</strong></p>
                <h3 class="card-title">{{$events->count()}}</h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row ">
    <div class="col-lg-7 col-md-12">
        <div class="card" style="min-height: 485px">
            <div class="card-header card-header-text">
                <h4 class="card-title">Nouveaux clients</h4>

            </div>
            <div class="card-content table-responsive">
                <table class="table table-hover">
                    <thead class="text-primary">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Adress</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->adress}}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-5 col-md-12">
        <div class="card" style="min-height: 485px">
            <div class="card-header card-header-text">
                <h4 class="card-title">Activites</h4>
            </div>
            <div class="card-content">
                <div class="streamline">
                    @foreach($tickets as $ticket)
                    <div class="sl-item sl-primary">
                        <div class="sl-content">
                            <small class="text-muted">{{$ticket->created_at}}</small>
                            <p>{{$ticket->utilisateur->name}} a acheté une billet de l'évenement
                                {{$ticket->event->name}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection