<html>

<head>
    <style>
    body {
        color: black;
        height: 380px;

    }

    .container {
        margin: auto;
        margin-top: 40px;
        width: 650px;
        height: 380px;
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        align-items: center;
        /*border: 3px solid black;*/
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }

    .eventInfo,
    .eventImage {
        padding: 20px 10px;
        width: 50%;
        height: 100%;
    }

    .event_image {
        margin-top: 20px;
        width: 300px;
        height: 260px;
    }

    .border {
        width: 100%;
        height: 0px;
        border: 1px solid #EEE;
    }

    .logo {
        margin-top: 5px;
        padding: 0;
        width: 160px;
        height: 60px;

    }

    .ad {
        color: #228B22;

    }
    </style>
</head>

<body>
    <div class="container">

        <div class="eventInfo">
            <img class="logo" src="{{asset('storage/images/logo1.png')}}" alt="logo" />
            <p><b>Event Name:</b> {{$ticket->event->name}}</p>
            <p><b>Date:</b> {{$ticket->event->date}}</p>
            <p><b>Location:</b> {{$ticket->event->localisation}}</p>
            <div class="border"></div>
            <p><b>Ticket Code:</b> {{$ticket->code}}</p>
            <p><b>Ticket Holder:</b> {{$ticket->utilisateur->name}}</p>
            <p><b>Ticket Price:</b>{{$ticket->event->price}} MAD</p>

        </div>
        <div class="eventImage">
            <h3><b>Order {{$ticket->id}}_{{$ticket->created_at}}</b> </h3>
            <img class="event_image" src="{{asset($ticket->event->image)}}" alt="event" />

        </div>

    </div>
</body>

</html>